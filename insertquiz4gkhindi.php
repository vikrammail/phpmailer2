
<?php
session_start();
include 'conn.php';

$query="select * from hindigk";

$data1=mysqli_query($con,$query);


$total1 = mysqli_num_rows($data1);
if($total1 > 0){

  while($res= mysqli_fetch_assoc($data1)){
    $result =  $res['index2'];
  }
}else{

  $result = 1;
  $total1 = 0;
}
  
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
    <style>
* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}

    </style>
</head>
<body>
    <form method ="POST"action="#" style="border:1px solid #ccc">
        <div class="container">
          <h1>insert question and answer</h1>
         
          <hr>
      
          <label for="email"><b>hindi quetion</b></label>
          <input type="text" placeholder="enter hindi quesstion" name="question" >
      
          <label for="psw"><b>option no 1</b></label>
          <input type="text" placeholder="enter  option no 1" name="optiona" >
      
          <label for="psw-repeat"><b>option no 2</b></label>
          <input type="text" placeholder="enter option no 2" name="optionb" >

          <label for="psw-repeat"><b>option no 3</b></label>
          <input type="text" placeholder="enter option no 3" name="optionc" >

          <label for="psw-repeat"><b>option no 4</b></label>
          <input type="text" placeholder="enter option no 4" name="optiond" >

          <label for="psw-repeat"><b> enter option no </b></label>
          <input type="text" placeholder="right option no " name="optionno" >

          <label for="psw-repeat"><b>enter answer </b></label>
          <input type="text" placeholder="enter nswer " name="answer" >
      
          <label for="email"><b>english quetion</b></label>
          <input type="text" placeholder="enter english quesstion" name="english_question" >  
      
          
      
          <div class="clearfix">
           
            <input type="submit" name="submit" class="signupbtn">
          </div>
        </div>
      </form>

</body>


<?php

include 'conn.php';

if(isset($_POST['submit'])){

$total2 = $total1+1;
   
 $question = $_REQUEST['question'];
 $optiona = $_REQUEST['optiona'];
$optionb = $_POST['optionb'];
$optionc = $_POST['optionc'];
$optiond = $_POST['optiond'];
$optionno = $_POST['optionno'];
 
$answer = $_POST['answer'];
$english_question = $_POST['english_question'];

if($question == "" || $optiona == '' || $optionb == '' || $optionc == '' || $optiond == '' || $optionno == '' || $answer == '' || $result == $question){

  echo '<script> alert("fill in the blanks");  </script>';
  exit();
}
else{

$query="INSERT INTO hindigk  VALUES('$total2','$question','$optiona','$optionb','$optionc', '$optiond', '$optionno','$answer','$english_question')";
 $data= mysqli_query($con,$query) ;
echo '<script> alert("sent successfully");  </script>';
}

}
?>
</html>