
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-inline-block w-100" src="<?php echo base_url();?>assets/images/dog1.jpg" alt="First slide">
			<div class= "overlay"></div>
			<div class="hero text-center py-5 px-5">
				<h4>Welcome to Codeigniter Pet Management System</h4>
				<p>A simple app with sessions where you can manage your pets and your profile</p>
				<p>Adding new features ahead.</p>
			</div>
		</div>
		<div class="carousel-item">
		  <img class="d-inline-block w-100" src="<?php echo base_url();?>assets/images/dog2.jpg" alt="Second slide">
		  <div class= "overlay"></div>
		</div>			

		<div class="carousel-item">
		  <img class="d-inline-block w-100" src="<?php echo base_url();?>assets/images/dog3.jpg" alt="Third slide">
		  <div class= "overlay"></div>
		</div>
	</div>

	  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

<!---->
<div class="row my-4">
	<div class="home-card mx-3 py-5 col-sm border border-info">
		<h4 class="card-title">Top Doctors</h4>
		<ol>
			<li>Jane Smith</li>
			<li>Joe Smith</li>
			<li>Anna Poli</li>
		</ol>
	</div>
	<div class="home-card mx-3 py-5 col-sm border border-info">
		<h4 class="card-title">News</h4>
		<ol>
			<li>Jane Smith</li>
			<li>Joe Smith</li>
			<li>Anna Poli</li>
		</ol>
	</div>
	<div class="home-card mx-3 py-5 col-sm border border-info">
		<h4 class="card-title">Upcoming Events</h4>
		<ol>
			<li>Jane Smith</li>
			<li>Joe Smith</li>
			<li>Anna Poli</li>
		</ol>
	</div>
</div>
<div class="home-register container-fluid py-5">
	<div class="text-center text-white">
		<p class="card-title">Register Your Pet</p>
    	<h5 class="card-text">Let #PetClinic take care of your pet. Book schedules and monitor your pet healthcare online!</p>
    	<a href="#" class="btn btn-info">Register</a>
	</div>
</div>

