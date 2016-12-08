<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersModel
 *
 * @author Thaynara Silva
 */
class UsersModel extends CI_Model {
    
    private $table = 'customers';
    
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
    
    function login($email, $password) {
        
        $this->db->select('customerNumber, contactFirstName, email, password');
        $this->db->from('customers');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->limit(1);
        
        $query = $this->db->get();
        
        if($query->num_rows() == 1){
            return $query->result_array();
        }
        else
            return false;
    }
    
    function register()
    {
        $query = $this->db->get_where($this->table, ['email' => $_POST['email']]);
        $result = $query->result();
        
        if(!empty($result)){
            return false;
        }
        else {
            $this->customerName = $_POST['companyName'];
            $this->contactLastName = $_POST['lastName'];
            $this->contactFirstName = $_POST['firstName'];
            $this->phone = $_POST['phone'];
            $this->addressLine1 = $_POST['address'];
            $this->addressLine2 = $_POST['address2'];
            $this->city = $_POST['city'];
            $this->state = $_POST['county'];
            $this->postalCode = $_POST['postCode'];
            $this->country = $_POST['country'];
            $this->creditLimit = $_POST['creditLimit'];
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
            
            $user = $this->db->insert($this->table, $this);
            
            $this->session->set_userdata('name', $user->firstName);
            
            return true;
        }
    }
}
