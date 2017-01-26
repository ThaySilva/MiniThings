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
        
        if ($query->num_rows() >= 1) {
            return $query->result_array();
        } else {
            return false;
        }
    }
        
    public function getRandomImages($amount){
        
        $this->db->select('productName, productLine, productDescription, MSRP, image');
        $this->db->from('products');
        $this->db->order_by(rand(1,100), 'RANDOM');
        $this->db->limit($amount);
        
        $query = $this->db->get();
        
        if ($query->num_rows() >= 1) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    public function getImages($order, $amount, $start)
    {
        $this->db->select('productCode , productName , productLine , productDescription , MSRP , image');
        $this->db->from('products');
        $this->db->order_by($order);
        if ($start != 0) {
            $this->db->limit($amount, $start);
        } else {
            $this->db->limit($amount);
        }

        $query = $this->db->get();
        
        return $query->result_array();
        
    }
    
    public function getImageWhere($type, $code, $amount, $start){
        $this->db->select('productCode , productName , productLine , productDescription , MSRP , image');
        $this->db->from('products');
        
        if ($type != '') {
            $this->db->where('productLine', $type);
        } else if ($code != '') {
            $this->db->where('productCode', $code);
        }

        if ($start != 0) {
            $this->db->limit($amount, $start);
        } else {
            $this->db->limit($amount);
        }

        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getProducts($type){
        
        $this->db->select('productCode , productName , productLine , productDescription , MSRP , image');
        $this->db->from('products');
        $this->db->where('productLine', $type);
        
        $query = $this->db->get();

        return $query->result_array();
        
    }
}
