<?php 

    session_start();
    include_once('../includes/connection.php'); 

    include_once('../includes/lokacije.php');

    $newsletter = new Newsletter;
    $newsletteri = $newsletter->fetch_all_newsletter();
    
?>

    

<html>
    <!-- HEAD -->
    <?php include 'includes/head.php'; ?>
    <body>

        <?php

        if(isset($_SESSION['logged_in'])){

            ?>
                <!-- MAIN CONTENT -->
                <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
                    <?php include('includes/header.php') ?>
                    <?php include('includes/sidebar.php') ?>
                    

                    <!-- PAGE WRAPPER -->
                    <div class="page-wrapper">
                        <!-- CONTAINER -->
                        <div class="container-fluid">
                            <div class="row" style="margin-bottom: 25px;">
                                <div class="col-lg-12">
                                    
                                </div>
                            </div>
                        <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Email</th>
                                <th style="text-align: center;" scope="col">Brisanje emaila</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($newsletteri as $newsletter) { ?>
                            <tr>
                                <th scope="row"><?php echo $newsletter['newsletter_id'] ?></th>
                                <td><?php echo $newsletter['newsletter_email'] ?></td>
                                <td style="text-align: center;"><a class="btn btn-danger btn-sm text-white" href="brisi.php?ns=<?php echo $newsletter['newsletter_id'] ?>">Briši</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>
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