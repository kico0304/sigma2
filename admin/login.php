<div class="main-wrapper" style="background: #343a40;height: 100%;">
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark" style="position:absolute;top:50%;left:50%;transform: translate(-50%, -80%);">
        <div class="auth-box bg-dark border-top border-secondary">
            <div id="loginform">
                <div class="text-center pt-3 pb-3">
                    <b class="logo-icon ps-2">
                        <img src="../images/logo-small.png" alt="homepage" class="light-logo" width="25" />
                    </b>
                    <span style="color: #fff; font-size: 24px;position: relative; top: 5px;" class="logo-text ms-2">Sigma2 Admin</span>
                </div>
                <form class="form-horizontal mt-3" method="post" action="index.php">
                    <div class="row pb-4">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-success text-white h-100" id="basic-addon1">
                                        <i class="mdi mdi-account fs-4"></i>
                                    </span>
                                </div>
                                <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required="" />
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning t h-100" id="basic-addon2">
                                        <i class="mdi mdi-lock fs-4"></i>
                                    </span>
                                </div>
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required="" />
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="pt-3">
                                    <button class="btn btn-success float-end text-white" type="submit">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $(".preloader").fadeOut();
  $("#to-recover").on("click", function () {
    $("#loginform").slideUp();
    $("#recoverform").fadeIn();
  });
  $("#to-login").click(function () {
    $("#recoverform").hide();
    $("#loginform").fadeIn();
  });
</script>
