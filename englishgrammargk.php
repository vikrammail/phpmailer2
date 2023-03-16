<?php
session_start();
include 'booststrap.php' ;

include 'conn.php';






?>
<?php
if(isset($_GET['page'])){
  $pag = $_GET['page'];

}
else   {
  $pag = 1;
}
$limit = 10;
$startfrom = ($pag-1)*$limit;
$sql = "SELECT * FROM QUIZ3 limit $startfrom,$limit";
$rsresult = mysqli_query($con,$sql);
?>

<html>
  <head>
  <title>english grammar gk</title>
  <meta name="description" content="here are most usefull english grammar gk and other gk">
  <meta charset="utf-8">
  <meta name="keywords" content=" english grammar gk,english gk,web-hub,web,usefull links,amazing links,educational links,quiz ,questionns">
   <meta name="keyword" content="english grammar gk">
   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1559084139599025"
     crossorigin="anonymous"></script>
</head>
<body>


 

  
  <?php  
  $v = "v";
  while($result = mysqli_fetch_assoc($rsresult)  ){ ?>
    <div class="box"> 
      <div class="col-sm-8 justify-content-center">  <p>Q.<?php  echo $result['index1']." " .$result['index2']."<br>1. ".$result['index3']."<br>2. ".$result['index4']."<br>3. ".$result['index5']."<br>4. ".$result['index6']; ?> </p><br></div>
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $v; echo $result['index1'];  ?>" aria-expanded="false" aria-controls="collapseExample">
           Show ans
         </button>
       </p>
       <div class="collapse" id="<?php echo $v; echo $result['index1'];  ?>">
         <div class="card card-body">
         <?php echo $result['index8'];  ?>
         </div>
       </div>
      
      
      
    </div>
    <?php }  ?>
    
    
    
    
    <?php


if(mysqli_num_rows($rsresult) > 0){
  
  $total_records = mysqli_num_rows($rsresult);
  $query="select * from quiz3";

$data1=mysqli_query($con,$query);


$total1 = mysqli_num_rows($data1);
$_SESSION['total'] = $total1;
  
  $total_page = ceil($_SESSION['total']/$limit);}
  
  
?>

<div class="col-sm-8">

<ul class="pagination justify-content-center">
<?php
if($pag >1){ ?>
   <a class="page-link" href="englishgrammargk.php?page=<?php echo $pag-1; ?>">&laquo;</a>

<?php }
$query="select * from quiz3";

$data1=mysqli_query($con,$query);


$total1 = mysqli_num_rows($data1);
$_SESSION['total'] = $total1;



for($i = 1; $i <= $total_page; $i++){
  




     
     
      if($i == $pag ){
       $active = 'active';
       
      }
      else{
        $active = '';
      }
      ?>
      <li class="page-item <?php echo $active; ?>"><a class="page-link" href="englishgrammargk.php?page=<?php echo $i; ?>" ><?php echo $i; ?></a> </li>  
<?php
}


if($total_page > $pag){ ?>
<a class="page-link" href="englishgrammargk.php?page=<?php echo $pag+1; ?>" name="click">&raquo </a>

<?php } ?>

</div>

</ul>
<?php   include 'example.php' ?>

</body>
</html>