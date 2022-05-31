<?php 

    include_once('includes/connection.php'); 
    include_once('includes/lokacije.php');

    $lokacija = new Lokacije;
    $spratovi = new Spratovi;
    $stanovi = new Stanovi;
    $prostorije = new Prostorije;

    if(isset($_GET['lk']) AND isset($_GET['sp'])) {
        $lk = $_GET['lk'];
        $sp = $_GET['sp'];
        $data = $lokacija->fetch_all();
        $data_ = $lokacija->fetch_data($lk);
        $data__ = $spratovi->fetch_data_sprat($sp);
        $data___ = $stanovi->fetch_data_sprat($sp);
    }
    if(isset($_GET['lk']) AND isset($_GET['sp']) AND isset($_GET['id'])) {
        $lk = $_GET['lk'];
        $sp = $_GET['sp'];
        $id = $_GET['id'];
        $data = $lokacija->fetch_all();
        $data_ = $lokacija->fetch_data($lk);
        $data__ = $spratovi->fetch_data_sprat($sp);
        $data___ = $stanovi->fetch_data_sprat($sp);
        $data____ = $prostorije->fetch_data_prostorija($id);
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
	<div class="container">
 <!--Begin mainWrapper-->
 <div class="mainWrapper">
        <!--Begin mainContainer-->
        <div class="mainContainer parent h-center v-center">
                <!--Begin container-->
                <div class="container-location">
                <?php foreach ($data___ as $stanovi) { ?>
                    <p><?php echo $stanovi['stan_id_'] ?></p>
                    <a href="sprat.php?lk=<?php echo $data_['lokacija_id'] ?>&sp=<?php echo $data__['spratovi_id'] ?>&id=<?php echo $stanovi['stan_id_'] ?>">
                        <h4><?php echo $stanovi['stan_naziv_'] ?></h4>
                    </a>
                    <p><?php echo $stanovi['stan_brojprostorija_'] ?></p>
                    <p><?php echo $stanovi['stan_kvadratura_'] ?></p>
                    <!-- <img src="<?php //echo $stanovi['stan_tlocrt_'] ?>" /> -->
                <?php } ?>
                </div>
                <!--End container-->
        </div>
        <!--End mainContainer-->
    </div>
    <!--End mainWrapper-->
	</div>
</section>

<div id="popup" style="width:100%;height:100%;position:absolute;top:0;left:0;background:#fff;z-index:999;"><?php 
    if(isset($_GET['lk']) AND isset($_GET['sp']) AND isset($_GET['id'])){
        foreach ($data____ as $prostorije) { ?><h4><?php echo $prostorije['prostorija_naziv__'] ?></h4><p><?php echo $prostorije['prostorija_pod__'] ?></p><p><?php echo $prostorije['prostorija_kvadratura__'] ?></p><?php } 
    }
    ?></div>

<section class="cta-section ">
	<div class="container">
  <h3 class="headline-projects">Tačke interesa</h3>
		<div class="cta position-relative">
			<div class="row">

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3">450</span>m
						<p>Dom zdravlja</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3">800</span>m
						<p>Škola</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-badge"></i>
						<span class="h3">550</span>m
						<p>Vrtić</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-globe"></i>
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

    <script>

        var sadrzajPopupa = $("#popup").html();

        if(sadrzajPopupa == ""){
            $("#popup").hide();
        }else {
            $("#popup").show();
            $("#popup").prepend("<div id='closePopup'>x</div>");
        }

        $("#closePopup").click(function(){
            $("#popup").hide();
            $("#popup").empty();
            url = window.location.href;
            url = url.slice(0, url.lastIndexOf('&'));
            window.location.replace(url);
        })

    </script>
</body>
</html>