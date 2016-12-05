<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['user'] = $session_data['customerName'];
            $data['title'] = 'Mini Things';
            $data['page'] = 'main';
            $this->load->view('home', $data);
        }
        else{
            $data['user'] = '';
            $data['title'] = 'Mini Things';
            $data['page'] = 'main';
            $this->load->view('home', $data);
        }
    }
}
