<?php

include_once('includes/connection.php');
include_once('includes/lokacije.php');

$lokacija = new Lokacije;
$spratovi = new Spratovi;
$stanovi = new Stanovi;
$prostorije = new Prostorije;

if (isset($_GET['lk']) and isset($_GET['sp'])) {
    $lk = $_GET['lk'];
    $sp = $_GET['sp'];
    $data = $lokacija->fetch_all();
    $data_ = $lokacija->fetch_data($lk);
    $data__ = $spratovi->fetch_data_sprat($sp);
    $data___ = $stanovi->fetch_data_sprat($sp);
}
if (isset($_GET['lk']) and isset($_GET['sp']) and isset($_GET['id'])) {
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

    <section class="cta-section ">
        <div class="container">

            <!--Begin Wrapper-->
            <div class="Wrapper">
                <!--Begin container_1-->
                <div class="container_1">


                    <!--Begin container_1_mainBox-->
                    <div class="container_1_mainBox container_1_mainBox-none">
                        <!--Begin container_1_box_1-txt-->
                        <div class="container_1_box_1-txt">
                            <div class="box_1-txt box_1-txt-1">
                                <h3>Stan1- <span>45 m2</span></h3>
                            </div>
                        </div>
                        <!--End container_1_box_1-txt-->

                        <!--Begin container_1_box_1-txt-none-->
                        <div class="container_1_box_1-txt-none">
                            <div class="box_1-txt-none">
                                <h3>PRODANO</h3>
                            </div>
                        </div>
                        <!--End container_1_box_1-txt-none-->

                        <!--Begin container_1_box_1-->
                        <div class="container_1_box_1">
                            <img src="images/flats/1.jpg">
                        </div>

                    </div>
                    <!--End container_1_mainBox-->



                    <!--Begin container_1_mainBox-->
                    <div class="container_1_mainBox">
                        <!--Begin container_1_box_1-txt-->
                        <div class="container_1_box_1-txt">
                            <div class="box_1-txt">
                                <h3>Stan1- <span>45 m2</span></h3>
                            </div>
                        </div>
                        <!--End container_1_box_1-txt-->


                        <!--Begin container_1_box_1-->
                        <div class="container_1_box_1">
                            <img src="images/flats/1.jpg">
                        </div>
                        <!--End container_1_box_1-->
                    </div>
                    <!--End container_1_mainBox-->



                    <!--Begin container_1_mainBox-->
                    <div class="container_1_mainBox">
                        <!--Begin container_1_box_1-txt-->
                        <div class="container_1_box_1-txt">
                            <div class="box_1-txt">
                                <h3>Stan1- <span>45 m2</span></h3>
                            </div>
                        </div>
                        <!--End container_1_box_1-txt-->

                        <!--Begin container_1_box_1-->
                        <div class="container_1_box_1">
                            <img src="images/flats/1.jpg">
                        </div>
                        <!--End container_1_box_1-->
                    </div>
                    <!--End container_1_mainBox-->


                    <!--Begin container_1_mainBox-->
                    <div class="container_1_mainBox">
                        <!--Begin container_1_box_1-txt-->
                        <div class="container_1_box_1-txt">
                            <div class="box_1-txt">
                                <h3>Stan1- <span>45 m2</span></h3>
                            </div>
                        </div>
                        <!--End container_1_box_1-txt-->

                        <!--Begin container_1_box_1-->
                        <div class="container_1_box_1">
                            <img src="images/flats/1.jpg">
                        </div>
                        <!--End container_1_box_1-->
                    </div>
                    <!--End container_1_mainBox-->


                    <!--Begin container_1_mainBox-->
                    <div class="container_1_mainBox">
                        <!--Begin container_1_box_1-txt-->
                        <div class="container_1_box_1-txt">
                            <div class="box_1-txt">
                                <h3>Stan1- <span>45 m2</span></h3>
                            </div>
                        </div>
                        <!--End container_1_box_1-txt-->

                        <!--Begin container_1_box_1-->
                        <div class="container_1_box_1">
                            <img src="images/flats/1.jpg">
                        </div>
                        <!--End container_1_box_1-->
                    </div>
                    <!--End container_1_mainBox-->


                    <!--Begin container_1_mainBox-->
                    <div class="container_1_mainBox">
                        <!--Begin container_1_box_1-txt-->
                        <div class="container_1_box_1-txt">
                            <div class="box_1-txt">
                                <h3>Stan1- <span>45 m2</span></h3>
                            </div>
                        </div>
                        <!--End container_1_box_1-txt-->

                        <!--Begin container_1_box_1-->
                        <div class="container_1_box_1">
                            <img src="images/flats/1.jpg">
                        </div>
                        <!--End container_1_box_1-->
                    </div>
                    <!--End container_1_mainBox-->


                    <!--Begin container_1_mainBox-->
                    <div class="container_1_mainBox">
                        <!--Begin container_1_box_1-txt-->
                        <div class="container_1_box_1-txt">
                            <div class="box_1-txt">
                                <h3>Stan1- <span>45 m2</span></h3>
                            </div>
                        </div>
                        <!--End container_1_box_1-txt-->

                        <!--Begin container_1_box_1-->
                        <div class="container_1_box_1">
                            <img src="images/flats/1.jpg">
                        </div>
                        <!--End container_1_box_1-->
                    </div>
                    <!--End container_1_mainBox-->


                </div>
                <!--End container_1-->
            </div>
            <!--End Wrapper-->

        </div>
    </section>

    <section class="cta-section ">
        <div class="container">
            <div class="row first-row">
                <div class="col-lg-8">
                    <img src="images/flats/1.jpg" class="flat_img">
                </div>
                <div class="col-lg-4">
                    <div class="flat-wrapper">
                        <h1>STAN <span>6</span></h1>
                        <div class="flat-box">
                            <div class="flat-description">
                                <p>SPRAT </p>
                                <p>1</p>
                            </div>
                            <div class="flat-description">
                                <p>Broj prostorija</p>
                                <p>5</p>
                            </div>

                            <div class="flat-description">
                                <p>Ukupna površina m</p>
                                <p>539,45m</p>
                            </div>

                        </div>

                    </div>
                </div>
                </div>
                <div class="row colum-reverse-box">
                    <div class="col-lg-4">
                        <div class="flat-box">
                            <table>
                                <thead>
                                    <tr class="row-1">
                                        <th class="column-1">Br</th>
                                        <th class="column-2">Prostorija</th>
                                        <th class="column-3">Pod</th>
                                        <th class="column-4">Površina.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="row-2">
                                        <td class="column-1">1</td>
                                        <td class="column-2">DN SOBA I TRPEZARIJA</td>
                                        <td class="column-3">PARKET</td>
                                        <td class="column-4">18,23 m</td>
                                    </tr>
                                    <tr class="row-3">
                                        <td class="column-1">2</td>
                                        <td class="column-2">KUHINJA</td>
                                        <td class="column-3">KERAMIKA</td>
                                        <td class="column-4">3,00 m</td>
                                    </tr>
                                    <tr class="row-4">
                                        <td class="column-1">3</td>
                                        <td class="column-2">KUPATILO</td>
                                        <td class="column-3">KERAMIKA</td>
                                        <td class="column-4">4,21 m</td>
                                    </tr>
                                    <tr class="row-5">
                                        <td class="column-1">4</td>
                                        <td class="column-2">HODNIK</td>
                                        <td class="column-3">KERAMIKA</td>
                                        <td class="column-4">3,02 m</td>
                                    </tr>
                                    <tr class="row-6">
                                        <td class="column-1">5</td>
                                        <td class="column-2">LOĐA</td>
                                        <td class="column-3">KERAMIKA</td>
                                        <td class="column-4">1,97 m</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-lg-8">
                        <img src="images/flats/1_poz.jpg" class="flat_img">
                    </div>

                    </div>


            </div>
    </section>



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
            //url = window.location.href;
            //url = url.slice(0, url.lastIndexOf('&'));
            //window.location.replace(url);
        })

    </script>
</body>
</html>