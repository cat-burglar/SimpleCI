	<div class="container mt-3">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#petModal"> Add Pet </button>

		<!-- Add Pet Modal -->
		<div class="modal fade" id="petModal" tabindex="-1" role="dialog" aria-labelledby="petModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Add Pet</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<form method="post" action="<?php echo site_url('Pet/create')?>">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Pet Name</label>
				    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Pet Name">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Breed</label>
				    <input type="text" class="form-control" name="breed"   aria-describedby="emailHelp" placeholder="Last Name">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Birthdate</label>
				    <input type="date" class="form-control" name="birthdate"  aria-describedby="emailHelp" placeholder="Birthdate">
				  </div>
				   <div class="form-group">
				    <label for="exampleInputEmail1">Status</label>
				    <textarea class="form-control" name="status"  rows="3" placeholder="Enter Pet Concerns"></textarea>
				  </div>
				   <div class="form-group">
				    <label for="exampleInputEmail1">Bio</label>
				    <textarea class="form-control" name="bio"  rows="3" placeholder="Additional information"></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary" value="save">Submit</button>
				</form>
		      </div>
		    </div>
		  </div>
		</div>

		<table class="table mt-3">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Pet Name</th>
		      <th scope="col">Breed</th>
		      <th scope="col">Birthdate</th>
		      <th scope="col">Status</th>
		      <th scope="col">Bio</th>
		      <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i = 1; foreach($pets as $pet) { ?>
			  		<tr>
			  			<td><?php echo $i; ?></td>
			      		<td><?php echo $pet->name; ?></td>
			      		<td><?php echo $pet->breed;?></td>
			      		<td><?php echo $pet->birthdate;?></td>
			      		<td><?php echo $pet->status;?></td>
			      		<td><?php echo $pet->bio;?></td>
			      		<td>
			      			<a class="btn btn-primary" href="<?php echo site_url('Pet/editPet');?>/<?php echo $pet->id?>">Edit</a> | 
			      			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"> Delete </button>
			      			<!--<a href="<?php echo site_url('CrudController/delete');?>/<?php echo $pet->id?>">Delete</a>-->
							<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
								    <div class="modal-content">
								    	<div class="modal-header">
									      	<h5 class="modal-title" id="exampleModalLabel">Delete Notice</h5>
									      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									        <span aria-hidden="true">&times;</span>
									        </button>
								      	</div>
								      	<div class="modal-body">
								      		<h7 class="modal-title" id="exampleModalLabel">Are you sure you want to permanently delete <?php echo $pet->name?> ?</h7>
								      	</div>
								      	<div class="modal-footer">
								      		<form method="post" action="<?php echo site_url('CrudController/delete');?>/<?php echo $pet->id?>">
											  	<button type="submit" class="btn btn-danger" value="delete">Delete</button>
											  	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
											</form>
								      	</div>
								    </div>
							  	</div>
							</div>
			      		</td>
			      	</tr>
			 <?php $i++; } ?>
		    
		  </tbody>
		</table>
	</div>
