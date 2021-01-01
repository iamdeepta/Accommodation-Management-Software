<!DOCTYPE html>

<html lang="en">

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

<head>



  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">
  </head>
<?php
session_start();
require("config/connection.php");

$msg = $_GET['msg_applicant'];

  //$last_id = mysqli_insert_id($conn);

/*$last_id = $conn->insert_id;

  echo $last_id;*/
$app_pdf_result = mysqli_query($conn,"SELECT tbl_accommodation_application.*, ".DBHR.".hrtdesignation.DesignationName, ".DBHR.".hrtpayscale.PayScaleName,tbl_area.area_name
from tbl_accommodation_application 
INNER JOIN ".DBHR.".hrtdesignation On tbl_accommodation_application.designation=".DBHR.".hrtdesignation.DesignationID
INNER JOIN ".DBHR.".hrtpayscale On tbl_accommodation_application.pay_scale=".DBHR.".hrtpayscale.PayScaleID
INNER JOIN tbl_area On tbl_accommodation_application.areas=tbl_area.id where tbl_accommodation_application.id = $msg
 ") or die(mysqli_error($conn));

//where id=$msg  --tbl_area.area_name --- INNER JOIN tbl_area On tbl_accommodation_application.areas=tbl_area.id

  



  while($app_result=mysqli_fetch_array($app_pdf_result)){



    $name = $app_result['name'];

    $email = $app_result['email'];

    $designation = $app_result['DesignationName'];

    $fathers_name = $app_result['fathers_name'];

    $mothers_name = $app_result['mothers_name'];

    $joining_date_dept = $app_result['joining_date_dept'];

    $joining_date_present = $app_result['joining_date_present'];

    $pay_scale = $app_result['PayScaleName'];

    $present_salary = $app_result['present_salary'];

    $special_pay = $app_result['special_pay'];

    $marital_status = $app_result['marital_status'];

    $mobile_number = $app_result['mobile_number'];

    $spouse_name = $app_result['spouse_name'];

    $number_of_family_members = $app_result['number_of_family_members'];

    $house_owned_by = $app_result['house_owned_by'];

    $legally_separated = $app_result['legally_separated'];

    $date_of_completion_of_letting_unit = $app_result['date_of_completion_of_letting_unit'];

    $loan_obtained_from_govt = $app_result['loan_obtained_from_govt'];

    $loan_obtained_from_govt_amount = $app_result['loan_obtained_from_govt_amount'];

    $loan_obtained_from_govt_date = $app_result['loan_obtained_from_govt_date'];

    $loan_obtained_house_building = $app_result['loan_obtained_house_building'];

    $loan_obtained_house_building_amount = $app_result['loan_obtained_house_building_amount'];

    $loan_obtained_house_building_date = $app_result['loan_obtained_house_building_date'];

    $allotted_flat = $app_result['allotted_flat'];

    $accommodation_arraignment = $app_result['accommodation_arraignment'];

    $areas = $app_result['area_name'];

    $get_house_one = $app_result['get_house_one'];

    $get_house_two = $app_result['get_house_two'];

    $get_house_three = $app_result['get_house_three'];

    $date = $app_result['date'];





    $photo = $app_result['photo'];

    $joining_letter = $app_result['joining_letter'];

    $executive_engineer = $app_result['executive_engineer'];

    $superintending_engineer = $app_result['superintending_engineer'];

    $signature = $app_result['signature'];



    $uniq = uniqid(rand(1,2000));





  }







/*function fetch_data(){

  require("config/connection.php");



$office_id = $_SESSION['OfficeID'];

  $msg = $_GET['msg'];



  $output = '';



        

        $works_pdf_result = mysqli_query($conn,"SELECT con.*, te.*, tp.* from tbl_experience as te left outer join tbl_contractor as con on te.contractor_id = con.ID left outer join tbl_proccategory as tp on tp.ID = te.proccat_id where te.OfficeID = $office_id and te.certificate_type_status = 2 and te.id = $msg ") or die(mysqli_error($conn));



 



       



                          while($works_result=mysqli_fetch_array($works_pdf_result)){



                      $output .='



                            <tr>

                            



                            <td>'.$works_result["ContractorName"].'</td>

                            

                          

                          </tr>';

                         

                         

}



  

    return $output;

}*/







//if (isset($_POST['view_validate_certificate'])) {

?>

            

<div style="width:750px; margin:auto; border: 1px solid;background-image: url('assets/images/watermark.png');">



                    <table border="0" cellspacing="0" cellpadding="3" style = "border-collapse: collapse; width:100%;">

                    <tr>

                   

                      <td style="font-size: 12px; text-align:center;"><img src="assets/images/favicon.png" style="height:60px; width:60px;display:block; margin: 0 auto"></td>

                    </tr>


                    <tr>
                      <td style="text-align: center;font-size: 14px; font-weight: bold">বাসা/বাড়ি বরাদ্দের আবেদনপত্র</td>
                    </tr>

                    

                    </table>



                    <hr>

                    

                    

                    



                    <table border="0" cellspacing="0" cellpadding="3" style="width:100%;">

                    <tr>

                      

                      <td style="width:41%; font-size: 12px; padding-left:20px;"></td>

                      <td style="width:50%; font-size: 12px;  padding-right:20px;"><img src="<?=$photo?>" style="height: 120px; width: 120px; float: right;"></td>

                    </tr>



                    <tr>

                      

                      <td style="width:41%; font-size: 12px; padding-left:20px;"></td>

                      <td style="width:50%; font-size: 12px;  padding-right:30px;"><a target="_blank" href="<?=$photo?>" style="text-decoration: none;float: right;">ডাউনলোড</a></td>

                    </tr>

                    </table>





<?php //if($loan_obtained_house_building=='no' || $loan_obtained_from_govt=='no'){?>
      <!-- <table border="0" cellspacing="0" cellpadding="3" style = "border-collapse: collapse; margin-left:80px;margin-top: 3%;"> -->

      <?php //}else{?>

        <table border="0" cellspacing="0" cellpadding="3" style = "border-collapse: collapse; margin-left:80px;margin-top: -19%;width: 85%">

        <?php //}?>




      <tr style="border-left: 1px solid #d4d4d4; border-top: 1px solid #d4d4d4;">

          <td colspan="2"></td>

           <td style="font-size: 12px;font-weight: bold">০১.</td>                 

           <td style="font-size: 12px;font-weight: bold;">ব্যক্তিগত তথ্য</td>
           <td></td>                                                  
                                                            
           <td style="border-right: 1px solid #d4d4d4"></td>                                                  


      </tr>




      <tr style="border-left: 1px solid #d4d4d4;">

        <td colspan="2"></td>

           <td style=" border-bottom: none"></td>                 

           <td style="font-size: 12px;">নাম </td>                 

           <td style=" text-align: center">:</td>                 

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$name?></td>                 

          

      </tr>

      <tr style="border-left: 1px solid #d4d4d4;">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">পিতার নাম</td>                 

           <td style=" text-align: center">:</td>                 

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$fathers_name?></td>                 

          

      </tr>

      <tr style="border-left: 1px solid #d4d4d4;">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">মাতার নাম</td>                 

           <td style=" text-align: center">:</td>                 

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$mothers_name?></td>                 

          

      </tr>

      <tr style="border-left: 1px solid #d4d4d4;"> 

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">বৈবাহিক অবস্থা</td>                 

           <td style=" text-align: center">:</td>                 

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$marital_status?></td>                 

          

      </tr>



      <tr style="border-left: 1px solid #d4d4d4;">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">স্বামী / স্ত্রী নাম</td>                 

           <td style=" text-align: center">:</td>                 

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$spouse_name?></td>                 

          

      </tr>



      <tr style="border-left: 1px solid #d4d4d4;">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">পরিবারের সদস্য সংখ্যা</td>                 

           <td style=" text-align: center">:</td>                 

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$number_of_family_members?></td>                 

          

      </tr>



      <tr style="border-left: 1px solid #d4d4d4;">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">মোবাইল নম্বর </td>                 

           <td style=" text-align: center">:</td>                 

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$mobile_number?></td>                 

          

      </tr>



      <tr style="border-left: 1px solid #d4d4d4;">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">ইমেল </td>                 

           <td style=" text-align: center">:</td>                 

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$email?></td>                 

          

      </tr>



      <tr style="border-left: 1px solid #d4d4d4;border-bottom: 1px solid #d4d4d4">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">পদবী </td>                 

           <td style=" text-align: center">:</td>                 

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4;"><?=$designation?></td>                 

          

      </tr>




<?php for($i=0; $i<5; $i++){?>

<tr>

  <td></td>

  

</tr>

<?php }?>





      <tr style="border-left: 1px solid #d4d4d4; border-top: 1px solid #d4d4d4;">

          <td colspan="2"></td>

           <td style="font-size: 12px;font-weight: bold">০২.</td>                 

           <td style="font-size: 12px;font-weight: bold">অফিস (দপ্তর) সংক্রান্ত তথ্য</td>
           <td></td>
           <td style="border-right: 1px solid #d4d4d4"></td>                                                  

          

      </tr>



      <tr style="border-left: 1px solid #d4d4d4;">

        <td colspan="2"></td>

           <td style=" border-bottom: none"></td>                 

           <td style="font-size: 12px;">যোগদানের তারিখ (দপ্তর / বিভাগ / শাখা)</td>                 

           <td style=" text-align: center">:</td>                 

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$joining_date_dept?></td>                 

          

      </tr>

      <tr style="border-left: 1px solid #d4d4d4;">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">যোগদানের তারিখ (বর্তমান অবস্থান)</td>                 

           <td style=" text-align: center">:</td>                 

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$joining_date_present?></td>                 

          

      </tr>



      <tr style="border-left: 1px solid #d4d4d4;">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">যোগদান চিঠি আপলোড</td>                 

           <td style=" text-align: center">:</td>                 

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><a target="_blank" href="<?=$joining_letter?>" style="text-decoration: none;">ডাউনলোড</a></td>                 

          

      </tr>



      <tr style="border-left: 1px solid #d4d4d4;">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">বেতন স্কেল </td>                 

           <td style=" text-align: center">:</td>                 

           <td style="font-size: 12px; border-right: 1px solid #d4d4d4"><?=$pay_scale?></td>                 

          

      </tr>

      <tr style="border-left: 1px solid #d4d4d4;">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">বর্তমান বেতন</td>                 

           <td style=" text-align: center">:</td>                 

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$present_salary?></td>                 

          

      </tr>



      <tr style="border-left: 1px solid #d4d4d4;border-bottom: 1px solid #d4d4d4">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">যে কোন বিশেষ বেতন</td>                 

           <td style=" text-align: center">:</td>                 

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$special_pay?></td>                 

          

      </tr>







<?php for($i=0; $i<5; $i++){?>

<tr>

  <td></td>

  

</tr>

<?php }?>



      <tr style="border-left: 1px solid #d4d4d4; border-top: 1px solid #d4d4d4;">

          <td colspan="2"></td>

           <td style="font-size: 12px;font-weight: bold">০৩.</td>                 

           <td style="font-size: 12px;font-weight: bold">বাসস্থান সম্পর্কিত তথ্য</td>
           <td></td>  
           <?php if($loan_obtained_house_building=='no' || $loan_obtained_from_govt=='no'){?>                                                
                                                
           <?php }else{?>   
            <td></td>  
            <td></td>  
           <?php }?>        
           <td style="border-right: 1px solid #d4d4d4"></td>                                                  

          

      </tr>



      <tr style="border-left: 1px solid #d4d4d4">

        <td colspan="2"></td>

           <td style=" border-bottom: none"></td>                 

           <td style="font-size: 12px;">যে কোনও বাড়ি /ঢাকা নারায়ণগঞ্জে বাড়ি /মালিকানাধীন </td>                 

           <td style=" text-align: center">:</td>                 

            

           <?php if($loan_obtained_house_building=='no' || $loan_obtained_from_govt=='no'){?>   

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$house_owned_by?></td>                                             
                                                
           <?php }else{?>   
            <td style="font-size: 12px;"><?=$house_owned_by?></td>
            <td></td>  
            <td style="border-right: 1px solid #d4d4d4"></td>  
           <?php }?>                 

          

      </tr>

      <tr style="border-left: 1px solid #d4d4d4">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">আইনগত ভাবে আলাদা</td>                 

           <td style=" text-align: center">:</td>                 

            

            <?php if($loan_obtained_house_building=='no' || $loan_obtained_from_govt=='no'){?>  

            <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$legally_separated?></td>                                              
                                                
           <?php }else{?>   
            <td style="font-size: 12px;"><?=$legally_separated?></td>
            <td></td>  
            <td style="border-right: 1px solid #d4d4d4"></td>  
           <?php }?>

          

      </tr>

      <tr style="border-left: 1px solid #d4d4d4">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">তারিখ/প্রথম লেটিং ইউনিট সমাপ্তির তারিখ/ যেমন বাড়ি ইউনিট/বাড়ি</td>                 

           <td style=" text-align: center">:</td>                 

           

           <?php if($loan_obtained_house_building=='no' || $loan_obtained_from_govt=='no'){?>

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$date_of_completion_of_letting_unit?></td>                                                
                                                
           <?php }else{?>  
           <td style="font-size: 12px;"><?=$date_of_completion_of_letting_unit?></td> 
            <td></td>  
            <td style="border-right: 1px solid #d4d4d4"></td>  
           <?php }?>                 

          

      </tr>

      <tr style="border-left: 1px solid #d4d4d4">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;width: 60%">সরকার থেকে কোন ঋণ গৃহীত হয়েছিল কিনা। এই জাতীয় বাড়ি / ঘর নির্মাণের জন্য (ঋণের পরিমাণ এবং তারিখ)</td>                 

           <td style=" text-align: center">:</td> 

           <?php if($loan_obtained_from_govt=='no'){?>                

           <td style="font-size: 12px;width: 5%;border-right: 1px solid #d4d4d4"><?=$loan_obtained_from_govt?></td> 

         <?php }else{?>

          <td style="font-size: 12px;width: 5%;"><?=$loan_obtained_from_govt?></td>

         <?php }?>

           <?php if($loan_obtained_from_govt=='no'){?>  

            <td style="width: 8%"></td>
            <td style="width: 15%;border-right: 1px solid #d4d4d4"></td>

           <?php }else{?>              

           <td style="font-size: 12px;width: 15%">পরিমাণ: <?=$loan_obtained_from_govt_amount?></td>                 

           <td style="font-size: 12px;width: 18%;border-right: 1px solid #d4d4d4">তারিখ: <?=$loan_obtained_from_govt_date?></td> 

           <?php }?>              

          

      </tr>





      <tr style="border-left: 1px solid #d4d4d4">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;width: 60%">কোনও ঋণ হাউস বিল্ডিং ফিনান্সের  পক্ষে অথবা অন্য কোনও এজেন্সি কর্তৃক গৃহীত হয়েছিল/বাড়ি. (ঋণ পরিমাণ লক্ষ টাকা এবং তারিখ)</td>                 

           <td style=" text-align: center">:</td> 

           <?php if($loan_obtained_house_building=='no'){?>                

           <td style="font-size: 12px;width: 5%;border-right: 1px solid #d4d4d4"><?=$loan_obtained_house_building?></td> 

           <?php }else{?> 

            <td style="font-size: 12px;width: 5%;"><?=$loan_obtained_house_building?></td> 

          <?php }?>

           <?php if($loan_obtained_house_building=='no'){?>  

            <td style="width: 8%"></td>
            <td style="width: 15%;border-right: 1px solid #d4d4d4"></td>

           <?php }else{?>             

           <td style="font-size: 12px;width: 8%">পরিমাণ: <?=$loan_obtained_house_building_amount?></td>                 

           <td style="font-size: 12px;width: 15%;border-right: 1px solid #d4d4d4">তারিখ: <?=$loan_obtained_house_building_date?></td>   

           <?php }?>              

          

      </tr>





      <tr style="border-left: 1px solid #d4d4d4">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">যে কোনও বাড়ি /ফ্লাট গণপূর্ত অধিদপ্তর /আবাসন অধিদপ্তর হতে বরাদ্দ হয়েছে ।</td>                 

           <td style=" text-align: center">:</td>                 

           

           <?php if($loan_obtained_house_building=='no' || $loan_obtained_from_govt=='no'){?>   

            <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$allotted_flat?></td>
                                                
           <?php }else{?> 
           <td style="font-size: 12px;"><?=$allotted_flat?></td>  
            <td></td>  
            <td style="border-right: 1px solid #d4d4d4"></td>  
           <?php }?>                 

          

      </tr>





      <tr style="border-left: 1px solid #d4d4d4">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">তার বর্তমান থাকার ব্যবস্থার বিবরণ</td>                 

           <td style=" text-align: center">:</td>                 

                

           <?php if($loan_obtained_house_building=='no' || $loan_obtained_from_govt=='no'){?>     

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$accommodation_arraignment?></td>                                           
                                                
           <?php }else{?>   
            <td style="font-size: 12px;"><?=$accommodation_arraignment?></td>
            <td></td>  
            <td style="border-right: 1px solid #d4d4d4"></td>  
           <?php }?>            

          

      </tr>





      <tr style="border-left: 1px solid #d4d4d4">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">চাহিত বাসার বিবরণ </td>                 

           <td style=" text-align: center">:</td>                 

            

           <?php if($loan_obtained_house_building=='no' || $loan_obtained_from_govt=='no'){?>  

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$areas?></td>
                                                
           <?php }else{?>  
           <td style="font-size: 12px;"><?=$areas?></td> 
            <td></td>  
            <td style="border-right: 1px solid #d4d4d4"></td>  
           <?php }?>                

          

      </tr>





      <tr style="border-left: 1px solid #d4d4d4">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">অগ্রাধিকার ১</td>                 

           <td style=" text-align: center">:</td>                 

                 

           <?php if($loan_obtained_house_building=='no' || $loan_obtained_from_govt=='no'){?>  

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$get_house_one?></td>                                              
                                                
           <?php }else{?>   
            <td style="font-size: 12px;"><?=$get_house_one?></td>
            <td></td>  
            <td style="border-right: 1px solid #d4d4d4"></td>  
           <?php }?>           

          

      </tr>





      <tr style="border-left: 1px solid #d4d4d4"> 

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">অগ্রাধিকার ২</td>                 

           <td style=" text-align: center">:</td>                 

              

           <?php if($loan_obtained_house_building=='no' || $loan_obtained_from_govt=='no'){?>   

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$get_house_two?></td>                                             
                                                
           <?php }else{?>   
            <td style="font-size: 12px;"><?=$get_house_two?></td>
            <td></td>  
            <td style="border-right: 1px solid #d4d4d4"></td>  
           <?php }?>              

          

      </tr>





      <tr style="border-left: 1px solid #d4d4d4">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">অগ্রাধিকার ৩</td>                 

           <td style=" text-align: center">:</td>                 

             

           <?php if($loan_obtained_house_building=='no' || $loan_obtained_from_govt=='no'){?>   

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><?=$get_house_three?></td>                                             
                                                
           <?php }else{?>   
            <td style="font-size: 12px;"><?=$get_house_three?></td>
            <td></td>  
            <td style="border-right: 1px solid #d4d4d4"></td>  
           <?php }?>               

          

      </tr>





      <tr style="border-left: 1px solid #d4d4d4">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">তারিখ</td>                 

           <td style=" text-align: center">:</td>                 

               

           <?php if($loan_obtained_house_building=='no' || $loan_obtained_from_govt=='no'){?> 

           <td style="font-size: 12px; border-right: 1px solid #d4d4d4"><?=$date?></td>                                               
                                                
           <?php }else{?> 
           <td style="font-size: 12px; "><?=$date?></td>  
            <td></td>  
            <td style="border-right: 1px solid #d4d4d4"></td>  
           <?php }?>             

          

      </tr>





      <tr style="border-left: 1px solid #d4d4d4">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;">নির্বাহী প্রকৌশলী এর সুপারিশ</td>                 

           <td style=" text-align: center">:</td>                 

               

           <?php if($loan_obtained_house_building=='no' || $loan_obtained_from_govt=='no'){?>   

           <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><a target="_blank" href="<?=$executive_engineer?>" style="text-decoration: none;" >ডাউনলোড</a></td>                                             
                                                
           <?php }else{?>   

            <td style="font-size: 12px;"><a target="_blank" href="<?=$executive_engineer?>" style="text-decoration: none;" >ডাউনলোড</a></td>
            <td></td>  
            <td style="border-right: 1px solid #d4d4d4"></td>  
           <?php }?>             

          

      </tr>



      <tr style="border-left: 1px solid #d4d4d4; border-bottom: 1px solid #d4d4d4">

        <td colspan="2"></td>

           <td style=""></td>                 

           <td style="font-size: 12px;"> তত্বাবধায়ক প্রকৌশলী এর সুপারিশ</td>                 

           <td style=" text-align: center">:</td>                 

             

           <?php if($loan_obtained_house_building=='no' || $loan_obtained_from_govt=='no'){?>  

            <td style="font-size: 12px;border-right: 1px solid #d4d4d4"><a target="_blank" href="<?=$superintending_engineer?>" style="text-decoration: none;" >ডাউনলোড</a></td>

                                                
           <?php }else{?>  
           <td style="font-size: 12px;"><a target="_blank" href="<?=$superintending_engineer?>" style="text-decoration: none;" >ডাউনলোড</a></td> 
            <td></td>  
            <td style="border-right: 1px solid #d4d4d4"></td>  
           <?php }?>              

          

      </tr>
        </table>
              <table border="0" cellspacing="0" cellpadding="3" style="width:100%;margin-top: 5%">

                    <tr>

                      

                      <td style="width:71%; font-size: 12px; padding-left:20px;"></td>

                      <td style="width:20%; font-size: 12px;  padding-right:20px;"><img src="<?=$signature?>" style="height: 40px; width: 60px"></td>

                    </tr>



                    <tr>

                      

                      <td style="width:71%; font-size: 12px; padding-left:20px;"></td>

                      <td style="width:20%; font-size: 12px;  padding-right:30px;">স্বাক্ষর </td>

                    </tr>

                    </table>







              <div style=" margin-top: 40px; margin-left: 5%">

              <!-- <p>Are you sure you want to share this certificate?</p> -->





            <form action="pdf_application.php?msg_applicant=<?=$msg?>" method="post">

              <!-- <button name="download_app" type="submit" style="cursor: pointer; text-align: center; background-color: #4CAF50; border-radius: 20; color: white">ডাউনলোড</button> -->

              

              <!-- <button name="cancel" style="cursor: pointer;text-align: center;background-color: red; border-radius: 20; color: white">Back</button> -->

            </form>

          </div>

          

          </div>