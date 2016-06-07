<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PhotosModel');
        $this->load->model('UsersModel');
        $this->load->model('SocialMediaModel');
    }

    public function index($sUsername = null, $profileItem = null){
        $aUser = $this->UsersModel->getUserByUsername($sUsername);
        $aUser['photoProfile'] = $this->PhotosModel->getPhotoFromUserProfile($aUser['id']);
        $aUser['photoBackground'] = $this->PhotosModel->getPhotoFromUserBackground($aUser['id']);
        $aUser['socialMedia'] = $this->SocialMediaModel->getSocialMediaByUserID($aUser['id']);
        //var_dump($aUser);die();
        $aLoad['aViews'] = array(
            'users/profile/index/index'
        );
        $aLoad['aUser'] = $aUser;
        $aLoad['aJS'] = array(
            '/assets/js/custom/photos/service.js',
            '/assets/js/custom/photos/core.js',
            '/assets/js/custom/photos/ui.js',

            '/assets/js/custom/users/service.js',
            '/assets/js/custom/users/core.js',
            '/assets/js/custom/users/ui.js',

            '/assets/js/custom/profile/service.js',
            '/assets/js/custom/profile/core.js',
            '/assets/js/custom/profile/ui.js',
        );
        $this->load->view('users/profile/layouts/index', $aLoad);
    }

    public function getItem($sUsername = null, $profileItem = null){


        $aUser = $this->UsersModel->getUserByUsername($sUsername);
        $aUser['photoProfile'] = $this->PhotosModel->getPhotoFromUserProfile($aUser['id']);
        $aUser['photoBackground'] = $this->PhotosModel->getPhotoFromUserBackground($aUser['id']);
        $aUser['socialMedia'] = $this->SocialMediaModel->getSocialMediaByUserID($aUser['id']);
        $aLoad['aUser'] = $aUser;
        switch ($profileItem){
            case "images":
                $html = $this->load->view('users/profile/partials/images/index', $aLoad, true);
                break;
            case "social-media":
                $html = $this->load->view('users/profile/partials/social-media/index', $aLoad, true);
                break;
            case "settings":
                $html = $this->load->view('users/profile/partials/settings/index', $aLoad, true);
                break;
            default:
                $html = $this->load->view('users/profile/partials/profile/index', $aLoad, true);
                break;
        }


        $aResult = array(
            'status'    => true,
            'message'   => "Successfully get the view",
            'html'      => $html,
            'item'      => $profileItem
        );
        echo json_encode($aResult);
    }

}