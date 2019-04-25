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
        $OS = array(
            'Linux' => array(
                'Mandriva',
                'Ubuntu',
                'Debian'
            ),
            'Windows' => array(
                'Windows 3.11',
                'Windows 95',
                'Windows 98',
                'Windows XP',
                'Windows ME',
                'Windows Vista',
                'Windows 7',
                'Windows 8'
            ),
            'MacOS' => array(
                'Cheeta',
                'Puma',
                'Jaguar',
                'Tiger',
                'Leopard',
                'Snow Leopard',
                'Lion',
                'Mountain Lion',
                'Mavericks'
            )
        );
        echo '<pre>' . print_r($OS, true) . '</pre>';
        ?>
    </body>
</html>
