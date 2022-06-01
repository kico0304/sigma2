<?php

    header('Content-Type:text/html; charset=utf8mb4');

    include_once('includes/connection.php');
    include_once('includes/lokacije.php');

    $lokacija = new Lokacije;
    $data = $lokacija->fetch_all();

?>

<html lang="en">

    <!-- HEADER -->
    <?php include 'includes/head.php'; ?>

<body>
    <!-- HEADER -->
    <?php include 'includes/header.php'; ?>

    <section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">

          <h1 class="text-capitalize text-lg about-headline">O nama</h1>
          <span class="text-white">Sigma2 - Vaš pouzdani partner</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2 class="title-color-about">Gradimo povjerenje i stanove Vaše budućnosti!</h2>
        <h2 class="subtitle-color-about">Naša kompanija ima iskusni tim profesionalaca koji je stalno usmjeren na kvalitet</h2>


			</div>
			<div class="col-lg-6">
				<p>Sigam2 je stabilan i pouzdan partner, prepoznat po kvalitetu gradnje i poštovanju dogovora, koji klijentima pruža viši kvalitet života.</p>
        <p>Osnovna misijanaše kompanije je izgradnja kvalitetnih stanova izgrađenih u skladu s visokim stručnim normama, poželjnih i ugodnih za življenje. Kroz saranju s mnogobrojnim izvođačima i kooperantima, instalaterima, privrednicima iz raznih područja, nastojimo opravdati povjerenje našuhkKupaca i nastaviti trend koji smo postigli na našim završenim projektima.</p>

			</div>
		</div>
	</div>
</section>

<section class="section cta-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
					<h2 class="mb-5 text-lg">Dobrim planiranjem i timskim radom ostvarujemo najviši nivo kvaliteta naših usluga.</span></h2>
					<a href="contact.php" class="btn btn-main-2 btn-round-full">Kontaktirajte nas<i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="fetaure-page  about-page-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="images/imgProject01.jpg" alt="" class="img-fluid w-100">

				</div>
			</div>
			<div class="col-lg-6">
            <h3 class="choice-list-headline">Zašto baš nas odabrati</h3>
            <div class="ts-service-box d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="images/imgAboutIcon01.png" alt="">
            </div>
            <div class="ts-service-box-info">
              <h3 class="service-box-title">Iskustvo</h3>
              <p>Od nastanka naše kompanije uspješno razvijamo svoje poslovanje u području visokogradnje. Iskustvo smo stekli na velikom broju projekata.</p>
            </div>
          </div>

          <div class="ts-service-box d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="images/imgAboutIcon02.png" alt="">
            </div>
            <div class="ts-service-box-info">
              <h3 class="service-box-title">Pouzdanost</h3>
              <p>Naš osnovni moto je pouzdanost i kvalitetet stambenih i poslovnih objekte koje gradimo.</p>
            </div>
          </div>
          <div class="ts-service-box d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="images/imgAboutIcon03.png" alt="">
            </div>
            <div class="ts-service-box-info">
              <h3 class="service-box-title">Zadovoljni klijenti</h3>
              <p>Zadovoljni klijenti nas su cilj.A ciljeve ostvarujemo na obostrano zadovoljstvo. Zadovoljni klijenti su naša najbolja reklama.</p>
            </div>
          </div>
			</div>


		</div>
	</div>
</section>
    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>