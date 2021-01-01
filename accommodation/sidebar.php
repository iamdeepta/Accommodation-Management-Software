<!-- Sidebar -->

<style type="text/css">
  .list-group-item-action{font-family: Verdana, SolaimanLipi;}
  .
</style>

<?php

if (@$_SESSION["flag"] != "ok")

    {

?>

    <div class="bg-light border-right" id="sidebar-wrapper">

      <!-- <div class="sidebar-heading">Start Bootstrap </div> -->

      <div class="list-group list-group-flush" id="sidebar-activity">

        <a href="index.php" class="list-group-item list-group-item-action bg-light"><i style='font-size:12px; margin-right: 5px;' class='fas'>&#xf015;</i>হোম </a>

        <a target="_blank" href="assets/files/1035.pdf" class="list-group-item list-group-item-action bg-light"><i style='font-size:12px; margin-right: 5px;' class='fas'>&#xf15c;</i>বিদ্যমান থাকার ব্যবস্থা</a>

        <a target="_blank" href="assets/files/1035.pdf" class="list-group-item list-group-item-action bg-light"><i style='font-size:12px; margin-right: 5px;' class='fas'>&#xf15c;</i>খালি আবাসন</a>

        <a href="application_for_accommodation.php" class="list-group-item list-group-item-action bg-light"><i style='font-size:12px; margin-right: 5px;' class='fas'>&#xf15c;</i>অনলাইন আবেদন</a>

        <a href="feedback.php" class="list-group-item list-group-item-action bg-light"><i style='font-size:12px; margin-right: 5px;' class='fas'>&#xf15c;</i>মতামত</a>

        <a href="contact_us.php" class="list-group-item list-group-item-action bg-light"><i style='font-size:12px; margin-right: 5px;' class='fas'>&#xf15c;</i>যোগাযোগ করুন</a>

        <a href="#" class="list-group-item list-group-item-action bg-light" style="height: 0%; display: none;"></a>

      </div>

      

    

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.424266306488!2d90.40296971441526!3d23.732245484598263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f19b456103%3A0xd7df9c7313b563fb!2sPublic%20Works%20Department%2C%20Purta%20Bhaban!5e0!3m2!1sen!2sbd!4v1603095651791!5m2!1sen!2sbd" width="235" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>











    </div>



  <?php }else{



    $home_app = mysqli_query($conn, "SELECT count(id) as count from tbl_accommodation_application where status=0") or die(mysqli_error($conn));

    $home_app_result=mysqli_fetch_array($home_app);







    $new_app = mysqli_query($conn, "SELECT count(id) as count from tbl_accommodation_application where status=1") or die(mysqli_error($conn));

    $new_app_result=mysqli_fetch_array($new_app);







    $pending_app = mysqli_query($conn, "SELECT count(id) as count from tbl_accommodation_application where status=2") or die(mysqli_error($conn));

    $pending_app_result=mysqli_fetch_array($pending_app);







    $approved_app = mysqli_query($conn, "SELECT count(id) as count from tbl_accommodation_application where status=3") or die(mysqli_error($conn));

    $approved_app_result=mysqli_fetch_array($approved_app);







    $rejected_app = mysqli_query($conn, "SELECT count(id) as count from tbl_accommodation_application where status=4") or die(mysqli_error($conn));

    $rejected_app_result=mysqli_fetch_array($rejected_app);



    $feedbacks_count = mysqli_query($conn, "SELECT count(id) as count from tbl_feedback") or die(mysqli_error($conn));

    $count_feedbacks=mysqli_fetch_array($feedbacks_count);





    ?>



    <div class="bg-light border-right" id="sidebar-wrapper">

      <!-- <div class="sidebar-heading">Start Bootstrap </div> -->

      <div class="list-group list-group-flush" id="sidebar-activity">

        <a href="admin_home.php?msg_panel=<?php echo 'admin_home';?>" class="list-group-item list-group-item-action bg-light"><i style='font-size:12px; margin-right: 5px;' class='fas'>&#xf015;</i>Home<button class="btn btn-success" style="border-radius: 30px;height: 22px; width: 10px;margin-left: 12%;float: right;"><p <?php if($home_app_result['count']<10){?> style="margin-top: -4px; margin-left: -3px; font-size: 10px;" <?php }elseif($home_app_result['count']>=10){?> style="margin-top: -4px; margin-left: -6px; font-size: 10px;"<?php }?>><?=$home_app_result['count']?></p></button></a>



        <a href="admin_home.php?msg_panel=<?php echo 'new_application';?>" class="list-group-item list-group-item-action bg-light"><i style='font-size:12px; margin-right: 5px;' class='fas'>&#xf15c;</i>New Application<button class="btn btn-success" style="border-radius: 30px;height: 22px; width: 10px;margin-left: 12%;float: right;"><p <?php if($new_app_result['count']<10){?> style="margin-top: -4px; margin-left: -3px; font-size: 10px;" <?php }elseif($new_app_result['count']>=10){?> style="margin-top: -4px; margin-left: -6px; font-size: 10px;"<?php }?>><?=$new_app_result['count']?></p></button></a>



        <a href="admin_home.php?msg_panel=<?php echo 'pending_application';?>" class="list-group-item list-group-item-action bg-light"><i style='font-size:12px; margin-right: 5px;' class='fas'>&#xf15c;</i>Pending Application<button class="btn btn-success" style="border-radius: 30px;height: 22px; width: 10px;margin-left: 12%;float: right;"><p <?php if($pending_app_result['count']<10){?> style="margin-top: -4px; margin-left: -3px; font-size: 10px;" <?php }elseif($pending_app_result['count']>=10){?> style="margin-top: -4px; margin-left: -6px; font-size: 10px;"<?php }?>><?=$pending_app_result['count']?></p></button></a>



        <a href="admin_home.php?msg_panel=<?php echo 'approved_application';?>" class="list-group-item list-group-item-action bg-light"><i style='font-size:12px; margin-right: 5px;' class='fas'>&#xf15c;</i>Approved Application<button class="btn btn-success" style="border-radius: 30px;height: 22px; width: 10px;margin-left: 12%; float: right;"><p <?php if($approved_app_result['count']<10){?> style="margin-top: -4px; margin-left: -3px; font-size: 10px;" <?php }elseif($approved_app_result['count']>=10){?> style="margin-top: -4px; margin-left: -6px; font-size: 10px;"<?php }?>><?=$approved_app_result['count']?></p></button></a>



        <a href="admin_home.php?msg_panel=<?php echo 'rejected_application';?>" class="list-group-item list-group-item-action bg-light"><i style='font-size:12px; margin-right: 5px;' class='fas'>&#xf15c;</i>Archived Application<button class="btn btn-success" style="border-radius: 30px;height: 22px; width: 10px;margin-left: 12%; float: right;"><p <?php if($rejected_app_result['count']<10){?> style="margin-top: -4px; margin-left: -3px; font-size: 10px;" <?php }elseif($rejected_app_result['count']>=10){?> style="margin-top: -4px; margin-left: -6px; font-size: 10px;"<?php }?>><?=$rejected_app_result['count']?></p></button></a>



        <a href="search_application.php" class="list-group-item list-group-item-action bg-light"><i style='font-size:12px; margin-right: 5px;' class='fas'>&#xf15c;</i>Search Application</a>



        <a href="admin_home.php?msg_panel=<?php echo 'feedbacks_from_users';?>" class="list-group-item list-group-item-action bg-light"><i style='font-size:12px; margin-right: 5px;' class='fas'>&#xf15c;</i>Feedbacks from Users</a>


        <a href="logout.php" class="list-group-item list-group-item-action bg-light" ><b>Logout</b></a>

      </div>

      

    

     







    </div>



  <?php }?>

    <!-- /#sidebar-wrapper -->

