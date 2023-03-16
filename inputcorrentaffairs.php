<?php
session_start();
include 'booststrap.php';
//$_SESSION['email'];
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
        <form method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><p>question</p></label>
            <input type="text" name="question" class="form-control" id="exampleInputEmail1" autocomplete="off" required>
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"><p>answer</p></label>
            <input type="text" name="answer" class="form-control" id="exampleInputPassword1" autocomplete="off" required>
          </div>
          
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>
<?php
include 'conn.php';
if(isset($_POST['submit'])){

    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $dat =  date("Y-m-d");
$query="select * from correntaffairs";

$data1=mysqli_query($con,$query);


$total1 = mysqli_num_rows($data1);
$total = $total1+1;

while($res= mysqli_fetch_assoc($data1)){
  $result =  $res['index2'];
}
if($result == $question){

    echo '<script> alert("duplicate entry....please try again");  </script>';
}
else{
    $query="INSERT INTO correntaffairs  VALUES('$total', '$question', '$answer','$dat')";
 $data= mysqli_query($con,$query) ;
echo '<script> alert("sent successfully");  </script>';
}

}

include 'example.php';
?>