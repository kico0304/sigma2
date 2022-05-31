<?php 

    session_start();
    include_once('../includes/connection.php'); 
    
?>

<html>
    <body>

        <?php

        if(isset($_SESSION['logged_in'])){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                print_r($id);
                $query = $pdo->prepare('UPDATE stanovi SET stan_prodan_ = NOT stan_prodan_ WHERE stan_id_ = ?');
                $query->bindValue(1, $id);
                $query->execute();

                header('Location: stanovi_.php');
            } else{
                print_r("ne");
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