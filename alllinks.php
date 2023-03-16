<?php  
include 'conn.php';
if(isset($_GET['page'])){
    $pag = $_GET['page'];
  
  }
  else   {
    $pag = 1;
  }
  $limit = 10;
  $startfrom = ($pag-1)*$limit;
  $query = "SELECT * FROM links limit $startfrom,$limit";

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
        <meta name="description" content="Here are the most useful websites on the Internet that will make you smarter, increase productivity and help you learn new skills.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="in this website you find most usefull website,amazing website">
        <link rel="stylesheet" href="">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1559084139599025"
     crossorigin="anonymous"></script>
        <style>
{
    background-color:green;
}

        </style>
    </head>
    <body>
      <div class="col-sm-10 mb-3 mt-3">

      <p>Here are the most useful websites on the Internet that will make you smarter, increase productivity and help you learn new skills. These incredibly useful websites solve at least one problem</p>
      <!-- The Modal button-->
      <br><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  search links
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <input type="search" class="form-control" placeholder="search" id="search" autocomplete="off">
        
        <script >
        $(document).ready(function(){

          
$('#search').on("keyup",function(){
    var link = $('#search').val();
$.ajax({
url: "search.php",
type: "post",
data: {bb:link},
success: function(data){
    $('#form').html(data);
}

}); 
});
});

        
        
        
        
        </script>
        <div id="form"></div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

</div>
        <?php while($result = mysqli_fetch_assoc($data1)  ){ ?>
<div class="col-sm-10 mb-3 mt-3">

<a class="nav-link" href="<?php echo $result['link'];  ?>"><h4><?php echo $result['links_name'];  ?></h4></a>
    <p><?php echo $result['discription'];  ?></p>
    <img src="<?php echo $result['image'];  ?>" class="img-thumbnail" alt="Cinque Terre">
</div><br><br>
<?php } ?>

<?php


if(mysqli_num_rows($data1) > 0){
  
  $total_records = mysqli_num_rows($data1);
  $query="select * from links";

$data1=mysqli_query($con,$query);


$total1 = mysqli_num_rows($data1);
$_SESSION['total'] = $total1;
  
  $total_page = ceil($_SESSION['total']/$limit);}
  
  
?>

<div class="col-sm-8">

<ul class="pagination justify-content-center">
<?php
if($pag >1){ ?>
   <a class="page-link" href="alllinks.php?page=<?php echo $pag-1; ?>">&laquo;</a>

<?php }
$query="select * from links";

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
      <li class="page-item <?php echo $active; ?>"><a class="page-link" href="alllinks.php?page=<?php echo $i; ?>" ><?php echo $i; ?></a> </li>  
<?php
}


if($total_page > $pag){ ?>
<a class="page-link" href="alllinks.php?page=<?php echo $pag+1; ?>" name="click">&raquo </a>

<?php } ?>

</div>

</ul>






<?php
include 'example.php' ?>
       
        <script src="" async defer></script>
    </body>
</html>