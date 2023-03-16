<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
    <?php  
    if(isset($_POST['bb'])){


      echo  $nu = $_POST['bb'];
      include 'conn.php';
      
  
      $query = "SELECT * FROM links  where link_code = '$nu' ";
      
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
</div>
<?php } 
    }
else{ echo 'fill in the blanks'; }




?>






</div>
    </body>
</html>