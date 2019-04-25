/<?php
include 'configdb.php';

$sql = "select productnr, omschrijving, prijs from producten";
$result = mysqli_query($con,$sql);

$aantalr=mysqli_num_rows($result);
$aantalc=mysqli_num_fields($result);
echo "aantal:   " . $aantalr;
echo '<br />';

$fieldnr =0;
$finfo = mysqli_fetch_field_direct ($result, $fieldnr);

echo "<table border='1'  bgcolor='#cccccc'>";

while($fieldnr < $aantalc) {
    $finfo = mysqli_fetch_field_direct ($result, $fieldnr);
    echo "<td><b>" . $finfo->name . "</b></td>";
    $fieldnr ++;
}
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td width='200'>" . $row['productnr'] . "</td><td width=''200'>" . $row['omschrijving'] . "</td><td width=''200'>" . $row['prijs'] . "</td>";
    echo '</tr>';
}
mysqli_close($con);