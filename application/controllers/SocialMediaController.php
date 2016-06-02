<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SocialMediaController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('PhotosModel');
        $this->load->model('UsersModel');
        $this->load->model('SocialMediaModel');
    }

    function create(){
        $aPost = $this->input->post();
        /*$iUserID = $aPost['iUserID'];
        $aPost['user_id']   =   $iUserID;*/

        $aPost['user_id'] = $this->session->userdata('id');
        $result = $this->SocialMediaModel->create($aPost);

        $aUser = $this->UsersModel->getUserByID($aPost['user_id']);
        if($result){
            $aResult = array(
                'status'    => true,
                'message'   => "Successfully inserted social medias",
                'sUsername'     => $aUser['username']
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
}