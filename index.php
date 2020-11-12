<!-- výsledek kódu: http://school.4fan.cz/html/php/006/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xoxo</title>
</head>
<body>
<?php

for ($a = 0;$a < 10;$a++ ){
    if($a % 2 == 1){
        for ($b = 0;$b <10;$b++){
         if($b % 2 == 1){?>
              <img src="../../../png/blackSq.png" alt="black" height="25" width="25"> <?php
         } 
         else if($b % 2 == 0){?>
                <img src="../../../png/whiteSq.png" alt="white" width="25" height="25"><?php
            }}}
      else {
        for ($b = 0;$b <10;$b++){
         if($b % 2 == 0){?>
              <img src="../../../png/blackSq.png" alt="black" height="25" width="25"> <?php
         } 
         else if($b % 2 == 1){?>
                <img src="../../../png/whiteSq.png" alt="white" width="25" height="25"><?php
            }}   
     }
     ?><br><?php
}


?>
    
</body>
</html>