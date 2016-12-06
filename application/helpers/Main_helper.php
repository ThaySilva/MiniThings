<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function displayCarousel() {
    
    $CI = get_instance();
    $CI->load->model('ProductsModel');
    $images['AllImages'] = $CI->ProductsModel->getOnOffer();

    foreach($images['AllImages'] as $index=>&$row){
        
        if($index == 0){
            echo "<div class='item active'>";
            echo "<div class='container'>";
            echo "<a href='" . site_url('Register_controller') . "'><img style='width:100%' src='" . base_url() . "assets/images/carousel/" . $row['offerImage'] . "'alt='special offers'/></a>";
            echo "</div>";
            echo "</div>";
        }
        else {
            echo "<div class='item'>";
            echo "<div class='container'>";
            echo "<a href='" . site_url('Register_controller') . "'><img style='width:100%' src='" . base_url() . "assets/images/carousel/" . $row['offerImage'] . "' alt=''/></a>";
            echo "</div>";
            echo "</div>";
        }
    }
}