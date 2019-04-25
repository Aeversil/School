<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="newcss.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


        <!--        Head-->
        <div id="header">
            <h1>
                <?php
                setlocale(LC_TIME, 'NL_nl');
                setlocale(LC_ALL, 'nl_NL');
                echo strftime('%a %e %B %Y', time());
                ?>
            </h1>
        </div>

        <!--Info title-->
        <div id="Infotop">
            <h1 style="text-align:center;"><a>File Info</a></h1>
        </div>

        <!--Title link-->
        <div id="Home">
            <h1 style="text-align:center;"><a href="index.php">File Browser</a></h1>
        </div>

        <!--Opvragen files-->
        <div id="selection">
            <?php

            
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
                    echo '<img style="max-width:10%; max-height:10%; width:auto; height:auto;" src="file.ico"> <a href="index.php?map=' . $dir . '&amp;F=' . $object . '">' . $object . "</a><br />";
                } elseif ($object == '.') {
                    
                } elseif ($object == '..' && $dir == 'C:\xampp\htdocs\PhpFileBrowser/') {
                    
                } else {
                    echo '<img style="max-width:10%; max-height:10%; width:auto; height:auto;" src="Folder.ico"> <a href="index.php?map=' . $dir . $object . '/">' . $object . "</a><br />";
                }
            }
            ?>
        </div>

        <!--Midden struk = Content-->
        <div id="content">
            <h1></h1>
            <p>
                <?php
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
                ?>


            </p>
            <p>
                <?php
                if (isset($_GET['F'])) {
                    $filename = $_GET['F'];
                    if ($filexe == "jpg" || $filexe == "png" || $filexe == "gif") {
                        echo '<img style="max-width:100%; max-height:100%; width:auto; height:auto; margin-left:25%;" src="' . $filename . '">';
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

                        echo '<form method="post" action="index.php?map=' . $dir . '&amp;F=' . $filename . '"><textarea name="text" rows=25 cols=100 style="margin-left:16%;" resize: none;>';
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
                ?>

            </p>
        </div>

        <!--        File info-->
        <div ID="info">
            <p>
                <?php

                function human_filesize($bytes, $dec = 2) {
                    $size = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
                    $factor = floor((strlen($bytes) - 1) / 3);

                    return sprintf("%.{$dec}f", $bytes / pow(1024, $factor)) . @$size[$factor];
                }

                if (isset($_GET['F'])) {
                    $filename = $_GET['F'];



                    echo "Bestand: " . $filename;

                    $filexe = pathinfo($filename, PATHINFO_EXTENSION);


                    echo "<br />Groote: " . human_filesize(filesize($dir . $filename));

                    echo "<br />Extension: " . $filexe;

                    echo "<br />Laatst geopend op: <br />" . date("D-M-Y__H:i:s", filemtime($dir . $filename));

                    echo "<br />Laatst verander op: <br />" . date("D-M-Y__H:i:s", filemtime($dir . $filename));

                    if (is_writable($filename)) {
                        echo "<br />Is schrijfbaar: Ja";
                    } else {
                        echo "<br />Is schrijfbaar: Nee";
                    }
                }
                ?>
            </p>
        </div>

        <!--Footer-->
        <div id="footer">
            Copyright Dunccan Groenendijk &copy;
            <br />
            <?php
            $temp = rtrim($dir, '/');
            $explode = explode('\\', $temp);

            $link = getcwd();

            echo '<a href="index.php">Home</a>';
            for ($teller = 4; $teller < count($explode); $teller++) {
                $link = $link . '/' . $explode[$teller];
                echo " >> ", '<a href="index.php?map=' . $link . '">' . $explode[$teller] . '</a>';
            }

//  echo "<br />" . $dir;
//  echo "<br />" . $link;
            ?>
        </div>



    </body>
</html>
