<?php 

    header('Content-Type:text/html; charset=utf8mb4');

    include_once('includes/connection.php'); 
    include_once('includes/lokacije.php');

    $lokacija = new Lokacije;
    $data = $lokacija->fetch_all();

?>

<html lang="en">

    <!-- HEAD -->
    <?php include 'includes/head.php'; ?>

<body>
  <!-- HEADER -->
  <?php include 'includes/header.php'; ?>

  <section class="single-slider">
    <div class="slider-area">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-xl-7">
          <div class="block">
            <div class="hero__caption ">
              <div class="hero-text1">
                <span>Vaše novo mjesto za život</span>
              </div>
              <h1>Gradimo</h1>
              <div class="stock-text">
                <h2>budućnost</h2>
                <h2>budućnost</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 col-sm-6">
          <div class="about-img">
            <img src="images/imgAbout01.jpg" alt="" class="img-fluid">
            <img src="images/imgAbout02.jpg" alt="" class="img-fluid mt-4">
          </div>
        </div>

        <div class="col-lg-8 col-sm-6">
          <div class="about-content pl-4 mt-4 mt-lg-0">
            <h2 class="mt-4 title-color">Sigma2 je poverenje</h2>

            <p class="mb-2 pera-top">Vodeći računa o svakom detalju, odabrali smo samo najbolje za buduće vlasnike</p>

            <p class="mb-2">Naš osnovni cilj jeste da kupci budu zadovoljni kvalitetom naših objekata u svakom pogledu, i da kupovinom našeg stambenog ili poslovnog prostora žive i rade u okruženju koje ispunjava sve njihove zahteve.</p>

            <p class="mb-4">Pored odgovornog promišljanja o konkretnom projektu, Sigma2 se sa poštovanjem odnosi i prema sredini u kojoj posluje, dopunjujući je kao dobar domaćin i brižni komšija, kao karika koja je nedostajale određenoj infrastrukturi da bi sve došlo na svoje mesto.</p>

            <p class="mb-4">Dobru lokaciju treba prepoznati. Često su u pitanju devastirane ili neizgrađene površine, koje inspirišu Sigma2 da kreira novi pogled na svet, kvalitetnom gradnjom nudeći siguran izbor novim vlasnicima stanova.</p>


            <a href="contact.php" class="btn btn-main-2 btn-round-full btn-icon">Kontaktirajte nas<i class="icofont-simple-right ml-3"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="ts-service-area" class="ts-service-area pb-0">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <h2 class="area-title">Zašto Sigma2</h2>
          <h3 class="section-sub-title">Vaš siguran izbor</h3>
        </div>
      </div>
      <!--/ Title row end -->

      <div class="row">
        <div class="col-lg-4">
          <div class="ts-service-box d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="images/imgService01.png" alt="service-icon">
            </div>
            <div class="ts-service-box-info">
              <h3 class="service-box-title">Odlične lokacije</h3>
              <p>ovoljno blizu da vam sve bude nadohvat ruke, a dovoljno daleko da biste imali svoj mir i komfor - naši stanovi nalaze se u širem centru Beograda.</p>
            </div>
          </div><!-- Service 1 end -->

          <div class="ts-service-box d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="images/imgService04.png" alt="service-icon">
            </div>
            <div class="ts-service-box-info">
              <h3 class="service-box-title">Kvalitetna gradnja</h3>
              <p>Svaki kvadrat izgradjen je u skladu sa najsavremenijim standardima gradnje, energetskom efikasnošću i potrebama kupaca.</p>
            </div>
          </div><!-- Service 2 end -->

          <div class="ts-service-box d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="images/imgService02.png" alt="service-icon">
            </div>
            <div class="ts-service-box-info">
              <h3 class="service-box-title">Infrastrukturna podrška</h3>
              <p>Po principu "ključ u ruke" za naše kupce i klijente gradimo stambene i poslove objekte, uz kvalifikovani i stručni kadar inženjera iz oblasti arhitekture, elektrotehnike i mašinstva.</p>
            </div>
          </div><!-- Service 3 end -->

        </div><!-- Col end -->

        <div class="col-lg-4 text-center" id="midlle-box">


          <img srcset="images/imgMan.jpg 500w, images/imgMan-mobile.jpg 100w" sizes="(max-width: 56.25em) 30vw, (max-width: 37.5em) 50vw, 300px" alt="Photo 1" src="images/imgMan.jpg">
        </div><!-- Col end -->




        <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
          <div class="ts-service-box d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="images/imgService06.png" alt="service-icon">
            </div>
            <div class="ts-service-box-info">
              <h3 class="service-box-title">Siguran izbor</h3>
              <p>Kupovina stana je kupovina poverenja koju je našoj kompaniji poklonilo više od hiljadu porodica za dve decenije rada.</p>
            </div>
          </div><!-- Service 4 end -->

          <div class="ts-service-box d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="images/imgService05.png" alt="service-icon">
            </div>
            <div class="ts-service-box-info">
              <h3 class="service-box-title">Ulaganje u budućnost</h3>
              <p>Kupovina stana je investicija koja uz našu asistenciju uvek donosi i kvalitet više i vrednost više.</p>
            </div>
          </div><!-- Service 5 end -->

          <div class="ts-service-box d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="images/imgService03.png" alt="service-icon">
            </div>
            <div class="ts-service-box-info">
              <h3 class="service-box-title">Profesionalna usluga</h3>
              <p>Savet, pomoć, asistencija i podrška koje pružamo našim kupcima i klijentima od samog početka saradnje su ključni za poverenje koje gradimo i potvrda našeg trajanja.</p>
            </div>
          </div><!-- Service 6 end -->
        </div><!-- Col end -->
      </div><!-- Content row end -->

    </div>
    <!--/ Container end -->
  </section>

  <!-- <section class="clients">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="section-title text-center">
            <h3 class="section-sub-title">Naši partneri</h3>
            <div class="divider mx-auto my-4"></div>
            <p>Kada nam partner pokloni svoje povjerenje činimo i posljednje napore kako bi naša zajednička vizija budućeg projekta težila savršenstvu.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row clients-logo">
        <div class="col-lg-2">
          <div class="client-thumb">
            <img src="images/imgPartners01.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-2">
          <div class="client-thumb">
            <img src="images/imgPartners02.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-2">
          <div class="client-thumb">
            <img src="images/imgPartners02.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-2">
          <div class="client-thumb">
            <img src="images/imgPartners03.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-2">
          <div class="client-thumb">
            <img src="images/imgPartners04.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-2">
          <div class="client-thumb">
            <img src="images/imgPartners05.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-2">
          <div class="client-thumb">
            <img src="images/imgPartners06.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>
</body>

</html>