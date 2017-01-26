<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
            <?php if($logout){
                    echo "<div class='well well-small'><a id='myCart' href='product_summary.html'><img src='<?= base_url();?>assets/images/ico-cart.png' alt='cart'>3 Items in your cart  <span class='badge badge-warning pull-right'>$155.00</span></a></div>";
                    
            }?>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li><a href="<?= site_url('Products_controller/loadProducts?value=Classic%20Cars');?>"> CLASSIC CARS</a></li>
			<li><a href="<?= site_url('Products_controller/loadProducts?value=Vintage%20Cars');?>"> VINTAGE CARS </a></li>
			<li><a href="<?= site_url('Products_controller/loadProducts?value=Motorcycles');?>">MOTORCYCLES</a></li>
			<li><a href="<?= site_url('Products_controller/loadProducts?value=Trucks%20and%20Buses');?>">TRUCKS AND BUSES</a></li>
			<li><a href="<?= site_url('Products_controller/loadProducts?value=Planes');?>">PLANES</a></li>
			<li><a href="<?= site_url('Products_controller/loadProducts?value=Ships');?>">SHIPS</a></li>
                        <li><a href="<?= site_url('Products_controller/loadProducts?value=Trains');?>">TRAINS</a></li>
		</ul>
		<br/>
		  <div class="thumbnail">
			<img src="<?= base_url();?>assets/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
			<div class="caption">
			  <h5>Panasonic</h5>
				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="<?= base_url();?>assets/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				  <h5>Kindle</h5>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
				</div>
			  </div><br/>
			<div class="thumbnail">
				<img src="<?= base_url();?>assets/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>