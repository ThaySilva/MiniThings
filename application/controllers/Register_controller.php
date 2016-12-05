<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegisterController
 *
 * @author Thaynara Silva
 */
class Register_controller extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        $this->load->model('UsersModel');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }
    
    function index() {
        
        $data['title'] = 'Register Mini Things';
        $data['user'] = '';
        $data['page'] = 'register';
        $data['alert'] = false;
        $this->load->view('home', $data);
    }
    
    function register(){
        
        if(!empty($_POST)){
            if($this->UsersModel->register()) {
                $this->session->set_flashdata('Success', 'User registered with success');
                $data['page'] = 'main';
                redirect('home', $data);
            }
            else{
                $this->session->set_flashdata('Error', 'This user is already registered');
                $data['page'] = 'login';
                redirect('home', $data);
            }
        }
    }
}
