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
        $data['carousel'] = false;
        $data['logout'] = false;
        $data['alert'] = false;
        $this->load->view('home', $data);
    }
    
    function register(){
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        $this->form_validation->set_rules('firstName', 'First Name', 'trim|required', array('required' => 'You need to enter a First Name!'));
        $this->form_validation->set_rules('lastName', 'Last Name', 'trim|required', array('required' => 'You need to enter a Last Name!'));
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', array('required' => 'You need to enter an Email!', 'valid_email' => 'Please enter a valid Email!'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]', array('required' => 'You need to enter a Password!', 'min_length' => 'Your password must be of minimun length of 8'));
        $this->form_validation->set_rules('password2', 'RePassword', 'trim|required|matches[password]', array('required' => 'You need to re-enter your password!', 'matches' => 'Your passwords does not match!'));
        $this->form_validation->set_rules('address', 'Address', 'trim|required', array('required' => 'You need to enter an Address!'));
        $this->form_validation->set_rules('city', 'City', 'trim|required', array('required' => 'You need to enter a City!'));
        $this->form_validation->set_rules('county', 'County', 'trim|required', array('required' => 'You need to enter a County!'));
        $this->form_validation->set_rules('postCode', 'Post Code', 'trim|required', array('required' => 'You need to enter a Post Code!'));
        $this->form_validation->set_rules('country', 'Country', 'trim|required', array('required' => 'You need to enter a Coutry!'));
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required', array('required' => 'You need to enter a Phone Number!'));
        
        if($this->form_validation->run()){
            if(!empty($_POST)){
                if($this->UsersModel->register()) {
                    $this->session->set_flashdata('Success', 'User registered with success');
                    $sess_array = array();
                    $sess_array = array('userName' => $_POST['firstcxfbvx`fvsName']);
                    $this->session->set_userdata('logged_in', $sess_array);
                    $session_data = $this->session->userdata('logged_in');
                    $data['title'] = 'Welcome ' . $session_data['userName'];
                    $data['user'] = $session_data['userName'];
                    $data['page'] = 'main';
                    $data['carousel'] = true;
                    $data['logout'] = true;
                    $data['alert'] = false;
                    $this->load->view('home', $data);
                }
                else{
                    $this->session->set_flashdata('Error', 'This user is already registered');
                    $data['title'] = 'Mini Things';
                    $data['user'] = '';
                    $data['page'] = 'login';
                    $data['carousel'] = false;
                    $data['logout'] = false;
                    $data['alert'] = true;
                    $data['alertText'] = 'An account already exists with this email. Login to have access.';
                    $this->load->view('home', $data);
                }
            }
        }
        else{
            $data['title'] = 'Mini Things';
            $data['user'] = '';
            $data['page'] = 'register';
            $data['carousel'] = false;
            $data['logout'] = false;
            $data['alert'] = false;
            $this->load->view('home', $data);
        }
    }
}
