<!DOCTYPE html>
<html >
    <head>
<style>
body{
    background-color: aqua;
}
    </style>
    <!--<meta http-equiv="refresh" content="15";>-->
</head>

  <body > 


<form  >
<input type="text" name="vk" id="show" placeholder="enter your ans" onkeyup="showmsg()" autocomplete="of">


        </form>
        <button onclick="showans()">show ans</button>
        <p id="write" >ss</p>
        <?php $v=1 ?>
        <a href="javascript:location.reload(true)">next question</a>
<script>
    alert("hj");
  
 var ans =  document.getElementById("show");
function showmsg(){
    if(<?php $v ?> == 1){
       
alert("right");
    }
else{
    alert("false");
}

}
function showans(){ 

}




    </script>

  </body>
</html>