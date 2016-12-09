<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductsModel
 *
 * @author Thaynara Silva
 */
class ProductsModel extends CI_Model {
    
    function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
    
    public function getOnOffer() {
        
        $this->db->select('offerImage');
        $this->db->from('products');
        $this->db->where('specialOffer', 1);
        
        $query = $this->db->get();
        
        if($query->num_rows() >= 1)
            return $query->result_array();
        else
            return false;
    }
        
    public function getImages(){
        
        $this->db->select('image');
        $this->db->from('products');
        $this->db->order_by('image', 'asc');
        $this->db->limit(4);
        
        $query = $this->db->get();
        
        if($query->num_rows() >= 1)
            return $query->result_array();
        else
            return false;
    }
}
