<!DOCTYPE html>
<?php
?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>OnLine Data Base System</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="MDB/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="MDB/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="MDB/css/style.css" rel="stylesheet">
        
        
    </head>

    <body style="background: url(images/bg5.jpg);">

        <!-- Start your project here-->
        <!-- Material form login -->
       
            <center><img style="padding-top: 3rem; height: 10rem;" src="../OnlineDataBase/images/FFWPU LOGO2_1.png"></center>
            <div class="container" >
                <div class="card mx-auto" style="width: 25rem; height: 20rem;">

                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Sign in</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form action="Controller/Login.php" method="POST" class="text-center" style="color:#757575;">


                            <!-- Email -->
                            <div class="md-form" >
                                <input name="username" type="email" id="materialLoginFormEmail" class="form-control">
                                <label for="materialLoginFormEmail">E-mail</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input name="password" type="password" id="materialLoginFormPassword" class="form-control">
                                <label for="materialLoginFormPassword">Password</label>
                            </div>

                            <div class="d-flex justify-content-around">
                                <div>
                                    <!-- Remember me -->
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                                        <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                                    </div>
                                </div>
                                <div>
                                    <!-- Forgot password -->
                                    <a href="View/PasswordRecovery/index.php">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Sign in button -->
                            <button class="btn btn-info btn-block my-4" type="submit" >LOGIN</button>

                        </form>
                        <!-- Form -->

                    </div>

                </div>
                
            </div>
            

            <!-- Material form login -->
            <!-- /Start your project here-->
            <!-- Footer -->
            <footer class="page-footer font-small primary-color fixed-bottom">

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2018 Copyright:
                    <a href="#"> FFWPU AFRICA HEADQUARTERS</a>
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->

            <!-- SCRIPTS -->
            <!-- JQuery -->
            <script type="text/javascript" src="MDB/js/jquery-3.2.1.min.js"></script>
            <!-- Bootstrap tooltips -->
            <script type="text/javascript" src="MDB/js/popper.min.js"></script>
            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="MDB/js/bootstrap.min.js"></script>
            <!-- MDB core JavaScript -->
            <script type="text/javascript" src="MDB/js/mdb.min.js"></script>
       
    </body>

</html>
