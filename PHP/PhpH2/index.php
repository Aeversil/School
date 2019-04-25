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
        $naam = 'Dunccan Groenendijk';
        echo $naam;
        echo '<br /> <br />';
        $adres = 'Oosterduinweg 10';
        $woonplaats = 'IJmuiden';
        $NAW = $naam . ' ' . $adres . ' ' . $woonplaats;
        echo $NAW;
        echo '<br /> <br />';

        $n1_45 = 45;
        $n1_12 = 12;
        $n1_antw = $n1_45 * $n1_12;
        echo $n1_45 . ' keer ' . $n1_12 . ' is ' . $n1_antw . '<br /> <br />';

        $n2_40 = 40;
        $n2_3 = 3;
        $n2_antw = $n2_40 / $n2_3;
        echo $n2_40 . ' delen door' . $n2_3 . ' is ' . $n2_antw . '<br /> <br />';

        $n3_121 = 121;
        $n3_021 = 0.21;
        $n3_antw = $n3_121 / $n3_021;
        echo $n3_121 . ' delen door' . $n3_021 . ' is ' . $n3_antw . '<br /> <br />';

        $n4_344 = 344;
        $n4_38 = 38;
        $n4_4 = 4;
        $n4_antw1 = $n4_344 + $n4_38;
        $n4_antw2 = $n4_antw1 / $n4_4;
        echo $n4_344 . ' plus ' . $n4_38 . ' delen door ' . $n4_4 . ' is ' . $n4_antw2 . '<br /> <br />';

        $n5_88 = 88;
        $n5_674 = 674;
        $n5_1p2 = 1.2;
        $n5_antw1 = $n5_88 - $n5_674;
        $n5_antw2 = $n5_antw1 * $n5_1p2;
        echo $n5_88 . ' min ' . $n5_674 . ' keer ' . $n5_1p2 . ' is ' . $n5_antw2 . '<br /> <br />';
        ?>
    </body>
</html>
