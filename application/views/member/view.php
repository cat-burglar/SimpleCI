	<div class="member-view container-fluid">
	 <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar border px-5 py-5">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic ">
					<img src="<?php echo base_url();?>assets/images/profile.jpg" class="mx-auto d-block img-thumbnail img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->

				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-job text-center mt-2">
						Member since 2017
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				
				<!-- END SIDEBAR BUTTONS -->

				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu mt-3 border-top border-primary">
					<div class="row">
						<p class="text-left mt-3 ml-3"> <i class="fa fa-user"></i> <strong> Name: </strong> <?php echo $member->firstName . ' ' . $member->lastName; ?></p>
					</div>
			    	
				    <div class="row">
					    <p class="text-left ml-3"> <i class="fa fa-birthday-cake"></i> <strong> Birthdate: </strong> <?php echo $member->birthdate;?></p>
					</div>
				    
				    <div class="row">
					    <p class="text-left ml-3"> <i class="fa fa-phone"></i> <strong> Contact No: </strong> <?php echo $member->contactNo; ?></p>
					</div>
				    
					<?php 
						$type = $this->session->userdata('type');
<<<<<<< HEAD
						if($type == '3') {
					?>
					<div class="row mx-auto">
					    <p class="mx-auto"> <strong> Rating: </strong></p>   
					</div>

					<div class="star-rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
=======
						if($type == '2') {
					?>
					<div class="row mx-auto">
					    <p class="mx-auto"> <strong> Rating: </strong></p>
					     <input type="hidden" id="rating" name="rating" value="<?php echo $member->rating;?>">   
					</div>

					<div class="star-rating">
						<div class="stars-outer">
				          <div class="stars-inner"></div>
				        </div>
>>>>>>> master
					</div>

					<?php } ?>
				    <div class="row">
				    	<i class="col-auto fa fa-pencil-square-o"></i>
					    <p class="col-left"> <strong>Biography: </strong></p>   
					</div>
					<div class="row">
						<p class="offset=4 col-auto text-justify"><?php echo $member->bio;?></p>
					</div>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content mt-5">
            	<h3>Latest Transactions</h3>
			   	<!--<p><a class="btn btn-primary" href="<?php //echo site_url('Member/edit');?>/<?php //echo $this->session->memberID?>">Edit Profile</a> </p>-->
				
            </div>
		</div>
<<<<<<< HEAD
	</div>
=======
	</div>
>>>>>>> master
