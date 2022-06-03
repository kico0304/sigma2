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
    $data___ = $stanovi->fetch_data_stan_($sp);
}
if (isset($_GET['lk']) and isset($_GET['sp']) and isset($_GET['id'])) {
    $lk = $_GET['lk'];
    $sp = $_GET['sp'];
    $id = $_GET['id'];
    $data = $lokacija->fetch_all();
    $data_ = $lokacija->fetch_data($lk);
    $data__ = $spratovi->fetch_data_sprat($sp);
    $data___0 = $stanovi->fetch_data_stan($id);
    $data___ = $stanovi->fetch_data_stan_($id);
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


    <section class="cta-section">
        <div class="container">

            <!--Begin Wrapper-->
            <div class="Wrapper">
                <!--Begin container_1-->
                <div class="container_1">
                <?php foreach ($data___ as $stanovi) { ?>
                    <a href="sprat.php?lk=<?php echo $data_['lokacija_id'] ?>&sp=<?php echo $data__['spratovi_id'] ?>&id=<?php echo $stanovi['stan_id_'] ?>">
                    <div class="container_1_mainBox container_1_mainBox-none">
                        <!--Begin container_1_box_1-txt-->
                        <div class="container_1_box_1-txt">
                            <div class="box_1-txt box_1-txt-1">
                                <h3><?php echo $stanovi['stan_naziv_'] ?> - <span><?php echo $stanovi['stan_kvadratura_'] ?> m<sup>2</sup></span></h3>
                            </div>
                        </div>
                        <!--End container_1_box_1-txt-->

                        <!--Begin container_1_box_1-txt-none-->
                        <?php
                        if($stanovi['stan_prodan_'] == 1) { ?>

                        <div class="container_1_box_1-txt-none">
                            <div class="box_1-txt-none">
                                <h3>PRODANO</h3>
                            </div>
                        </div>
                        <?php } ?>
                        <!--End container_1_box_1-txt-none-->

                        <!--Begin container_1_box_1-->
                        <div class="container_1_box_1">
                            <img src="<?php echo $stanovi['stan_tlocrt_'] ?>">
                        </div>

                    </div>
                    </a>
                <?php } ?>
                </div>
                <!--End container_1-->
            </div>
            <!--End Wrapper-->

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
                            <span class="h3">50</span>m
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

    <?php if(isset($_GET['lk']) AND isset($_GET['sp']) AND isset($_GET['id'])){ ?>
    <div id="popup" class="animate__animated animate__zoomIn">
    <section class="cta-section noBorder">
        <div class="container">
            <div class="row first-row">
                <div class="col-lg-6">
                    <img src="<?php echo $data___0['stan_tlocrt_'] ?>" class="flat_img">
                </div>
                <div class="col-lg-6">
                    <div class="flat-wrapper">
                        <h1><?php echo $data___0['stan_naziv_'] ?> </h1>
                        <div class="flat-box">
                            <div class="flat-description">
                                <p>SPRAT</p>
                                <p><?php echo $data__['spratovi_naziv'] ?></p>
                            </div>
                            <div class="flat-description">
                                <p>Broj prostorija</p>
                                <p><?php echo $data___0['stan_brojprostorija_'] ?></p>
                            </div>

                            <div class="flat-description">
                                <p>Ukupna površina m<sup>2</sup></p>
                                <p><?php echo $data___0['stan_kvadratura_'] ?> m<sup>2</sup></p>
                            </div>

                        </div>

                    </div>
                </div>
                </div>
                <div class="row colum-reverse-box">
                    <div class="col-lg-6">
                        <div class="flat-box">
                            <table>
                                <thead>
                                    <tr class="row-1">
                                        <th class="column-1">Br.</th>
                                        <th class="column-2">Prostorija</th>
                                        <th class="column-3">Pod</th>
                                        <th class="column-4">Površina.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data____ as $prostorije) { ?>
                                    <tr class="row-2">
                                        <td class="column-1"><?php echo $prostorije['prostorija_rbr__'] ?>.</td>
                                        <td class="column-2"><?php echo $prostorije['prostorija_naziv__'] ?></td>
                                        <td class="column-3"><?php echo $prostorije['prostorija_pod__'] ?></td>
                                        <td class="column-4"><?php echo $prostorije['prostorija_kvadratura__'] ?> m<sup>2</sup></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <img src="<?php echo $data___0['stan_pozicija_'] ?>" class="flat_img">
                    </div>

                    </div>

            </div>
    </section>
    </div>
    <?php } ?>

    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>

    <script>

        var sadrzajPopupa = $("#popup").html();

        if(sadrzajPopupa == ""){
            $("#popup").hide();
        }else {
            $("#popup").show();
            $("#popup").prepend("<div id='closePopup'>✖</div>");
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