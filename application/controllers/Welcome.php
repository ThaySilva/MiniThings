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
            
            if($session_data['UserType'] == 2)
            {
                $data['user'] = $session_data['userName'];
                $data['title'] = 'Mini Things';
                $data['page'] = 'main';
                $data['carousel'] = true;
                $data['logout'] = true;
                $this->load->view('home', $data);
            }
            else if($session_data['UserType'] == 1)
            {
                $data['user'] = $session_data['userName'];
                $data['image'] = $session_data['Image'];
                $data['title'] = 'Mini Things';
                $data['page'] = 'main';
                $data['carousel'] = true;
                $data['logout'] = true;
                $this->load->view('adminHome', $data);
            }
        }
        else{
            $data['user'] = '';
            $data['title'] = 'Mini Things';
            $data['page'] = 'main';
            $data['carousel'] = true;
            $data['logout'] = false;
            $this->load->view('home', $data);
        }
    }
}
