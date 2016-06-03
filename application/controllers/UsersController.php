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
            $this->load->view('users/layouts/index', $aLoad);
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
            $this->load->view('users/layouts/index', $aLoad);

        }
    }

    public function create(){
        
    }

    public function register(){
        
    }




}
