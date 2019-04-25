<html>
<body>

<?php
var_dump($GLOBALS);
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
var_dump($_POST);
if (isset($_POST["name"])){
    echo $_POST["name"];
}
?>

</body>
</html>