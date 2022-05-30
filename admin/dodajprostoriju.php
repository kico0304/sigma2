<?php 

    session_start();
    include_once('../includes/connection.php'); 

    include_once('../includes/lokacije.php');

    $lokacija = new Lokacije;
    $lokacije = $lokacija->fetch_all();

    $sprat = new Spratovi;
    $spratovi = $sprat->fetch_all_sprat();

    $stan = new Stanovi;
    $stanovi = $stan->fetch_all_stan();
    
?>

    

<html>
    <!-- HEAD -->
    <?php include 'includes/head.php'; ?>
    <body>

        <?php

        if(isset($_SESSION['logged_in'])){
            if(isset($_POST['submit'], $_POST['lokId'], $_POST['lokNaziv'], $_POST['sprId'], $_POST['sprNaziv'], $_POST['stId'], $_POST['stNaziv'], $_POST['prostorijaNaziv'], $_POST['prostorijaPod'], $_POST['prostorijaKvadratura'])){
                $lokId = $_POST['lokId'];
                $lokNaziv = $_POST['lokNaziv'];
                $sprId = $_POST['sprId'];
                $sprNaziv = $_POST['sprNaziv'];
                $stId = $_POST['stId'];
                $stNaziv = $_POST['stNaziv'];
                $prostorijaNaziv = $_POST['prostorijaNaziv'];
                $prostorijaPod = $_POST['prostorijaPod'];
                $prostorijaKvadratura = $_POST['prostorijaKvadratura'];
                
                if(empty($lokId) or empty($lokNaziv) or empty($sprId) or empty($sprNaziv) or empty($stId) or empty($stNaziv) or empty($prostorijaNaziv) or empty($prostorijaPod) or empty($prostorijaKvadratura)){
                    $error = 'Sva polja su obavezna!';
                } else {
                    $query = $pdo->prepare('INSERT INTO prostorije (id_lokacije__, naziv_lokacije__, id_sprata__, naziv_sprata__, id_stana__, naziv_stana__, prostorija_naziv__, prostorija_pod__, prostorija_kvadratura__) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
                    $query->bindValue(1, $lokId);
                    $query->bindValue(2, $lokNaziv);
                    $query->bindValue(3, $sprId);
                    $query->bindValue(4, $sprNaziv);
                    $query->bindValue(5, $stId);
                    $query->bindValue(6, $stNaziv);
                    $query->bindValue(7, $prostorijaNaziv);
                    $query->bindValue(8, $prostorijaPod);
                    $query->bindValue(9, $prostorijaKvadratura);
        
                    $query->execute();
        
                    header('Location: prostorije_.php');
                }
            }
            ?>
                <!-- MAIN CONTENT -->
                <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
                    <?php include('includes/header.php') ?>
                    <?php include('includes/sidebar.php') ?>
                    

                    <!-- PAGE WRAPPER -->
                    <div class="page-wrapper">
                        <!-- CONTAINER -->
                        <div class="container-fluid">
                            <div class="row addLocation">
                                <form action="dodajprostoriju.php" method="post" autocomplete="off">
                                    <div class="col-lg-12 formaFlex">
                                        <label>ID lokacije:</label>
                                        <select id="lokacijaIdSelect" name="lokId">
                                            <option value=""></option>
                                        <?php foreach ($lokacije as $lokacija) { ?>
                                            <option value="<?php echo $lokacija['lokacija_id'] ?>"><?php echo $lokacija['lokacija_id'] ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 formaFlex">
                                        <label>Naziv lokacije:</label>
                                        <select id="lokacijaNazivSelect" name="lokNaziv">
                                            <option value=""></option>
                                        <?php foreach ($lokacije as $lokacija) { ?>
                                            <option changeVal="<?php echo $lokacija['lokacija_id'] ?>" value="<?php echo $lokacija['lokacija_naziv'] ?>"><?php echo $lokacija['lokacija_naziv'] ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 formaFlex">
                                        <label>ID sprata:</label>
                                        <select id="spratIdSelect" name="sprId">
                                            <option value=""></option>
                                        <?php foreach ($spratovi as $sprat) { ?>
                                            <option lokid="<?php echo $sprat['id_lokacije'] ?>" value="<?php echo $sprat['spratovi_id'] ?>"><?php echo $sprat['spratovi_id'] ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 formaFlex">
                                        <label>Naziv sprata:</label>
                                        <select id="spratNazivSelect" name="sprNaziv">
                                            <option value=""></option>
                                        <?php foreach ($spratovi as $sprat) { ?>
                                            <option lokid="<?php echo $sprat['id_lokacije'] ?>" changeVal="<?php echo $sprat['spratovi_id'] ?>" value="<?php echo $sprat['spratovi_naziv'] ?>"><?php echo $sprat['spratovi_naziv'] ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 formaFlex">
                                        <label>ID stana:</label>
                                        <select id="stanIdSelect" name="stId">
                                            <option value=""></option>
                                        <?php foreach ($stanovi as $stan) { ?>
                                            <option sprId="<?php echo $stan['id_sprata_'] ?>" value="<?php echo $stan['stan_id_'] ?>"><?php echo $stan['stan_id_'] ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 formaFlex">
                                        <label>Naziv stana:</label>
                                        <select id="stanNazivSelect" name="stNaziv">
                                            <option value=""></option>
                                        <?php foreach ($stanovi as $stan) { ?>
                                            <option sprId="<?php echo $stan['id_sprata_'] ?>" changeVal="<?php echo $stan['stan_id_'] ?>" value="<?php echo $stan['stan_naziv_'] ?>"><?php echo $stan['stan_naziv_'] ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 formaFlex">
                                        <label>Naziv prostorije:</label>
                                        <input type="text" name="prostorijaNaziv" placeholder="Unesi naziv prostorije" />
                                    </div>
                                    <div class="col-lg-12 formaFlex">
                                        <label>Pod prostorije:</label>
                                        <input id="brojProstorijaId" type="text" name="prostorijaPod" placeholder="Unesi pod prostorije" />
                                    </div>
                                    <div class="col-lg-12 formaFlex">
                                        <label>Kvadratura prostorije:</label>
                                        <input type="text" name="prostorijaKvadratura" placeholder="Unesi kvadraturu prostorije" />
                                    </div>
                                    <div class="col-lg-12 formaFlex">
                                        <button type="submit" class="btn btn-success btn-sm text-white" name="submit">Dodaj</button>
                                        <button type="button" class="btn btn-danger btn-sm text-white closeLocation">Odustani</button>
                                    </div>
                                </form>
                            </div>                     
                        </div>
                        <!-- FOOTER -->
                        <?php include('includes/footer.php') ?>
                    </div>

                </div>

                <!-- JS SCRIPTS -->
                <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
                <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
                <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
                <script src="../dist/js/waves.js"></script>
                <script src="../dist/js/sidebarmenu.js"></script>
                <script src="../dist/js/custom.min.js"></script>

                <script>

                    $("#lokacijaNazivSelect").change(function(){

                        //get ID lokacije in select box
                        var option = $('option:selected', this).attr('changeVal'); 
                        $("#lokacijaIdSelect").val(option);

                        //filter select spratova
                        $("#spratNazivSelect>option").each(function(){
                            if($(this).attr('lokid') == option){
                                $(this).show();
                            }else{
                                $(this).hide();
                            }
                        })

                        $("#spratNazivSelect").val("");
                        $("#stanNazivSelect").val("");

                    });

                    $("#spratNazivSelect").change(function(){

                        //get ID sprata in select box
                        var option_ = $('option:selected', this).attr('changeVal'); 
                        $("#spratIdSelect").val(option_);

                        //filter select spratova
                        $("#stanNazivSelect>option").each(function(){
                            if($(this).attr('sprId') == option_){
                                $(this).show();
                            }else{
                                $(this).hide();
                            }
                        });

                        $("#stanNazivSelect").val("");

                    });

                    $("#stanNazivSelect").change(function(){

                        //get ID sprata in select box
                        var option__ = $('option:selected', this).attr('changeVal'); 
                        $("#stanIdSelect").val(option__);

                    });


                </script>

            <?php
        } else{
            if(isset($_POST['username'], $_POST['password'])){
                $username = $_POST['username'];
                $password = md5($_POST['password']);
            
                if(empty($username) or empty($password)){
                    //error but do nothing
                }else{
                    $query = $pdo->prepare("SELECT * FROM users WHERE user_name = ? AND user_password = ?");

                    $query->bindValue(1, $username);
                    $query->bindValue(2, $password);

                    $query->execute();

                    $num = $query->rowCount();

                    if($num == 1){
                        $_SESSION['logged_in'] = true;
                        header('Location: index.php');
                        exit();
                    }else{
                        // nije se logovao
                    }
                }
            }
            include 'login.php';
            }

        ?>

    </body>
</html>