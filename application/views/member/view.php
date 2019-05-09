	<div class="container-fluid">
	 <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar border px-5 py-5">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="<?php echo base_url();?>assets/images/profile.jpg" class=" img-thumbnail img-responsive" alt="">
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
				<div class="profile-usermenu mt-3">
					<div class="row">
						<i class="col-auto fa fa-user"></i>
						<p class="font-weight-bold">Name: &nbsp;</p>
			    		<p><?php echo $member->firstName . ' ' . $member->lastName; ?></p>
					</div>
			    	
				    <div class="row">
				    	<i class="col-auto fa fa-birthday-cake"></i>
					    <h6 class="font-weight-bold">Birthdate: &nbsp;</h6>
					    <p><?php echo $member->birthdate;?></p>
					</div>
				    
				    <div class="row">
				    	<i class="col-auto fa fa-phone"></i>
					    <h6 class="font-weight-bold">Contact No: &nbsp;</h6>
					    <p><?php echo $member->contactNo; ?></p>
					</div>
				    
				    <div class="row">
				    	<i class="col-auto fa fa-pencil-square-o"></i>
					    <h6 class="font-weight-bold">Biography: &nbsp;</h6>
					     
					</div>
					<div class="row">
						<p class="col-auto" ><?php echo $member->bio;?></p>
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
	</div>

