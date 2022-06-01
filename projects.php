<?php

include_once('includes/connection.php');
include_once('includes/lokacije.php');

$lokacija = new Lokacije;
$spratovi = new Spratovi;

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $data = $lokacija->fetch_all();
  $data_ = $lokacija->fetch_data($id);
  $data__ = $spratovi->fetch_all_spratovi($id);
}
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

            <h1 class="text-capitalize text-lg about-headline">Ponuda stanova</h1>
            <span class="text-white">Lokacija - <?php echo $data_['lokacija_naziv'] ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-section ">
    <div class="container location-container">
      <!--Begin mainWrapper-->
      <div class="mainWrapper">
        <!--Begin mainContainer-->
        <div class="mainContainer parent h-center v-center">
          <!--Begin container-->
          <div class="container-location">
            <?php foreach ($data__ as $spratovi) { ?>
              <a href="sprat.php?lk=<?php echo $data_['lokacija_id'] ?>&sp=<?php echo $spratovi['spratovi_id'] ?>">
                <div class="container-box parent h-center v-center">
                  <p><?php echo $spratovi['spratovi_naziv'] ?></p>
                </div>
                <h4></h4>
              </a>
            <?php } ?>
          </div>
          <!--End container-->
        </div>
        <!--End mainContainer-->
      </div>
      <!--End mainWrapper-->
    </div>
  </section>

  <section class="cta-section ">
    <div class="container">
      <h3 class="headline-projects">Tačke interesa</h3>
      <div class="cta position-relative">
        <div class="row">

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter-stat">
              <i class="icofont-hospital"></i>
              <span class="h3">450</span>m
              <p>Dom zdravlja</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter-stat">
              <i class="icofont-school-bus"></i>
              <span class="h3">800</span>m
              <p>Škola</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter-stat">
              <i class="icofont-kid"></i>
              <span class="h3">550</span>m
              <p>Vrtić</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter-stat">
              <i class="icofont-shopping-cart"></i>
              <span class="h3">500</span>m
              <p>Moj market</p>
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