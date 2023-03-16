<!DOCTYPE html>
<html>
    <head>
        <?php
        
        $to = "vikramkumarmehta7488@gmail.com";
        $subject = "test mail";
        $massage = "hiimvk";
        
        $headers = "from: vkraj7316@gmail.com";
        
        if(mail($to,$subject,$massage,$headers)){
          echo "email successfuly sent to $to...<br>";
        }
        else{
          echo "mail unsent";  
        }
        
        echo  rand(1111,9999);
        ?>
        
        <style>
.vikram{
    color: aqua;
    position: relative;
    float: left;
    margin-top: 200px;
}
        </style>
    </head>
<body>

<p class="vikram">i am vikram</p>

</body>
</html>