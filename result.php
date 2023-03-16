

<?php
session_start();


//$pro = $_SESSION['user_name'];

$link1 = $_SESSION['link'] ;

if($_REQUEST['a0'] == true and 
   $_REQUEST['a1'] == true and
   $_REQUEST['a2'] == true and
   $_REQUEST['a3'] == true and
   $_REQUEST['a4'] == true and
   $_REQUEST['a5'] == true and
   $_REQUEST['a6'] == true and
   $_REQUEST['a7'] == true and
   $_REQUEST['a8'] == true and
   $_REQUEST['a9'] == true 
 ){


}
else{
    header("location:".$link1);
}




    if($_REQUEST['a0'] ==  $_SESSION['answer0'] ){
        $score = 1;
    }
    else{
        $score = 0;
    }

    if($_SESSION['answer1'] == $_REQUEST['a1']){
        $score1 = 1;
    }
    else{
        $score1 = 0;
    }
    if($_REQUEST['a2'] ==  $_SESSION['answer2'] ){
      $score2 = 1;
  }
  else{
      $score2 = 0;
  }

  if($_SESSION['answer3'] == $_REQUEST['a3']){
      $score3 = 1;
  }
  else{
      $score3 = 0;
  }

  if($_REQUEST['a4'] ==  $_SESSION['answer4'] ){
    $score4 = 1;
}
else{
    $score4 = 0;
}

if($_SESSION['answer5'] == $_REQUEST['a5']){
    $score5 = 1;
}
else{
    $score5 = 0;
}

if($_REQUEST['a6'] ==  $_SESSION['answer6'] ){
  $score6 = 1;
}
else{
  $score6 = 0;
}

if($_SESSION['answer7'] == $_REQUEST['a7']){
  $score7 = 1;
}
else{
  $score7 = 0;
}

if($_REQUEST['a8'] ==  $_SESSION['answer8'] ){
  $score8 = 1;
}
else{
  $score8 = 0;
}

if($_SESSION['answer9'] == $_REQUEST['a9']){
  $score9 = 1;
}
else{
  $score9 = 0;
}
       
  $a = $score+$score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9;      

?>
<!DOCTYPE html>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<title>result show</title>
<style>
 body{
  
 }
</style>
    </head>
    <body>
<h1 class="container bg-primary text-center">your resul here:</h1>


<h2 class="container bg-success text-center">your score:<?php echo $a; ?>/10</h2>
<div class="container mt-3">
<a href="<?php echo $link1; ?>" class="btn btn-success">Restart quiz</a>
<a href="items.php" class="btn btn-success center">quiz section</a>
</div>
          <?php

for($i=0; $i<=9; $i++){
  echo '<div class="container color-secondary text-center">';
  echo '<div class="card bg-info">';
  echo "Q".$i."  ".$_SESSION['r'.$i]."<br>";
  
 for($y=1; $y<5; $y++){
   if($_SESSION['answer'.$i] == $y){
 $cl = 'text-success';
   }elseif ($_REQUEST['a'.$i] == $y And $_SESSION['answer'.$i] !== $_REQUEST['a'.$i] ){
     $cl = 'text-danger';
   }
   else{
     $cl = 'text-dark';
   }
   
   echo "<p class=".$cl.">Ans. ".$y." ".$_SESSION['r'.$i.$y]."</p>";
   
 }
 echo '</div>';
 echo '</div><br><br>';
 }

include 'example.php';

          ?>

    </body>
  </html>