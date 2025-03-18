<?php 
defined("BASEPATH") OR exit("No direct script access allowed");
class Root extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array("url","form"));
        $this->load->model('login_model');
       
    }
    public function index(){
        //$this->load->view('pages/header');
         $this->load->view('pages/home_page');
        $this->load->view('pages/footer');
    }
    public function admin_login(){
         $this->load->view('pages/admin_login');
         $this->load->view('pages/footer');
     }

     public function client_login(){
         $this->load->view('pages/client_login');
         $this->load->view('pages/footer');
     }

     public function validate_admin(){
        $uname= $this->input->post('uname');
        $password= $this->input->post('pass');
       
        $res=$this->login_model->validate_admin($uname,$password);
        if($res){
            $this->session->set_flashdata('success','login Successfull');
            $this->load->view('pages/admin_dashboard');
        }else{
           
            $this->session->set_flashdata('error','Login Failed');
            $this->load->view('pages/home_page');
            
           
        }
        


     }

     public function validate_client(){
        $uname=$this->input->post('uname');
        $password=$this->input->post('pass');

        $res=$this->login_model->validate_client($uname,$password);
        if($res){
            $this->session->set_flashdata('success','login Successfull');
            $this->load->view('pages/client_dashboard');

        }else{
            $this->session->set_flashdata('error','login unsuccessfull');
            $this->load->view('pages/client_signup');
        }
     }

    
}
?>