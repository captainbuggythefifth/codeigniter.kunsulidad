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

    const TYPE_USERS_PROFILE = 1;
    const TYPE_USERS_BACKGROUND = 2;
    const TYPE_USERS_ALBUM = 3;

    function __construct(){
        parent::__construct();

        $this->table = 'photos';
        // $this->password_check();
    }

    function create($aPhoto){
        $this->db->insert($this->table, $aPhoto);
        $result = $this->db->insert_id();
        return $result;
    }

    function getUserByID($iUserID){
        $this->db->where('id', $iUserID);
        $result = $this->db->get($this->table);
        return $result->row_array();
    }

    function update($aPhoto){
        $this->db->where('id', $aPhoto['id']);
        $result = $this->db->update($this->table, $aPhoto);
        return $result;
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

    function getPhotoByChannel($sChannel){
        $this->db->where('channel', $sChannel);
        $result = $this->db->get($this->table);
        return $result->row_array();
    }

}