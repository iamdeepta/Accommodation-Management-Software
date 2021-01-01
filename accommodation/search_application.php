<?php

session_start();

include("config/connection.php");



    if ($_SESSION["flag"] == "ok")

    {


  //$home=mysqli_fetch_array($admin_home);

?>



<!DOCTYPE html>

<html lang="en">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<head>



  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">



  <title>Admin-Home</title>



  <?php include 'css_master.php';?>





</head>



<body>



<?php include 'header.php';?>



  <div class="d-flex" id="wrapper">



    <?php include 'sidebar.php';?>



    <!-- Page Content -->

    <div id="page-content-wrapper">



      <?php include 'navbar.php';?>



      <!-- <div class="container-fluid">

        <h6 class="mt-4">Application for Accommodation</h6>



        <label>Name</label>

        <input type="text" name="name" class="form-control">





        

      </div> -->

      <!-- <div class="main"> -->



        <div class="container" style="background-color: #f8f9fa">



          <?php if(isset($_GET['msg'])){ ?>

          <div class="card">

          <div class="card-body" style="background-color: pink; height: 60px;">  <!-- #DFF0D8 -->

          <label style="margin-top: 0px;color: red ">

            <?php 

          

              echo $_GET['msg'];

          

          ?>

            

          </label>

        </div>

      </div>





      <!-- <span id="success_message"></span> -->



        <?php }



        ?>





        <?php if(isset($_GET['msg_success'])){ ?>

          <div class="card">

          <div class="card-body" style="background-color: #DFF0D8; height: 60px;">  <!-- #DFF0D8 -->

          <label style="margin-top: 0px;color: green ">

            <?php 

          

              echo $_GET['msg_success'];

          

          ?>

            

          </label>

        </div>

      </div>





      <!-- <span id="success_message"></span> -->



        <?php }



        ?>





        

        <div class="section-body old">

            

            <div class="row">

              <div class="col-md-12 " style="margin-top: 10px;margin-left: 1%">

                <div class="card shadow">

                  <!-- <div class="card-header">

                    <h4>HTML5 Form Basic</h4>

                  </div> -->

                  <div class="card-header" style="font-size: 16px;">

                    
Search Applications

                  </div>




                  <form class="form-horizontal" action="search_app_result.php" method="post" enctype="multipart/form-data">

                  <div class="card-body">



                    <div class="form-group">

                      <label >Name <span style="color: red; margin-left: 4px"></span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <input type="text" class="form-control" name="search_name">

                      

                    </div>



                    <div class="form-group">

                      
                    <label>Application Status</label><label style="color: red"></label>
                      <select class="custom-select" id="search_status" name="search_status"> 

                        <option value="">Choose Status</option>

                        <?php

                        $app_status1 = mysqli_query($conn,  "SELECT * from tbl_application_type") or die(mysqli_error($conn));

                      while($statuses1=mysqli_fetch_array($app_status1)){

                        ?>

                        <option value="<?=$statuses1['ID']?>"><?=$statuses1['type']?></option>

                    

                        <!-- <option value="<?=$proccat_name['ID']?>"><?=$proccat_name['ProcCatName']?></option> -->

                        <?php } ?>

                      </select>

                    </div>



                    <div class="form-group">

                      <label>Date Range <span style="color: red; margin-left: 4px"></span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <div class="form-group row" style="margin-left: 1px">
                      <input type="date" class="form-control" name="search_start_date" style="width: 20%"><p style="margin-left: 10px;">___</p>
                      <input type="date" class="form-control" name="search_end_date" style="width: 20%; margin-left: 10px;">
                    </div>

                      

                    </div>



                    <div class=" text-right" style="margin-top: 6%">

                    <button class="btn btn-success mr-1" name="search_application" type="submit">Search</button>

                   

                    </div>

                    

                  </div>
                </form>

                  

                </div>  

 

              </div>

              

            </div>
        





<script type="text/javascript">

  $(document).ready(function () {

  $('#dtBasicExample').DataTable();

  $('.dataTables_length').addClass('bs-select');

});



  // Basic example

/*$(document).ready(function () {

  $('#dtBasicExample').DataTable({

    "paging": true // false to disable pagination (or any other option)

  });

  $('.dataTables_length').addClass('bs-select');

});*/





// Basic example

/*$(document).ready(function () {

  $('#dtBasicExample').DataTable({

    "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only

  });

  $('.dataTables_length').addClass('bs-select');

});*/

</script>







          </div>

    



          <!-- <form  action="insert.php" method="post" enctype="multipart/form-data"> -->

        

           



    </div>

    <!-- /#page-content-wrapper -->



  </div>

</div>



  <!-- /#wrapper -->



  <style type="text/css">

    

    .paragraph{

      color: black;

    }



    .required{

      font-size: 12px;

    }



    .custom_input{

      font-size: 12px;

    }



    #personal_info:hover{

      border: 1px solid green !important;

      box-shadow: 2px 2px 2px 2px !important;

    }



    #official_info:hover{

      border: 1px solid green !important;

      box-shadow: 2px 2px 2px 2px !important;

    }



    #accommodation_info:hover{

      border: 1px solid green !important;

      box-shadow: 2px 2px 2px 2px !important;

    }



    #login_info:hover{

      border: 1px solid green !important;

      box-shadow: 2px 2px 2px 2px !important;

    }

  </style>





  <!-- <script type="text/javascript">

    $(document).ready(function(){



      $("#personal_info").on('click',function(){



        $("#personal_info").removeAttr('style').css({border: "1px solid gray", border-radius: "0px", padding: "40px"});

        $(this).css({border: "2px solid green", border-radius: "0px", padding: "40px"});

      });

    });

  </script> -->





  <?php include 'footer.php';?>



  <?php include 'js_master.php';?>







</body>



</html>







<?php }elseif($_SESSION["flag"] == "error_pass")

    {

      $msg = "The password is incorrect!";

        header("Location: admin.php?msg=".$msg);



    }/*elseif ($_SESSION["flag"] == "captcha") {

     $msg = "Your given number is incorrect!";

        header("Location: index.php?msg=".$msg);



    }*/elseif ($_SESSION["flag"] == "error_username") {

     $msg = "The username is incorrect!";

        header("Location: admin.php?msg=".$msg);



      }else {

        $msg = "The username and password are incorrect!";

        header("Location: admin.php?msg=".$msg);

      } ?>



