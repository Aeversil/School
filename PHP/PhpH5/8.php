<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        for ($teller = -4; $teller <= 5; $teller++) {
            for ($teller2 = 5 - $teller; $teller2 >= 5; $teller2--) {
                echo $teller2;
            }
            echo '<br />';
        }
        ?>
    </body>
</html>
