<div class="container">
	<h3 class="mt-4 mb-3 border-bottom">Edit Data</h3>
	<form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $user->id?>">
		<div class="form-group">
			<label for="exampleInputEmail1">First Name</label>
			<input type="text" class="form-control" name="firstName" value="<?php echo $user->firstName; ?>" aria-describedby="emailHelp" placeholder="First Name">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Last Name</label>
			<input type="text" class="form-control" name="lastName" value="<?php echo $user->lastName; ?>" aria-describedby="emailHelp" placeholder="Last Name">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Birthdate</label>
			<input type="date" class="form-control" name="birthDate" value="<?php echo $user->birthDate; ?>" aria-describedby="emailHelp" placeholder="Birthdate">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Contact No</label>
			<input type="text" class="form-control" name="contactNo" value="<?php echo $user->contactNo; ?>" aria-describedby="emailHelp" placeholder="Contact Number">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Bio</label>
			<input type="text" class="form-control" name="bio" value="<?php echo $user->bio; ?>" aria-describedby="emailHelp" placeholder="Biography">
		</div>
		<button type="submit" class="btn btn-primary" value="save">Submit</button>
		<a class="btn btn-secondary" href="<?php echo site_url('CrudController/')?>">Cancel</a>
	</form>
</div>