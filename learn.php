<?php
$st = array('mohan','sohan','rohan');
$vk = array('vikram','kaushik','rishav');
$sk = array_merge($st,$vk);
$mk = $_POST['vk'];
if(in_array($mk,$sk)){
    
    echo "$mk";
}
else{
    echo "not found.<br>";
}
?>
