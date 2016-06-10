<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PhotosController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('PhotosModel');
        $this->load->model('UsersModel');
        $this->load->helper('string');
    }

    function create(){

        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        /*$config['max_size']	= '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';*/

        $aUser = $this->UsersModel->getUserByID($this->input->post('iUserID'));

        $this->load->library('upload', $config);
        $aResultProfile = array();
        $aResultBackground = array();
        $files = $_FILES;
        foreach ($files as $fileName => $fileValue){
            switch ($fileName){
                case "photo_profile":
                    $config['upload_path'] = '/uploads/users/' . $aUser['username'] . '/profile/';

                    if(!is_dir("." . $config['upload_path'])) mkdir("." . $config['upload_path'], 0777, TRUE);

                    $this->upload->initialize($config);

                    if ( ! $this->upload->do_upload('photo_profile')) {

                        $aResult = array(
                            'status'    => false,
                            'message'   => $this->upload->display_errors(),
                            //'aFields'   => $aFields
                        );
                        $aResultProfile = ($aResult);
                    }
                    else{
                        $aPhoto = array(
                            'user_id' => $this->input->post('iUserID'),
                            'channel'   => $config['upload_path'] . $this->upload->data('file_name'),
                            'type'  => PhotosModel::TYPE_USERS_PROFILE
                        );

                        $this->PhotosModel->create($aPhoto);

                        $aResult = array(
                            'status'    => true,
                            'message'   => "Successfully uploaded image " . $this->upload->data('file_name'),
                            //'aFields'   => $aFields
                        );
                        $aResultProfile = ($aResult);
                    }
                break;

                case "photo_background":
                    $config['upload_path'] = '/uploads/users/' . $aUser['username'] . '/background/';

                    if(!is_dir("." . $config['upload_path'])) mkdir("." . $config['upload_path'], 0777, TRUE);

                    $this->upload->initialize($config);

                    if(! $this->upload->do_upload('photo_background')) {

                        $aResult = array(
                            'status'    => false,
                            'message'   => $this->upload->display_errors(),
                            //'aFields'   => $aFields
                        );
                        $aResultBackground = $aResult;
                    }
                    else{
                        $aPhoto = array(
                            'user_id' => $this->input->post('iUserID'),
                            'channel'   => $config['upload_path'] . $this->upload->data('file_name'),
                            'type'  => PhotosModel::TYPE_USERS_BACKGROUND
                        );

                        $this->PhotosModel->create($aPhoto);

                        $aResult = array(
                            'status'    => true,
                            'message'   => "Successfully uploaded image " . $this->upload->data('file_name'),
                            //'aFields'   => $aFields
                        );
                        $aResultBackground = ($aResult);
                    }
                break;

                default:
                    echo json_encode("Something went wrong. Please try again");
                break;
            }
        }

        if($aResultProfile['status'] == true && $aResultBackground['status'] == true){
            $aResultAll = array(
                'status' => true,
                'message'   => 'Successfully uploaded images'
            );
            echo json_encode($aResultAll);
        }
        else{
            $aResultAll = array(
                'status' => false,
                'message'   => 'Something went wrong. Please try again.'
            );
            echo json_encode($aResultAll);
        }

    }

    function createFromCloud(){

        $result = false;

        $aPosts = $this->input->post();
        $aPhotos = array(
            'photo_profile' => $aPosts['cloud_photo_profile'],
            'photo_background'  => $aPosts['cloud_photo_background'],
        );

        //profile
        $sPhotoProfile = $aPhotos['photo_profile'];
        $aUser = $this->UsersModel->getUserByID($aPosts['user_id']);
        $sDestination = '/uploads/users/' . $aUser['username'] . '/profile/';
        if(!is_dir("." . $sDestination)) mkdir("." . $sDestination, 0777, TRUE);
        $sChannel =  $sDestination . random_string('alnum', 30) . $this->determineFileExtension($sPhotoProfile);

        $aPhoto = array(
            'user_id' => $aUser['id'],
            'channel'   => $sChannel,
            'type'  => PhotosModel::TYPE_USERS_PROFILE
        );
        $this->getSaveImage($sChannel, $sPhotoProfile);
        $result = $this->PhotosModel->create($aPhoto);

        //background
        $sPhotoBackground = $aPhotos['photo_background'];
        $sDestination = '/uploads/users/' . $aUser['username'] . '/background/';
        if(!is_dir("." . $sDestination)) mkdir("." . $sDestination, 0777, TRUE);
        $sChannel =  $sDestination . random_string('alnum', 30) . $this->determineFileExtension($sPhotoBackground);

        $aPhoto = array(
            'user_id' => $aUser['id'],
            'channel'   => $sChannel,
            'type'  => PhotosModel::TYPE_USERS_BACKGROUND                  
        );
        $this->getSaveImage($sChannel, $sPhotoBackground);
        $result = $this->PhotosModel->create($aPhoto);

        if($result == true){
            $aResult = array(
                'status' => true,
                'message'   => "Successfully uploaded files"
            );

            echo json_encode($aResult);
        }
        else{
            $aResult = array(
                'status'    => false,
                'message'   => "Something went wrong. Please try again"
            );
            echo json_encode($aResult);
        }
    }

    function determineFileExtension($sChannel){
        $fileExtension = ".png";
        switch ($sChannel){
            case IMAGETYPE_GIF:
                $fileExtension = ".gif";
                break;
            case IMAGETYPE_JPEG:
                $fileExtension = ".jpeg";
                break;
            case IMAGETYPE_PNG:
                $fileExtension = ".png";
                break;
            case IMAGETYPE_BMP:
                $fileExtension = ".bmp";
                break;
            case IMAGETYPE_ICO:
                $fileExtension = ".ico";
                break;
            default:
                $fileExtension = ".png";
        }

        return $fileExtension;
    }

    function getSaveImage($sImageDestination, $sChannel){
        file_put_contents("." . $sImageDestination, file_get_contents($sChannel));
    }

    function getPhotosFromDirectory(){
        $sDirectory = $this->input->post('directory');
        $dir = $sDirectory;
        $dh  = opendir($dir);
        $files = [];
        while (false !== ($filename = readdir($dh))) {
            $files[] = base_url() . $sDirectory . $filename;
        }
        $images=preg_grep ('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $files);


        $aLoad['aImages'] = $images;

        $aResult = array(
            'status' => true,
            'message'   => "Successfully retrieved photos",
            'aImages'   => $images
        );
        echo json_encode($aResult);
    }
    
    function createPhotoAlbum(){
        $aResult = array();
        $aUser = $this->session->userdata();
        $sDestination = "/uploads/users/" . $aUser['username'] . "/" . $this->input->post("album");
        if(!is_dir("." . $sDestination)){
            mkdir("." . $sDestination, 0777, TRUE);
            $aResult = array(
                'status'    => true,
                'message'   => "Successfully created photo album",
                'destination' => $sDestination
            );
        }
        else{
            $aResult = array(
                'status'    => false,
                'message'   => "Photo Album already exists. Please name it another one",
                'destination'   => $sDestination
            );

        }
        echo json_encode($aResult);
    }

    function uploadPhotoAlbum(){
        //TODO
        //echo json_encode("SUD");
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        $files = $_FILES;

        $aUser = $this->session->userdata();
        
        $config['upload_path'] = './uploads/users/' . $aUser['username'] . '/' . $this->input->post("album");
        //var_dump($files);
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload("photo-album")) {

            $aResult = array(
                'status'    => false,
                'message'   => $this->upload->display_errors(),
                'uploadPath'   => $config['upload_path'],
                'originalName'  => $this->upload->data("file_name"),
                'originalType'  => $this->upload->data("file_type")
            );
        }
        else{
            $aPhoto = array(
                'user_id' => $aUser['id'],
                'channel'   => $config['upload_path'] . $this->upload->data('file_name'),
                'type'  => PhotosModel::TYPE_USERS_ALBUM
            );

            $this->PhotosModel->create($aPhoto);

            $aResult = array(
                'status'    => true,
                'message'   => "Successfully uploaded image " . $this->upload->data('file_name'),
                //'aFields'   => $aFields
            );
        }


        echo json_encode($aResult);
    }

    public function setAsProfile(){
        $sChannel = str_replace(base_url(), "", $this->input->post("channel"));
        $aUser = $aUser = $this->session->userdata();
        $aResult = array();
        $aPhoto = $this->PhotosModel->getPhotoByChannel($sChannel);
        if(is_array($aPhoto)){
            $aUserPhoto = array(
                "current_photo_profile_id" => $aPhoto['id']
            );
            $result = $this->UsersModel->setCurrentPhotoProfile($aUser['id'], $aUserPhoto);
            if($result){
                $aResult = array(
                    'status'    => true,
                    'message'   => "Successfully set as Profile Photo"
                );
            }
            else{
                $aResult = array(
                    'status'    => false,
                    'message'   => "Something went wrong. Please try again"
                );
            }
        }else{
            $aResult = array(
                'status'    => false,
                'message'   => "It seems that the photo doesn't exist. Please try another one"
            );
        }

        echo json_encode($aResult);
    }

    public function setAsBackground(){
        $sChannel = str_replace(base_url(), "", $this->input->post("channel"));
        $aUser = $aUser = $this->session->userdata();
        $aResult = array();
        $aPhoto = $this->PhotosModel->getPhotoByChannel($sChannel);
        if(is_array($aPhoto)){
            $aUserPhoto = array(
                "current_photo_background_id" => $aPhoto['id']
            );
            $result = $this->UsersModel->setCurrentPhotoBackground($aUser['id'], $aUserPhoto);
            if($result){
                $aResult = array(
                    'status'    => true,
                    'message'   => "Successfully set as Background Photo"
                );
            }
            else{
                $aResult = array(
                    'status'    => false,
                    'message'   => "Something went wrong. Please try again"
                );
            }
        }else{
            $aResult = array(
                'status'    => false,
                'message'   => "It seems that the photo doesn't exist. Please try another one"
            );
        }

        echo json_encode($aResult);
    }
}