<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:sigma2it@gmail.comm"><i class="icofont-support-faq mr-2"></i>sigma2it@gmail.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Branka Ćopića 15/4</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+387 66 992 999" >
							<span>Pozovite nas: </span>
							<span class="h4">+387 66 992 999</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index.php">
			  	<img src="images/logo.png" alt="" class="img-fluid">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.php">Početna</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="about.php">O nama</a></li>


			   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="projects.php" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lokacija <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">
					<?php foreach ($data as $lokacija) { ?>
						<li><a class="dropdown-item" href="projects.php?id=<?php echo $lokacija['lokacija_id'] ?>"><?php echo $lokacija['lokacija_naziv'] ?></a></li>
					<?php } ?>

					</ul>
			  	</li>

			   <li class="nav-item"><a class="nav-link" href="contact.php">Kontakt</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>