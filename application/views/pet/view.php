	<div class="container mt-3">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#petModal"> Add Pet </button>

		<!-- Add Pet Modal -->
		<div class="modal fade" id="petModal" tabindex="-1" role="dialog" aria-labelledby="petModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="petLabel">Add Pet</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<form method="post" action="<?php echo site_url('Pet/create')?>">
				  <div class="form-group">
				    <label for="name">Pet Name</label>
				    <input type="text" class="form-control" name="name" placeholder="Pet Name">
				  </div>
				  <div class="form-group">
				    <label for="breed">Breed</label>
				    <input type="text" class="form-control" name="breed" placeholder="Breed">
				  </div>
				  <div class="form-group">
				    <label for="birthdate">Birthdate</label>
				    <input type="date" class="form-control" name="birthdate" placeholder="Birthdate">
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
				    <label for="bio">Notes</label>
				    <textarea class="form-control" name="notes" rows="3" placeholder="Additional information"></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary" value="save">Submit</button>
				</form>
		      </div>
		    </div>
		  </div>
		</div>
		<!--  End of Modal -->
		
		<table class="table mt-3">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Pet Name</th>
		      <th scope="col">Breed</th>
		      <th scope="col">Birthdate</th>
		      <th scope="col">Status</th>
		      <th scope="col">Notes</th>
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
			      		<td><?php echo $pet->notes;?></td>
			      		
			      		<td>
			      			<a class="btn btn-primary" data-toggle="tooltip" title="Edit Pet Details"href="<?php echo site_url('Pet/editPet');?>/<?php echo $pet->id?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

			      			<a class="btn btn-info" data-toggle="tooltip" title="View Medical Record" href="<?php echo site_url('Medicine/viewRecord');?>/<?php echo $pet->id?>"><i class="fa fa-book" aria-hidden="true"></i></a>
							
							<a>
				      		<form class="form-nostyle" method="post" 
				      		onsubmit="return confirm('<?php echo 'Permanently delete ' . $pet->name . '?' ;?>');"
				      		action="<?php echo site_url('Pet/delete');?>/<?php echo $pet->id?>">
				      			<button type="submit" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
							</form>
							</a>
			      		</td>
			      	</tr>
			 <?php $i++; } ?>
		    
		  </tbody>
		</table>
	</div>
