<?php

session_start();

include("config/connection.php");



    if ($_SESSION["flag"] == "ok")

    {



      $msg = @$_GET['msg_panel'];



$query="SELECT tbl_accommodation_application.*,tbl_comment.id as comment_id,tbl_comment.comments as comments,tbl_comment.application_id application_id,tbl_comment.date as comment_date, ".DBHR.".hrtdesignation.DesignationName, ".DBHR.".hrtpayscale.PayScaleName,tbl_area.area_name
from tbl_accommodation_application 
INNER JOIN ".DBHR.".hrtdesignation On tbl_accommodation_application.designation=".DBHR.".hrtdesignation.DesignationID
INNER JOIN ".DBHR.".hrtpayscale On tbl_accommodation_application.pay_scale=".DBHR.".hrtpayscale.PayScaleID
INNER JOIN tbl_area On tbl_accommodation_application.areas=tbl_area.id
left outer join tbl_comment on tbl_accommodation_application.id = tbl_comment.application_id";

      if($msg == 'new_application'){
		$admin_home = mysqli_query($conn, $query." where tbl_accommodation_application.status=1 order by tbl_comment.id desc limit 1") or die(mysqli_error($conn));
      }elseif($msg == 'pending_application'){

        $admin_home = mysqli_query($conn, $query." where tbl_accommodation_application.status=2 order by tbl_comment.id desc limit 1") or die(mysqli_error($conn));

      }elseif ($msg == 'approved_application') {

        $admin_home = mysqli_query($conn, $query." where tbl_accommodation_application.status=3 order by tbl_comment.id desc limit 1") or die(mysqli_error($conn));

      }elseif ($msg == 'rejected_application') {

        $admin_home = mysqli_query($conn, $query." where tbl_accommodation_application.status=4 order by tbl_comment.id desc limit 1") or die(mysqli_error($conn));

      }

      elseif($msg == 'admin_home'){



        $admin_home = mysqli_query($conn,  $query." where tbl_accommodation_application.status=0") or die(mysqli_error($conn));



      }elseif ($msg == 'feedbacks_from_users') {
        
        $feedback_home = mysqli_query($conn,  "SELECT * from tbl_feedback") or die(mysqli_error($conn));

      }
      else{



        $admin_home = mysqli_query($conn,  $query." where tbl_accommodation_application.status=0") or die(mysqli_error($conn));

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



        <div class="" style="background-color: #f8f9fa; padding: 10px;">



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

            


          <?php if($msg == 'feedbacks_from_users'){?>



            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">

              <thead>

    <tr>

      <th class="th-sm" style="width: 15%">ক্রমিক নং



      </th>

      <th class="th-sm" style="width: 28%">নাম



      </th>

      <th class="th-sm" style="width: 20%">মোবাইল নাম্বার



      </th>

      <th class="th-sm">মতামত



      </th>

      


    </tr>

  </thead>


  <tbody>

    <?php 
    $sl=0;
    while($feedbacks=mysqli_fetch_array($feedback_home)){
      $sl++;
      ?>
    <tr>
      <td><?=$sl?></td>
      <td><?=$feedbacks['name']?></td>
      <td><?=$feedbacks['mobile_no']?></td>
      <td><?=$feedbacks['comments']?></td>
    </tr>

  <?php }?>
  </tbody>

            </table>


          <?php }else{?>


      

          <table id="dtBasicExample" class="table table-striped table-bordered " cellspacing="0" width="100%">

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

      <th class="th-sm">Comments



      </th>



      <!-- <th class="th-sm">Shift to



      </th> -->



      <th class="th-sm">Action



      </th>

    </tr>

  </thead>

  <tbody>



    <?php while($home_result=mysqli_fetch_array($admin_home)){?>

  

    <tr>

      <!-- <form class="form-horizontal" action="update_remove.php?msg=<?=$home_result['id']?>" method="post" enctype="multipart/form-data" data-parsley-validate> -->

      <td><a href="view_application.php?msg_applicant=<?=$home_result['id']?>"><?=$home_result['name']?></a></td>

      <td><?=$home_result['DesignationName']?></td>

      <td><?=date('d-m-Y',strtotime($home_result['joining_date_dept']))?></td>

      <td><?=$home_result['PayScaleName']?></td>

      <td><?=$home_result['present_salary']?></td>

      <td><?=$home_result['area_name']?></td>

      <?php if($msg == 'admin_home' || $msg == ''){?>

        <td>No Comments Available</td>


      <?php }else{?>

      <td><?=$home_result['comments']?></td>

    <?php }?>

      <!-- <td> -->

        <!-- <div class="form-group">

                      

                      <select class="custom-select" id="status" name="status" style="font-size: 12px;"> -->

                        <?php

                      //while($proccat_name=mysqli_fetch_array($result2)){

                        ?>

                        <!-- <option value="1">New Application</option>

                        <option value="2">Pending Application</option>

                        <option value="3">Approved Application</option>

                        <option value="4">Rejected Application</option> -->

                        <!-- <option value="<?=$proccat_name['ID']?>"><?=$proccat_name['ProcCatName']?></option> -->

                        <?php //} ?>

                      <!-- </select>

                    </div> -->

      <!-- </td> -->

      <td><button class="btn btn-success btn-sm" type="button" name="change_status" data-toggle="modal" data-target="#exampleModalChangeStatus<?=$home_result['id']?>" style="font-size: 9px;">Change Status</button></td>



      <div class="modal fade" id="exampleModalChangeStatus<?=$home_result['id']?>" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="false">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Change Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              <div class="modal-body">

                <input type="hidden" name="modal_input" id="modal_input">
                <p id="rooms"></p>

                

                <form action="update_remove.php?msg=<?=$home_result['id']?>" method="post">

                  <div class="form-group">

                      
                    <label>Select Status</label><label style="color: red"> *</label>
                      <select class="custom-select" id="status" name="status" style="font-size: 12px;"> 

                        <?php

                        $app_status = mysqli_query($conn,  "SELECT * from tbl_application_type") or die(mysqli_error($conn));

                      while($statuses=mysqli_fetch_array($app_status)){

                        ?>

                        <option value="<?=$statuses['ID']?>"><?=$statuses['type']?></option>

                    

                        <!-- <option value="<?=$proccat_name['ID']?>"><?=$proccat_name['ProcCatName']?></option> -->

                        <?php } ?>

                      </select>

                    </div>


                    <div class="form-group">
                      <label>Comment</label><label style="color: red"> *</label>
                      <textarea class="form-control" name="comment" required></textarea>
                    </div>


                    <div class="form-group">
                      
                      <button type="submit" class="btn btn-primary" name="btn_submit" style="float: right;">Submit</button>
                    </div>

              </div>

              <p style="text-align: center;color: gray">____________________________________________________________________________________</p>

              <?php 

              $app_id = $home_result['id'];

              $comments_query = mysqli_query($conn,  "SELECT tc.* from tbl_comment as tc where tc.application_id = $app_id order by tc.date desc") or die(mysqli_error($conn));

              $rowcount=mysqli_num_rows($comments_query);

              ?>
              <div class="container">

                <div style="text-align: center">
                <h4 style="font-size: 14px">Comments History</h4>
              </div>

              <?php if($rowcount>0){?>
               
               <div class="row container" style="margin-top: 4%">
                <h6 style="margin-left: 20%;font-size: 12px; text-decoration: underline;">Comments</h6> <p style="margin-left: 20%"></p> <h6 style="margin-left: 20%;font-size: 12px; text-decoration: underline;">Date</h6>
                
              </div>

                <?php
                $sl=0;
                 while($comm=mysqli_fetch_array($comments_query)){
                  $sl++;
                  ?>

                  <p>
                    <?php //$originalDate = "$comm['date']";
                    $newDate = date("d/m/Y", strtotime($comm['date']));
?>
                  </p>
                  <div class="row container">

                    <div style="width: 60%">
                <p style="margin-left: 20%"><?=$sl?> . <?=$comm['comments']?></p></div> <div><p style="margin-left: 20%"></p></div> 
                <div style="width: 30%; text-align: center;">
                <p style="margin-left: 20%;"><?=$newDate?></p>
              </div>
                
              </div>
              <?php }

            }else{

              ?>
              <div style="text-align: center;">
              <h4 style="font-size: 12px;">No Comments Available</h4>
            </div>

              <?php
            }

              ?>

                
                
                
                
                
                <!-- <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button> -->
              </form>
            <?php //}
              ?>
                <!-- <button type="button" style="background-color: red" class="btn btn-secondary" name="no[]" data-dismiss="modal">No</button> -->
              </div>
            </div>
          </div>
        </div>



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


<?php }?>





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



