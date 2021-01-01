<!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <link href="../css/addons/datatables.min.css" rel="stylesheet">

   


  <style type="text/css">

<?php if(@$_SESSION['flag']=='ok'){?>
  	body{
  		padding: 0px !important;
  		background-color: #FFFFFF !important;
  		width: 100%  !important;
  		margin-left: 0% !important;
  		background-image: url("assets/images/bg2.jpg") !important;
  		box-shadow: 10px 10px 30px 10px !important;
		font-size:12px !important;
  	}

  <?php }else{?>

    body{
      padding: 0px !important;
      background-color: #FFFFFF !important;
      width: 75%  !important;
      margin-left: 13% !important;
      background-image: url("assets/images/bg2.jpg") !important;
      box-shadow: 10px 10px 30px 10px !important;
    font-size:12px !important;
    }

  <?php }?>

    header {
  background-color: #2e8239;
  padding: 1%;
  /*text-align: center;*/
  font-size: 35px;
  color: white;
  position: sticky;
}

.header2 {
  background-color: #c71212;
  padding: 3px;
  /*text-align: center;*/
  /*font-size: 35px;*/
  color: white;
  position: sticky;
}


footer {
  background-color: #2e8239;
  padding: 4px;
  text-align: center;
  color: white;
  /*z-index: 4;
  position: relative;*/
}

.foo2 {

   background-color: #c71212;
  padding: 3px;
  text-align: center;
  color: white;
  /*z-index: 4;
  position: relative;*/
}

#menu-toggle{
  border: none !important;
  background: none !important;
  outline: none !important;

}

#page-content-wrapper{
  /*background-image: url("assets/images/pic1.jpg") !important;*/
  height: 100% !important;
  background-color: white;
  overflow: hidden;


}

#wrapper{
  height: 100% !important;
  background-color: white;
}


#sidebar-wrapper{
	/*position: fixed;*/
	/*z-index: 3;*/
}

.navbar{

	/*float: right !important;*/
	/*position: fixed;
	display: none;*/
}

.container{

	/*display: flex;
	align-content: center;
	justify-content: center;*/
	/*margin-left: -5% !important;*/
}

.signup-content{
	display: flex;
	margin-left: -5% !important;
	margin-top: -3%;
}



  </style>

  <!-- Main css -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->