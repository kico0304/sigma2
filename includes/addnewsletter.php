<?php 

    session_start();
    include_once('includes/connection.php'); 


        if(isset($_SESSION['logged_in'])){
            print_r("test1");
            if(isset($_POST['newsMail'])){
                $newsMail = $_POST['newsMail'];
                print_r("test2");
                if(empty($newsMail)){
                    print_r("test3");
                    $error = 'Sva polja su obavezna!';
                } else {
                    print_r("test4");
                    $query = $pdo->prepare('INSERT INTO newsletter (newsletter_email) VALUES (?)');
                    $query->bindValue(1, $newsMail);
        
                    $query->execute();
        
                    header('Location: index.php?newsletter="1"');
                }
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