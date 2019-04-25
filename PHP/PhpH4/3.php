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
        $teller = 8;

        if ($teller > 10) {
            echo $teller . ' is een ongeldige invoer!';
        } elseif ($teller > 5.4) {
        echo 'Er is een voldoende behaald!';
        }
        
        ?>
    </body>
</html>
