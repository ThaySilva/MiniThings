<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
            <?php if($alert){
                
                    echo "<div class='alert alert-block alert-error fade in'>";
                    echo "<button type='button' class='close' data-dismiss='alert'>x</button>";
                    echo $alertText;
                    echo "</div>";
            };?>
	<h3> Login</h3>	
	<hr class="soft"/>
	
	<div class="row">
		<div class="span2"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>Login</h5>
                        <?php echo validation_errors();?>
			<?php echo form_open('Login_controller/verify_login');?>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Email</label>
				<div class="controls">
				  <input class="span3"  type="text" id="inputEmail1" name='email' placeholder="Email" value= <?php echo set_value('email');?>>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Password</label>
				<div class="controls">
				  <input type="password" class="span3"  id="inputPassword1" name='password' placeholder="Password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Login</button> <a href="forgetpass.html">Forgot password?</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
	</div>	
	
</div>
