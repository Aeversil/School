<?php
include 'configdb.php';
include 'Customers.php';

//(var_dump($_POST));
//$term = mysqli_real_escape_string($_REQUEST['term']);

$sql = "SELECT customerName, CONCAT_WS(' ', contactFirstName, contactLastName) AS contactFullname, phone
        FROM customers 
        WHERE contactFirstName LIKE'$term%';";
    //echo $sql;
    //echo $_POST["name"];
    //echo $term;
    $result = mysqli_query($con, $sql);

    $aantalc = mysqli_num_fields($result);

    $fieldnr = 0;
    $finfo = mysqli_fetch_field_direct($result, $fieldnr);

    echo "<table class='table'>";
    echo "<thead>";
    while ($fieldnr < $aantalc) {
        $finfo = mysqli_fetch_field_direct($result, $fieldnr);
        echo "<td><b>" . $finfo->name . "</b></td>";
        $fieldnr++;
    }
    echo "</thead>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['customerName'] . "</td><td>" . $row['contactFullname'] . "</td><td>" . $row['phone'] . "</td>";
        echo '</tr>';
    }
echo "</table>";
?>