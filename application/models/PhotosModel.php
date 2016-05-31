<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PhotosModel extends CI_Model
{
    private $table;
    public $STATUS_ACTIVE = 1;
    public $STATUS_INACTIVE = 2;
    public $STATUS_DEACTIVATED = 0;

    //public $TYPE_MEMBERS = 1;
    public $TYPE_USERS_PROFILE = 1;
    public $TYPE_USERS_BACKGROUND = 2;

    function __construct(){
        parent::__construct();

        $this->table = 'photos';
        // $this->password_check();
    }

    function create($aUser){
        $sPassword = $this->encrypt->sha1($aUser['password']);
        $aUser['password'] = $sPassword;
        $result = $this->db->insert($this->table, $aUser);
        return $result;
    }

    function getUsersByID($iUserID){
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
        $this->db->where('type', $this->TYPE_USERS_PROFILE);
        $result = $this->db->get($this->table);
        return $result->row_array();
    }

    function getPhotoFromUserBackground($iUserID){
        $this->db->where('user_id', $iUserID);
        $this->db->where('type', $this->TYPE_USERS_BACKGROUND);
        $result = $this->db->get($this->table);
        return $result->row_array();
    }


}