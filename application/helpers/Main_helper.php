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

function displayFeaturesProducts() {
    
    $CI = get_instance();
    $CI->load->model('ProductsModel');
    
    echo "<div class='item active'>";
	echo "<ul class='thumbnails'>";

    $activeImgs = $CI->ProductsModel->getImages('productCode', 4, 0);
    foreach($activeImgs as &$row){
        echo "<li class='span3'>";
            echo "<div class='thumbnail'>";
                echo "<a href='product_details.html'><img src='" . base_url() . "assets/images/products/" . $row['image'] . "' alt=''></a>";
                echo "<div class='caption'>";
                    echo "<h5>" . $row['productName'] . "</h5>";
                    echo "<h4><a class='btn' href='product_details.html'>VIEW</a> <span class='pull-right'>€" . $row['MSRP'] . "</span></h4>";
                echo "</div>";
            echo "</div>";
	echo "</li>";
    }
    
    echo "</ul>";
    echo "</div>";
    
    for($i=4; $i<=12; $i+=4){
        echo "<div class='item'>";
        echo "<ul class='thumbnails'>";
    
        $slide = $CI->ProductsModel->getImages('productCode', 4, $i);
        
        foreach($slide as &$row){
            echo "<li class='span3'>";
                echo "<div class='thumbnail'>";
                echo "<a href='product_details.html'><img src='" . base_url() . "assets/images/products/" . $row['image'] . "' alt=''></a>";
                    echo "<div class='caption'>";
                        echo "<h5>" . $row['productName'] . "</h5>";
                        echo "<h4><a class='btn' href='product_details.html'>VIEW</a> <span class='pull-right'>€" . $row['MSRP'] . "</span></h4>";
                    echo "</div>";
                echo "</div>";
            echo "</li>";
        }

        echo "</ul>";
        echo "</div>";
    }
}

function displayLatestProducts(){
    $CI = get_instance();
    $CI->load->model('ProductsModel');
    
    $latest = $CI->ProductsModel->getImages('dateAdded DESC', 6, '');
    
    foreach($latest as &$row){
        echo "<li class='span3'>";
            echo "<div class='thumbnail'>";
            echo "<a  href='product_details.html'><img src='" . base_url() . "assets/images/products/" . $row['image'] . "'alt=''/></a>";
		echo "<div class='caption'>";
                    echo "<h5>" . $row['productName'] . "</h5>";
                    echo "<p>" . $row['productLine'] . "</p>";
                    echo "<h4 style='text-align:center'><a class='btn' href='product_details.html'> <i class='icon-zoom-in'></i></a> <a class='btn' href='#'>Add to <i class='icon-shopping-cart'></i></a> <a class='btn btn-primary' href='#'>€" . $row['MSRP'] . "</a></h4>";
                echo "</div>";
            echo "</div>";
	echo "</li>";
    }
}

function displayProducts($type){
    $CI = get_instance();
    $CI->load->model('ProductsModel');
    
    $products = $CI->ProductsModel->getProducts($type);
 
    $images = $CI->ProductsModel->getImageWhere($type, '', 6, 0);
    foreach($images as &$row){
        echo "<li class='span3'>
            <div class='thumbnail'>
                <a href='product_details.html'><img src='" . base_url() . "assets/images/products/" . $row['image'] . " 'alt=''/></a>
                <div class='caption'>
                    <h5>" . $row['productName'] . "</h5>
                    <p>" . $row['productLine'] . "</p>
                    <h4 style='text-align:center'><a class='btn' href='product_details.html'> <i class='icon-zoom-in'></i></a> <a class='btn' href='#'>Add to <i class='icon-shopping-cart'></i></a> <a class='btn btn-primary' href='#'>&euro;" . $row['MSRP'] . "</a></h4>
                </div>
            </div>
            </li>";
    }
}

function displayProductsList($type){

    $CI = get_instance();
    $CI->load->model('ProductsModel');
    
    $products = $CI->ProductsModel->getProducts($type);
 
    $images = $CI->ProductsModel->getImageWhere($type, '', 6, 0);

    foreach($images as &$row){
        echo "<div class='row'>	  
                    <div class='span2'>
                        <img src='" . base_url() . "assets/images/products/" . $row['image'] . "' alt=''/>
			</div>
			<div class='span4'>
                            <h3>" . $row['productName'] . "</h3>				
				<hr class='soft'/>
				<h5>" . $row['productLine'] . "</h5>
				<a class='btn btn-small pull-right' href='product_details.html'>View Details</a>
				<br class='clr'/>
			</div>
			<div class='span3 alignR'>
                            <form class='form-horizontal qtyFrm'>
                                <h3> €" . $row['MSRP'] . "</h3>
			
                                <a href='product_details.html' class='btn btn-large btn-primary'> Add to <i class=' icon-shopping-cart'></i></a>
                                <a href='product_details.html' class='btn btn-large'><i class='icon-zoom-in'></i></a>
                            </form>
                        </div>
                    </div>
                  </div>
		<hr class='soft'/>";
    }
}