
<!-- Sidebar ================================================== -->
	<?php include('sidebar.php');?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?= base_url();?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
            
		<?php if($alert){
                
                    echo "<div class='alert alert-block alert-error fade in'>";
                    echo "<button type='button' class='close' data-dismiss='alert'>x</button>";
                    echo $alertText;
                    echo "</div>";
                };?>
            
	<h3> Registration</h3>	
	<div class="well">

	<?php echo form_open('Register_controller/register', array('class'=>'form-horizontal'));?>
		<h4>Your personal information</h4>
		<div class="control-group">
		<label class="control-label">Title <sup>*</sup></label>
		<div class="controls">
                <?php 
                        $options = array(
                            'none' => '-', 
                            'mr' => 'Mr.', 
                            'mrs' => 'Mrs', 
                            'miss' => 'Miss');
                        echo form_dropdown('title', $options, array('class'=>'span1'));
                ?>
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputFname">First name <sup>*</sup></label>
			<div class="controls">
                          <?php echo form_input(array('type'=>'text', 'id'=>'inputFname', 'placeholder'=>'First Name'));?>
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLname">Last name <sup>*</sup></label>
			<div class="controls">
                          <?php echo form_input(array('type'=>'text', 'id'=>'inputLname', 'placeholder'=>'Last Name'));?>
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Email <sup>*</sup></label>
		<div class="controls">
                  <?php echo form_input(array('type'=>'email', 'id'=>'inputEmail', 'placeholder'=>'Email'));?>
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
                    <?php echo form_input(array('type'=>'password', 'id'=>'inputPassword1', 'placeholder'=>'Password'));?>
		</div>
	</div>
        <div class="control-group">
            <label class="control-label" for="inputPassword2">Re-Enter Password<sup>*</sup></label>
            <div class="controls">
                <?php echo form_input(array('type'=>'password', 'id'=>'inputPassword2', 'placeholder'=>'Re-Enter Password'));?>
            </div>
        </div>   
                <h4>Billing and Delivery Address</h4>
		<div class="control-group">
			<label class="control-label" for="inputFname">First name <sup>*</sup></label>
			<div class="controls">
			  <?php echo form_input(array('type'=>'text', 'id'=>'inputFname', 'placeholder'=>'First Name'));?>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputLname">Last name <sup>*</sup></label>
			<div class="controls">
			  <?php echo form_input(array('type'=>'text', 'id'=>'inputLname', 'placeholder'=>'Last Name'));?>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputAddress">Address<sup>*</sup></label>
			<div class="controls">
			  <?php echo form_input(array('type'=>'text', 'id'=>'inputAddress', 'placeholder'=>'Address'));?>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputAddress2">Address (Line 2)<sup>*</sup></label>
			<div class="controls">
			  <?php echo form_input(array('type'=>'text', 'id'=>'inputAddress2', 'placeholder'=>'Address Line 2'));?>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputCity">City<sup>*</sup></label>
			<div class="controls">
			  <?php echo form_input(array('type'=>'text', 'id'=>'inputCity', 'placeholder'=>'City'));?>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputCounty">County<sup>*</sup></label>
                        <div class="controls">
                            <?php echo form_input(array('type'=>'text', 'id'=>'inputCounty', 'placeholder'=>'County'));?>
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="inputPostcode">Zip / Postal Code<sup>*</sup></label>
			<div class="controls">
                          <?php echo form_input(array('type'=>'text', 'id'=>'inputPostcode', 'placeholder'=>'Zip/ Postal Code'));?>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="country">Country<sup>*</sup></label>
			<div class="controls">
			<?php $this->load->helper('Register');
                            echo displayCountries();
                        ?>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputTelephone">Telephone <sup>*</sup></label>
			<div class="controls">
                          <?php echo form_input(array('type'=>'text', 'name'=>'telephone', 'id'=>'inputTelephone', 'placeholder'=>'Telephone'));?>
			</div>
		</div>
		
	<p><sup>*</sup>Required field	</p>
	
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
                                <?php echo form_submit(array('class'=>'btn btn-large btn-success', 'type'=>'submit', 'value'=>'Register'));?>
			</div>
		</div>		
	</form>
</div>

</div>
