
	<div class="container mt-5">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Add </button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<form method="post" action="<?php echo site_url('CrudController/create')?>">
				  <div class="form-group">
				    <label for="exampleInputEmail1">First Name</label>
				    <input type="text" class="form-control" name="firstName" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Last Name</label>
				    <input type="text" class="form-control" name="lastName"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Birthdate</label>
				    <input type="date" class="form-control" name="birthDate" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Birthdate">
				  </div>
				   <div class="form-group">
				    <label for="exampleInputEmail1">Contact No</label>
				    <input type="text" class="form-control" name="contactNo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Number">
				  </div>
				   <div class="form-group">
				    <label for="exampleInputEmail1">Bio</label>
				    <input type="text" class="form-control" name="bio" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Biography">
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
		      <th scope="col">First Name</th>
		      <th scope="col">Last Name</th>
		      <th scope="col">Birthdate</th>
		      <th scope="col">Contact No</th>
		      <th scope="col">Bio</th>
		      <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i = 1; foreach($users as $user) { ?>
			  		<tr>
			  			<td><?php echo $i; ?></td>
			      		<td><?php echo $user->firstName; ?></td>
			      		<td><?php echo $user->lastName;?></td>
			      		<td><?php echo $user->birthDate;?></td>
			      		<td><?php echo $user->contactNo;?></td>
			      		<td><?php echo $user->bio;?></td>
			      		<td>
			      			<a class="btn btn-primary" href="<?php echo site_url('CrudController/edit');?>/<?php echo $user->id?>">Edit</a> | 
			      			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"> Delete </button>
			      			<!--<a href="<?php echo site_url('CrudController/delete');?>/<?php echo $user->id?>">Delete</a>-->
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
								      		<h7 class="modal-title" id="exampleModalLabel">Are you sure you want to permanently delete <?php echo $user->firstName?> ?</h7>
								      	</div>
								      	<div class="modal-footer">
								      		<form method="post" action="<?php echo site_url('CrudController/delete');?>/<?php echo $user->id?>">
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
