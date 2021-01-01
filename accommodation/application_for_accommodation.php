<?php include("config/connection.php"); ?>

<!DOCTYPE html>

<html lang="en">

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

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


  <style type="text/css">

                      input[type="file"] {
                                  display: none;
                              }

                      .custom-file-upload {
                            border: 1px solid #ccc;
                            display: inline-block;
                            height: 32px;
                            padding: 0px 0px;
                            cursor: pointer;
                            border-radius: 3px;
                        }

                        #browse:hover{

                          background-color: #ddeddd !important;
                          transition: 0.4s;
                        }


                    </style>





</head>



<body>



<?php include 'header.php';?>



  <div class="d-flex" id="wrapper">



    <?php //include 'sidebar.php';?>



    <!-- Page Content -->

    <div id="page-content-wrapper">



      <?php //include 'navbar.php';?>

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <!-- <button class="btn btn-primary" id="menu-toggle"><span class="navbar-toggler-icon"></span></button> -->

        <a class="home_hover" href="index.php" style="font-size: 17px; color: green; text-decoration: none;"><i style='font-size:16px; margin-right: 5px;' class='fas'>&#xf015;</i>হোম</a>

        <a class="home_hover" href="#" style="font-size: 17px; color: green; text-decoration: none; margin: auto;">বাসা/বাড়ি আবেদনের অনলাইন ফরম</a>

        </nav>


        <style type="text/css">
          
          .home_hover:hover{

            color: red !important;
            transition: 0.5s;

          }
        </style>

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

        	<!-- <div class="card col-md-12"> -->

        		<div class="card-header" style="font-size: 14px;margin-top: 5px;background-color: #468b4f; color: white;width: 120px;height: 38px;border-radius: 6px; ">

                    
<p style="margin-top: -3px;margin-left: -7px;">ব্যক্তিগত তথ্য</p>

                  </div>

            <div class="row">

            	

           

              <div class="col-md-6 " style="margin-top: 10px;margin-left: 0%;">

                <div class="card shadow" id="form1_left" style="height: 480px">

                  <!-- <div class="card-header">

                    <h4>HTML5 Form Basic</h4>

                  </div> -->

                  <!-- <div class="card-header" style="font-size: 16px;">

                    
ব্যক্তিগত তথ্য

                  </div> -->





                  <div class="card-body">



                    <div class="form-group">

                      <label style="font-size: 10px;">নাম <span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <input type="text" class="form-control" name="name" required>

                      

                    </div>



                    <div class="form-group">

                      <label style="font-size: 10px;">পিতার নাম<span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <input type="text" class="form-control" name="fathers_name" required>

                      

                    </div>



                    <div class="form-group">

                      <label style="font-size: 10px;">মাতার নাম <span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <input type="text" class="form-control" name="mothers_name" required>

                      

                    </div>



                    <div class="form-group">

                     <label style="font-size: 10px;">বৈবাহিক অবস্থা <span style="color: red; margin-left: 4px">*</span></label>

                    <div class="row">



                    <div class="form-group" style="margin-left: 20px;">

                      <!-- <label>Tender No.</label><label style="color: red; margin-left: 4px;">*</label> -->

                      <label style="font-size: 10px"><input type="radio" name="marital_status" value="single"> অবিবাহিত</label>

                    </div>



                    <div class="form-group" style="margin-left: 20px;">

                      <!-- <label>Tender No.</label><label style="color: red; margin-left: 4px;">*</label> -->

                      <label style="font-size: 10px"><input type="radio" name="marital_status" value="married" checked> বিবাহিত</label>

                    </div>





                  </div>

                </div>



                <div class="form-group spouse_div" style="margin-top: -19px">

                      <label style="font-size: 10px;">স্বামী / স্ত্রী নাম <span style="color: red; margin-left: 4px"></span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <input type="text" class="form-control" id="spouse_name" name="spouse_name">

                      

                    </div>



                    <div class="form-group">

                      <label style="font-size: 10px;">পরিবারের সদস্য সংখ্যা <span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <input type="text" class="form-control" name="no_of_family_members" required>

                      

                    </div>



                    





                    



                    <!-- <div class="card-footer text-right" >

                    <button class="btn btn-primary mr-1" name="experience_submit" type="submit">Submit</button>

                   

                  </div> -->

                

    

                    

                  </div>

                  

                </div>  

 

              </div>



              <div class="col-md-6 " style="margin-top: 10px;margin-left: 0%">

                <div class="card shadow">

                  <!-- <div class="card-header">

                    <h4>HTML5 Form Basic</h4>

                  </div> -->

                  <!-- <div class="card-header" style="font-size: 16px;">

                    
ব্যক্তিগত তথ্য

                  </div> -->





                  <div class="card-body">



                    <div class="form-group">

                      <label style="font-size: 10px;">মোবাইল নম্বর <span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <input type="text" class="form-control" name="mobile_number" required>

                      

                    </div>



                    <div class="form-group">

                      <label style="font-size: 10px;">ইমেল <span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <input type="text" class="form-control" name="email" required>

                      

                    </div>



                    

                    <div class="form-group">



                      <label style="font-size: 10px;">পদবী <span style="color: red; margin-left: 4px">*</span></label>

                      <select class="custom-select" id="designation" name="designation" style="font-size: 13px;" required>

                        <?php

				$resultDesignation	=  mysqli_query($conn, "SELECT * FROM ".DBHR.".hrtdesignation where ".DBHR.".hrtdesignation.OrderID!=1 order by OrderID ASC") or die(mysqli_error($conn));

                      while($rsDesignation=mysqli_fetch_array($resultDesignation)){

                        ?>

                        <option  value="<?php echo $rsDesignation['DesignationID'];?>" ><?php echo $rsDesignation['DesignationName'];?></option>

                        <?php } ?>

                      </select>

                    </div>



                    <div class="form-group">

                      <label style="font-size: 10px;">এন.আই.ডি <span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <input type="text" class="form-control" name="nid" required>

                      

                    </div>



                    <div class="form-group">

                      <label style="font-size: 10px;">ছবি আপলোড করুন <span style="color: red; margin-left: 4px">*</span></label>

                      <label class="custom-file-upload" for="file1" style="width: 100%">
                       <input type="file" class="form-control-file" name="file1" id="file1" required>
                       <p id="browse" style="border: 1px solid #ccc; width: 20%; float: right;height: 30px;text-align: center;padding-top: 5px;">Browse</p>
                     </label>
                     <br>
                      <div>
                      (Image size must be - width: 300px, height: 200px and format must be jpg/png) <br><br>
                      <label style="font-size: 12px;">For resizing image please<a target="_blank" href="https://picresize.com/"> Click Here</a><span style="color: red; margin-left: 4px"></span></label>
                    </div>

                     

                      

                    </div>





                    



                    <!-- <div class="card-footer text-right" >

                    <button class="btn btn-primary mr-1" name="experience_submit" type="submit">Submit</button>

                   

                  </div> -->

                

    

                    

                  </div>

                  

                </div>  

 

              </div>

          </div>

              

            <!-- </div> -->


            <div class="card-header" style="font-size: 14px;margin-top: 50px;background-color: #468b4f; color: white;width: 200px;height: 38px;border-radius: 6px;">

                   <p style="margin-top: -3px;margin-left: -7px;">অফিস (দপ্তর) সংক্রান্ত তথ্য</p>

                  </div>


            <div class="row">

              <div class="col-md-6 " style="margin-top: 10px;margin-left: 0%">

                <div class="card shadow">

                  <!-- <div class="card-header">

                    <h4>HTML5 Form Basic</h4>

                  </div> -->

                  <!-- <div class="card-header" style="font-size: 16px;">

                   অফিস (দপ্তর) সংক্রান্ত তথ্য

                  </div> -->





                  <div class="card-body">



                    <div class="form-group">

                      <label style="font-size: 10px;">যোগদানের তারিখ <span style="color: red; margin-left: 4px">*</span></label>

                      <div class="row" style="margin-left: 1px">

                        <div style="width: 48%">

                            <label style=" margin-left: 0px;font-size: 10px">(a) দপ্তর / বিভাগ / শাখা</label>

                      <input type="date" class="form-control" name="in_the_department" required>

                    </div>

                    <div style="margin-left: 2%; width: 48%">

                        <label style=" margin-left: 4px;font-size: 10px">(b)বর্তমান অবস্থান</label>

                      <input type="date" class="form-control" name="in_present_posting" required>

                    </div>

                  </div>

                      

                    </div>



                    <div class="form-group">

                      <label style="font-size: 10px;">যোগদান পত্র আপলোড করুন <span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <label class="custom-file-upload" for="file2" style="width: 100%">
                      <input type="file" class="form-control-file" name="file2" id="file2" required>
                      <p id="browse" style="border: 1px solid #ccc; width: 20%; float: right;height: 30px;text-align: center;padding-top: 5px;">Browse</p>
                    </label>

                      

                    </div>

                    <div class="form-group">

                      <label style="font-size: 10px;">বেতন স্কেল <span style="color: red; margin-left: 4px">*</span></label>

                      <select class="custom-select" id="pay_scale" name="pay_scale" style="font-size: 13px" required>

                       <?php

				$resultPay	=  mysqli_query($conn, "SELECT * FROM ".DBHR.".hrtpayscale ORDER BY PayScaleName ASC") or die(mysqli_error($conn));

                      while($rsPay=mysqli_fetch_array($resultPay)){

                        ?>

                        <option value="<?php echo $rsPay['PayScaleID'];?>"><?php echo $rsPay['PayScaleName'];?></option>

                        <?php } ?>

                        

                      </select>

                    </div>



                  </div>
                </div>  
              </div>



              <div class="col-md-6 " style="margin-top: 10px;margin-left: 0%">

                <div class="card shadow">

                  <!-- <div class="card-header">

                    <h4>HTML5 Form Basic</h4>

                  </div> -->

                  <!-- <div class="card-header" style="font-size: 16px;">

                   অফিস (দপ্তর) সংক্রান্ত তথ্য

                  </div> -->





                  <div class="card-body">


                    



                    <div class="form-group">

                      <label style="font-size: 10px;">বর্তমান বেতন <span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <input type="text" class="form-control" name="present_salary" required>

                      

                    </div>



                    <div class="form-group">

                      <label style="font-size: 10px;">যে কোন বিশেষ বেতন  <span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <input type="text" class="form-control" name="pay_including_special_pay_of_any" required>
                    </div>

                  </div>
                </div>  
              </div>


            </div>



            <div class="card-header" style="font-size: 14px;margin-top: 50px;background-color: #468b4f; color: white;width: 170px;height: 38px;border-radius: 6px;">
                    
                <p style="margin-top: -3px; margin-left: -7px">বাসস্থান সম্পর্কিত তথ্য</p>

                  </div>

            <div class="row">

              <div class="col-md-6 " style="margin-top: 10px;margin-left: 0%">

                <div class="card shadow">

                  <!-- <div class="card-header">

                    <h4>HTML5 Form Basic</h4>

                  </div> -->

                  <!-- <div class="card-header" style="font-size: 16px;">
                    
                বাসস্থান সম্পর্কিত তথ্য

                  </div> -->





                  <div class="card-body">





                    <div class="form-group">

                     <label style="font-size: 10px;">যে কোনও বাড়ি /ঢাকা নারায়ণগঞ্জে বাড়ি /মালিকানাধীন <span style="color: red; margin-left: 4px">*</span></label>

                    <div class="row">



                    <div class="form-group" style="margin-left: 20px;">

                      <!-- <label>Tender No.</label><label style="color: red; margin-left: 4px;">*</label> -->

                      <label style="font-size: 10px;"><input type="radio" name="house_owned_by" value="Him/Her" checked> তার</label>

                    </div>



                    <div class="form-group" style="margin-left: 20px;">

                      <!-- <label>Tender No.</label><label style="color: red; margin-left: 4px;">*</label> -->

                      <label style="font-size: 10px"><input type="radio" name="house_owned_by" value="spouse"> স্বামী / স্ত্রী</label>

                    </div>





                  </div>

                </div>



                <div class="form-group" style="margin-top: -19px">

                      <label style="font-size: 10px;">আইনগত ভাবে আলাদা<span style="color: red; margin-left: 4px"></span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <input type="text" class="form-control" name="legally_separated">

                      

                    </div>



                    <div class="form-group">

                      <label style="font-size: 10px;">তারিখ/প্রথম লেটিং ইউনিট সমাপ্তির তারিখ/
যেমন বাড়ি ইউনিট/বাড়ি <span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <!-- <div><label></label></div> -->

                      <input type="date" class="form-control" name="date_of_completion_first_letting_unit" required>

                      

                    </div>



                    <div class="form-group">

                     <label style="font-size: 10px;">সরকার থেকে কোন ঋণ গৃহীত হয়েছিল কিনা। এই জাতীয় বাড়ি / ঘর নির্মাণের জন্য (ঋণের পরিমাণ এবং তারিখ) <span style="color: red; margin-left: 4px">*</span></label>

                    <div class="row">



                    <div class="form-group" style="margin-left: 20px;">

                      <!-- <label>Tender No.</label><label style="color: red; margin-left: 4px;">*</label> -->

                      <label style="font-size: 10px"><input type="radio" name="loan_govt" value="yes" checked> হ্যাঁ</label>

                    </div>



                    <div class="form-group" style="margin-left: 20px;">

                      <!-- <label>Tender No.</label><label style="color: red; margin-left: 4px;">*</label> -->

                      <label style="font-size: 10px"><input type="radio" name="loan_govt" value="no"> না</label>

                    </div>



                    





                  </div>
                  <div class="row" style="margin-top: -8px;">
                  <div class="form-group loan_govt_amount" style="margin-left: 15px;margin-top: 3px;">

                      <label style="font-size: 10px">পরিমাণ:</label><label style="color: red; margin-left: 4px;"></label>

                      

                    </div>

                    <div class="form-group loan_govt_amount" style="margin-left: 5px;">
                      <input type="text" class="form-control" name="loan_amount" id="loan_amount" >
                    </div>



                    <div class="form-group loan_govt_date" style="margin-left: 30px;margin-top: 3px;">

                      <label style="font-size: 10px">তারিখ:</label><label style="color: red; margin-left: 4px;"></label>

                    

                    </div>

                    <div class="form-group loan_govt_date" style="margin-left: 5px;">
                      <input type="date" class="form-control" name="loan_date" id="loan_date" >
                    </div>

                  </div>



                </div>





                <div class="form-group">

                     <label style="font-size: 10px;">কোনও ঋণ হাউস বিল্ডিং ফিনান্সের  পক্ষে অথবা অন্য কোনও এজেন্সি কর্তৃক গৃহীত হয়েছিল/বাড়ি. (ঋণ পরিমাণ লক্ষ টাকা এবং তারিখ) <span style="color: red; margin-left: 4px">*</span></label>

                    <div class="row">



                    <div class="form-group" style="margin-left: 20px;">

                      <!-- <label>Tender No.</label><label style="color: red; margin-left: 4px;">*</label> -->

                      <label style="font-size: 10px"><input type="radio" name="loan_house_building" value="yes" checked> হ্যাঁ</label>

                    </div>



                    <div class="form-group" style="margin-left: 20px;">

                      <!-- <label>Tender No.</label><label style="color: red; margin-left: 4px;">*</label> -->

                      <label style="font-size: 10px"><input type="radio" name="loan_house_building" value="no"> না</label>

                    </div>





                  </div>

                  <div class="row" style="margin-top: -8px;">
                  <div class="form-group loan_house_building_amount" style="margin-left: 15px;margin-top: 3px">

                      <label style="font-size: 10px">পরিমাণ:</label><label style="color: red; margin-left: 4px;"></label>

                      

                    </div>

                    <div class="form-group loan_house_building_amount" style="margin-left: 5px;">

                    

                      <input type="text" class="form-control" name="loan_house_building_amount" id="loan_house_building_amount" >

                    </div>



                    <div class="form-group loan_house_building_date" style="margin-left: 30px;margin-top: 3px">

                      <label style="font-size: 10px">তারিখ:</label><label style="color: red; margin-left: 4px;"></label>

                      

                    </div>

                    <div class="form-group loan_house_building_date" style="margin-left: 5px;">

                      

                      <input type="date" class="form-control" name="loan_house_building_date" id="loan_house_building_date" >

                    </div>
                  </div>



                </div>





                <div class="form-group" style="margin-top: -5px;">

                     <label style="font-size: 10px;">যে কোনও বাড়ি /ফ্লাট গণপূর্ত অধিদপ্তর /আবাসন অধিদপ্তর হতে বরাদ্দ হয়েছে ।<span style="color: red; margin-left: 4px">*</span></label>

                    <div class="row">



                    <div class="form-group" style="margin-left: 20px;">

                      <!-- <label>Tender No.</label><label style="color: red; margin-left: 4px;">*</label> -->

                      <label style="font-size: 10px"><input type="radio" name="house_allotted" value="yes" checked> হ্যাঁ</label>

                    </div>



                    <div class="form-group" style="margin-left: 20px;">

                      <!-- <label>Tender No.</label><label style="color: red; margin-left: 4px;">*</label> -->

                      <label style="font-size: 10px"><input type="radio" value="no" name="house_allotted"> না</label>

                    </div>



                   





                  </div>

                </div>

                <div class="form-group" style="margin-top: -20px;">

                      <label style="font-size: 10px">তার বর্তমান থাকার  ব্যবস্থার বিবরণ</label><label style="color: red; margin-left: 4px;">*</label>

                      <textarea class="form-control" name="accommodation_arrangement" required></textarea>

                    </div>



                    

                  </div>

                  

                </div>  

 

              </div>







              <div class="col-md-6 " style="margin-top: 10px;margin-left: 0%">

                <div class="card shadow">

                  <!-- <div class="card-header">

                    <h4>HTML5 Form Basic</h4>

                  </div> -->

                  <!-- <div class="card-header" style="font-size: 16px;">
                    
                বাসস্থান সম্পর্কিত তথ্য

                  </div> -->





                  <div class="card-body">




                    <div class="form-group">

                      <label style="font-size: 10px;">চাহিত বাসার বিবরণ <span style="color: red; margin-left: 4px">*</span></label>

                      <select class="custom-select" id="areas_where_he_wants" name="areas_where_he_wants" style="font-size: 13px" required>
                        <?php

                        $resultPay  =  mysqli_query($conn, "SELECT * FROM `tbl_area` ORDER BY `tbl_area`.`area_name` ASC") or die(mysqli_error($conn));

                      while($rsPay=mysqli_fetch_array($resultPay)){

                        ?>

                        <option value="<?php echo $rsPay['id'];?>"><?php echo $rsPay['area_name'];?></option>

                        <?php } ?>





                        

                      </select>

                    </div>



                    <div class="form-group">

                      <label style="font-size: 10px;">অগ্রাধিকার ১ <span style="color: red; margin-left: 4px">*</span></label>

                      <input type="text" class="form-control" name="pointy_1" id="pointy_1" required>

                      <!-- <select class="custom-select" id="pointy_1" name="pointy_1"> -->

                        <?php

                      //while($proccat_name=mysqli_fetch_array($result2)){

                        ?>

                        <!-- <option value="1">Dhaka</option>

                        <option value="2">CTG</option>

                        <option value="3">Rajshahi</option> -->

                        <!-- <option value="<?=$proccat_name['ID']?>"><?=$proccat_name['ProcCatName']?></option> -->

                        <?php //} ?>

                      <!-- </select> -->

                    </div>



                    <div class="form-group">

                      <label style="font-size: 10px;">অগ্রাধিকার ২<span style="color: red; margin-left: 4px">*</span></label>

                      <input type="text" class="form-control" name="pointy_2" id="pointy_2" required>

                      

                    </div>





                    <div class="form-group">

                      <label style="font-size: 10px;">অগ্রাধিকার ৩ <span style="color: red; margin-left: 4px">*</span></label>

                      <input type="text" class="form-control" name="pointy_3" id="pointy_3" required>

                      

                    </div>



                    <div class="form-group">

                      <label style="font-size: 10px">তারিখ</label><label style="color: red; margin-left: 4px;">*</label>

                      <input type="date" class="form-control" name="date" required>

                    </div> 



                    <div class="form-group">

                      <label style="font-size: 10px;">নির্বাহী প্রকৌশলী এর সুপারিশ <span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <label class="custom-file-upload" for="file3" style="width: 100%">
                      <input type="file" class="form-control-file" name="file3" id="file3" required>
                      <p id="browse" style="border: 1px solid #ccc; width: 20%; float: right;height: 31px;text-align: center;padding-top: 5px;">Browse</p>
                    </label>

                      

                    </div>



                    <div class="form-group">

                      <label style="font-size: 10px;">তত্বাবধায়ক প্রকৌশলী এর সুপারিশ <span style="color: red; margin-left: 4px">*</span></label><!-- <label style="color: red; margin-left: 4px;">*</label> -->

                      <label class="custom-file-upload" for="file4" style="width: 100%">
                      <input type="file" class="form-control-file" name="file4" id="file4" required>
                      <p id="browse" style="border: 1px solid #ccc; width: 20%; float: right;height: 31px;text-align: center;padding-top: 5px;">Browse</p>
                    </label>

                      

                    </div>





                    <div class="form-group">

                      <label style="font-size: 10px;">আবেদনকারীর স্বাক্ষর<span style="color: red; margin-left: 4px">*</span></label>

                      <label class="custom-file-upload" for="file5" style="width: 100%">
                      <input type="file" class="form-control-file" name="file5" id="file5" required>
                      <p id="browse" style="border: 1px solid #ccc; width: 20%; float: right;height: 31px;text-align: center;padding-top: 5px;">Browse</p>
                    </label>

                      <div>
                      (Image size must be - width: 300px and height: 80px)<br>
                        <label style="font-size: 12px;">For resizing your signature please <a target="_blank" href="https://picresize.com/">Click Here</a><span style="color: red; margin-left: 4px"></span></label>
                      </div>

                      

                      

                    </div>





                

                    <div class="form-group">

                     <label style="font-size: 10px;">ঘরবাড়ি ক্ষতিগ্রস্ত হয়েছে কিনা <span style="color: red; margin-left: 4px">*</span></label>

                    <div class="row">



                    <div class="form-group" style="margin-left: 20px;">

                      <!-- <label>Tender No.</label><label style="color: red; margin-left: 4px;">*</label> -->

                      <label style="font-size: 10px"><input type="radio" name="evicted_resident" value="yes" checked> হ্যাঁ</label>

                    </div>



                    <div class="form-group" style="margin-left: 20px;">

                      <!-- <label>Tender No.</label><label style="color: red; margin-left: 4px;">*</label> -->

                      <label style="font-size: 10px"><input type="radio" name="evicted_resident" value="no"> না</label>

                    </div>




                  </div>

                  <div class="row" style="margin-top: -10px;">

                  <div class="form-group remarks" style="margin-left: 15px;margin-top: 3px;">

                      <label style="font-size: 10px">মন্তব্য:</label><label style="color: red; margin-left: 4px;"></label>

                      

                    </div>

                    <div class="form-group remarks" style="margin-left: 5px;width: 450px">

                      

                      <textarea class="form-control" name="remarks" id="remarks"></textarea>

                    </div>
                  </div>



                </div>



                    



                    <!-- <div class="card-footer text-right" >

                    <button class="btn btn-primary mr-1" name="experience_submit" type="submit">Submit</button>

                   

                  </div> -->

                

    

                    

                  </div>

                  

                </div>  

 

              </div>



              

            </div>












            <div class="card-header" style="font-size: 14px;background-color: #468b4f; color: white;width: 150px;border-radius: 6px;height: 38px;margin-top: 50px">

                    <p style="margin-top: -3px; margin-left: -7px;">Login Information</p>

                  </div>

            <div class="row">

              <div class="col-md-12 " style="margin-top: 10px;margin-left: 0%">

                <div class="card shadow">

                  <!-- <div class="card-header">

                    <h4>HTML5 Form Basic</h4>

                  </div> -->

                  <!-- <div class="card-header" style="font-size: 16px;background-color: #468b4f; color: white;width: 230px;border-radius: 6px;">

                    Login Information

                  </div> -->





                  <div class="card-body">



                   <div class="form-group">

                      <label>Password</label><label style="color: red; margin-left: 4px;">*</label>

                      <input type="password" class="form-control" name="password" required>

                    </div>



                    <div class="form-group">

                      <label>Confirm Password</label><label style="color: red; margin-left: 4px;">*</label>

                      <input type="password" class="form-control" name="confirm_password" required>

                    </div>





                





                    



                    <div class=" text-right" style="margin-top: 6%">

                    <button class="btn btn-success mr-1" name="submit" type="submit">Submit</button>

                   

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





<script>



    $(document).ready(function(){ 

                          $("input[name=marital_status]").change(function() {

                              var test = $(this).val();



                              if (test=="single") {

                                $(".spouse_div").hide();

                                /*$(".acceptance").hide();

                                $(".old").show();*/

                                $("#spouse_name").val("");

                                $("#form1_left").css("height", "454px");

                              }else if(test == "married"){

                                $(".spouse_div").show();

                                $("#form1_left").css("height", "480px");

                                /*$(".acceptance").hide();

                                $(".completion").show();*/

                                //$("#project_code").val("");

                              }

                              

                          }); 









                          $("input[name=loan_govt]").change(function() {

                              var test1 = $(this).val();



                              if (test1=="yes") {

                                $(".loan_govt_amount").show();

                                $(".loan_govt_date").show();

                                /*$(".acceptance").hide();

                                $(".old").show();*/

                                //$("#file").val("");

                              }else if(test1 == "no"){

                                $(".loan_govt_amount").hide();

                                $(".loan_govt_date").hide();

                                /*$(".acceptance").hide();

                                $(".completion").show();*/

                                $("#loan_amount").val("");

                                $("#loan_date").val("");

                              }

                              

                          }); 







                          $("input[name=loan_house_building]").change(function() {

                              var test2 = $(this).val();



                              if (test2=="yes") {

                                $(".loan_house_building_amount").show();

                                $(".loan_house_building_date").show();

                                /*$(".acceptance").hide();

                                $(".old").show();*/

                                //$("#file").val("");

                              }else if(test2 == "no"){

                                $(".loan_house_building_amount").hide();

                                $(".loan_house_building_date").hide();

                                /*$(".acceptance").hide();

                                $(".completion").show();*/

                                $("#loan_house_building_amount").val("");

                                $("#loan_house_building_date").val("");

                              }

                              

                          });





                          $("input[name=evicted_resident]").change(function() {

                              var test3 = $(this).val();



                              if (test3=="yes") {

                                $(".remarks").show();

                                //$(".loan_house_building_date").show();

                                /*$(".acceptance").hide();

                                $(".old").show();*/

                                //$("#file").val("");

                              }else if(test3 == "no"){

                                $(".remarks").hide();

                                //$(".loan_house_building_date").hide();

                                /*$(".acceptance").hide();

                                $(".completion").show();*/

                                $("#remarks").val("");

                                //$("#loan_house_building_date").val("");

                              }

                              

                          });

                          





                      });





                      </script>

