
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome! <strong><?php echo $user;?></strong></div>
	<div class="span6">
	<div class="pull-right">
		<span class="btn btn-mini">€155.00</span>
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="<?php echo base_url(); ?>"><img src="<?= base_url();?>assets/images/logo.jpg" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>CLASSIC CARS </option>
                        <option>VINTAGE CARS </option>
			<option>MOTORCYCLES </option>
			<option>TRUCKS AND BUSES </option>
			<option>PLANES </option>
			<option>SHIPS </option>
                        <option>TRAINS </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	<li class=""><a href="special_offer.html">Specials Offer</a></li>
	<li class=""><a href="normal.html">Delivery</a></li>
	<li class=""><a href="contact.html">Contact</a></li>
        <?php if($logout){
            echo "<li class=''><a href='myAccount.html'>My Account</a></li>";
            echo "<li class=''>";
            echo "<a href='" . site_url('Login_controller/logout') . "' role='button' style='padding-right:0'><span class='btn btn-large btn-danger'>Logout</span></a></li>";
        }
        else{
            echo "<li class=''><a href='" . site_url('Register_controller/index') . "'>Register</a></li>";
            echo "<li class=''>";
            echo "<a href='#login' role='button' data-toggle='modal' style='padding-right:0'><span class='btn btn-large btn-success'>Login</span></a>";
            echo "<div id='login' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='login' aria-hidden='false' >";
            echo "<div class='modal-header'>";
            echo "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>";
            echo "<h3>Login</h3>";
            echo "</div>";
                    echo validation_errors();
		    echo "<div class='modal-body'>";
                    echo form_open('Login_controller/verify_login', array('class' => 'form-horizontal loginFrm'));
                    echo "<div class='control-group'>";								
                    echo form_input(array('name'=>'email', 'id'=>'email', 'type'=>'email', 'placeholder'=>'Email'));
                    echo "</div>";
                    echo "<div class='control-group'>";
                    echo form_input(array('name'=>'password', 'id'=>'password', 'type'=>'password', 'placeholder'=>'Password'));
                    echo "</div>";
                    echo "<div class='control-group'>";
                    echo "<label class='checkbox'>";
                    echo "<input type='checkbox'> Remember me </label>";
                    echo "</div>";
                    echo form_submit(array('id'=>'Login', 'value'=>'Login', 'class'=>'btn btn-success'));
                    echo "<button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button>";
                    echo "</form>";
            echo "</div>";
            echo "</div>";
            echo "</li>";
        }
        ?>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End ===============================================================================================================================-->
    <?php if($carousel){
    echo "<div id='carouselBlk'>";
        echo "<div id='myCarousel' class='carousel slide'>";
            echo "<div class='carousel-inner'>";
                
                $this->load->helper('Main');
                echo displayCarousel();
            echo "</div>";
            echo "<a class='left carousel-control' href='#myCarousel' data-slide='prev'>&lsaquo;</a>";
            echo "<a class='right carousel-control' href='#myCarousel' data-slide='next'>&rsaquo;</a>";
        echo "</div>"; 
    echo "</div>";
    }?>
