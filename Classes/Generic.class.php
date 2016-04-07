<?php

include_once './Conexao.class.php';

class Generic {

    protected $id;
    protected $con;

    function getId() {
        return $this->id;
    }

    function getCon() {
        return $this->con;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCon($con) {
        $this->con = $con;
    }
    
    function __construct() {
        
    }
}
