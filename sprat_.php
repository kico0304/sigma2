<?php 

    include_once('includes/connection.php'); 
    include_once('includes/lokacije.php');

    $lokacija = new Lokacije;
    $spratovi = new Spratovi;
    $stanovi = new Stanovi;

    if(isset($_GET['lk']) AND isset($_GET['id'])) {
        $lk = $_GET['lk'];
        $id = $_GET['id'];
        $data_ = $lokacija->fetch_data($lk);
        $data__ = $spratovi->fetch_data_sprat($id);
        $data = $stanovi->fetch_data_stan_($id);
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
            <!-- STANOVI NA SPRATU -->
            <div class="col-lg-12">
                <?php foreach ($data as $stanovi) { ?>
                    <p><?php echo $stanovi['stan_id_'] ?></p>
                    <a href="stan.php?lk=<?php echo $data_['lokacija_id'] ?>&sp=<?php echo $data__['spratovi_id'] ?>&id=<?php echo $stanovi['stan_id_'] ?>">
                        <h4><?php echo $stanovi['stan_naziv_'] ?></h4>
                    </a>
                    <p><?php echo $stanovi['stan_brojprostorija_'] ?></p>
                    <p><?php echo $stanovi['stan_kvadratura_'] ?></p>
                    <img src="<?php echo $stanovi['stan_tlocrt_'] ?>" />
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