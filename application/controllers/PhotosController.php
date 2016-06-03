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
}