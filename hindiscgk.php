<?php
session_start();
include 'booststrap.php' ;

include 'conn.php';






?>
<?php
if(isset($_GET['page'])){
  $pag = $_GET['page'];

}
else   {
  $pag = 1;
}
$limit = 10;
$startfrom = ($pag-1)*$limit;
$sql = "SELECT * FROM scgk limit $startfrom,$limit";
$rsresult = mysqli_query($con,$sql);
?>

<html>
  <head>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1559084139599025"
     crossorigin="anonymous"></script>
     <title>hindisc gk</title>   
     
  <meta name="description" content="here are most hindi gk">
  <meta charset="utf-8">
  <meta name="keywords" content=" hindi gk,web-hub,web,usefull links,amazing links,educational links,quiz ,questionns">
</head>
<body>


 

  
  <?php 
  $v = 'v';
  while($result = mysqli_fetch_assoc($rsresult)  ){ ?>
    
    <?php echo $result['index2'];}  ?>
    
    
    
    
    
<?php   include 'example.php' ?>

</body>
</html>