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
}
