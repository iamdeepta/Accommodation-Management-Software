<?php

session_start();

include("config/connection.php");



    $username = strtolower($_POST["username"]);

    $password = $_POST["password"];

    //$user_answer = $_POST["answer"];

    //$pass = md5($password);

	

	



    $result = mysqli_query($conn, "SELECT * from membership where username = '$username'") or die(mysqli_error($conn));

	$user=mysqli_fetch_array($result);



	

    //foreach ($result as $user) {



    //$user['GenUserName'] = strtolower($user['GenUserName']);

    

        if($user['username'] == $username && $user['password'] == $password )

        {

            $_SESSION["flag"]="ok";

			$_SESSION["user_id"] = $user['id'];

			/*$_SESSION["OfficeID"] = $user['OfficeID'];

			$_SESSION["OfficeName"] = $user['OfficeName'];*/

            $_SESSION["username"] = $username;

            //$_SESSION["FullName"] = $user['FullName'];

            //$_SESSION["privilege"] = $user['privilege'];

            header ("Location: admin_home.php");



            }/*elseif ($user['GenUserName'] == $username && $user['GenPassword'] == $pass && $_SESSION["answer"] != $user_answer) {



                $_SESSION["flag"]="captcha";

           

            header ("Location: home.php");



            }*/elseif($user['username'] == $username && $user['password'] != $password)  {



                $_SESSION["flag"]="error_pass";

            

            header ("Location: admin_home.php");



            }elseif($user['username'] != $username && $user['password'] == $password )  {



                $_SESSION["flag"]="error_username";

            

            header ("Location: admin_home.php");



            }



        //}



        



        /*else if ($user['username'] == $username && $user['password'] == $password && $user['privilege'] == "staff")

        {

            $_SESSION["flag"]="ok";

            $_SESSION["username"] = $username;

            $_SESSION["privilege"] = $user['privilege'];

            header ("Location: ../../resources/views/php/Logged_in_staff.php");

        }*/





    



     //echo "Please enter correct username or password<br/>";

     //echo "<a href='index.php'><button>Back</button></a><br/>";





    header("Location: admin_home.php");

?>