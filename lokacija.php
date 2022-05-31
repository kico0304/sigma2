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

        <style>

.parent {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
}

.row {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row;
    flex-flow: row;
}

.around {
    -webkit-box-pack: space-around;
    -ms-flex-pack: space-around;
    justify-content: space-around;
}

.h-center {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.v-center {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.between {
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.wrap {
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.clear {
    clear: both;
}

.mainWrapper {
    max-width: 1200px;
    width: 100%;
    margin:0 auto;
}

.mainContainer {
    width: 100%;
    height: 850px;
    background-image: url('../images/Young_City_latvany_10.jpg');
    background-size: cover;
    background-repeat: no-repeat;
}

.container {
    max-width: 450px;
    width: 100%;
    margin: 0 10px;
}

.container-box {
    background-color: rgba(99,126,137, 0.7);
    margin: 20px 0;
    padding: 12px 0;
    letter-spacing: 0px;
    width: 100%;
    opacity: 1;
    transition: all 0.5s ease-in-out;
    border-radius: 5px;
    -webkit-box-shadow: 6px 10px 11px -2px rgba(0,0,0,1);
    -moz-box-shadow: 6px 10px 11px -2px rgba(0,0,0,1);
    box-shadow: 6px 10px 11px -2px rgba(0,0,0,1);
    cursor: pointer;
}

.container-box:hover {
    transform: scale(1.1);
}

.container-box p {
    color: #fff;
    font-size: 26px;
    font-weight: 600;
}

@media screen and (max-width: 769px) {
    .mainContainer {
        height: auto;
    }
  }

        </style>

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
                <!--Begin mainWrapper-->
    <div class="mainWrapper">
        <!--Begin mainContainer-->
        <div class="mainContainer parent h-center v-center">
                <!--Begin container-->
                <div class="container">
                <?php foreach ($data_ as $spratovi) { ?>
                    <a href="sprat.php?lk=<?php echo $data['lokacija_id'] ?>&id=<?php echo $spratovi['spratovi_id'] ?>">
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