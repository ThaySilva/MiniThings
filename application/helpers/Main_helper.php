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

//function displayFeaturesProducts() {
//    
//    $CI = get_instance();
//    $CI->load->model('ProductsModel');
//    $images['AllImages'] = $CI->ProductsModel->getImages();
//    
//    $ImageArray = array();
//    foreach($images['AllImages'] as $index=>&$row){
//        while($index != 4)
//        {
//            $ImageArray[$index] = $row['image'];
//        }
//    }
//    firstFour($ImageArray);
//}

function firstFour($images){
    
    echo "<div class='item active'>";
	echo "<ul class='thumbnails'>";
        
        foreach($images as $row){
            echo "<li class='span3'>";
                echo "<div class='thumbnail'>";
                    echo "<i class='tag'></i>";
                            echo "<a href='product_details.html'><img src='" . base_url() . "assets/images/products/" . $row['image'] ."' alt=''></a>";
                            echo "<div class='caption'>";
                                echo "<h5>Product name</h5>";
                                echo "<h4><a class='btn' href='product_details.html'>VIEW</a> <span class='pull-right'>$222.00</span></h4>";
                            echo "</div>";
                    echo "</div>";
            echo "</li>";
        }
	echo "</ul>";
    echo "</div>";
}