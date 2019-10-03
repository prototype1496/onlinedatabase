
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Reset Password</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="">
        <!-- Bootstrap core CSS -->
        <link href="../../MDB/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="../../MDB/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="../../MDB/css/style.css" rel="stylesheet">
    </head>

    <body style="background: url(../../images/bg5.jpg);">

      



        <!-- Start your project here-->
        <div style="height: 70vh;">
            <div  class="flex-center flex-column">
<!--                <div  class="alert alert-success " role="alert">
                    User Added Successfully 
                </div>-->
                <h3> <br> <strong> 
                        Password Reset</strong></h3>

                        <?php $token =  $_GET['reset']; ?>
                <!-- Extended material form grid -->
                <form method="post" action="../../Controller/PasswordRecovery/PasswordRecovery.php" ><br>



                    <!-- Grid row -->
                    <div class="row text-center ">

                        <div class="col-md-12">
                            <!-- Material input -->
                          
                            
                             <div class="md-form form-group">
                                 <input type="hidden" name="reset" value="<?php echo $token ?>" />
                                 <input type="password" required="required" class="form-control" id="inputPWD" name="password" placeholder="Enter Password">
                                <label for="inputPassword4MD">Password</label>
                                
                            </div>
                        </div>
                        
                            <div class="col-md-12">
                            <!-- Material input -->
                          
                            
                             <div class="md-form form-group">
                                 
                                 <input type="password" required="required" class="form-control" id="inputPWD" name="re_enter_password" placeholder="Re-Enter Password">
                                <label for="inputPassword4MD">Password</label>
                                
                            </div>
                        </div>
                        <!-- Grid column -->
<!--                        <div class="col-md-12">
                             Material input 
                            <div class="md-form form-group">
                                <input type="password" class="form-control" id="inputPWD" name="password" placeholder="Create Password">
                                <label for="inputEmail4MD">Password</label>
                            </div>
                        </div>-->
                        <!-- Grid column -->
                        <!-- Grid column -->

                        <!-- Grid column -->

                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <br>
                    <center><button type="submit" class="btn btn-blue btn-sm">Reset Password</button></center>

                </form>
                <!-- Extended material form grid -->


            </div>
        </div>
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
        <script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="../../js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="../../js/mdb.min.js"></script>
    </body>

</html>


