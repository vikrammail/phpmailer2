<?php


if(isset($_GET['bb'])){


    $nu = $_GET['bb'];
    if($nu == ''){
        echo 'FILL IN THE BLANKS';
       
    }
    else{
    include 'conn.php';
$query="delete from quiz3 where index1=$nu  ";

$data=mysqli_query($con,$query);
echo 'deleted';


}
}
else{
    echo '<br>no record';
}

?>