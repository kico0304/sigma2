<?php 

    include_once('includes/connection.php'); 
    include_once('includes/lokacije.php');

    $lokacija = new Lokacije;
    $spratovi = new Spratovi;
    $stanovi = new Stanovi;
    $prostorije = new Prostorije;

    if(isset($_GET['lk']) AND isset($_GET['sp']) AND isset($_GET['id'])) {
        $lk = $_GET['lk'];
        $sp = $_GET['sp'];
        $id = $_GET['id'];
        $data_ = $lokacija->fetch_data($lk);
        $data__ = $spratovi->fetch_data_sprat($sp);
        $data___ = $stanovi->fetch_data_stan($id);
        $data = $prostorije->fetch_data_prostorija($id);
?>

    <html>

    <!-- HEADER -->
    <?php include 'includes/head.php'; ?>

    <body>
    <div class="container">
        <div class="row">
            <!-- INFO O LOKACIJI -->
            <div class="col-lg-12">
                <h1>ID: <?php echo $data_['lokacija_id'] ?></h1>
                <h1>NAZIV: <?php echo $data_['lokacija_naziv'] ?></h1>
                <h3> ADRESA: <?php echo $data_['lokacija_adresa'] ?></h3>
                <p>OPIS: <?php echo $data_['lokacija_opis'] ?></p>
                SLIKA: <img src="<?php echo $data_['lokacija_slika'] ?>" />
            </div>
            <!-- INFO O SPRATU -->
            <div class="col-lg-12">
                <h1>ID: <?php echo $data__['spratovi_id'] ?></h1>
                <h1>NAZIV: <?php echo $data__['spratovi_naziv'] ?></h1>
            </div>
            <!-- INFO O STANU -->
            <div class="col-lg-12">
                <h1>ID: <?php echo $data___['stan_id_'] ?></h1>
                <h1>NAZIV: <?php echo $data___['stan_naziv_'] ?></h1>
            </div>
            <!-- SPRATOVI LOKACIJE -->
            <div class="col-lg-12">
                <?php foreach ($data as $prostorije) { ?>
                    <h4><?php echo $prostorije['prostorija_naziv__'] ?></h4>
                    <p><?php echo $prostorije['prostorija_pod__'] ?></p>
                    <p><?php echo $prostorije['prostorija_kvadratura__'] ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
    </body>
    </html>

    <?php
    } else {
        header('Location: index.php');
        exit();
    }


?>