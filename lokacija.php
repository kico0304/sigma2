<?php 

    include_once('includes/connection.php'); 
    include_once('includes/lokacije.php');

    $lokacija = new Lokacije;
    $spratovi = new Spratovi;

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $data = $lokacija->fetch_data($id);
        $data_ = $spratovi->fetch_all_spratovi($id);
    ?>

    <html>

    <!-- HEADER -->
    <?php include 'includes/head.php'; ?>

    <body>
    <div class="container">
        <div class="row">
            <!-- INFO O LOKACIJI -->
            <div class="col-lg-12">
                <h1>ID: <?php echo $data['lokacija_id'] ?></h1>
                <h1>NAZIV: <?php echo $data['lokacija_naziv'] ?></h1>
                <h3> ADRESA: <?php echo $data['lokacija_adresa'] ?></h3>
                <p>OPIS: <?php echo $data['lokacija_opis'] ?></p>
                SLIKA: <img src="<?php echo $data['lokacija_slika'] ?>" />
            </div>
            <!-- SPRATOVI LOKACIJE -->
            <div class="col-lg-12">
                <?php foreach ($data_ as $spratovi) { ?>
                    <a href="sprat.php?lk=<?php echo $data['lokacija_id'] ?>&id=<?php echo $spratovi['spratovi_id'] ?>">
                        <h4><?php echo $spratovi['spratovi_naziv'] ?></h4>
                    </a>
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