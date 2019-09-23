<div class="container">
	<h3 class="mt-4 mb-3 border-bottom">Edit Data</h3>
	<form method="post" action="<?php echo site_url('Pet/update')?>/<?php echo $pet->id?>">
		<div class="form-group">

			<label for="name">Pet Name</label>
			<input type="text" class="form-control" name="name" value="<?php echo $pet->name; ?>" placeholder="First Name">
		</div>
		<div class="form-group">
			<label for="breed">Breed</label>
			<input type="text" class="form-control" name="breed" value="<?php echo $pet->breed; ?>" placeholder="Last Name">
		</div>
		<div class="form-group">
			<label for="birthdate">Birthdate</label>
			<input type="date" class="form-control" name="birthdate" value="<?php echo $pet->birthdate; ?>"placeholder="Birthdate">
		</div>
		<div class="form-group">
		    <label for="status">Status</label>
		   	<select id="status" name="status">
			  <option value="Healthy">Healthy</option>
			  <option value="Needs Checkup">Needs Checkup</option>
			  <option value="Sick">Sick</option>
			</select>
		</div>

		<div class="form-group">
		    <label for="notes">Notes</label>
		    <textarea class="form-control" name="notes" rows="3"><?php echo $pet->notes; ?></textarea>
		</div>
		<button type="submit" class="btn btn-primary" value="save">Submit</button>
		<a class="btn btn-secondary" href="<?php echo site_url('Pet')?>">Cancel</a>
	</form>
</div>