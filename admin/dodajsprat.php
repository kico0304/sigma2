<?php 

    session_start();
    include_once('../includes/connection.php'); 

    include_once('../includes/lokacije.php');

    $lokacija = new Lokacije;
    $lokacije = $lokacija->fetch_all();
    
?>

    

<html>
    <!-- HEAD -->
    <?php include 'includes/head.php'; ?>
    <body>

        <?php

        if(isset($_SESSION['logged_in'])){
            if(isset($_POST['submit'], $_POST['lokId'], $_POST['lokNaziv'], $_POST['spratNaziv'])){
                $lokid = $_POST['lokId'];
                $lokNaziv = $_POST['lokNaziv'];
                $spratNaziv = $_POST['spratNaziv'];
                
                if(empty($lokid) or empty($lokNaziv) or empty($spratNaziv)){
                    $error = 'Sva polja su obavezna!';
                } else {
                    $query = $pdo->prepare('INSERT INTO spratovi (id_lokacije, naziv_lokacije, spratovi_naziv) VALUES (?, ?, ?)');
                    $query->bindValue(1, $lokid);
                    $query->bindValue(2, $lokNaziv);
                    $query->bindValue(3, $spratNaziv);
        
                    $query->execute();
        
                    header('Location: spratovi_.php');
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
                                <form action="dodajsprat.php" method="post" autocomplete="off">
                                    <div class="col-lg-12 formaFlex" style="visibility:hidden;">
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
                                        <label>Naziv sprata:</label>
                                        <input type="text" name="spratNaziv" placeholder="Unesi naziv sprata" />
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
                        var option = $('option:selected', this).attr('changeVal'); 
                        //alert(option);
                        $("#lokacijaIdSelect").val(option);
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