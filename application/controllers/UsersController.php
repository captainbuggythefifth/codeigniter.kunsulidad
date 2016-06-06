<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('UsersModel');
        $this->load->model('PhotosModel');
        $this->load->model('SocialMediaModel');
    }

    public function members($sUsername = null){
        if($sUsername == null){
            $aUsers = $this->UsersModel->getUsers();
            for($i = 0; $i < count($aUsers); $i++){
                $aUsers[$i]['photoProfile'] = $this->PhotosModel->getPhotoFromUserProfile($aUsers[$i]['id']);
                $aUsers[$i]['photoBackground'] = $this->PhotosModel->getPhotoFromUserBackground($aUsers[$i]['id']);
            }
            $aLoad['aViews'] = array(
                'users/pages/members/index'
            );
            $aLoad['aUsers'] = $aUsers;
            $this->load->view('users/pages/layouts/index', $aLoad);
        }
        else{
            $aUser = $this->UsersModel->getUserByUsername($sUsername);
            $aUser['photoProfile'] = $this->PhotosModel->getPhotoFromUserProfile($aUser['id']);
            $aUser['photoBackground'] = $this->PhotosModel->getPhotoFromUserBackground($aUser['id']);
            $aUser['socialMedia'] = $this->SocialMediaModel->getSocialMediaByUserID($aUser['id']);
            $aLoad['aViews'] = array(
                'users/pages/members/member'
            );

            $aLoad['aUser'] = $aUser;
            $this->load->view('users/pages/layouts/index', $aLoad);

        }
    }

    public function create(){
        
    }

    public function register(){
        
    }
    
    public function update(){
        $aUser = $this->input->post();

        $this->load->library('form_validation');

        $this->form_validation->set_rules('first_name', 'First Name', 'required|min_length[5]|max_length[30]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|min_length[5]|max_length[30]');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[2]|max_length[30]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[passwordconf]');
        $this->form_validation->set_rules('passwordconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

        if ($this->form_validation->run() == FALSE) {
            $aPosts = $this->input->post();
            $aFields = array();
            foreach ($aPosts as $fieldName => $fieldData){
                if(form_error($fieldName)){
                    $aFields[$fieldName] = form_error($fieldName);
                }
            }
            $aResult = array(
                'status'    => false,
                'message'   => validation_errors(),
                'aFields'   => $aFields
            );
            echo json_encode($aResult);
        }
        else {
            unset($aUser['passwordconf']);
            $result = $this->UsersModel->create($aUser);
            $aResult = array(
                'status'    => true,
                'message'   => "Successfully created a new user!",
                'iUserID'     => $result,
            );
            $aUser = $this->UsersModel->getUserByID($result);
            $this->session->set_userdata($aUser);
            echo json_encode($aResult);
        }
    }




}
