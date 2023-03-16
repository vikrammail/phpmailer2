<!DOCTYPE html>

<html>
    <head>
     <meta charset="utf-8">
  <meta name="keywords" content=" educational link,web-hub,web,usefull links,amazing links,educational links,quiz ,questionns">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>educational link</title>
        <meta name="description" content="here are the educational link">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1559084139599025"
     crossorigin="anonymous"></script>
    </head>
    <body>
       <?php  
include 'conn.php';
include 'booststrap.php';
      
  
$query = "SELECT * FROM links  where link_code = 'e' ";

$data1=mysqli_query($con,$query);


$total1 = mysqli_num_rows($data1);

?>
<div class="col-sm-10 mb-3 mt-3">
  
  Here are the most useful websites on the Internet that will make you smarter, increase productivity and help you learn new skills. These incredibly useful websites solve at least one problem

  
</div>
<?php while($result = mysqli_fetch_assoc($data1)  ){ ?>
  <div class="col-sm-10 mb-3 mt-3">
      
<a class="nav-link" href="<?php echo $result['link'];  ?>"><h4><?php echo $result['links_name'];  ?></h4></a>
<?php echo $result['discription'];  ?>
<img src="<?php echo $result['image'];  ?>" class="img-thumbnail" alt="Cinque Terre">
</div>
<?php } 
include 'example.php';

?>
    </body>
</html>