<?php
include 'conn.php';
include 'booststrap.php';
$q="select * from ytlink";

$data1=mysqli_query($con,$q);
while($result = mysqli_fetch_assoc($data1)  ){
$url1 = $result['link'];

}
$total = mysqli_num_rows($data1);

if(isset($_POST['submit'])){
  $no = $total+1;
  $url = $_POST['url'];
  
  
  
  if($url == '' || $no == ''){
    echo '<script> alert("fill in the blanks");  </script>';
  }
  else{
    $query="INSERT INTO ytlink  VALUES('$no','$url')";
$data=mysqli_query($con,$query);
echo '<script> alert("sent successfully");  </script>';

  }
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
 
  <form action="" method="POST">
    <div class="mb-3 sm-8 mt-3">
<h4>link code</h4>
   <p>useful links = u</p>
   <p>amazing links = a</p>
   <p>educational links = e</p>

    <label for="url">url:</label>
      <input type="text" class="form-control" id="link" placeholder="Enter url" name="url" reqired autocomplete="off">
    </div>
    
    <input type="submit" id="submit" name="submit" class="btn btn-primary">
  </form>
</div>
<?php  include 'example.php'; ?>
</body>
</html>