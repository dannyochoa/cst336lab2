<?php
include 'inc/functions.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id = "main">
            <?php
                play();
            ?>
            
            <form>
                <input type="submit" value = "Spin!"/>
            </form>
            <audio preload>
  <source src="horse.ogg" type="audio/ogg"> </audio>
        </div>
        
    </body>
</html>