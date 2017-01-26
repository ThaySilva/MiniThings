
<div class="span9">		
    <div class="well well-small">
	<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
	<div class="row-fluid">
            <div id="featured" class="carousel slide">
		<div class="carousel-inner">
			  <?php $this->load->helper('Main');
                            echo displayFeaturesProducts();
                            ?>
		</div>
		<a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
		<a class="right carousel-control" href="#featured" data-slide="next">›</a>
            </div>
	</div>
    </div>
		
    <h4>Latest Products </h4>
    <ul class="thumbnails">
	<?php $this->load->helper('Main');
            echo displayLatestProducts();
        ?>
    </ul>	
</div>