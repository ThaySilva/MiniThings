
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

	<?php
            echo validation_errors();
            echo form_open('Register_controller/register', array('class'=>'form-horizontal'));
                echo "<h4>Your personal information</h4>";
		
		echo "<div class='control-group'>";
                    echo "<label class='control-label' for='inputFname'>First Name <sup>*</sup></label>";
                    echo "<div class='controls'>";
                        echo form_input(array('type'=>'text', 'id'=>'inputFname', 'name'=>'firstName','placeholder'=>'First Name'));
                    echo "</div>";
		echo "</div>";
		echo "<div class='control-group'>";
                    echo "<label class='control-label' for='inputLname'>Last Name <sup>*</sup></label>";
                    echo "<div class='controls'>";
                        echo form_input(array('type'=>'text', 'id'=>'inputLname', 'name'=>'lastName', 'placeholder'=>'Last Name'));
                    echo "</div>";
		echo "</div>";
                echo "<div class='control-group'>";
                    echo "<label class='control-label' for='inputCname'>Company Name</label>";
                    echo "<div class='controls'>";
                        echo form_input(array('type'=>'text', 'id'=>'inputCname', 'name'=>'companyName', 'placeholder'=>'Last Name'));
                    echo "</div>";
                echo "</div>";
		echo "<div class='control-group'>";
                    echo "<label class='control-label' for='inputEmail'>Email <sup>*</sup></label>";
                    echo "<div class='controls'>";
                        echo form_input(array('type'=>'email', 'id'=>'inputEmail', 'name'=>'email', 'placeholder'=>'Email'));
                    echo "</div>";
                echo "</div>";	  
                echo "<div class='control-group'>";
                    echo "<label class='control-label' for='inputPassword1'>Password <sup>*</sup></label>";
                    echo "<div class='controls'>";
                        echo form_input(array('type'=>'password', 'id'=>'inputPassword1', 'name'=>'password', 'placeholder'=>'Password'));
                    echo "</div>";
                echo "</div>";
                echo "<div class='control-group'>";
                    echo "<label class='control-label' for='inputPassword2'>Re-Enter Password<sup>*</sup></label>";
                    echo "<div class='controls'>";
                        echo form_input(array('type'=>'password', 'id'=>'inputPassword2', 'name'=>'password2', 'placeholder'=>'Re-Enter Password'));
                    echo "</div>";
                echo "</div>";   
                
                echo "<h4>Billing and Delivery Address</h4>";
                
		echo "<div class='control-group'>";
                    echo "<label class='control-label' for='inputFname'>First name <sup>*</sup></label>";
                    echo "<div class='controls'>";
			echo form_input(array('type'=>'text', 'id'=>'inputFname', 'placeholder'=>'First Name'));
                    echo "</div>";
		echo "</div>";
		echo "<div class='control-group'>";
                    echo "<label class='control-label' for='inputLname'>Last name <sup>*</sup></label>";
                    echo "<div class='controls'>";
			echo form_input(array('type'=>'text', 'id'=>'inputLname', 'placeholder'=>'Last Name'));
                    echo "</div>";
		echo "</div>";
                echo "<div class='control-group'>";
                    echo "<label class='control-label' for='inputCredit'>Credit Limit</label>";
                    echo "<div class='controls'>";
                        echo form_input(array('type'=>'text', 'id'=>'inputCredit', 'name'=>'creditLimit', 'placeholder'=>'Credit Limit'));
                    echo "</div>";
                echo "</div>";
		echo "<div class='control-group'>";
                    echo "<label class='control-label' for='inputAddress'>Address<sup>*</sup></label>";
                    echo "<div class='controls'>";
			echo form_input(array('type'=>'text', 'id'=>'inputAddress', 'name'=>'address', 'placeholder'=>'Address'));
                    echo "</div>";
		echo "</div>";
		echo "<div class='control-group'>";
                    echo "<label class='control-label' for='inputAddress2'>Address (Line 2)<sup>*</sup></label>";
                    echo "<div class='controls'>";
			echo form_input(array('type'=>'text', 'id'=>'inputAddress2', 'name'=>'address2', 'placeholder'=>'Address Line 2'));
                    echo "</div>";
		echo "</div>";
		echo "<div class='control-group'>";
                    echo "<label class='control-label' for='inputCity'>City<sup>*</sup></label>";
                    echo "<div class='controls'>";
			echo form_input(array('type'=>'text', 'id'=>'inputCity', 'name'=>'city', 'placeholder'=>'City'));
                    echo "</div>";
		echo "</div>";
		echo "<div class='control-group'>";
                    echo "<label class='control-label' for='inputCounty'>County<sup>*</sup></label>";
                    echo "<div class='controls'>";
                        echo form_input(array('type'=>'text', 'id'=>'inputCounty', 'name'=>'county', 'placeholder'=>'County'));
                    echo "</div>";
		echo "</div>";		
		echo "<div class='control-group'>";
                    echo "<label class='control-label' for='inputPostcode'>Zip / Postal Code<sup>*</sup></label>";
                    echo "<div class='controls'>";
                        echo form_input(array('type'=>'text', 'id'=>'inputPostcode', 'name'=>'postCode', 'placeholder'=>'Zip/ Postal Code'));
                    echo "</div>";
		echo "</div>";
		echo "<div class='control-group'>";
                    echo "<label class='control-label' for='country'>Country<sup>*</sup></label>";
                    echo "<div class='controls'>";
			$this->load->helper('Register');
                        echo displayCountries();
                    echo "</div>";
		echo "</div>";	
		echo "<div class='control-group'>";
                    echo "<label class='control-label' for='inputTelephone'>Telephone <sup>*</sup></label>";
                    echo "<div class='controls'>";
                        echo form_input(array('type'=>'text', 'name'=>'phone', 'id'=>'inputTelephone', 'placeholder'=>'Telephone'));
                    echo "</div>";
		echo "</div>";
		
                echo "<p><sup>*</sup>Required field	</p>";
	
                echo "<div class='control-group'>";
                    echo "<div class='controls'>";
			echo "<input type='hidden' name='email_create' value='1'>";
			echo "<input type='hidden' name='is_new_customer' value='1'>";
                        echo form_submit(array('class'=>'btn btn-large btn-success', 'type'=>'submit', 'value'=>'Register'));
        ?>
			</div>
		</div>		
	</form>
</div>

</div>
