<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
        if(isset($_POST['bb'])){


          $nu = $_POST['bb'];
include 'conn.php';

      
  
$query = "SELECT * FROM links  where links_name like '%$nu%'  ";

$data1=mysqli_query($con,$query);


$total1 = mysqli_num_rows($data1);

?>
<div class="col-sm-10 mb-3 mt-3">
  
  Here are the most useful websites on the Internet that will make you smarter, increase productivity and help you learn new skills. These incredibly useful websites solve at least one problem

  
</div>
<?php while($result = mysqli_fetch_assoc($data1)  ){ ?>
  <div class="col-sm-10 mb-3 mt-3">
      
<p><a class="nav-link" href="<?php echo $result['link'];  ?>"><h4><?php echo $result['links_name'];  ?></h4></a></p>
<?php echo $result['discription'];  ?>
</div>
<?php } }

else{
  echo 'fill in the blanks';
}


?>
        
    </body>
</html>