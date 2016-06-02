<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SocialMediaModel extends CI_Model
{
    private $table;
    public $STATUS_ACTIVE = 1;
    public $STATUS_INACTIVE = 2;
    public $STATUS_DEACTIVATED = 0;

    //public $TYPE_MEMBERS = 1;

    function __construct(){
        parent::__construct();

        $this->table = 'social_media';
    }

    function create($aSocialMedia){
        $this->db->insert($this->table, $aSocialMedia);
        $result = $this->db->insert_id();
        return $result;
    }

    function getUserByID($iUserID){
        $this->db->where('id', $iUserID);
        $result = $this->db->get($this->table);
        return $result->row_array();
    }

    function getPhotos($iOffset = 0, $iLimit = 0){
        $this->db->where('status', '1');
        $result = $this->db->get($this->table);
        return $result->result_array();
    }

    function getPhotoFromUserProfile($iUserID){
        $this->db->where('user_id', $iUserID);
        $this->db->where('type', self::TYPE_USERS_PROFILE);
        $result = $this->db->get($this->table);
        return $result->row_array();
    }

    function getPhotoFromUserBackground($iUserID){
        $this->db->where('user_id', $iUserID);
        $this->db->where('type', self::TYPE_USERS_BACKGROUND);
        $result = $this->db->get($this->table);
        return $result->row_array();
    }


}