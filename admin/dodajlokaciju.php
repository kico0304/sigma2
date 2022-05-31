<?php 

    session_start();
    include_once('../includes/connection.php'); 
    
?>

    

<html>
    <!-- HEAD -->
    <?php include 'includes/head.php'; ?>
    <body>

        <?php

        if(isset($_SESSION['logged_in'])){
            if(isset($_POST['submit'], $_POST['locationName'], $_POST['locationDesc'], $_POST['locationAddress'], $_POST['locationImage'])){
                $name = $_POST['locationName'];
                $desc = $_POST['locationDesc'];
                $address = $_POST['locationAddress'];
                $image = $_POST['locationImage'];
                
                if(empty($name) or empty($desc) or empty($address) or empty($image)){
                    $error = 'Sva polja su obavezna!';
                } else {
                    $query = $pdo->prepare('INSERT INTO lokacije (lokacija_naziv, lokacija_opis, lokacija_adresa, lokacija_slika) VALUES (?, ?, ?, ?)');
                    $query->bindValue(1, $name);
                    $query->bindValue(2, $desc);
                    $query->bindValue(3, $address);
                    $query->bindValue(4, $image);
        
                    $query->execute();
        
                    header('Location: lokacije_.php');
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
                                <form action="dodajlokaciju.php" method="post" autocomplete="off">
                                    <div class="col-lg-12 formaFlex">
                                        <label>Naziv lokacije:</label>
                                        <input type="text" name="locationName" placeholder="Unesi naziv lokacije" />
                                    </div>
                                    <div class="col-lg-12 formaFlex">
                                        <label>Opis lokacije:</label>
                                        <textarea type="text" name="locationDesc" placeholder="Unesi opis lokacije" rows="5"></textarea>
                                    </div>
                                    <div class="col-lg-12 formaFlex">
                                        <label>Adresa lokacije:</label>
                                        <input type="text" name="locationAddress" placeholder="Unesi adresu lokacije" />
                                    </div>
                                    <div class="col-lg-12 formaFlex">
                                        <label>Slika lokacije:</label>
                                        <input type="text" name="locationImage" placeholder="Unesi sliku lokacije" />
                                    </div>
                                    <div class="col-lg-12">
                                        <?php if(isset($error)) { ?>
                                            <p style="color:red;text-align: center;"><?php echo $error ?></p>
                                        <?php } ?>
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