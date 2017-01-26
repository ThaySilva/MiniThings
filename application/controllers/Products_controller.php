<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Products_controller
 *
 * @author Thaynara Silva
 */
class Products_controller extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        $this->load->model('ProductsModel');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper(array('form'));  
    }
    
    function loadProducts(){
        
        $type = $this->input->get('value');
        
        $session_data = $this->session->userdata('logged_in');
        $result = $this->ProductsModel->getProducts($type);
        $amount = count($result);
        
        if($this->session->userData('logged_in')){
            if($session_data['UserType'] == 2)
            {
                $data['title'] = 'Welcome ' . $session_data['userName'];
                $data['user'] = $session_data['userName'];
                $data['page'] = 'products';
                $data['carousel'] = true;
                $data['alert'] = false;
                $data['logout'] = true;
                $data['type'] = $type;
                $data['amount'] = $amount;
                $this->load->view('home', $data);
            }
        }
        else{
                $data['title'] = 'Welcome to Mini Things';
                $data['user'] = '';
                $data['page'] = 'products';
                $data['carousel'] = true;
                $data['alert'] = false;
                $data['logout'] = false;
                $data['type'] = $type;
                $data['amount'] = $amount;
                $this->load->view('home', $data);
        }
    }
}
