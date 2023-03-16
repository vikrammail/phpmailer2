<?php
session_start();
include  'booststrap.php';
include  'conn.php';

$_SESSION['email'];
if($_SESSION['email'] == true){
    
}
else{
    echo '<script> window.location="admin_login.php"; </script>';
}

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <div class="sm-8">

            <a href="links_input_form.php" class=" link-primary">enter links</a><br>
            <a href="insertquiz4gkhindi.php" class="link-primary">insert hindi gk questions</a><br>
            <a href="inputcorrentaffairs.php" class="link-primary">insert correntaffairs</a><br>
            <a href="qestionupload.php" class="link-primary">insert english question</a><br>
            <a href="insertgk5sc.php" class="link-primary">insert sc gk question</a><br><br>
            
        </div>
       <form method="post">
        
         <button type="submit" name="submit" class="btn btn-primary">log out</button>
       </form>
        
       <?php
       if(isset($_POST['submit'])){
        session_destroy();
        echo '<script> window.location="admin_login.php"; </script>';
       }
include 'example.php';
       ?>
    </body>
</html>