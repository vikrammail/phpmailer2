
<?php
session_start();


?>


<?php
include 'conn.php';
include 'booststrap.php';






?>





<html>
    <head>
    <title>science gk quiz</title>
  <meta name="description" content="here are most science gk quiz">
  <meta charset="utf-8">
  
      <meta name="keyword" content="quizhindiscgk,quiz,science gk general">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1559084139599025"
     crossorigin="anonymous"></script>
    <style>
      .demoo{
        position: fixed;
        top:250px;
        left: 1000px;
        
        
      }
  p{
    color: brown;
    
    font-size: large;
  }
  
  body{
    margin: 0px;
   
  }
  .submit{
    
  }
  .box{
    position: ;
    box-sizing: border-box;
    
    left: 500px;
    color: blue;
    padding: 20px;
    margin: 90px;
    min-height: calc(1000vh-211px-58px);
  }
  @media (max-width: 1024px){
    .box{
    
    left: 250px;
    
    
  }
  .demoo{
        position: fixed;
        top:300px;
        left: 300px;
        font-size:5px;
        width:20%;
        
        
      }
  
  }
  .button {
    background-color: rgb(18, 155, 155);
    padding: 4px 10px;
    cursor: pointer;
    color: white;
    border: 1px solid white;
    border-radius: 5px;
    font-weight: 700;
    width: fit-content;
  }
  
  .button:hover {
    background-color: white;
    color: rgb(18, 155, 155);
    border: 1px solid black;
  }
  
</style>
</head>
    <body>
    
    
       
        <form method="post" action="result.php">

        <?php
$table = "scgk";
$query="select * from $table";

$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);



//echo "Q. ".$result['COL 1'];

$p= rand(1,$total); 
while($result = mysqli_fetch_assoc($data)  ){
    if($p == $result['index1']){
        //$_SESSION['random'] = $p;
        $_SESSION['answer0'] = $result['index7'];    
        
        $_SESSION['link'] = 'englishgrammarquiz.php'; 
        
        
        ?>
        <div class="box">
        <p> Q.1  <?php  echo $result['index2']; $_SESSION['r0'] = $result['index2']; ?> </p><br>
    
        a<input type="radio" name="a0" value="1"><?php  echo $result['index3']; $_SESSION['r01'] = $result['index3']; ?><br>
        b<input type="radio" name="a0" value="2"><?php  echo $result['index4']; $_SESSION['r02'] = $result['index4']; ?><br>
        c<input type="radio" name="a0" value="3"><?php  echo $result['index5']; $_SESSION['r03'] = $result['index5']; ?><br>
        d<input type="radio" name="a0" value="4"><?php  echo $result['index6']; $_SESSION['r04'] = $result['index6']; ?><br>
        
        </div>
            <?php } } ?>
          <?php

$query="select * from $table";

$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);





$t= rand(1,$total); 
while($result = mysqli_fetch_assoc($data)  ){
    if($t == $result['index1']){
        $_SESSION['random1'] = $t;
        $_SESSION['answer1'] = $result['index7'];
            
       
        
        
        ?>
       <div class="box">   
        <p>Q.2 <?php  echo $result['index2']; $_SESSION['r1'] = $result['index2']; ?> </p><br>


    a<input type="radio" name="a1" value="1"><?php  echo $result['index3']; $_SESSION['r11'] = $result['index3']; ?><br>
    b<input type="radio" name="a1" value="2"><?php  echo $result['index4']; $_SESSION['r12'] = $result['index4']; ?><br>
    c<input type="radio" name="a1" value="3"><?php  echo $result['index5']; $_SESSION['r13'] = $result['index5']; ?><br>
    d<input type="radio" name="a1" value="4"><?php  echo $result['index6']; $_SESSION['r14'] = $result['index6']; ?><br>
    
    </div>
            <?php } } ?>

            <?php

$query="select * from $table";

$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);





$u= rand(1,$total); 
while($result = mysqli_fetch_assoc($data)  ){
    if($u == $result['index1']){
        $_SESSION['random1'] = $u;
        $_SESSION['answer2'] = $result['index7'];
            
    
        ?>
         <div class="box"> 
        <p>Q.3  <?php  echo $result['index2']; $_SESSION['r2'] = $result['index2'] ?> </p><br>
    

        a<input type="radio" name="a2" value="1"><?php  echo $result['index3']; $_SESSION['r21'] = $result['index3'] ?><br>
        b<input type="radio" name="a2" value="2"><?php  echo $result['index4']; $_SESSION['r22'] = $result['index4'] ?><br>
        c<input type="radio" name="a2" value="3"><?php  echo $result['index5']; $_SESSION['r23'] = $result['index5'] ?><br>
        d<input type="radio" name="a2" value="4"><?php  echo $result['index6']; $_SESSION['r24'] = $result['index6'] ?><br>
        
        </div>
            <?php } } ?>


            <?php

$query="select * from $table";

$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);





$v= rand(1,$total); 
while($result = mysqli_fetch_assoc($data)  ){
    if($t == $result['index1']){
        $_SESSION['random1'] = $v;
        $_SESSION['answer3'] = $result['index7'];
            
       
        ?>
          <div class="box">
        <p>Q.4  <?php  echo $result['index2']; $_SESSION['r3'] = $result['index2'] ?> </p><br>

        a<input type="radio" name="a3" value="1"><?php  echo $result['index3']; $_SESSION['r31'] = $result['index3'] ?><br>
        b<input type="radio" name="a3" value="2"><?php  echo $result['index4']; $_SESSION['r32'] = $result['index4'] ?><br>
        c<input type="radio" name="a3" value="3"><?php  echo $result['index5']; $_SESSION['r33'] = $result['index5'] ?><br>
        d<input type="radio" name="a3" value="4"><?php  echo $result['index6']; $_SESSION['r34'] = $result['index6'] ?><br>
    
        </div>
            <?php } } ?>


            <?php

$query="select * from $table";

$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);





$w= rand(1,$total); 
while($result = mysqli_fetch_assoc($data)  ){
    if($w == $result['index1']){
        $_SESSION['random1'] = $w;
        $_SESSION['answer4'] = $result['index7'];
            
        
        
        
        ?>
          <div class="box">
        <p>Q.5  <?php  echo $result['index2']; $_SESSION['r4'] = $result['index2'] ?> </p><br>
    

        a<input type="radio" name="a4" value="1"><?php  echo $result['index3']; $_SESSION['r41'] = $result['index3'] ?><br>
        b<input type="radio" name="a4" value="2"><?php  echo $result['index4']; $_SESSION['r42'] = $result['index4'] ?><br>
        c<input type="radio" name="a4" value="3"><?php  echo $result['index5']; $_SESSION['r43'] = $result['index5'] ?><br>
        d<input type="radio" name="a4" value="4"><?php  echo $result['index6']; $_SESSION['r44'] = $result['index6'] ?><br>
        
        </div>
            <?php } } ?>


            <?php

$query="select * from $table";

$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);





$x= rand(1,$total); 
while($result = mysqli_fetch_assoc($data)  ){
    if($x == $result['index1']){
        $_SESSION['random1'] = $x;
        $_SESSION['answer5'] = $result['index7'];
            
        
        ?>
         <div class="box"> 
        <p> Q.6  <?php  echo $result['index2']; $_SESSION['r5'] = $result['index2'] ?> </p><br>
    

        a<input type="radio" name="a5" value="1"><?php  echo $result['index3']; $_SESSION['r51'] = $result['index3'] ?><br>
        b<input type="radio" name="a5" value="2"><?php  echo $result['index4']; $_SESSION['r52'] = $result['index4'] ?><br>
        c<input type="radio" name="a5" value="3"><?php  echo $result['index5']; $_SESSION['r53'] = $result['index5'] ?><br>
        d<input type="radio" name="a5" value="4"><?php  echo $result['index6']; $_SESSION['r54'] = $result['index6'] ?><br>
        
        </div>
            <?php } } ?>

            <?php

$query="select * from $table";

$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);





$y= rand(1,$total); 
while($result = mysqli_fetch_assoc($data)  ){
    if($y == $result['index1']){
        $_SESSION['random1'] = $y;
        $_SESSION['answer6'] = $result['index7'];
            
       
       
        
        
        ?>
        <div class="box">  
        <p>Q.7  <?php  echo $result['index2']; $_SESSION['r6'] = $result['index2'] ?> </p><br>
    

        a<input type="radio" name="a6" value="1"><?php  echo $result['index3']; $_SESSION['r61'] = $result['index3'] ?><br>
        b<input type="radio" name="a6" value="2"><?php  echo $result['index4']; $_SESSION['r62'] = $result['index4'] ?><br>
        c<input type="radio" name="a6" value="3"><?php  echo $result['index5']; $_SESSION['r63'] = $result['index5'] ?><br>
        d<input type="radio" name="a6" value="4"><?php  echo $result['index6']; $_SESSION['r64'] = $result['index6'] ?><br>
        
        </div>
            <?php } } ?>

            <?php

$query="select * from $table";

$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);





$z= rand(1,$total); 
while($result = mysqli_fetch_assoc($data)  ){
    if($z == $result['index1']){
        $_SESSION['random1'] = $z;
        $_SESSION['answer7'] = $result['index7'];
            
       
        ?>
          <div class="box">
        <p> Q.8  <?php  echo $result['index2']; $_SESSION['r7'] = $result['index2'] ?> </p><br>
    

        a<input type="radio" name="a7" value="1"><?php  echo $result['index3']; $_SESSION['r71'] = $result['index3'] ?><br>
        b<input type="radio" name="a7" value="2"><?php  echo $result['index4']; $_SESSION['r72'] = $result['index4'] ?><br>
        c<input type="radio" name="a7" value="3"><?php  echo $result['index5']; $_SESSION['r73'] = $result['index5'] ?><br>
        d<input type="radio" name="a7" value="4"><?php  echo $result['index6']; $_SESSION['r74'] = $result['index6'] ?><br>
        
        </div>   
        <?php } } ?>

            <?php

$query="select * from $table";

$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);




$e= rand(1,$total); 
while($result = mysqli_fetch_assoc($data)  ){
    if($e == $result['index1']){
        $_SESSION['random1'] = $e;
        $_SESSION['answer8'] = $result['index7'];
            
       
        ?>
          <div class="box">
        <p> Q.9  <?php  echo $result['index2']; $_SESSION['r8'] = $result['index2'] ?></p><br>
    

        a<input type="radio" name="a8" value="1"><?php  echo $result['index3']; $_SESSION['r81'] = $result['index3'] ?><br>
        b<input type="radio" name="a8" value="2"><?php  echo $result['index4']; $_SESSION['r82'] = $result['index4'] ?><br>
        c<input type="radio" name="a8" value="3"><?php  echo $result['index5']; $_SESSION['r83'] = $result['index5'] ?><br>
        d<input type="radio" name="a8" value="4"><?php  echo $result['index6']; $_SESSION['r84'] = $result['index6'] ?><br>
        
        </div>
            <?php } } ?>


            <?php

$query="select * from $table";

$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);







$f= rand(1,$total); 
while($result = mysqli_fetch_assoc($data)  ){
    if($f == $result['index1']){
        $_SESSION['random1'] = $f;
        $_SESSION['answer9'] = $result['index7'];
            
        
        
        ?>
          <div class="box">
            <p>Q.10  <?php  echo $result['index2']; $_SESSION['r9'] = $result['index2'] ?></p><br>
        

            a<input type="radio" name="a9" value="1"><?php  echo $result['index3']; $_SESSION['r91'] = $result['index3'] ?><br>
            b<input type="radio" name="a9" value="2"><?php  echo $result['index4']; $_SESSION['r92'] = $result['index4'] ?><br>
            c<input type="radio" name="a9" value="3"><?php  echo $result['index5']; $_SESSION['r93'] = $result['index5'] ?><br>
            d<input type="radio" name="a9" value="4"><?php  echo $result['index6']; $_SESSION['r94'] = $result['index6'] ?><br>
            
            <?php } } ?>
        </div>
        <input class="button" type="submit" name="submit"  >
    </form>
      
<?php


?>
 <?php  include 'example.php'; ?>
   





    </body>
    </html>
    





