<?php
include 'conn.php';
include 'booststrap.php';
if(isset($_GET['today'])){
    $today = $_GET['today'];
  
    $query="select * from correntaffairs where index4 = '$today'";

    $data=mysqli_query($con,$query);
    $total = mysqli_num_rows($data);
    if($total !== 0){
while($result = mysqli_fetch_assoc($data)){
?>

<html>
<head>
  <title>todaycurrentaffairs</title>
  
  <meta name="description" content="today correntaffairs">
  <meta charset="utf-8">
  <meta name="keywords" content="letest corentaffairs, items,item,web-hub,web,usefull links,amazing links,educational links,quiz ,questionns">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1559084139599025"
     crossorigin="anonymous"></script>
</head>
    
    <body>
    <div class="card" >
    <div class="card-body bg-primary">
      <h6 class="card-title">Q. <?php echo $result['index2']; ?></h6>
      <p class="card-text">ANS. <?php echo $result['index3']; ?></p>
      
    </div>
    </div>
    </body>
</html>

<?php
}
    }
    else{
      echo 'please wait...your question ans is not ready.';
    }

  }
  else{
    $query="select * from correntaffairs ";

    $data=mysqli_query($con,$query);
    $total = mysqli_num_rows($data);
    if($total !== 0){
while($result = mysqli_fetch_assoc($data)){
?>

    <div class="card" >
    <div class="card-body bg-primary">
      <h6 class="card-title">Q. <?php echo $result['index2']; ?></h6>
      <p class="card-text">ANS. <?php echo $result['index3']; ?></p>
      
    </div>
    </div>
    

<?php
}
    }
    else{
      echo 'please wait...your question ans is not ready.';
    }

  }
  include 'example.php';
?>
