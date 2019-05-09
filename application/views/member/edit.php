<div class="container">
	<h3 class="mt-4 mb-3 border-bottom">Edit Profile</h3>
	<form method="post" action="<?php echo site_url('Member/update')?>/<?php echo $this->session->memberID?>">
		<div class="form-group">
			<label for="exampleInputEmail1">First Name</label>
			<input type="text" class="form-control" name="firstName" value="<?php echo $member->firstName; ?>" aria-describedby="emailHelp" placeholder="First Name">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Last Name</label>
			<input type="text" class="form-control" name="lastName" value="<?php echo $member->lastName; ?>" aria-describedby="emailHelp" placeholder="Last Name">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Birthdate</label>
			<input type="date" class="form-control" name="birthdate" value="<?php echo $member->birthdate; ?>" aria-describedby="emailHelp" placeholder="Birthdate">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Contact No</label>
			<input type="text" class="form-control" name="contactNo" value="<?php echo $member->contactNo; ?>" aria-describedby="emailHelp" placeholder="Contact Number">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Bio</label>
			<input type="text" class="form-control" name="bio" value="<?php echo $member->bio; ?>" aria-describedby="emailHelp" placeholder="Biography">
		</div>
		<button type="submit" class="btn btn-primary" value="save">Submit</button>
		<a class="btn btn-secondary" href="<?php echo site_url('Member')?>">Cancel</a>
	</form>
	<h5 class="mt-5">Deactivate Account</h5>
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-member-modal"> Delete Membership </button>
				
				<div class="modal fade" id="delete-member-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
					    	<div class="modal-header">
						      	<h5 class="modal-title" id="exampleModalLabel">Sorry to see you leave</h5>
						      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						        <span aria-hidden="true">&times;</span>
						        </button>
					      	</div>
					      	<div class="modal-body">
					      		<h7 class="modal-title" id="exampleModalLabel">Are you sure you want to permanently delete your account <?php echo $member->name?> ?</h7>
					      	</div>
					      	<div class="modal-footer">
					      		<form method="post" action="<?php echo site_url('Member/delete');?>/<?php echo $this->session->memberID?>">
								  	<button type="submit" class="btn btn-danger" value="delete">Delete</button>
								  	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								</form>
					      	</div>
						</div>
					</div>
				</div>
</div>