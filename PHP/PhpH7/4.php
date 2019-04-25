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

        function contdieren($p1, $p2, $p3) {
            $dieren = array($p1, $p2, $p3);
            sort($dieren);
            return $dieren;
        }

        $dieren = contdieren("beer", "tijger", "aap");
        echo "<pre>";
        print_r($dieren);
        echo "<pre/>";
        ?>
    </body>
</html>
