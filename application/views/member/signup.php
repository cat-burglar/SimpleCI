
    <div class="container mt-5 mb-5">
		<div class="d-flex justify-content-center mt-5">
			<div class="card">
				<div class="card-header">
					<h3>Register an Account</h3>
				</div>
				<div class="card-body">
					 <form method="post" action="<?php echo site_url('Login/signup_validation')?>">
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
						<div class="form-group">
							<button type="submit" class="btn float-right login_btn" value="save">Register</button>
                     		<?php  echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>  
                     		<a class="btn btn-secondary" href="<?php echo site_url()?>">Cancel</a>
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>  
