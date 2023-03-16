<?php
include 'conn.php';
echo '<br>';
?>


<!DOCTYPE html>
<html>
    <head>
        
        <style>

        </style>
    </head>
<body><form method="post">
<label>name:</label>
<input type="text" name="name" ><br>
<label>email:</label>
<input type="email" name="email">
<input type="submit">
</form>
</body>
</html>

<?php
$na = $_POST['name'];
$em = $_POST['email'];
//echo "$na.<br>";
$query="INSERT INTO questions  VALUES ('$na','$em' )";

$data=mysqli_query($con,$query);
//$total = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);
//echo $resul['name'];
if($data){
    echo 'complete';

}
else{
    echo 'failed';
}


?>