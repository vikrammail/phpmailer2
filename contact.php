<?php 
include 'booststrap.php';
include 'conn.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = "jj";
    $comment = $_POST['comment'];
    
    // $sql = "SELECT * FROM user_login";
    // $query =mysqli_query($con,$sql);
    // while($result = mysqli_fetch_assoc($query)  ){
    //     $email1 = $result['email'];
    //     if($email == $email1){
    //         echo '<script> alert("sent successfully. Thank you for your quick information");  </script>';
    //         $query="INSERT INTO userproblem  VALUES('$comment','$name','$email','$password')";
    //         $data=mysqli_query($con,$query);
    //         echo '<script> window.location="contact.php"; </script>';
    //     }else{
    //         // echo '<script> alert("please signup and send your problem to website admin");  </script>';
    //         echo '<script> window.location="contact.php"; </script>';
    //     }
    //     echo '<script> window.location="contact.php"; </script>';

    // }

    $query="INSERT INTO userproblem  VALUES('$comment','$name','$email','$password')";
            $data=mysqli_query($con,$query);
    if($data){
      echo '<script> alert("thank you for contact us.");  </script>';
    }else{
      
      echo '<script> alert("fill up the form peacefully.");  </script>';
    }
  
  }
//   else   {
//     $pag = 1;
//   }
//   $limit = 10;
//   $startfrom = ($pag-1)*$limit;
//   $rsresult = mysqli_query($con,$sql);

?>

<!DOCTYPE html>

<html>
    <head>
      <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z8QD7N8X2W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z8QD7N8X2W');
</script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>contact</title>
        <meta name="description" content="this is contact page. you can contact me.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1559084139599025"
     crossorigin="anonymous"></script>
    </head>
    <body>
    <form method="post">
    <div class="mb-3">
    <label for="comment">your problem:</label>
<textarea class="form-control" rows="5" name="comment" id="comment" name="text"></textarea>
    <label for="name" class="form-label">name</label>
    <input type="name" class="form-control" name="name" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


<?php include 'example.php';  ?>
    </body>
</html>

