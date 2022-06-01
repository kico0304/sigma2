<?php 

    session_start();
    include_once('../includes/connection.php'); 

    include_once('../includes/lokacije.php');

    $lokacija = new Lokacije;
    $lokacije = $lokacija->fetch_all();

    $sprat = new Spratovi;
    $spratovi = $sprat->fetch_all_sprat();
    
?>

    

<html>
    <!-- HEAD -->
    <?php include 'includes/head.php'; ?>
    <body>

        <?php

        if(isset($_SESSION['logged_in'])){
            if(isset($_POST['submit'], $_POST['lokId'], $_POST['lokNaziv'], $_POST['sprId'], $_POST['sprNaziv'], $_POST['stanNaziv'], $_POST['stanBrojProstorija'], $_POST['stanKvadratura'], $_POST['stanTlocrt'])){
                $lokid = $_POST['lokId'];
                $lokNaziv = $_POST['lokNaziv'];
                $sprId = $_POST['sprId'];
                $sprNaziv = $_POST['sprNaziv'];
                $stanNaziv = $_POST['stanNaziv'];
                $stanBrojProstorija = $_POST['stanBrojProstorija'];
                $stanKvadratura = $_POST['stanKvadratura'];
                $stanTlocrt = $_POST['stanTlocrt'];
                
                if(empty($lokid) or empty($lokNaziv) or empty($sprId) or empty($sprNaziv) or empty($stanNaziv) or empty($stanBrojProstorija) or empty($stanKvadratura) or empty($stanTlocrt)){
                    $error = 'Sva polja su obavezna!';
                } else {
                    $query = $pdo->prepare('INSERT INTO stanovi (id_lokacije_, naziv_lokacije_, id_sprata_, naziv_sprata_, stan_naziv_, stan_brojprostorija_, stan_kvadratura_, stan_tlocrt_) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
                    $query->bindValue(1, $lokid);
                    $query->bindValue(2, $lokNaziv);
                    $query->bindValue(3, $sprId);
                    $query->bindValue(4, $sprNaziv);
                    $query->bindValue(5, $stanNaziv);
                    $query->bindValue(6, $stanBrojProstorija);
                    $query->bindValue(7, $stanKvadratura);
                    $query->bindValue(8, $stanTlocrt);
        
                    $query->execute();
        
                    header('Location: stanovi_.php');
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
                                <form action="dodajstan.php" method="post" autocomplete="off">
                                    <div class="col-lg-12 formaFlex" style="visibility:hidden">
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
                                    <div class="col-lg-12 formaFlex" style="visibility:hidden">
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
                                        <label>Naziv stana:</label>
                                        <input type="text" name="stanNaziv" placeholder="Unesi naziv stana" />
                                    </div>
                                    <div class="col-lg-12 formaFlex">
                                        <label>Broj prostorija:</label>
                                        <input id="brojProstorijaId" type="text" name="stanBrojProstorija" placeholder="Unesi broj prostorija" />
                                    </div>
                                    <div class="col-lg-12 formaFlex">
                                        <label>Kvadratura:</label>
                                        <input type="text" name="stanKvadratura" placeholder="Unesi kvadraturu stana" />
                                    </div>
                                    <div class="col-lg-12 formaFlex">
                                        <label>Tlocrt:</label>
                                        <input type="text" name="stanTlocrt" placeholder="Unesi tlocrt stana" />
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

                    });

                    $("#spratNazivSelect").change(function(){

                        //get ID sprata in select box
                        var option_ = $('option:selected', this).attr('changeVal'); 
                        $("#spratIdSelect").val(option_);

                    });

                    $(document).ready(function () {    
    
                        $('#brojProstorijaId').keypress(function (e) {    

                            var charCode = (e.which) ? e.which : event.keyCode    

                            if (String.fromCharCode(charCode).match(/[^0-9]/g))    

                                return false;                        

                        });    

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