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

          <h1 class="text-capitalize text-lg about-headline">Kontakt</h1>
          <span class="text-white">Sigma2 - Potražite nas, pozovite ili pišite</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section contact-info pb-0">
    <div class="container">
         <div class="row">
         <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-location-pin"></i>
                    <h5>Lokacija</h5>
                    Bulevar vojvode Živojina Mišića
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-live-support"></i>
                    <h5>Pozovite nas</h5>
                    +387 66 992 999
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-support-faq"></i>
                    <h5>Email</h5>
                    sigma2it@gmail.com
                </div>
            </div>

        </div>
    </div>
</section>

<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">Kontaktirajte nas</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="mb-5">Za sve informacije u vezi projekta I kupovine stanova, kontaktirajte naš prodajni tim</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form id="" class="" method="post" action="mail_handler.php">
                 <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                               Vaša poruka je uspješno poslata
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Ime i prezime" >
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control" placeholder="E-mail">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="subject" id="subject" type="text" class="form-control" placeholder="Naslov poruke">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="text" class="form-control" placeholder="Telefon">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Poruka"></textarea>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Pošaljite upit"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


 <div class="google-map ">
    <!-- <div id="map"></div> -->
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="1080" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Bulevar%20vojvode%20%C5%BDivojina%20Mi%C5%A1i%C4%87a&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <style>
            .mapouter{position:relative;text-align:right;height:500px;width:100%;}
            </style>
            <style>
            .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}
            .gmap_canvas > iframe{height:500px;width:100%;}
            </style>
        </div>
    </div>
</div>
<!-- footer Start

    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>