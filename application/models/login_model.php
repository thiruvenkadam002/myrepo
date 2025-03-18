<?php
defined("BASEPATH") OR exit("No direct script access allowed");
class login_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
 

public function validate_admin($uname,$password){
    $this->db->where("USERNAME",$uname);
    $this->db->where("PASSWORD",$password);
    $query = $this->db->get('admin');
    if($query->num_rows() > 0){
        return true;
    }else{
       return false;

}
}

public function validate_client($uname,$password){
    $this->db->where("USERNAME",$uname);
    $this->db->where("PASSWORD",$password);
    $query = $this->db->get('client');
    if($query->num_rows() > 0){
        return true;
    }else{
       return false;

}
}
}
?>