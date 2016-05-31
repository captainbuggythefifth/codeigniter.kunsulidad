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
            //$aResult = $this->checkFields($aUser, array('first_name', 'last_name'));
            //echo json_encode($aUser);
            $result = $this->UsersModel->create($aUser);
            echo json_encode($result);
        }
        else{
            $aLoad['aViews'] = array(
                'users/auth/register/index'
            );
            $aLoad['aJS'] = array(
                '/assets/js/custom/users/service.js',
                '/assets/js/custom/users/core.js',
                '/assets/js/custom/users/ui.js'
            );
            $this->load->view('users/auth/layouts/index', $aLoad);
        }

    }

    public function login(){
        if($this->input->post()){
            $aUser = $this->input->post();
        }
        else {
            $aLoad['aViews'] = array(
                'users/auth/login/index'
            );
            $this->load->view('users/auth/layouts/index', $aLoad);
        }
    }

}
