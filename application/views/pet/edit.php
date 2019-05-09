<div class="container">
	<h3 class="mt-4 mb-3 border-bottom">Edit Data</h3>
	<form method="post" action="<?php echo site_url('Pet/update')?>/<?php echo $pet->id?>">
		<div class="form-group">

			<label for="exampleInputEmail1">Pet Name</label>
			<input type="text" class="form-control" name="name" value="<?php echo $pet->name; ?>" aria-describedby="emailHelp" placeholder="First Name">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Breed</label>
			<input type="text" class="form-control" name="breed" value="<?php echo $pet->breed; ?>" aria-describedby="emailHelp" placeholder="Last Name">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Birthdate</label>
			<input type="date" class="form-control" name="birthdate" value="<?php echo $pet->birthdate; ?>" aria-describedby="emailHelp" placeholder="Birthdate">
		</div>
		<div class="form-group">
		    <label for="exampleInputEmail1">Status</label>
		    <textarea class="form-control" name="status"  rows="3"> <?php echo $pet->status; ?> </textarea>
		</div>
		<div class="form-group">
		    <label for="exampleInputEmail1">Bio</label>
		    <textarea class="form-control" name="bio"  rows="3"><?php echo $pet->bio; ?></textarea>
		</div>
		<button type="submit" class="btn btn-primary" value="save">Submit</button>
		<a class="btn btn-secondary" href="<?php echo site_url('Pet')?>">Cancel</a>
	</form>
</div>