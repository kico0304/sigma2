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
            if(isset($_GET['lk'])){
                $lk = $_GET['lk'];

                $query = $pdo->prepare('DELETE FROM lokacije WHERE lokacija_id = ?');
                $query->bindValue(1, $lk);
                $query->execute();

                header('Location: lokacije_.php');
            }
            if(isset($_GET['sp'])){
                $sp = $_GET['sp'];

                $query = $pdo->prepare('DELETE FROM spratovi WHERE spratovi_id = ?');
                $query->bindValue(1, $sp);
                $query->execute();

                header('Location: spratovi_.php');
            }
            if(isset($_GET['st'])){
                $st = $_GET['st'];

                $query = $pdo->prepare('DELETE FROM stanovi WHERE stan_id_ = ?');
                $query->bindValue(1, $st);
                $query->execute();

                header('Location: stanovi_.php');
            }
            if(isset($_GET['pr'])){
                $pr = $_GET['pr'];

                $query = $pdo->prepare('DELETE FROM prostorije WHERE prostorija_id__ = ?');
                $query->bindValue(1, $pr);
                $query->execute();

                header('Location: prostorije_.php');
            }
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