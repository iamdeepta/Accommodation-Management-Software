<?php

session_start();

include("config/connection.php");



    if ($_SESSION["flag"] == "ok")

    {



      $msg = @$_GET['msg_panel'];





      if($msg == 'new_application'){


$query="SELECT tbl_accommodation_application.*, ".DBHR.".hrtdesignation.DesignationName from tbl_accommodation_application INNER JOIN ".DBHR.".hrtdesignation On tbl_accommodation_application.designation=".DBHR.".hrtdesignation.DesignationID";
        $admin_home = mysqli_query($conn, $query." where status=1") or die(mysqli_error($conn));



      }elseif($msg == 'pending_application'){

        $admin_home = mysqli_query($conn, "SELECT * from tbl_accommodation_application where status=2") or die(mysqli_error($conn));

      }elseif ($msg == 'approved_application') {

        $admin_home = mysqli_query($conn, "SELECT * from tbl_accommodation_application where status=3") or die(mysqli_error($conn));

      }elseif ($msg == 'rejected_application') {

        $admin_home = mysqli_query($conn, "SELECT * from tbl_accommodation_application where status=4") or die(mysqli_error($conn));

      }

      elseif($msg == 'admin_home'){



        $admin_home = mysqli_query($conn, "SELECT * from tbl_accommodation_application where status=0") or die(mysqli_error($conn));



      }else{



        $admin_home = mysqli_query($conn, "SELECT * from tbl_accommodation_application where status=0") or die(mysqli_error($conn));

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

            





      

          <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

  <thead>

    <tr>

      <th class="th-sm">Name



      </th>

      <th class="th-sm">Designation



      </th>

      <th class="th-sm">Date of Joining (in Dept.)



      </th>

      <th class="th-sm">Pay Scale



      </th>

      <th class="th-sm">Present Salary



      </th>

      <th class="th-sm">Peirory House



      </th>



      <th class="th-sm">Shift to



      </th>



      <th class="th-sm">Action



      </th>

    </tr>

  </thead>

  <tbody>



    <?php while($home_result=mysqli_fetch_array($admin_home)){?>

  

    <tr>

      <form class="form-horizontal" action="update_remove.php?msg=<?=$home_result['id']?>" method="post" enctype="multipart/form-data" data-parsley-validate>

      <td><a href="view_application.php?msg_applicant=<?=$home_result['id']?>"><?=$home_result['name']?></a></td>

      <td><?=$home_result['DesignationName']?></td>

      <td><?=$home_result['joining_date_dept']?></td>

      <td><?=$home_result['pay_scale']?></td>

      <td><?=$home_result['present_salary']?></td>

      <td><?=$home_result['areas']?></td>

      <td>

        <div class="form-group">

                      

                      <select class="custom-select" id="status" name="status" style="font-size: 12px;">

                        <?php

                      //while($proccat_name=mysqli_fetch_array($result2)){

                        ?>

                        <option value="1">New Application</option>

                        <option value="2">Pending Application</option>

                        <option value="3">Approved Application</option>

                        <option value="4">Rejected Application</option>

                        <!-- <option value="<?=$proccat_name['ID']?>"><?=$proccat_name['ProcCatName']?></option> -->

                        <?php //} ?>

                      </select>

                    </div>

      </td>

      <td><button class="btn btn-success btn-sm" type="submit" name="change_status" style="font-size: 9px;">Change Status</button></td>

      </form>

    </tr>

  



  <?php }?>

  </tbody>

  <!--<tfoot>

    <tr>

      <th>Name

      </th>

      <th>Designation

      </th>

      <th>Date of Joining (in Dept.)

      </th>

      <th>Pay Scale

      </th>

      <th>Present Salary

      </th>

      <th>Peirory House

      </th>

      <th>Shift to

      </th>

      <th>Action

      </th>

    </tr>

  </tfoot>-->

</table>





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



