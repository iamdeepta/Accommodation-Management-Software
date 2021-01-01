<?php include("config/connection.php");



$feedbacks = mysqli_query($conn,  "SELECT * from tbl_feedback") or die(mysqli_error($conn));


 ?>

<!DOCTYPE html>

<html lang="en">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<head>



  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">



  <title>Application for Accommodation</title>



  <?php include 'css_master.php';?>

  <style type="text/css">
    
    .form-control{

      font-size: 12px;
    }
  </style>





</head>



<body>



<?php include 'header.php';?>



  <div class="d-flex" id="wrapper">



    <?php include 'sidebar.php';?>



    <!-- Page Content -->

    <div id="page-content-wrapper">



      <?php //include 'navbar.php';?>



      <!-- <div class="container-fluid">

        <h6 class="mt-4">Application for Accommodation</h6>



        <label>Name</label>

        <input type="text" name="name" class="form-control">





        

      </div> -->

      <!-- <div class="main"> -->



        <div class="container" style="background-color: #f8f9fa">

          <?php if(isset($_GET['msg'])){ ?>

          <div class="card">

          <div class="card-body" style="background-color: #cce8b7; height: 60px;">  <!-- #DFF0D8 -->

          <label style="margin-top: 0px;color: green ">

            <?php 

          

              echo $_GET['msg'];

          

          ?>

            

          </label>

        </div>

      </div>





      <!-- <span id="success_message"></span> -->



        <?php }



        ?>





        <form class="form-horizontal" action="insert.php" method="post" enctype="multipart/form-data">

        <div class="section-body old">

            <div class="row">

              <div class="col-md-11 " style="margin-top: 10px;margin-left: 4%">

                <div class="card shadow">

                  <!-- <div class="card-header">

                    <h4>HTML5 Form Basic</h4>

                  </div> -->

                  <div class="card-header" style="font-size: 16px;">

                    
মতামত

                  </div>





                  <div class="card-body">



                    <div class="form-group">

                      <label style="font-size: 10px;">নাম <span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <input type="text" class="form-control" name="name" required>

                      

                    </div>



                    <div class="form-group">

                      <label style="font-size: 10px;">মোবাইল নাম্বার<span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <input type="text" class="form-control" name="mobile_no" required>

                      

                    </div>



                    <div class="form-group">

                      <label style="font-size: 10px;">মন্তব্য <span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <textarea class="form-control" name="comments" required></textarea>

                      

                    </div>



                    <div class=" text-right" style="margin-top: 6%">

                    <button class="btn btn-success mr-1" name="submit_feedback" type="submit">Submit</button>

                   

                    </div>

                    

                  </div>

                  

                </div>  

 

              </div>

              

            </div>






          </div>

      </form>



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



