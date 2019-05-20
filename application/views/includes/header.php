<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/styles.css">


	<title>Codeigniter CRUD</title>
</head>
<body>
	<?php 
		$member = $this->session->userdata('memberID');
		if ($member) { 
	?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

	  	<a class="navbar-brand" href="<?php echo site_url('Pet')?>">Codeigniter</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  	</button>
		  	<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
			    	<li class="nav-item active">
			        	<a class="nav-link" href="<?php echo site_url('Member/welcome')?>">Home <span class="sr-only">(current)</span></a>
			      	</li>
				  	<li class="nav-item active">
			        	<a class="nav-link" href="<?php echo site_url('Pet')?>">Pet</a>
			      	</li>
			      	<li class="nav-item">
			      		<div class="dropdown show">
							<a class="nav-link dropdown-toggle" href="<?php echo site_url();?>/Member/view" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <?php echo $this->session->userdata('email')?>
						  	</a>
						  	<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						  		<a class="dropdown-item" href="<?php echo site_url();?>/Member/view/<?php echo $this->session->memberID?>">View Profile</a>
							    <a class="dropdown-item" href="<?php echo site_url();?>/Member/edit/<?php echo $this->session->memberID?>">Profile Settings</a>
							    <a class="dropdown-item" href="<?php echo site_url();?>/Login/logout">Logout</a>
						  	</div>
						</div>
			      	</li>
			    </ul>
			    <!--<form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form>
				-->
		  	</div>
	  		<?php } ?>
	</nav>
 