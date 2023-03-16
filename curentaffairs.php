<?php
include 'booststrap.php';
include 'conn.php';


$d=strtotime(" yesterday");
$days2=strtotime(" -2 day");
$days3=strtotime(" -3 day");
$days4=strtotime(" -4 day");
$days5=strtotime(" -5 day");
$days6=strtotime(" -6 day");

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta name="description" content="here are corentaffairs and letest corentaffairs">
  <meta charset="utf-8">
  <meta name="keywords" content=" letest corentaffairs,web-hub,web,usefull links,amazing links,educational links,quiz ,questionns">
  <title>letest current affairs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1559084139599025"
     crossorigin="anonymous"></script>
</head>
<body>

<div class="row container mt-3">
 
  <div class="card " style="width:400px">
  <a class="nav-link   mt-3" href="todaycurrentaffairs.php?today=<?php echo date("Y-m-d");  ?>"><div class="card-body bg-primary">
      <h4 class="card-title"><div id="date"></div>(today)current affairs</h4>
      <p class="card-text">click here... </p>
      
    </div></a>
  </div>
  
  
 
  <div class="card" style="width:400px">
  <a class="nav-link   mt-3" href="todaycurrentaffairs.php?today=<?php echo date("Y-m-d",$d);  ?>"><div class="card-body bg-primary">
      <h4 class="card-title"><?php echo date("d-m-y",$d);  ?><br>current affairs</h4>
      <p class="card-text">click here...</p>
      
    </div></a>
    </div>


    <div class="card" style="width:400px">
    <a class="nav-link   mt-3" href="todaycurrentaffairs.php?today=<?php echo date("Y-m-d",$days2);  ?>"><div class="card-body bg-primary">
    <h4 class="card-title"><?php echo date("d-m-y",$days2);  ?><br>current affairs</h4>
      <p class="card-text">click here...</p>
      
    </div></a>
  </div>
  
  
 
  <div class="card" style="width:400px">
  <a class="nav-link   mt-3" href="todaycurrentaffairs.php?today=<?php echo date("Y-m-d",$days3);  ?>"><div class="card-body bg-primary">
      <h4 class="card-title"><?php echo date("d-m-y",$days3);  ?><br>current affairs</h4>
      <p class="card-text">click here...</p>
      
    </div></a>
    </div>


    <div class="card" style="width:400px">
    <a class="nav-link   mt-3" href="todaycurrentaffairs.php?today=<?php echo date("Y-m-d",$days4);  ?>"><div class="card-body bg-primary">
      <h4 class="card-title"><?php echo date("d-m-y",$days4);  ?><br>current affairs</h4>
      <p class="card-text">click here...</p>
      
    </div></a>
  </div>
  
  
 
  <div class="card" style="width:400px">
  <a class="nav-link   mt-3" href="todaycurrentaffairs.php?today=<?php echo date("Y-m-d",$days5);  ?>"><div class="card-body bg-primary">
      <h4 class="card-title"><?php echo date("d-m-y",$days5);  ?><br>current affairs</h4>
      <p class="card-text">click here...</p>
      
    </div></a>
    </div>

    <div class="card" style="width:400px">
  <a class="nav-link   mt-3" href="todaycurrentaffairs.php?today=<?php echo date("Y-m-d",$days6);  ?>"><div class="card-body bg-primary">
      <h4 class="card-title"><?php echo date("d-m-y",$days6);  ?><br>current affairs</h4>
      <p class="card-text">click here...</p>
      
    </div></a>
    </div>

    <div class="card" style="width:400px">
  <a class="nav-link   mt-3" href="todaycurrentaffairs.php"><div class="card-body bg-primary">
      <h4 class="card-title">All current affairs</h4>
      <p class="card-text">click here...</p>
      
    </div></a>
    </div>


</div>

<?php

include 'example.php';
?>

<script type="text/javascript">
           

            const d = new Date();
const dat = d.getDate();


const months = ["January","February","March","April","May","June","July","August","September","October","November","December"];

const d1 = new Date();
let month = months[d1.getMonth()];
document.getElementById("date").innerHTML = dat+"  "+month;
            </script>
</body>
</html>