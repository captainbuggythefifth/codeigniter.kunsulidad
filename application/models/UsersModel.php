<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UsersModel extends CI_Model
{
    private $table;
    public $STATUS_ACTIVE = 1;
    public $STATUS_INACTIVE = 2;
    public $STATUS_DEACTIVATED = 0;

    public $TYPE_MEMBERS = 1;
    public $TYPE_USERS = 2;

    function __construct(){
        parent::__construct();

        $this->load->library('encrypt');
        $this->table = 'users';
        // $this->password_check();
    }

    function create($aUser){
        $this->db->insert($this->table, $aUser);
        $result = $this->db->insert_id();
        return $result;
    }

    function getUserByID($iUserID){
        $this->db->where('id', $iUserID);
        $result = $this->db->get($this->table);
        return $result->row_array();
    }

    function getUsers($iOffset = 0, $iLimit = 0){
        $this->db->where('status', $this->STATUS_ACTIVE);
        $this->db->order_by('first_name', 'asc');
        $result = $this->db->get($this->table);
        return $result->result_array();
    }

    function getUserByUsername($sUsername){
        $this->db->where('username', $sUsername);
        $result = $this->db->get($this->table);
        return $result->row_array();
    }

    function check($sCheckFor, $sUserDetail){
        var_dump($sCheckFor, $sUserDetail);
        $this->db->where($sCheckFor, $sUserDetail);
        $result = $this->db->get($this->table);
        if($result->num_rows > 0){
            var_dump("DIRI");
            return false;
        }
        else{
            return true;
        }
    }


}