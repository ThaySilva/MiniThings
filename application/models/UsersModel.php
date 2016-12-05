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
    
    public $email;
    public $password;
    public $name;
    
    public function __construct() {
        
        $this->load->database();
    }
    
    function login($email, $password) {
        
        $this->db->select('customerNumber, email, password');
        $this->db->from('customers');
        $this->db->where('email', $email);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);
        
        $query = $this->db->get();
        
        if($query->num_rows == 1)
            return $query->result_array();
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
            $this->name = $_POST['name'];
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
            
            $user = $this->db->insert($this->table, $this);
            
            $this->session->set_userdata('name', $user->name);
            
            return true;
        }
    }
}
