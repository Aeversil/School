<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <meta name="viewport" content="width=divice-width, intial-scale=1">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function selection() {
            //echo $map;
            //print_r($_GET);
            if (isset($_GET['map'])) {
                $dir = $_GET['map'];
                $dir = realpath($dir) . "/";
            } else {

                $dir = getcwd() . "/";
            }

            $objecten = scandir($dir);

            //print_r($objecten);

            foreach ($objecten as $object) {



                if (is_file($dir . '\\' . $object)) {
                    
                } elseif ($object == '.') {
                    
                } elseif ($object == '..' && $dir == 'C:\xampp\htdocs\BootstrapFileBrowser/') {
                    
                } else {
                    echo '<i class="fa fa-folder-o"></i> <a href="index.php?map=' . $dir . $object . '/">' . $object . "</a><br />";
                }
            }
        }

        function selection2() {
            //echo $map;
            //print_r($_GET);
            if (isset($_GET['map'])) {
                $dir = $_GET['map'];
                $dir = realpath($dir) . "/";
            } else {

                $dir = getcwd() . "/";
            }

            $objecten = scandir($dir);

            //print_r($objecten);

            foreach ($objecten as $object) {



                if (is_file($dir . '\\' . $object)) {
                    echo '<i class="fa fa-file-text-o"></i> <a href="index.php?map=' . $dir . '&amp;F=' . $object . '">' . $object . "</a><br />";
                }
            }
        }

        function content() {
            error_reporting(1);

            if (isset($_GET['F'])) {
                $filename = $_GET['F'];
                if ($filexe == "jpg" || $filexe == "png" || $filexe == "gif") {
                    echo '<img style="max-width:100%; max-height:100%; width:auto; height:auto;" src="' . $filename . '">';
                }
                if ($filexe == "php" || $filexe == "txt" || $filexe == "html" || $filexe == "pdf" || $filexe == "htm" || $filexe == "docx" || $filexe == "css" || $filexe == "xml" || $filexe == "properties") {
                    if ($dir == getcwd()) {
                        $src = "";
                    } else {
                        $src = str_replace(getcwd() . "\\", "", $dir);
                        $scr = $src . "\\";
                    }
                }
                if ($filexe == "mp4" || $filexe == "avi") {

                    echo '<video width="620" height="440" controls>
                    <source src="' . $filename . '" type="video/' . $filexe . '">
                    Your browser does not support the <code>video</code> tag.
                </video>';
                }
                if ($filexe == "mp3" || $filexe == "wav") {

                    echo '<audio width="620" height="440" controls>
                    <source src="' . $filename . '" type="audio/' . $filexe . '">
                    Your browser does not support the <code>audio</code> tag.
                </audio>';
                }
            }

            if (isset($_GET['F'])) {
                $filename = $_GET['F'];

                $filexe = pathinfo($filename, PATHINFO_EXTENSION);
            }
        

        
            if (isset($_GET['F'])) {
                $filename = $_GET['F'];
                
                $filelink = $dir . $filename;
                $filelink = str_replace(getcwd() . "\\", "", $filelink);
                
                if ($filexe == "jpg" || $filexe == "png" || $filexe == "gif") {
                    echo '<img style="max-width:100%; max-height:100%; width:auto; height:auto;" src="' . $filelink . '">';
                }

                if ($filexe == "php" || $filexe == "txt" || $filexe == "html" || $filexe == "pdf" || $filexe == "htm" || $filexe == "docx" || $filexe == "css" || $filexe == "xml" || $filexe == "properties") {

                    if ($dir == getcwd()) {
                        $src = "";
                    } else {
                        $src = str_replace(getcwd() . "\\", "", $dir);
                        $scr = $src . "\\";
                    }
                    if (isset($_POST["text"])) {
                        file_put_contents($dir . "\\" . $filename, ($_POST["text"]));
                    }

                    $filecontent = file_get_contents($src . $filename);
                    //echo $filename;

                    echo '<form method="post" action="index.php?map=' . $dir . '&amp;F=' . $filename . '"><textarea name="text" rows=25 cols=100 style="resize: none";>';
                    echo htmlentities($filecontent);
                    echo "</textarea>";
                    echo '<input type="submit" value="Save" style="margin-left:50%;"></form>';
                }

                if ($filexe == "mp4" || $filexe == "avi") {

                    echo '<video style="max-width:100%; max-height:100%; width:auto; height:auto;" width="620" height="440" controls>
                    <source src="' . $filename . '" type="video/' . $filexe . '">
                    Your browser does not support the <code>video</code> tag.
                </video>';
                }
                if ($filexe == "mp3" || $filexe == "wav") {

                    echo '<audio width="620" height="440" controls>
                    <source src="' . $filename . '" type="audio/' . $filexe . '">
                    Your browser does not support the <code>audio</code> tag.
                </audio>';
                }
            }
        }
        

        function human_filesize($bytes, $dec = 2) {
            $size = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
            $factor = floor((strlen($bytes) - 1) / 3);

            return sprintf("%.{$dec}f", $bytes / pow(1024, $factor)) . @$size[$factor];
        }

        function info() {
            error_reporting(0);
            if (isset($_GET['F'])) {
                $filename = $_GET['F'];

                $filexe = pathinfo($dir.$filename, PATHINFO_EXTENSION);

                echo '<td>Bestand:</td> <td align="right">' . $filename . '</td>';




                echo '<tr><td>Groote: </td><td align="right">' . human_filesize(filesize($dir . $filename)) . '</td></tr>';

                echo '<tr><td>Extension: </td><td align="right">' . $filexe . '</td></tr>';

                echo '<tr><td>Laatst geopend op: </td><td align="right">' . date("d-m-y H:i", filemtime($dir . $filename)) . '</td></tr>';

                echo '<tr><td>Laatst verander op: </td><td align="right">' . date("d-m-y H:i", filemtime($dir . $filename)) . '</td></tr>';

                if (is_writable($filename)) {
                    echo '<tr><td>Is schrijfbaar: </td><td align="right">Ja</td></tr>';
                } else {
                    echo '<tr><td>Is schrijfbaar: </td><td align="right">Nee</td></tr>';
                }
            }
        }
 
        function breadcrumb() {
            if (isset($_GET['map'])) {
                $dir = $_GET['map'];
                $dir = realpath($dir) . "/";
            } else {

                $dir = getcwd() . "/";
            }

            $temp = rtrim($dir, '/');
            $explode = explode('\\', $temp);

            $link = getcwd();

            echo '<a href="index.php">Home</a>';
            for ($teller = 4; $teller < count($explode); $teller++) {
                $link = $link . '/' . $explode[$teller];
                echo " >> ", '<a href="index.php?map=' . $link . '">' . $explode[$teller] . '</a>';
            }
        }
        ?>

        <div class="container">
            <!--        Head-->
            <div class="page-header">
                <h1>
                    <i class="fa fa-hdd-o"> Filebrowser</i>
                </h1>
            </div>
            <ol class="breadcrumb">
                <?php
                breadcrumb();
                ?>
            </ol>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: lightskyblue">
                            Mappen
                        </div>
                        <div class="panel-body">
                            <?php
                            selection();
                            ?>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: lightskyblue">
                            Bestanden
                        </div>
                        <div class="panel-body">
                            <?php
                            selection2();
                            ?>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: lightskyblue">
                            Informatie
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">

                                <?php
                                info();
                                ?>
                            </table>
                        </div>
                    </div>  
                </div>

                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: lightskyblue">
                            Bestand
                        </div>
                        <div class="panel-body">
                            <?php
                            
                            content();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>
