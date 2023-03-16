<?php  
include 'conn.php';
$query="select * from links";

$data1=mysqli_query($con,$query);


$total1 = mysqli_num_rows($data1);
include 'booststrap.php'

?>
<!DOCTYPE html>

<html>
    <head>
       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>links</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>


        </style>
    </head>
    <body>
        <?php while($result = mysqli_fetch_assoc($data1)  ){ ?>
<div class="col-sm-10 mb-3 mt-3">

    <?php echo $result['link'];  ?>
</div>
<?php } 
include 'example.php' ?>
       
        <script src="" async defer></script>
    </body>
</html>