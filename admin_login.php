<?php
session_start();
include  'booststrap.php';
include  'conn.php';
if(isset($_POST['submit'])){
     $email = $_POST['email'];
     $query = "SELECT * FROM admin_login ";

     $data1=mysqli_query($con,$query);
     
     
     $total1 = mysqli_num_rows($data1);
     while($result = mysqli_fetch_assoc($data1)){
        $email2 = $result['email'];
        if($email == $email2){


           

            $_SESSION['email'] = $email;
            echo '<script> window.location="admin_user.php"; </script>';
        }
     }

     
}


?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>admin log in</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <div class="container sm-4">
        <h2>admin log in</h2>
<form  method="post">

    <div class="mb-3">
        <label for="input1" class="form-label"><p>Email address</p></label>
        <input type="email" placeholder="enter email" class="form-control"  name="email" id="input1" aria-describedby="emailHelp" required>
        
        <button type="submit" name="submit" class="btn btn-outline-primary">admin log in</button>
        
    </div>
</form>
</div>

    <?php
include 'example.php';
    ?>
        <script src="" async defer></script>
    </body>
</html>