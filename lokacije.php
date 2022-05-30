<?php 

    header('Content-Type:text/html; charset=utf8mb4');

    include_once('includes/connection.php'); 
    include_once('includes/lokacije.php');

    $lokacija = new Lokacije;
    $lokacije = $lokacija->fetch_all();

?>

<html>

    <!-- HEADER -->
    <?php include 'includes/head.php'; ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php foreach ($lokacije as $lokacija) { ?>
                    <a href="lokacija.php?id=<?php echo $lokacija['lokacija_id'] ?>">
                        <p>Naziv lokacije: <?php echo $lokacija['lokacija_naziv'] ?></p>
                    </a>
                    <p>Opis lokacije: <?php echo $lokacija['lokacija_opis'] ?></p>
                    <p>Adresa lokacije: <?php echo $lokacija['lokacija_adresa'] ?></p>
                    <img src="<?php echo $lokacija['lokacija_slika'] ?>">
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>