<!--taken from  -->
    <div class="container mt-5 mb-5"> 
		<div class="d-flex justify-content-center mt-5">
			<div class="card">
				<div class="card-header">
					<h3>Sign In</h3>
				</div>
				<div class="card-body">
					 <form method="post" action="<?php echo site_url(); ?>/Login/login_validation">  
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="email" class="form-control" />  
                     		<span class="text-danger"><?php echo form_error('email'); ?></span>    
							
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control" />  
                     		<span class="text-danger"><?php echo form_error('password'); ?></span> 
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group">
							<input type="submit" value="Login" name= "insert" class="btn float-right login_btn">
							<!--input type="submit" name="insert" value="Login" class="btn btn-info" />  -->
                     		<?php  echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>  
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Don't have an account?<a href="<?php echo site_url();?>signup">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
    </div>  
