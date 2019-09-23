<div class="container">
	<h3 class="mt-4 mb-3 border-bottom">Edit Data</h3>
	<form method="post" action="<?php echo site_url('Medicine/update')?>/<?php echo $med->id?>">
		<input type="hidden" class="form-control" name="pet_id" value="<?php echo $med->pet_id; ?>">
		<div class="form-group">
		    <label for="type">Medicine Type</label>
		   	<select id="type" name="type">
			  <option value="Vaccine">Vaccine</option>
			  <option value="Deworm">Deworm</option>
			  <option value="Kennel Cough">Kennel Cough</option>
			</select>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">Medicine Name</label>
			<input type="text" class="form-control" name="name" value="<?php echo $med->name; ?>" aria-describedby="emailHelp" placeholder="Medicine Name">
		</div>
		<div class="form-group">
			<label for="admin_date">Admistered Date</label>
			<input type="date" class="form-control" placeholder="yyyy/mm/dd" name="admin_date" value="<?php echo $med->admin_date; ?>" />
		</div>
		
		<button type="submit" class="btn btn-primary" value="save">Submit</button>
		<a class="btn btn-secondary" href="<?php echo site_url('Medicine/viewRecord');?>/<?php echo $this->session->userdata('pet_id');?>">Cancel</a>
	</form>
</div>