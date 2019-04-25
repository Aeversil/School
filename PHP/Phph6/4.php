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
        $Maanden = array(
            'Januari' => 1,
            'Februari' => 2,
            'Maart' => 3,
            'April' => 4,
            'Mei' => 5,
            'Juni' => 6,
            'Juli' => 7,
            'Augustus' => 8,
            'September' => 9,
            'Oktober' => 10,
            'November' => 11,
            'December' => 12);

        
        foreach ($Maanden as $Maanden2 => $Inhoud) {
            echo $Maanden2 . ': ' . $Inhoud . '<br />';
        }
        ?>
    </body>
</html>
