<?php

session_start();

include("config/connection.php");



    if ($_SESSION["flag"] == "ok")

    {

      if (isset($_POST['search_application'])) {
        
        $name = $_POST['search_name'];
        $status = $_POST['search_status'];
        $start_date = $_POST['search_start_date'];
        $end_date = $_POST['search_end_date'];



        if ($name=='' && $status!='' && $start_date!='' && $end_date!='') {
          
          $query = mysqli_query($conn,"SELECT taa.*,tat.* from tbl_accommodation_application as taa left outer join tbl_application_type  as tat on taa.status = tat.ID where taa.status = $status and taa.update_date between '$start_date' and '$end_date'") or die(mysqli_error($conn));

        }elseif ($name!='' && $status=='' && $start_date!='' && $end_date!='') {
          
          $query = mysqli_query($conn,"SELECT taa.*,tat.* from tbl_accommodation_application as taa left outer join tbl_application_type  as tat on taa.status = tat.ID where taa.name like '$name%' and taa.update_date between '$start_date' and '$end_date'") or die(mysqli_error($conn));

        }elseif ($name!='' && $status!='' && $start_date=='' && $end_date=='') {
          
          $query = mysqli_query($conn,"SELECT taa.*,tat.* from tbl_accommodation_application as taa left outer join tbl_application_type  as tat on taa.status = tat.ID where taa.name like '$name%' and taa.status = $status") or die(mysqli_error($conn));

        }elseif ($name=='' && $status=='' && $start_date!='' && $end_date!='') {
          
          $query = mysqli_query($conn,"SELECT taa.*,tat.* from tbl_accommodation_application as taa left outer join tbl_application_type  as tat on taa.status = tat.ID where taa.update_date between '$start_date' and '$end_date'") or die(mysqli_error($conn));

        }elseif ($name=='' && $status!='' && $start_date=='' && $end_date=='') {
          
          $query = mysqli_query($conn,"SELECT taa.*,tat.* from tbl_accommodation_application as taa left outer join tbl_application_type  as tat on taa.status = tat.ID where taa.status = $status") or die(mysqli_error($conn));

        }elseif ($name!='' && $status=='' && $start_date=='' && $end_date=='') {
          
          $query = mysqli_query($conn,"SELECT taa.*,tat.* from tbl_accommodation_application as taa left outer join tbl_application_type  as tat on taa.status = tat.ID where taa.name like '$name%'") or die(mysqli_error($conn));

        }elseif ($name!='' && $status!='' && $start_date!='' && $end_date!='') {
          
          $query = mysqli_query($conn,"SELECT taa.*,tat.* from tbl_accommodation_application as taa left outer join tbl_application_type  as tat on taa.status = tat.ID where taa.name like '$name%' and taa.status = $status and taa.update_date between '$start_date' and '$end_date'") or die(mysqli_error($conn));

        }elseif ($name=='' && $status=='' && $start_date=='' && $end_date=='') {
          
          $error_msg = "Please select or enter atleast one value!";

          header("Location: search_application.php?msg=".$error_msg);

        }else{

          $error_msg = "Something went wrong. Please try again!";

          header("Location: search_application.php?msg=".$error_msg);
        }


      }


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

                    
Application List

                  </div>


                  <div class="card-body">

                  <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

              <thead>

    <tr>

      <th class="th-sm" style="width: 15%">SL



      </th>

      <th class="th-sm" style="width: 15%">Name



      </th>

      <th class="th-sm" style="width: 28%">Father's Name



      </th>

      <th class="th-sm" style="width: 20%">Mother's name



      </th>

      <th class="th-sm">NID



      </th>

      <th class="th-sm">Designation



      </th>

      <th class="th-sm">Marital Status



      </th>

      <th class="th-sm">Mobile Number



      </th>

      <th class="th-sm">Present Salary



      </th>

      <th class="th-sm">Application Status



      </th>

      <th class="th-sm">Application Date



      </th>

      


    </tr>

  </thead>


  <tbody>

    <?php 
    $sl=0;
    while($queries=mysqli_fetch_array($query)){
      $sl++;
      ?>

      <p><?php $newDate = date("d/m/Y", strtotime($queries['update_date']));?></p>
    <tr>
      <td><?=$sl?></td>
      <td><?=$queries['name']?></td>
      <td><?=$queries['fathers_name']?></td>
      <td><?=$queries['mothers_name']?></td>
      <td><?=$queries['nid']?></td>
      <td><?=$queries['designation']?></td>
      <td><?=$queries['marital_status']?></td>
      <td><?=$queries['mobile_number']?></td>
      <td><?=$queries['present_salary']?></td>
      <td><?=$queries['type']?></td>
      <td><?=$newDate?></td>
    </tr>

  <?php }?>
  </tbody>

            </table>

          </div>

                  

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



