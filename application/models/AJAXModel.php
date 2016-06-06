<?php

class AjaxModel extends CI_Model{

    const HEADER_404 = 404;

    public $statusCode;
    public $status;
    public $message;
    public $aResult;

    function __construct(){
        parent::__construct();
    }

    public function setHeader($header = null){

    }

    public function create($aResult){

    }

    public function get(){
        echo json_encode($this->aResult);
    }
}