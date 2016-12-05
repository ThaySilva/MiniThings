<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author Thaynara Silva
 */
class Login_controller extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        $this->load->model('UsersModel');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }
    
    function index() {
        
        if($this->session->userData('logged_in')){
            redirect('home');
        }
        else {
            $data['page'] = 'login';
            $this->load->view('home', $data);
        }
    }
    
    function verify_login() {
        
        $email = $this->input->post('email');
        
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        
        if($this->form_validation->run() == false){
            $data['title'] = 'Register Mini Things';
            $data['user'] = '';
            $data['page'] = 'register';
            $data['alert'] = true;
            $data['alertText'] = 'There is no user with the email: ' . $email . ' registered. Please register to have full access.';
            $this->load->view('home', $data);
        }
        else
        {
            $data['title'] = 'Welcome to Mini Things';
            $data['user'] = $email;
            $data['page'] = 'main';
            redirect('home', $data);
        }
    }
    
    function check_database($password){
        
        $email = $this->input->post('email');
        
        $result = $this->UsersModel->login($email, $password);
        
        if($result) {
            
            $sess_array = array();
            foreach($result as $row) {
                $sess_array = array('CustomerNo' => $row->customerNumber, 'userName' => 'customerName');
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return true;
        }
        else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
        }
    }
}
