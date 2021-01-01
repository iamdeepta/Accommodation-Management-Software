<?php 

session_start();

include 'config/connection.php';



if(isset($_POST['btn_submit']) && $_SESSION["flag"] == "ok"){



    $msg = $_GET['msg'];





	$status = $_POST['status'];
    $comment = $_POST['comment'];



    $update_date = date("Y-m-d");



    

          



        $status_update_query = "UPDATE tbl_accommodation_application 

                    SET 

                        

                        

                        `status` = '{$status}'

                        

                      WHERE id = $msg

                ";



            



        $status = mysqli_query($conn, $status_update_query);




        $status_insert_query = "INSERT INTO tbl_comment 

                    SET 

                        

                        `date` = '{$update_date}',

                        `application_id` = '{$msg}',
                        `comments` = '{$comment}'


                ";



            



        $status_insert = mysqli_query($conn, $status_insert_query);





        $admin_home1 = mysqli_query($conn, "SELECT * from tbl_accommodation_application where id = $msg") or die(mysqli_error($conn));



        $home1=mysqli_fetch_array($admin_home1);



        





	$msg_success = "The application of ".$home1['name']." has been shifted successfully!";

    //echo 'Inser successfully';

	header("Location: admin_home.php?msg_success=".$msg_success);





}





?>