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
            if($session_data['UserType'] == 2)
            {
                $data['title'] = 'Welcome ' . $session_data['userName'];
                $data['user'] = $session_data['userName'];
                $data['page'] = 'main';
                $data['carousel'] = true;
                $data['alert'] = false;
                redirect('home', $data);
            }
            else if($session_data['UserType'] == 1)
            {
                $data['title'] = 'Welcome ' . $session_data['userName'];
                $data['user'] = $session_data['userName'];
                $data['image'] = $session_data['Image'];
                $data['page'] = 'main';
                $data['carousel'] = true;
                $data['alert'] = false;
                redirect('adminHome', $data);
            }
        }
        else {
            $data['page'] = 'login';
            $this->load->view('home', $data);
        }
    }
    
    function verify_login() {
        
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
        
        if($this->form_validation->run() == false){
            if($email == null || $password == null){
                redirect('#login');
            }
            else if($this->check_database($password) == false){
                $data['title'] = 'Register Mini Things';
                $data['user'] = '';
                $data['page'] = 'register';
                $data['carousel'] = false;
                $data['alert'] = true;
                $data['alertText'] = 'There is no user with the email: ' . $email . ' registered. Please register to have full access.';
                $data['logout'] = false;
                $this->load->view('home', $data);
            }
        }
        else
        {
            $session_data = $this->session->userdata('logged_in');
            if($session_data['UserType'] == 2)
            {
                $data['title'] = 'Welcome ' . $session_data['userName'];
                $data['user'] = $session_data['userName'];
                $data['page'] = 'main';
                $data['carousel'] = true;
                $data['logout'] = true;
                $this->load->view('home', $data);
            }
            else if($session_data['UserType'] == 1)
            {
                $data['title'] = 'Welcome ' . $session_data['userName'];
                $data['user'] = $session_data['userName'];
                $data['image'] = $session_data['Image'];
                $data['page'] = '';
                $data['carousel'] = true;
                $data['logout'] = true;
                $this->load->view('adminHome', $data);
            }
        }
    }
    
    function check_database($password){
        
        $email = $this->input->post('email');
        
        $result = $this->UsersModel->login($email, $password);
        
        if($result) {
            $sess_array = array();
            foreach($result as $row) {
                $sess_array = array('userName' => $row['name'], 'UserType' => $row['userType'], 'Image' => $row['image']);
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return true;
        }
        else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
        }
        return false;
    }
    
    function logout(){
        
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        
        $data['title'] = 'Mini Things';
        $data['user'] = '';
        $data['page'] = 'main';
        $data['carousel'] = true;
        $data['logout'] = false;
        $this->load->view('home', $data);
    }
}
