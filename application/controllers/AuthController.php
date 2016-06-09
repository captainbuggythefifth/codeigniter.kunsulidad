<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('UsersModel');
    }

    public function create(){

    }

    public function register(){
        if($this->input->post()){
            $aUser = $this->input->post();

            $this->load->library('form_validation');

            $this->form_validation->set_rules('first_name', 'First Name', 'required|min_length[5]|max_length[12]');
            $this->form_validation->set_rules('last_name', 'Last Name', 'required|min_length[5]|max_length[12]');
            $this->form_validation->set_rules('username', 'Username', 'required|min_length[2]|max_length[12]|is_unique[users.username]');
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

            /*$result = $this->UsersModel->create($aUser);
            echo json_encode($result);*/
        }
        else{
            $aLoad['aViews'] = array(
                'users/auth/register/index',
                'users/auth/photos/index',
                'users/auth/social-media/index',
                'users/auth/welcome/index'
            );
            $aLoad['aJS'] = array(
                '/assets/js/custom/photos/service.js',
                '/assets/js/custom/photos/core.js',
                '/assets/js/custom/photos/ui.js',

                '/assets/js/custom/users/service.js',
                '/assets/js/custom/users/core.js',
                '/assets/js/custom/users/ui.js',

                '/assets/js/custom/social-media/service.js',
                '/assets/js/custom/social-media/core.js',
                '/assets/js/custom/social-media/ui.js',
            );
            $this->load->view('users/auth/layouts/index', $aLoad);
        }

    }

    public function login(){
        if($this->input->post()){
            $aUser = $this->input->post();

            $this->load->library('form_validation');

            $this->form_validation->set_rules('username', 'Username', 'required|min_length[2]|max_length[12]');
            $this->form_validation->set_rules('password', 'Password', 'required');

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
            else{
                $aResult = array();
                $result = $this->UsersModel->getUserByUsernameAndPassword($aUser);
                if($result == null){
                    $aResult = array(
                        'status'    => false,
                        'message'   => "Username or password incorrect"
                    );
                }
                else{
                    $this->session->set_userdata($result);
                    $aResult = array(
                        'status'    => true,
                        'message'   => "Successfully logged in"
                    );
                }
                echo json_encode($aResult);
            }


        }
        else {
            $aLoad['aViews'] = array(
                'users/auth/login/index'
            );
            $aLoad['aJS'] = array(
                '/assets/js/custom/users/service.js',
                '/assets/js/custom/users/core.js',
                '/assets/js/custom/users/ui.js',
            );
            $this->load->view('users/auth/layouts/index', $aLoad);
        }
    }

    public function fbLogin(){

        //$this->load->view('users/auth/fb/index');
        $aUser = $this->input->post();
        $result = $this->UsersModel->getUserByEmail($aUser['email']);
        if($result){
            $this->session->set_userdata($result);
            $aResult = array(
                'status'    => true,
                'message'   => "Successfully logged in. We will redirect you in a few seconds",
                'sUsername' => $result['username']
            );
        }
        else{

            $aResult = array(
                'status'    => false,
                'message'   => "Email does not exist. Please sign up",
            );

        }
        echo json_encode($aResult);
    }

    public function logout(){
        $this->session->sess_destroy();
    }

}
