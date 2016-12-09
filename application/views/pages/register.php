
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
		
		<div class='control-group'>
                    <label class='control-label' for='inputFname'>First Name <sup>*</sup></label>
                    <div class='controls'>
                        <input type='text' id='inputFname' name='firstName'placeholder='First Name' value= <?php echo set_value('firstName');?>>
                        <?php echo form_error('firstName'); ?>
                    </div>
		</div>
		<div class='control-group'>
                    <label class='control-label' for='inputLname'>Last Name <sup>*</sup></label>
                    <div class='controls'>
                        <input type='text' id='inputLname' name='lastName' placeholder='Last Name' value= <?php echo set_value('lastName');?>>
                        <?php echo form_error('lastName'); ?>
                    </div>
		</div>
                <div class='control-group'>
                    <label class='control-label' for='inputCname'>Company Name</label>
                    <div class='controls'>
                        <input type='text' id='inputCname' name='companyName' placeholder='Last Name' value= <?php echo set_value('companyName');?>>
                    </div>
                </div>
		<div class='control-group'>
                    <label class='control-label' for='inputEmail'>Email <sup>*</sup></label>
                    <div class='controls'>
                        <input type='email' id='inputEmail' name='email' placeholder='Email' value= <?php echo set_value('email');?>>
                        <?php echo form_error('email'); ?>
                    </div>
                </div>	  
                <div class='control-group'>
                    <label class='control-label' for='inputPassword1'>Password <sup>*</sup></label>
                    <div class='controls'>
                        <input type='password' id='inputPassword1' name='password' placeholder='Password'>
                        <?php echo form_error('password'); ?>
                    </div>
                </div>
                <div class='control-group'>
                    <label class='control-label' for='inputPassword2'>Re-Enter Password<sup>*</sup></label>
                    <div class='controls'>
                        <input type='password' id='inputPassword2' name='password2' placeholder='Re-Enter Password'>
                        <?php echo form_error('password2'); ?>
                    </div>
                </div> 
                
                <h4>Billing and Delivery Address</h4>
                
		<div class='control-group'>
                    <label class='control-label' for='inputFname'>First name <sup>*</sup></label>
                    <div class='controls'>
			<input type='text' id='inputFname' placeholder='First Name' value= <?php echo set_value('firstName');?>>
                        <?php echo form_error('firstName'); ?>
                    </div>
		</div>
		<div class='control-group'>
                    <label class='control-label' for='inputLname'>Last name <sup>*</sup></label>
                    <div class='controls'>
                        <input type='text' id='inputLname' placeholder='Last Name' value= <?php echo set_value('lastName');?>>
                        <?php echo form_error('lastName'); ?>
                    </div>
		</div>
                <div class='control-group'>
                    <label class='control-label' for='inputCredit'>Credit Limit</label>
                    <div class='controls'>
                        <input type='text' id='inputCredit' name='creditLimit' placeholder='Credit Limit' value= <?php echo set_value('creditLimit');?>>
                    </div>
                </div>
		<div class='control-group'>
                    <label class='control-label' for='inputAddress'>Address<sup>*</sup></label>
                    <div class='controls'>
			<input type='text' id='inputAddress' name='address' placeholder='Address' value= <?php echo set_value('address');?>>
                        <?php echo form_error('address'); ?>
                    </div>
		</div>
		<div class='control-group'>
                    <label class='control-label' for='inputAddress2'>Address (Line 2)</label>
                    <div class='controls'>
			<input type='text' id='inputAddress2' name='address2' placeholder='Address Line 2' value= <?php echo set_value('address2');?>>
                    </div>
		</div>
		<div class='control-group'>
                    <label class='control-label' for='inputCity'>City<sup>*</sup></label>
                    <div class='controls'>
			<input type='text' id='inputCity' name='city' placeholder='City' value= <?php echo set_value('city');?>>
                        <?php echo form_error('city'); ?>
                    </div>
		</div>
		<div class='control-group'>
                    <label class='control-label' for='inputCounty'>County<sup>*</sup></label>
                    <div class='controls'>
                        <input type='text' id='inputCounty' name='county' placeholder='County' value= <?php echo set_value('county');?>>
                        <?php echo form_error('county'); ?>
                    </div>
		</div>		
		<div class='control-group'>
                    <label class='control-label' for='inputPostcode'>Zip / Postal Code<sup>*</sup></label>
                    <div class='controls'>
                        <input type='text' id='inputPostcode' name='postCode' placeholder='Zip/ Postal Code' value= <?php echo set_value('postCode');?>>
                    </div>
		</div>
		<div class='control-group'>
                    <label class='control-label' for='country'>Country<sup>*</sup></label>
                    <div class='controls'>
			<?php $this->load->helper('Register');
                            echo displayCountries();
                            echo form_error('country');
                        ?>
                    </div>
		</div>	
		<div class='control-group'>
                    <label class='control-label' for='inputTelephone'>Telephone <sup>*</sup></label>
                    <div class='controls'>
                        <input type='text' name='phone' id='inputTelephone' placeholder='Telephone' value= <?php echo set_value('phone');?>>
                        <?php echo form_error('phone'); ?>
                    </div>
		</div>
		
                <p><sup>*</sup>Required fields</p>
	
                <div class='control-group'>
                    <div class='controls'>
			<input type='hidden' name='email_create' value='1'>
			<input type='hidden' name='is_new_customer' value='1'>
                        <input class='btn btn-large btn-success' type='submit' value='Register'>
			</div>
		</div>		
	</form>
</div>

</div>
