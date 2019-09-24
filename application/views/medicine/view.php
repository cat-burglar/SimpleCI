
	<div class="container mt-3">
		<h1><?php echo $pet->name; ?>'s Medical Record</h1>
		<h6><?php echo $pet->notes; ?></h6>
		<hr />
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#medModal">Add Medicine </button>

		<!-- Add Medicine Modal -->
		<div class="modal fade" id="medModal" tabindex="-1" role="dialog" aria-labelledby="medModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="medLabel">Add Medicine</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<form method="post" action="<?php echo site_url('Medicine/create')?>">
		      	  <input type="hidden" name="pet_id" id="pet_id" value = "<?php echo $this->session->userdata('pet_id'); ?>" />
				  <div class="form-group">
				    <label for="type">Medicine Type</label>
				   	<select id="type" name="type">
					  <option value="Vaccine">Vaccine</option>
					  <option value="Rabies">Rabies</option>
					  <option value="Deworm">Deworm</option>
					  <option value="Kennel Cough">Kennel Cough</option>
					</select>
				  </div>
				  <div class="form-group">
				    <label for="name">Medicine Name</label>
				    <input type="text" class="form-control" name="name" placeholder="Medicine Name">
				  </div>
				  <button type="submit" class="btn btn-primary" value="save">Submit</button>
				</form>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- End of Modal-->
		

		<table class="table mt-3">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Medicine Type</th>
		      <th scope="col">Medicine Name</th>
		      <th scope="col">Administered Date</th>
		      <th scope="col">Due Date</th>
		      <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i = 1; foreach($meds as $med) { ?>
			  		<tr>
			  			<td><?php echo $i; ?></td>
			  			<td><?php echo $med->type; ?></td>
			      		<td><?php echo $med->name; ?></td>
			      		<td><?php echo date("M d, Y", strtotime($med->admin_date));?></td>
			      		<td class="due_date"><?php echo date("M d, Y", strtotime($med->due_date));?></td>
			      		<td>
			      			<a class="btn btn-primary" data-toggle="tooltip" title="Edit Medicine Details" href="<?php echo site_url('Medicine/edit');?>/<?php echo $med->id?>">
			      				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
			      			</a>

			      			<a>
				      		<form class="form-med-nostyle" method="post" 
				      		onsubmit="return confirm('<?php echo 'Permanently delete ' . $med->type . '?' ;?>');"
				      		action="<?php echo site_url('Medicine/delete');?>/<?php echo $med->id?>">
				      			<button type="submit" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
							</form>
							</a>
			      		</td>
			      	</tr>
			 <?php $i++; } ?>
		  </tbody>
		</table>
	</div>
