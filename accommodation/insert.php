<?php 
include 'config/connection.php';

if(isset($_POST['submit']) ){


	$name = $_POST['name'];
	$fathers_name = $_POST['fathers_name'];
	$mothers_name = $_POST['mothers_name'];
	$marital_status = $_POST['marital_status'];
	$spouse_name = $_POST['spouse_name'];
	$no_of_family_members = $_POST['no_of_family_members'];
	$mobile_number = $_POST['mobile_number'];
	$email = $_POST['email'];
	$designation = $_POST['designation'];
    $nid = $_POST['nid'];


    $in_the_department = $_POST['in_the_department'];
    $in_present_posting = $_POST['in_present_posting'];
    $pay_scale = $_POST['pay_scale'];
    $present_salary = $_POST['present_salary'];
    $pay_including_special_pay_of_any = $_POST['pay_including_special_pay_of_any'];



    $house_owned_by = $_POST['house_owned_by'];
    $legally_separated = $_POST['legally_separated'];
    $date_of_completion_first_letting_unit = $_POST['date_of_completion_first_letting_unit'];
    $loan_govt = $_POST['loan_govt'];
    $loan_amount = $_POST['loan_amount'];
    $loan_date = $_POST['loan_date'];
    $loan_house_building = $_POST['loan_house_building'];
    $loan_house_building_amount = $_POST['loan_house_building_amount'];
    $loan_house_building_date = $_POST['loan_house_building_date'];
    $house_allotted = $_POST['house_allotted'];
    $accommodation_arrangement = $_POST['accommodation_arrangement'];
    $areas_where_he_wants = $_POST['areas_where_he_wants'];
    $pointy_1 = $_POST['pointy_1'];
    $pointy_2 = $_POST['pointy_2'];
    $pointy_3 = $_POST['pointy_3'];
    $date = $_POST['date'];
    $evicted_resident = $_POST['evicted_resident'];
    $remarks = $_POST['remarks'];



    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $update_date = date("Y-m-d");

    /*$file1 = $_POST['file1'];
    $file2 = $_POST['file2'];
    $file3 = $_POST['file3'];
    $file4 = $_POST['file4'];
    $file5 = $_POST['file5'];*/

    
    //for ($n=0;$n<count($_POST['contractor_id']);$n++){

    	 //$c_id = $_POST['contractor_id'][$n];
            //$c_share = $_POST['contractor_share'][$n];

         //$c_id = implode(",",$contractor_name);

         /*for ($i=0; $i <count($_POST['contractor_id']) ; $i++) { 
            $co_name[] = $_POST['contractor_id'][$i];
             $co_share[] = $_POST['contractor_share'][$i];


         }*/
         /*$c_id = implode(",",$contractor_name);
         $c_share = implode(",",$contractor_share);*/

         $img1 = '';
         $img2 = '';
         $img3 = '';
         $img4 = '';
         $img5 = '';

        
       
        //if (count($_FILES['student_image']['tmp_name'])>0) {
        
        if($_FILES['file1']['name'] && $_FILES['file2']['name'] && $_FILES['file3']['name'] && $_FILES['file4']['name'] && $_FILES['file5']['name']){
          if(is_array($_FILES)){
        
        
        //foreach ($_FILES['student_image']['tmp_name'] as $key => $image) {
        //for($n=0;$n<count($_FILES['student_image']['tmp_name']);$n++){
            $imageName1 = $_FILES['file1']['name'];
            $imageName2 = $_FILES['file2']['name'];
            $imageName3 = $_FILES['file3']['name'];
            $imageName4 = $_FILES['file4']['name'];
            $imageName5 = $_FILES['file5']['name'];
            
            $imageTmpName1 = $_FILES['file1']['tmp_name'];
            $imageTmpName2 = $_FILES['file2']['tmp_name'];
            $imageTmpName3 = $_FILES['file3']['tmp_name'];
            $imageTmpName4 = $_FILES['file4']['tmp_name'];
            $imageTmpName5 = $_FILES['file5']['tmp_name'];

            $fileSize1 = $_FILES['file1']['size'];
            $fileSize2 = $_FILES['file2']['size'];
            $fileSize3 = $_FILES['file3']['size'];
            $fileSize4 = $_FILES['file4']['size'];
            $fileSize5 = $_FILES['file5']['size'];

            $fileError1 = $_FILES['file1']['error'];
            $fileError2 = $_FILES['file2']['error'];
            $fileError3 = $_FILES['file3']['error'];
            $fileError4 = $_FILES['file4']['error'];
            $fileError5 = $_FILES['file5']['error'];

            $fileType1 = $_FILES['file1']['type'];
            $fileType2 = $_FILES['file2']['type'];
            $fileType3 = $_FILES['file3']['type'];
            $fileType4 = $_FILES['file4']['type'];
            $fileType5 = $_FILES['file5']['type'];

            $fileExt1 = explode('.', $imageName1);
            $fileExt2 = explode('.', $imageName2);
            $fileExt3 = explode('.', $imageName3);
            $fileExt4 = explode('.', $imageName4);
            $fileExt5 = explode('.', $imageName5);


            $fileActualExt1 = strtolower(end($fileExt1));
            $fileActualExt2 = strtolower(end($fileExt2));
            $fileActualExt3 = strtolower(end($fileExt3));
            $fileActualExt4 = strtolower(end($fileExt4));
            $fileActualExt5 = strtolower(end($fileExt5));

            $allowed = array('png','jpeg','jpg');

            if (in_array($fileActualExt1, $allowed)) {
                if ($fileError1 === 0) {
                    if ($fileSize1 < 9999999999999999999) {
                        $img1 .= $imageName1;

                        $directory1 = 'assets/files/';

                        $directory11 = 'assets/files/'.$img1;

                        $result1 = move_uploaded_file($imageTmpName1, $directory1.$imageName1);

                    

                        

                    } else{
                       
                    
                        $msg_file1 = "Your file is too large!";
                        header("Location: application_for_accommodation.php?msg_error=".$msg_file1);

                      
                    }
                } else{

                
            
                    $msg_file11 = "There was an error uploading file!";
                        header("Location: application_for_accommodation.php?msg_error=".$msg_file11);

                   
                }
                
            } else{
               
            
                $msg_file21 = "You cannot upload this type of file!";
                header("Location: application_for_accommodation.php?msg_error=".$msg_file21);

            
            }



            if (in_array($fileActualExt2, $allowed)) {
                if ($fileError2 === 0) {
                    if ($fileSize2 < 9999999999999999999) {
                        $img2 .= $imageName2;

                        $directory2 = 'assets/files/';

                        $directory21 = 'assets/files/'.$img2;

                        $result2 = move_uploaded_file($imageTmpName2, $directory2.$imageName2);

                    

                        

                    } else{
                       
                    
                        $msg_file2 = "Your file is too large!";
                        header("Location: application_for_accommodation.php?msg_error=".$msg_file2);

                      
                    }
                } else{

                
            
                    $msg_file12 = "There was an error uploading file!";
                        header("Location: application_for_accommodation.php?msg_error=".$msg_file12);

                   
                }
                
            } else{
               
            
                $msg_file22 = "You cannot upload this type of file!";
                header("Location: application_for_accommodation.php?msg_error=".$msg_file22);

            
            }

            if (in_array($fileActualExt3, $allowed)) {
                if ($fileError3 === 0) {
                    if ($fileSize3 < 9999999999999999999) {
                        $img3 .= $imageName3;

                        $directory3 = 'assets/files/';

                        $directory31 = 'assets/files/'.$img3;

                        $result3 = move_uploaded_file($imageTmpName3, $directory3.$imageName3);

                    

                        

                    } else{
                       
                    
                        $msg_file3 = "Your file is too large!";
                        header("Location: application_for_accommodation.php?msg_error=".$msg_file3);

                      
                    }
                } else{

                
            
                    $msg_file13 = "There was an error uploading file!";
                        header("Location: application_for_accommodation.php?msg_error=".$msg_file13);

                   
                }
                
            } else{
               
            
                $msg_file23 = "You cannot upload this type of file!";
                header("Location: application_for_accommodation.php?msg_error=".$msg_file23);

            
            }

            if (in_array($fileActualExt4, $allowed)) {
                if ($fileError4 === 0) {
                    if ($fileSize4 < 9999999999999999999) {
                        $img4 .= $imageName4;

                        $directory4 = 'assets/files/';

                        $directory41 = 'assets/files/'.$img4;

                        $result4 = move_uploaded_file($imageTmpName4, $directory4.$imageName4);

                    

                        

                    } else{
                       
                    
                        $msg_file4 = "Your file is too large!";
                        header("Location: application_for_accommodation.php?msg_error=".$msg_file4);

                      
                    }
                } else{

                
            
                    $msg_file14 = "There was an error uploading file!";
                        header("Location: application_for_accommodation.php?msg_error=".$msg_file14);

                   
                }
                
            } else{
               
            
                $msg_file24 = "You cannot upload this type of file!";
                header("Location: application_for_accommodation.php?msg_error=".$msg_file24);

            
            }


            if (in_array($fileActualExt5, $allowed)) {
                if ($fileError5 === 0) {
                    if ($fileSize5 < 9999999999999999999) {
                        $img5 .= $imageName5;

                        $directory5 = 'assets/files/';

                        $directory51 = 'assets/files/'.$img5;

                        $result5 = move_uploaded_file($imageTmpName5, $directory5.$imageName5);

                    

                        

                    } else{
                       
                    
                        $msg_file5 = "Your file is too large!";
                        header("Location: application_for_accommodation.php?msg_error=".$msg_file5);

                      
                    }
                } else{

                
            
                    $msg_file15 = "There was an error uploading file!";
                        header("Location: application_for_accommodation.php?msg_error=".$msg_file15);

                   
                }
                
            } else{
               
            
                $msg_file25 = "You cannot upload this type of file!";
                header("Location: application_for_accommodation.php?msg_error=".$msg_file25);

            
            }

            $status = 0;


            if($loan_date=='' && $loan_house_building_date==''){
                
                $loan_date1 = date("0000-00-00");
                $loan_house_building_date1 = date("0000-00-00");
                
            }elseif($loan_date=='' && $loan_house_building_date!=''){
                
                $loan_date1 = date("0000-00-00");
                $loan_house_building_date1 = $loan_house_building_date;
                
            }elseif($loan_date!='' && $loan_house_building_date==''){
                
                $loan_date1 = $loan_date;
                $loan_house_building_date1 = date("0000-00-00");
                
            }elseif($loan_date!='' && $loan_house_building_date!=''){
                
                $loan_date1 = $loan_date;
                $loan_house_building_date1 = $loan_house_building_date;
            }


            $application_query = "INSERT INTO tbl_accommodation_application 
                    SET 
                        `name` = '{$name}',
                        `email` = '{$email}',
                        `designation` = '{$designation}',
                        `nid` = '{$nid}',
                        `fathers_name` = '{$fathers_name}',
                        `mothers_name` = '{$mothers_name}',
                        `marital_status` = '{$marital_status}',
                        `mobile_number` = '{$mobile_number}',
                        `spouse_name` = '{$spouse_name}',
                        `number_of_family_members` = '{$no_of_family_members}',
                        `joining_date_dept` = '{$in_the_department}',
                        `joining_letter` = '{$directory21}',
                        `photo` = '{$directory11}',
                        `executive_engineer` = '{$directory31}',
                        `superintending_engineer` = '{$directory41}',
                        `signature` = '{$directory51}',
                        `joining_date_present` = '{$in_present_posting}',
                        `pay_scale` = '{$pay_scale}',
                        `present_salary` = '{$present_salary}',
                        `special_pay` = '{$pay_including_special_pay_of_any}',
                        `house_owned_by` = '{$house_owned_by}',
                        `legally_separated` = '{$legally_separated}',
                        `date_of_completion_of_letting_unit` = '{$date_of_completion_first_letting_unit}',
                        `loan_obtained_from_govt` = '{$loan_govt}',
                        `loan_obtained_from_govt_amount` = '{$loan_amount}',
                        `loan_obtained_from_govt_date` = '{$loan_date1}',
                        `loan_obtained_house_building` = '{$loan_house_building}',
                        `loan_obtained_house_building_amount` = '{$loan_house_building_amount}',
                        `loan_obtained_house_building_date` = '{$loan_house_building_date1}',
                        `allotted_flat` = '{$house_allotted}',
                        `accommodation_arraignment` = '{$accommodation_arrangement}',
                        `areas` = '{$areas_where_he_wants}',
                        `get_house_one` = '{$pointy_1}',
                        `get_house_two` = '{$pointy_2}',
                        `get_house_three` = '{$pointy_3}',
                        `date` = '{$date}',
                        `password` = '{$password}',
                        `confirm_password` = '{$confirm_password}',
                        `update_date` = '{$update_date}',
                        `status` = '{$status}',
                        `evicted_resident` = '{$evicted_resident}',
                        `remarks` = '{$remarks}'
                        
                      
                ";

            

        $application = mysqli_query($conn, $application_query);


        $msg = "The application has been added successfully!";
    //echo 'Inser successfully';
    header("Location: application_for_accommodation.php?msg=".$msg);


        }

    }/*else{


        $msg1 = $_GET['msg'];

                $profileQuery = "UPDATE tbl_user_profile 
                    SET 
                        `name` = '{$name}',
                        `designation` = '{$designation}',
                        `OfficeID` = '{$OfficeID}',
                        `office_address` = '{$office_address}',
                        `signature` = '{$sig_file}'
                       
                      where id = $msg1
                ";


                $profile = mysqli_query($conn, $profileQuery);


        $msg = "The profile has been edited successfully!";
        header("Location: edit_profile.php?msg=".$msg);
    }*/



         

          

        

        //echo $application_query;


    //}



        /*$lastID = $connection->lastInsertID();
        $contract_id=$lastID;*/





}




if(isset($_POST['submit_feedback']) ){


    $name = $_POST['name'];
    $mobile_no = $_POST['mobile_no'];
    $comments = $_POST['comments'];



    $feedback_query = "INSERT INTO tbl_feedback 
                    SET 
                        `name` = '{$name}',
                        `mobile_no` = '{$mobile_no}',
                        `comments` = '{$comments}'
                        
                      
                ";

            

        $feedback = mysqli_query($conn, $feedback_query);

        $msg = "The feedback has been submitted successfully!";
    //echo 'Inser successfully';
    header("Location: feedback.php?msg=".$msg);


    }


?>