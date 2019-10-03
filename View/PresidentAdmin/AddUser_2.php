
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Add Member</title>
        <!-- Font Awesome -->
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!--<link href="../css_font/font-awesome.min.css" rel="stylesheet"> -->
<link href="font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap core CSS -->
        <link href="../../MDB/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="../../MDB/css/mdb.min.css" rel="stylesheet">
        
        <link href="../../MDB/css/style.css" rel="stylesheet"> 
        <link href="PresidentAdmin.css" rel="stylesheet"> 
        <link href="stepstyle.css" rel="stylesheet"> 

       
        <style>
          .avatar-pic {
         width: 70px;
         
        }  
    
        </style>
    </head>

    <body class="">

        <div class="container " style="">
            <div class="card mx-auto  " style="width: 40rem; ">
 
               
                <h5 class="card-header info-color white-text ">
                    <a style="color: white" href="index.php"> <li  class="fa fa-home"></li></a>  <div class="text-center py-1"><strong >Add Member</strong></div>
                </h5>

                <!--Card content-->
                <div  class="card-body px-lg-5 pt-0">
                    <section class="content">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-md-12 col-xs-12">

                              

                                    <div class="box-body">
                                     
                                   
                                        <h2 class="text-center font-bold pt-4 pb-5 mb-5 animated zoomIn"><strong>Welcome To FFWPU Membership Registration</strong></h2>

<!-- Stepper -->
<div class="steps-form-2 animated zoomInRight">
    <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
        <div class="steps-step-2">
            <a href="#step-1" type="button" class="btn btn-amber btn-circle-2 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Personal Information">    <i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
        </div>
        <div class="steps-step-2">
            <a href="#step-2" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Career And Occupation"><i class="fa fa-institution" aria-hidden="true"></i></a>
        </div>
        <div class="steps-step-2">
            <a href="#step-3" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Education "><i class="fa fa-book" aria-hidden="true"></i></a>
        </div>
        <div class="steps-step-2">
            <a href="#step-4" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Cirtifications"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
        </div>
        <div class="steps-step-2">
            <a href="#step-5" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
        </div>
    </div>
</div>

<!-- First Step -->
<form role="form" action="../../Controller/PresidentAdmin/AddMember.php" method="post" enctype="multipart/form-data">
    <div class="row setup-content-2" id="step-1">
        <div class=" col-md-12">
            <h3 class="font-weight-bold pl-0 my-4"><strong>Personal Information</strong></h3>
           
            
           <div class="form-group md-form">
                <label for="yoourNRC-2" data-error="wrong" data-success="right">National Registration Card Number (NRC)</label>
                <input id="yoourNRC-2" name="nrc" type="text"  class="form-control validate">
            </div>
            
            <div class="form-group md-form">
                <label for="yoourPassport-2" data-error="wrong" data-success="right">Passport Number</label>
                <input id="yoourPassport-2" name="passport" type="text" class="form-control validate">
            </div>
            <div class="form-group md-form">
                <label for="yoourFistName-2" data-error="wrong" data-success="right">First Name</label>
                <input id="yoourFistName-2" name="fname" type="text" required="required" class="form-control validate">
            </div>
           
            <div class="form-group md-form">
                <label for="yourLast-2" data-error="wrong" data-success="right">Surname</label>
                <input id="yourLast-2" type="text" name="surname" required="required" class="form-control validate">
            </div>
          
            
            <div class="form-group md-form mt-3">
                <label for="yourOtherName-2" data-error="wrong" data-success="right">Other Names</label>
                <input id="yourOtherName-2" name="oname" type="text" required="required" class="form-control validate">
            </div>
           
        
                 

                
            
            
             <div class="form-group md-form mt-3">
                <label for="yourSocialNetworkID-2" data-error="wrong" data-success="right">Social Network ID</label>
                <input id="yourSocialNetworkID-2" name="social_network_id" type="text" required="required" class="form-control validate">
            </div>
            
            
             <div class="form-group md-form mt-3">
                <label for="yourEmile-2" data-error="wrong" data-success="right">E-mail</label>
                <input id="yourEmile-2" name="email" type="email" required="required" class="form-control validate">
            </div>
            
         
            
            
            <div style="margin-top: -7%"class="form-row ">
        <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
                <label for="dateOfBirth">Date Of Birth</label><br>
                <input type="date"  name="date_of_birth" class="form-control validate" name="dateOfBirth" id="dateOfBirth" >

            </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
           
            <div class="md-form form-group">
                 <label for="spiritualDateOfBirth">Spiritual Date Of Birth</label><br> 
                <input type="date" name="spiritual_dob" class="form-control validate" name="spiritualDateOfBirth" id="spiritualDateOfBirth" >
                
            </div>
        </div>
        <!-- Grid column -->
  </div>
            
            
            
                 <div style=""class="form-row ">
        <!-- Grid column -->
        <div class="col-md-6">
                
             <div class="form-group md-form mt-3">
            <select required="required" name ="marital_status_id" class="custom-select  ">
           <option selected>Marital Status</option>
          <option value="1">Married</option>
          <option value="2">Single</option>
          <option value="3">Divorce</option>
            <option value="4">Widow</option>
            
       </select>
                   
             </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
           
               
             <div class="form-group md-form mt-3">
                 <select name="gender_id" class="custom-select ">
           <option selected>Gender</option>
          <option value="1">Male</option>
          <option value="2">Female</option>
           
       </select>
                   
             </div>
        </div>
        <!-- Grid column -->
  </div>
            
            
             <div class="form-group md-form mt-3">
                <label for="nameOfSpouse-2" data-error="wrong" data-success="right">Name Of Spouse</label>
                <input id="nameOfSpouse-2" name="name_of_spouse" type="text"  class="form-control validate">
            </div>
            
            
                        <div style=""class="form-row ">
        <!-- Grid column -->
        <div class="col-md-6">
                
             <div class="form-group md-form mt-3">
            <select name="" class="custom-select ">
           <option selected>Select Region</option>
          <option value="1">East Africa</option>
          <option value="2">West Africa</option>
          <option value="3">North Africa</option>
            <option value="4">Southern Africa</option>
            <option value="5">central Africa</option>
       </select>
                   
             </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
           
               
             <div class="form-group md-form mt-3">
            <select class="custom-select ">
           <option selected>Select Country</option>
          <option value="1">Zambia</option>
          <option value="2">Congo</option>
            <option value="3">South Africa</option>
             <option value="4">Malawi</option>
               <option value="5">Egypy</option>
               <option value="6">Zimbabwe</option>
               
       </select>
                   
             </div>
        </div>
        
        
            <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
           
               
             <div class="form-group md-form mt-3">
            <select class="custom-select ">
           <option selected>Select City</option>
          <option value="1">Lusaka</option>
          <option value="2">Kabwe</option>
            <option value="3">Johansburg</option>
       </select>
                   
             </div>
        </div>
            
            
            
                <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
           
               
             <div class="form-group md-form mt-3">
            <select class="custom-select ">
           <option selected>Select Province/State</option>
          <option value="1">Lusaka</option>
          <option value="2">North Western</option>
            <option value="3">Southern</option>
            <option value="3">Central</option>
       </select>
                   
             </div>
        </div>
        <!-- Grid column -->
  </div>
           
            
  
            
              <div style=""class="form-row ">
        <!-- Grid column -->
        <div class="col-md-6">
                       
          <div class="md-form">
    <i class="fa fa-pencil prefix"></i>
    <textarea type="text" name="primeryAddress" id="form10" class="md-textarea form-control" rows="3"></textarea>
    <label for="form10">Enter Primary Address</label>
</div>   
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
           
               
             <div class="form-group md-form mt-3">
                    <div class="md-form">
    <i class="fa fa-pencil prefix"></i>
    <textarea type="text" name="secondaryAdress" id="form10" class="md-textarea form-control" rows="3"></textarea>
    <label for="form10">Enter Secondary Address</label>
</div>   
          
                   
             </div>
        </div>
        
        
     
        <!-- Grid column -->
  </div>
            

       <div class="form-group md-form mt-3">
               <input type="text" class="form-control" name="postCode" id="inputCityMD" placeholder="Zip:">
                <label for="inputPhone1MD">Post Code</label>
            </div>
                
            
            <div style="margin-top: 2%"class="form-row">
        <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" name="telephone" id="inputCityMD" placeholder="Tel:">
                <label for="inputPhone1MD">Telephone Number</label>
            </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" name="phone" id="inputZipMD" placeholder="Cell:">
                <label for="inputPhone2MD">Phone Number </label>
            </div>
        </div>
        <!-- Grid column -->
  </div>
            


   <div style="margin-top: 2%"class="form-row">
        <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" name="nationality" id="inputCityMD" placeholder="Nationality:">
                <label for="inputPhone1MD">Nationality</label>
            </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" name="generation" id="inputZipMD" placeholder="1st:">
                <label for="inputPhone2MD">Generation </label>
            </div>
        </div>
        <!-- Grid column -->
  </div>


<center><div class="file-field">
        <div class="mb-4">
            <img src="../../images/defult.png" class="rounded-circle z-depth-1-half avatar-pic" alt="upoad profile pic">
        </div>
        <div class="d-flex justify-content-center">
            <div class="btn btn-mdb-color btn-rounded float-left">
                <span>Add photo</span>
               <input type="file" name="profile_pic">
            </div>
        </div>
    </div></center>
            
            
                        
              <div style=""class="form-row ">
<!--         Grid column -->
        <div class="col-md-4">
                
             <div class="form-group md-form mt-3">
                 <select name="religion_id" class="custom-select ">
           <option selected>Select Religion</option>
          <option value="1">Christianity</option>
          <option value="2">Islam </option>
            <option value="3">Hinduism</option>
            <option value="4">Atheism</option>
            <option value="5">Others</option>
       </select>
                   
             </div>
        </div>
         
        <div class="col-md-4">
<!--             Material input -->
           
               
             <div class="form-group md-form mt-3">
            <select name="member_type_id" class="custom-select ">
           <option selected>Member Type</option>
          <option value="1">V.I.P</option>
          <option value="2">Regular</option>
            <option value="3">Irregular Africa</option>
             <option value="4">Others</option>
              
               
       </select>
                   
             </div>
        </div>
         
         
         
          <div class="col-md-4">
<!--             Material input -->
           
               
             <div class="form-group md-form mt-3">
                 <select name="department_id" class="custom-select ">
           <option selected>Department</option>
          <option value="1">Youth</option>
          <option value="2">Adult</option>
            <option value="3">Others</option>
             
               
       </select>
                   
             </div>
        </div>
        
        
      
  </div>
            
          
            
            
            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
        </div>
    </div>

<!-- Second Step -->
    <div class="row setup-content-2" id="step-2">
        <div class="col-md-12">
            <h3 class="font-weight-bold pl-0 my-4"><strong>Career And Occupation</strong></h3>
            
            
            <!-- Table with panel -->
<div class="card card-cascade narrower">

    <!--Card image-->
    <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

        <div>
            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                <i class="fa fa-th-large mt-0"></i>
            </button>
           
        </div>

        <a href="" class="white-text mx-3">Occupation</a>

        <div >
           
            <button id="addRecored" type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                <i class="fa fa-plus-circle mt-0"></i>
            </button>
           
        </div>

    </div>
    <!--/Card image-->

    <div class="">

        <div class="table-wrapper ">
            <!--Table-->
            <table class="table table-hover ">
                
                <thead class="click" >
                    <tr >
                      
                    
                           
               
                    <th class="" style="width: 20%">
                            <a>Affiliated Organization
                               
                            </a>
                        </th>
                        
                        
                        <th class="" style="width: 20%">
                            <a>Position
                                
                            </a>
                        </th>
                        
                        
                        <th class="" style="width: 20%">
                            <a>Start Date
                               
                            </a>
                        </th>
                        
                        
                        <th class="" style="width: 20%">
                            <a>End Date
                                
                            </a>
                        </th>
                        
                        
                       
                        
                        
                        <th class="" style="width: 20%">
                            <a>Remarks 
                               
                            </a>
                        </th>
                        
                        
                     
                
                    <tr class=" md-form">
                        <td name="" class="pt-3-half" ><input name="proffetion_array[]"style="width: 100%"type="text" rows="3" placeholder="Affiliation"/></td>
                   <td name="" class="pt-3-half" ><input name="position_array[]" style="width: 100%" type="text" rows="3" placeholder="Position"/></td>
                   <td name="" class="pt-3-half" ><input name="start_array[]" style="width: 100%" type="date" rows="3" placeholder="Start"/></td>
                   <td name="" class="pt-3-half" ><input name="end_array[]" style="width: 100%" type="date" rows="3" placeholder="End"/></td>
                      <td name="" class="pt-3-half" ><input name="remarks_array[]" style="width: 100%" type="text"  placeholder="Remarks"/></td>
                   
                </tr>  
                        
                  
             
                       
                     
                       
                    </tr>
                </thead>
                
            </table>
            <!--Table-->
        </div>

    </div>

</div>
<!-- Table with panel -->
            
<div style="padding-top: 5%">
            
            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
        </div>
</div>
    </div>

    <!-- Third Step -->
    <div class="row setup-content-2" id="step-3">
        <div class="col-md-12">
            <h3 class="font-weight-bold pl-0 my-4"><strong>Education</strong></h3>
           <div class="card card-cascade narrower">

    <!--Card image-->
    <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

        <div>
            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                <i class="fa fa-th-large mt-0"></i>
            </button>
           
        </div>

        <a href="" class="white-text mx-3">Education Information</a>

        <div>
           
            <button id="addRecoredEdu" type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                <i class="fa fa-plus-circle mt-0"></i>
            </button>
           
        </div>

    </div>
    <!--/Card image-->

    <div class="">

        <div class="table-wrapper ">
            <!--Table-->
            <table class="table table-hover ">
                
                <thead class="educlick" >
                    <tr >
                      
                    
                           
               
                    <th class="" style="width: 20%">
                            <a>Institution Name
                               
                            </a>
                        </th>
                        
                        
                        <th class="" style="width: 20%">
                            <a>Major
                                
                            </a>
                        </th>
                        
                        
                        <th class="" style="width: 20%">
                            <a>Education Remarks
                               
                            </a>
                        </th>
                        
                        
                        <th class="" style="width: 20%">
                            <a>Start Date 
                                
                            </a>
                        </th>
                        
                        
                       
                        
                        
                        <th class="" style="width: 20%">
                            <a>End Date
                               
                            </a>
                        </th>
                        
                        
                     
                
                    <tr class=" md-form">
                   <td name="" class="pt-3-half" ><input name="institution_name_array[]" style="width: 100%"type="text" rows="3" placeholder="Institution"/></td>
                   <td name="" class="pt-3-half" ><input name="major_array[]" style="width: 100%" type="text" rows="3" placeholder="Major"/></td>
                    <td name="" class="pt-3-half" ><input  name="education_remark_array[]" style="width: 100%" type="text" rows="3" placeholder="Remarks"/></td>
                    <td name="" class="pt-3-half" ><input name="edu_start_array[]" style="width: 100%" type="date" rows="3" placeholder="Start"/></td>
                    <td name="" class="pt-3-half" ><input name="edu_end_array[]" style="width: 100%" type="date"  placeholder="End"/></td>
                   
                </tr>  
                        
                  
             
                       
                     
                       
                    </tr>
                </thead>
                
            </table>
            <!--Table-->
        </div>

    </div>

</div>
            <div style ="padding-top: 5%">
                
                 <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
            </div>
           
        </div>
    </div>

    <!-- Fourth Step -->
    <div class="row setup-content-2" id="step-4">
        <div class="col-md-12">
             <h3 class="font-weight-bold pl-0 my-4"><strong>Certifications</strong></h3>
           <div class="card card-cascade narrower">

    <!--Card image-->
    <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

        <div>
            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                <i class="fa fa-th-large mt-0"></i>
            </button>
           
        </div>

        <a href="" class="white-text mx-3">Certification</a>

        <div>
           
            <button id="addRecordCtf" type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                <i class="fa fa-plus-circle mt-0"></i>
            </button>
           
        </div>

    </div>
    <!--/Card image-->

    <div class="">

        <div class="table-wrapper ">
            <!--Table-->
            <table class="table table-hover ">
                
                <thead class="certclick" >
                    <tr >
                      
                    
                           
               
                    <th class="" style="width: 20%">
                            <a>Institution Name
                               
                            </a>
                        </th>
                        
                        
                        <th class="" style="width: 20%">
                            <a>Issued By
                                
                            </a>
                        </th>
                        
                        
                        <th class="" style="width: 20%">
                            <a>Issued Date
                               
                            </a>
                        </th>
                        
                        
                        <th class="" style="width: 20%">
                            <a> Education Remarks
                                
                            </a>
                        </th>
                        
                        
                       
                        
                        
                        
                        
                        
                     
                
                    <tr class=" md-form">
                   <td name="" class="pt-3-half" ><input name="issuer_institution_name[]" style="width: 100%"type="text" rows="3" placeholder="Institution"/></td>
                   <td name="" class="pt-3-half" ><input name="isser_name_array[]" style="width: 100%" type="text" rows="3" placeholder="Names"/></td>
                   <td name="" class="pt-3-half" ><input name="issued_date_array[]" style="width: 100%" type="date" rows="3" placeholder="Issued Data"/></td>
                     <td name="" class="pt-3-half" ><input name="essuer_remarks_array[]" style="width: 100%" type="text" rows="3" placeholder="Remarks"/></td>
                   
                </tr>  
                        
                  
             
                       
                     
                       
                    </tr>
                </thead>
                
            </table>
            <!--Table-->
        </div>

    </div>

</div>
            
            <div style ="padding-top: 5%">
            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
           <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
            </div>
        </div>
    </div>
    
    
        <div class="row setup-content-2" id="step-5">
        <div class="col-md-12">
            <h3 class="font-weight-bold pl-0 my-4"><strong>Finish</strong></h3>
            <h2 class="text-center font-weight-bold my-4">Registration completed!</h2>
            
            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
            <button class="btn btn-success btn-rounded float-right" name="submit_btn" type="submit">Submit</button>
        </div>
    </div>
</form>

                                        
                                
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- col-md-12 -->
                </div>
                <!-- /.row -->


                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>

        <!--Footer-->
        <footer>

        </footer>
        <!--Footer-->

        <script type="text/javascript" src="../../MDB/js/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="../../MDB/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="../../MDB/js/bootstrap"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="../../MDB/js/mdb.min.js"></script>

      
       

        <script type="text/javascript">
            
            // Material Select Initialization

        // Tooltips Initialization
$(function () {
    var id=0
    $('#addRecored').click( function(){
        var val_id = id++;
        var uploads = $('<tr class="upload_'+val_id+' md-form"><td name="" class="pt-3-half" ><input name="proffetion_array[]"style="width: 100%"type="text" rows="3" placeholder="Affiliation"/></td><td name="" class="pt-3-half" ><input name="position_array[]" style="width: 100%" type="text" rows="3" placeholder="Position"/></td><td name="" class="pt-3-half" ><input name="start_array[]" style="width: 100%" type="date" rows="3" placeholder="Start"/></td><td name="" class="pt-3-half" ><input name="end_array[]" style="width: 100%" type="date" rows="3" placeholder="End"/></td><td name="" class="pt-3-half" ><input name="remarks_array[]" style="width: 100%" type="text"  placeholder="Remarks"/></td><td class="pt-3-half"><button style="background-color:blue" id="cancle_'+val_id+'" type="button" class=" btn .btn-light-green btn-rounded btn-sm px-2"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td></tr>');
           
                   $('.click').append(uploads); 
                   
                   $('#cancle_'+val_id).click(function(){
                       $('tr').remove('.upload_'+val_id);
                       
                   });
    } );
      
      
      var edu_id  = 0; 
       $('#addRecoredEdu').click( function(){
        var recd_id = edu_id++;
        var uploads = $('<tr class="ulodedu_'+ recd_id+' md-form"> <td name="" class="pt-3-half" ><input name="institution_name_array[]" style="width: 100%"type="text" rows="3" placeholder="Institution"/></td><td name="" class="pt-3-half" ><input name="major_array[]" style="width: 100%" type="text" rows="3" placeholder="Major"/></td><td name="" class="pt-3-half" ><input  name="education_remark_array[]" style="width: 100%" type="text" rows="3" placeholder="Remarks"/></td><td name="" class="pt-3-half" ><input name="edu_start_array[]" style="width: 100%" type="date" rows="3" placeholder="Start"/></td><td name="" class="pt-3-half" ><input name="edu_end_array[]" style="width: 100%" type="date"  placeholder="End"/></td><td> <button style="background-color:blue" id="cancleedu_'+recd_id+'" type="button" class=" btn .btn-light-green btn-rounded btn-sm px-2"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td></tr>');
           
                   $('.educlick').append(uploads); 
                   
                   
                     $('#cancleedu_'+recd_id).click(function(){
                       $('tr').remove('.ulodedu_'+recd_id);
                       
                   });
    } );
    
    
         var crt_id  = 0; 
       $('#addRecordCtf').click( function(){
        var crtrecd_id = crt_id++;
        var uploads = $('<tr class="cerulodedu_'+crtrecd_id+' md-form"><td name="" class="pt-3-half" > <td name="" class="pt-3-half" ><input name="issuer_institution_name[]" style="width: 100%"type="text" rows="3" placeholder="Institution"/></td><td name="" class="pt-3-half" ><input name="isser_name_array[]" style="width: 100%" type="text" rows="3" placeholder="Names"/></td><td name="" class="pt-3-half" ><input name="issued_date_array[]" style="width: 100%" type="date" rows="3" placeholder="Issued Data"/></td><td name="" class="pt-3-half" ><input name="essuer_remarks_array[]" style="width: 100%" type="text" rows="3" placeholder="Remarks"/></td><td> <button style="background-color:blue" id="crtdel_'+crtrecd_id+'" type="button" class=" btn .btn-light-green btn-rounded btn-sm px-2"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td></tr>');

                
           
                   $('.certclick').append(uploads); 
                   
                   
                     $('#crtdel_'+crtrecd_id).click(function(){
                       $('tr').remove('.cerulodedu_'+crtrecd_id);
                       
                   });
    } );
    
    
    //$('.mdb-select').material_select();
  $('[data-toggle="tooltip"]').tooltip();
 
 
  
});

// Steppers
$(document).ready(function () {
  var navListItems = $('div.setup-panel-2 div a'),
          allWells = $('.setup-content-2'),
          allNextBtn = $('.nextBtn-2'),
          allPrevBtn = $('.prevBtn-2');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-amber').addClass('btn-blue-grey');
          $item.addClass('btn-amber');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content-2"),
          curStepBtn = curStep.attr("id"),
          prevStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

          prevStepSteps.removeAttr('disabled').trigger('click');
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content-2"),
          curStepBtn = curStep.attr("id"),
          nextStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i< curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepSteps.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel-2 div a.btn-amber').trigger('click');
});
        </script>                  

    </body>

</html>


