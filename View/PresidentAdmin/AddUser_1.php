
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add User</title>
    <!-- Font Awesome -->
 <link rel="stylesheet" href="">
        <!-- Bootstrap core CSS -->
        <link href="../../../OnlineDataBase/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="../../../OnlineDataBase/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="../../../OnlineDataBase/css/style.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark indigo">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="home.jsp"><Strong>FFWPU Online Database System</Strong></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#contactsNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="contactsNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="AdminPresident.php">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            

        </ul>
        <!-- Links -->

        
        <div><a class="btn btn-red btn-sm " href="../../Controller/Logout.php">Logout</a></div>
    </div>
    <!-- Collapsible content -->

</nav>
    
  
        
            <!-- Start your project here-->
    <div style="height: 70vh">
        <div class="flex-center flex-column">
              <div  class="alert alert-success " role="alert">
                User Added Successfully 
            </div>
          <h3> <br> <strong> 
            Create Account</strong></h3>
            
            <!-- Extended material form grid -->
            <form method="post" action="../../Controller/AddUser.php" ><br>
   
    
  
  <!-- Grid row -->
    <div class="row text-center">
        
      <div class="col-md-12">
            <!-- Material input -->
            <div class="md-form form-group">
                <input type="email" class="form-control" id="inputPWD" name="username" placeholder="Enter Users Email Adress">
                 <label for="inputEmail4MD">Email Address</label>
            </div>
        </div>
        <!-- Grid column -->
        <div class="col-md-12">
            <!-- Material input -->
            <div class="md-form form-group">
                 <input type="password" class="form-control" id="inputPWD" name="password" placeholder="Create Password">
                 <label for="inputEmail4MD">Password</label>
            </div>
        </div>
        <!-- Grid column -->
           <!-- Grid column -->
        
        <!-- Grid column -->
         
        <!-- Grid column -->
        
    </div>
    <!-- Grid row -->
  
 <br>
 <center><button type="submit" class="btn btn-blue btn-sm">Create Account</button></center>
  
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


