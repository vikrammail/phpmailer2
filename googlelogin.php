<?php

//index.php
include 'conn.php';
//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a class="btn btn-success" href="'.$google_client->createAuthUrl().'">Login With Google</a>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login using Google Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center"> sign up using Google Account</h2>
   <br />
   <div class="panel panel-default">
   <?php
   if($login_button == '')
   {
    // echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    // echo '<img src="'.$_SESSION['user_image'].'" class="img-responsive img-circle img-thumbnail" alt="vk"/>';
    // echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    // echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<script> window.location="admin_login.php"; </script>';
   
    $q="select * from user_login";

    $data1=mysqli_query($con,$q);
    $total = mysqli_num_rows($data1);
    if($total > 0){

        while($res= mysqli_fetch_assoc($data1)){
          $email1 =  $res['email'];
        }
      }else{
      
        $email1 = 1;
        $total = 0;
      }
      if($email1 == $_SESSION['user_email_address']){
        echo '<script> alert("you are already signup in");  </script>';
      }
      else{
        $total1 = $total+1;
        $firstname = $_SESSION['user_first_name'];
$lastname = $_SESSION['user_last_name'];
$email_address = $_SESSION['user_email_address'];
$foto = $_SESSION['user_image'];




        $query="INSERT INTO user_login  VALUES('$total1','$firstname','$lastname','$email_address','$foto')";
 $data= mysqli_query($con,$query) ;
echo '<script> alert("sent successfully");  </script>';






      }



    echo '<h3><a class="btn btn-success" href="logout.php">Logout</h3></a></div>';
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>
   </div>
  </div>
 </body>
</html>

