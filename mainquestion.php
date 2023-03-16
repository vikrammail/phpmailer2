<?php
include 'conn.php';





$query="select * from quiz3";

$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);



//echo "Q. ".$result['COL 1'];
 
while($result = mysqli_fetch_assoc($data)  ){
    
        
            
        //echo "Q. ".$result['COL 2']."<br>";
        
       //echo   $_SESSION['random'];
       
        
        
        ?>
          
            Q.<?php  echo $result['index2']; ?><br>
            <input type="radio" name="b" value="1"><?php  echo $result['index3']; ?><br>
            <input type="radio" name="b" value="2"><?php  echo $result['index4']; ?><br>
            <input type="radio" name="b" value="3"><?php  echo $result['index5']; ?><br>
            <input type="radio" name="b" value="4"><?php  echo $result['index6']; ?><br>
            <?php }  ?>
            
        </form>
        
    </body>
    </html>