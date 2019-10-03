<!DOCTYPE html>
<?php
include '../../../OnlineDataBase/controller/Session.php';
?>
<html lang="en"  class="full-height">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>OnLine Data Base System</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="../../../OnlineDataBase/csss/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="../../../OnlineDataBase/csss/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="../../../OnlineDataBase/csss/css/style.css" rel="stylesheet">
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark indigo">
            <a class="navbar-brand" href="AdminPresident.php">FFWPU Online Database System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="AdminPresident.php"><i class="fa fa-home">&nbsp;</i>Home <span class="sr-only">(current)</span></a>            </li>        
                
                <li class="nav-item">
                    <a class="nav-link" href="#">Add Member</a>
            </li>
                </ul>
             

                <span class="navbar-text white-text">
                    Logged in as <?php echo ($_SESSION['Type']); ?>
                </span>

                
                <div><a class="btn btn-red btn-sm " href="../../Controller/Logout.php">Logout</a></div>
                
            </div>
        </nav>
        
        
            <div style="height: 80vh">
        <div class="flex-center flex-column">

            <h1>Welcome
                <?php echo ($_SESSION['Type']); ?>

            </h1>


            <h5 class="animated fadeIn mb-3">Thank you for using our FFWPU Online Database System. We're glad you're with us.</h5>

            <p class="animated fadeIn text-muted">Team FFWPU</p>
        </div>
    </div>
        
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
