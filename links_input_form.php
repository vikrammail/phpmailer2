<?php
session_start();
include 'conn.php';
include 'booststrap.php';
$q="select * from links";

$data1=mysqli_query($con,$q);
$total = mysqli_num_rows($data1);
while($result=mysqli_fetch_assoc($data1)){
   $result1 = $result['link'];
}

$_SESSION['email'];
if($_SESSION['email'] == true){

}
else{
    echo '<script> window.location="admin_login.php"; </script>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>links</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
</head>
<body>

<div class="container mt-3">
 
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="mb-3 sm-8 mt-3">
<h4>link code</h4>
   <p>useful links = u</p>
   <p>amazing links = a</p>
   <p>educational links = e</p>

    <label for="url">url:</label>
      <input type="text" class="form-control" id="link" placeholder="Enter url" name="url" reqired autocomplete="off">
    </div>
    <div class="mb-3">
      <label for="text">url name:</label>
      <input type="text" class="form-control" id="pwd" placeholder="link_name" name="link_name" required autocomplete="off">
    </div>

    <div class="mb-3 mt-3">
        <label for="comment">url discription:</label>
        <textarea class="form-control" rows="10" id="discription" name="link_discription" required autocomplete="off"></textarea>
      </div>
    
      <div class="mb-3">
      <label for="text">link code:</label>
      <input type="text" class="form-control" id="link_code" placeholder="enter link code" name="link_code" required autocomplete="off">
    </div>

    <div class="mb-3">
            <label for="file" class="form-label">file</label>
            <input type="file" class="form-control" name="file" id="file" required>
          </div>
    <input type="submit" id="submit" name="submit" class="btn btn-primary">
  </form>
</div>
<?php  include 'example.php'; ?>
</body>
</html>
<?php

if(isset($_POST['submit'])){
  $file_name = $_FILES['file']['name'];
  $file_type = $_FILES['file']['type'];
  $file_size = $_FILES['file']['size'];
  $file_tmp_loc = $_FILES['file']['tmp_name'];
  


 $total1 = $total+1; 
  $url = $_POST['url'];
  $link_name1 = $_POST['link_name'];
  $link_discription = $_POST['link_discription'];
   $link_code = $_POST['link_code'];
  if($result1 == $url){
    echo '<script> alert("fill in the blanks");  </script>';
    
  }
  else{

    
    
    $ext = array('jpeg',"jpg","png","gif","JPG","jfif");
    $ex = pathinfo($file_name, PATHINFO_EXTENSION);
    $ran = rand(1, 1000);
    if($ex == 'jpeg' or $ex == 'jpg' or $ex == 'JPG'){
      $out = 'photo/'.$link_name1.'output4.jpg';
      $img = imagecreatefromjpeg($file_tmp_loc);
      imagejpeg($img, $out,0.1);
    }
    elseif($ex == 'png'){
        $out = 'photo/'.$link_name1.'output4.png';
        $img = imagecreatefrompng($file_tmp_loc);
      imagepng($img, $out,2);
      }
    
    //if($file_size < 52000){
        if(in_array($ex, $ext) === true){
        //move_uploaded_file($file_tmp_loc, "photo/".$file_name);
        $query="INSERT INTO links  VALUES('$total1','$url','$link_name1','$link_discription','$link_code','$out')";
        $data=mysqli_query($con,$query);
        echo '<script> alert("sent successfully");  </script>';
        
        
      }else{
          echo '<script> alert("please insert image");  </script>';
           
        }
    



    
  }}
?>