<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="<?= base_url();?>assets/css/minithings/bootstrap.min.css" media="screen"/>
    <link href="<?= base_url();?>assets/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="<?= base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="<?= base_url();?>assets/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="<?= base_url();?>assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
<link rel="shortcut icon" href="<?= base_url();?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url();?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url();?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url();?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url();?>assets/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<!-- Header ========================================================================= -->
    <?php include('pages/header.php');?>
<!-- Header End====================================================================== -->

<div id="mainBody">
	<div class="container">
	<div class="row">

        <?php include('pages/'. $page .'.php');?>
                
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
    <?php include('pages/footer.php');?>
<!-- Footer End ============================================================== -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="<?= base_url();?>assets/js/jquery.js" type="text/javascript"></script>
	<script src="<?= base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>assets/js/google-code-prettify/prettify.js"></script>
	
	<script src="<?= base_url();?>assets/js/bootshop.js"></script>
    <script src="<?= base_url();?>assets/js/jquery.lightbox-0.5.js"></script>
	
</body>
</html>