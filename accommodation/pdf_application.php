<?php
session_start();
require("config/connection.php");
$msg = $_GET['msg_applicant'];



  $output = '';



  $app_pdf_result = mysqli_query($conn,"SELECT tbl_accommodation_application.*, ".DBHR.".hrtdesignation.DesignationName, ".DBHR.".hrtpayscale.PayScaleName,tbl_area.area_name
from tbl_accommodation_application 
INNER JOIN ".DBHR.".hrtdesignation On tbl_accommodation_application.designation=".DBHR.".hrtdesignation.DesignationID
INNER JOIN ".DBHR.".hrtpayscale On tbl_accommodation_application.pay_scale=".DBHR.".hrtpayscale.PayScaleID
INNER JOIN tbl_area On tbl_accommodation_application.areas=tbl_area.id") or die(mysqli_error($conn));



  



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







if (isset($_POST['download_app'])) {

  require_once("tcpdf/tcpdf.php");

  $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  //for standard format->PDF_PAGE_FORMAT else [400,408]

  $obj_pdf->SetCreator(PDF_CREATOR);

  $obj_pdf->SetTitle("PDF of  Contract Report");

  $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);

  $obj_pdf->SetHeaderFont(Array(PDF_FONT_NAME_MAIN,'', PDF_FONT_SIZE_MAIN));

  $obj_pdf->SetFooterFont(Array(PDF_FONT_NAME_DATA,'', PDF_FONT_SIZE_DATA));

  $obj_pdf->SetDefaultMonospacedFont('helvetica');

  $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

  $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);

  $obj_pdf->setPrintHeader(false);

  $obj_pdf->setPrintFooter(false);

  $obj_pdf->SetAutoPageBreak(True, 10);

  $obj_pdf->SetFont('helvetica','', 10);



  







  $content = '';



                    $content .= '<table border="0" cellspacing="0" cellpadding="3" style = "border-collapse: collapse">

                    <tr>

                    <td style="width:45%;"></td>

                      <td style="width:55%; font-size: 9px;"><img src="assets/images/favicon.png" style="height:40px; width:40px;display:block; margin: 0 auto"></td>

                    </tr>

                    

                    </table>



                    <hr>

                    



                    <div class="card-header" style="text-align: center; margin-bottom:0px; padding-bottom:0px;">

                                      <h4 style="text-decoration: underline; margin-bottom:0px; padding-bottom:0px;">Online Application</h4>';



                    

                    $content .= '</div>';





                    $content .= '<table border="0" cellspacing="0" cellpadding="3" style = "border-collapse: collapse;">

                    <tr>

                      

                      <td style="width:44%; font-size: 12px; "></td>

                      <td style="width:47%; font-size: 12px; "><img src="'.$photo.'" style="height: 50px; width: 50px"></td>

                    </tr>



                    

                    </table>';



  $content .= '



      <table border="0" cellspacing="0" cellpadding="3" style = "border-collapse: collapse;">



      <tr>

           <td style="width: 4%;font-size: 9px;font-weight: bold">01. </td>                 

           <td style="width: 96%;font-size: 9px;font-weight: bold">Personal Information</td>                                                  

          

      </tr>



      <tr>

           <td style="width: 4%; border-bottom: none"></td>                 

           <td style="width: 40%;font-size: 9px;">(a) Name</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$name.'</td>                 

          

      </tr>

      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(b) Fathers Name</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$fathers_name.'</td>                 

          

      </tr>

      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(c) Mothers Name</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$mothers_name.'</td>                 

          

      </tr>

      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(d) Marital Status</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$marital_status.'</td>                 

          

      </tr>



      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(e) Spouse Name</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$spouse_name.'</td>                 

          

      </tr>



      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(f) No. of Family Members</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$number_of_family_members.'</td>                 

          

      </tr>



      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(g) Mobile Number</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$mobile_number.'</td>                 

          

      </tr>



      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(h) Email</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$email.'</td>                 

          

      </tr>



      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(i) Designation</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$designation.'</td>                 

          

      </tr>

















        <tr>

           <td style="width: 4%;font-size: 9px;font-weight: bold">02. </td>                 

           <td style="width: 96%;font-size: 9px;font-weight: bold">Official Information</td>                                                  

          

      </tr>



      <tr>

           <td style="width: 4%; border-bottom: none"></td>                 

           <td style="width: 40%;font-size: 9px;">(a) Date of Joining (In the Department)</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$joining_date_dept.'</td>                 

          

      </tr>

      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(b) Date of Joining (In Present Posting)</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$joining_date_present.'</td>                 

          

      </tr>

      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(c) Pay Scale</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$pay_scale.'</td>                 

          

      </tr>

      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(d) Present Salary</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$present_salary.'</td>                 

          

      </tr>



      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(e) Pay Including Special Pay of Any</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$special_pay.'</td>                 

          

      </tr>



      













      <tr>

           <td style="width: 4%;font-size: 9px;font-weight: bold">03. </td>                 

           <td style="width: 96%;font-size: 9px;font-weight: bold">Information Related to Accommodation</td>                                                  

          

      </tr>



      <tr>

           <td style="width: 4%; border-bottom: none"></td>                 

           <td style="width: 40%;font-size: 9px;">(a) Whether any House/House at Dhaka Narayanganj is/are owned by</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$house_owned_by.'</td>                 

          

      </tr>

      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(b) Legally Separated</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$legally_separated.'</td>                 

          

      </tr>

      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(c) Date/dates of completion of first letting unit/units of such house/houses</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$date_of_completion_of_letting_unit.'</td>                 

          

      </tr>

      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(d) Whether any loan was obtained from Govt. for construction of such house/houses (Amount and Date of loan)</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 12%;font-size: 9px;">'.$loan_obtained_from_govt.'</td>                 

           <td style="width: 12%;font-size: 9px;">Amount: '.$loan_obtained_from_govt_amount.'</td>                 

           <td style="width: 15%;font-size: 9px;">Date: '.$loan_obtained_from_govt_date.'</td>                 

          

      </tr>



      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(e) Whether any loan was obtained House Building Finance cur-or any other agency for counts of such house/houses. (Amount and Date of loan be also noted)</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 12%;font-size: 9px;">'.$loan_obtained_house_building.'</td>                 

           <td style="width: 12%;font-size: 9px;">Amount: '.$loan_obtained_house_building_amount.'</td>                 

           <td style="width: 15%;font-size: 9px;">Date: '.$loan_obtained_house_building_date.'</td>                 

          

      </tr>



      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(f) Whether any house/flat has been allotted to him/her by the housing rehabilitation directorate pwd directorate of accommodation act.</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$allotted_flat.'</td>                 

          

      </tr>



      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(g) What is his/her present accommodation arrangement</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$accommodation_arraignment.'</td>                 

          

      </tr>



      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(h) Areas where he wants to</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$areas.'</td>                 

          

      </tr>



      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(i) Get House on Pointy as 1</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$get_house_one.'</td>                 

          

      </tr>



      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(j) Get House on Pointy as 2</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$get_house_two.'</td>                 

          

      </tr>



      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(k) Get House on Pointy as 3</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$get_house_three.'</td>                 

          

      </tr>



      <tr>

           <td style="width: 4%"></td>                 

           <td style="width: 40%;font-size: 9px;">(k) Date</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$date.'</td>                 

          

      </tr>



    

      

  ';

/*

  if ($foundation_type!='') {



    $content .= '

        <tr>

           <td style="width: 4%;font-size: 9px;">17</td>                 

           <td style="width: 40%;font-size: 9px;">Foundation Type</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$foundation_type.'</td>                 

          

      </tr>

      ';

  }





  if ($specification_name!='') {



    $content .= '

        <tr>

           <td style="width: 4%;font-size: 9px;">18</td>                 

           <td style="width: 40%;font-size: 9px;">Specification (if any)</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$spec.'</td>                 

          

      </tr>

      ';

  }



  $content .= '<tr>

           <td style="width: 4%;font-size: 9px;">19</td>                 

           <td style="width: 40%;font-size: 9px;">Special Note (if any)</td>                 

           <td style="width: 3%; text-align: center">:</td>                 

           <td style="width: 53%;font-size: 9px;">'.$special_note.'</td>                 

          

      </tr>'; */



  //$content .= fetch_data();



  $content .= '</table><br>';



  $content .= '<table border="0" cellspacing="0" cellpadding="3" style="width:100%;margin-top: 5%">

                    <tr>

                      

                      <td style="width:71%; font-size: 12px; padding-left:20px;"></td>

                      <td style="width:20%; font-size: 12px;  padding-right:20px;"><img src="'.$signature.'" style="height: 30px; width: 50px"></td>

                    </tr>



                    <tr>

                      

                      <td style="width:71%; font-size: 12px; padding-left:20px;"></td>

                      <td style="width:20%; font-size: 10px;  padding-right:30px;">Signature</td>

                    </tr>

                    </table>';





  $content .= '<p style="font-size: 7px; margin-bottom:0px !important;"></p><br><div></div>';



  



/*.'<br>'.$office_name */





  $obj_pdf->AddPage();



  $obj_pdf->writeHTML($content);

  $obj_pdf->Output("OnlineApplication".$uniq.".pdf", "I");





}





//}

?>