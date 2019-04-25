<?php
echo "<form action='products.php' method='post'>";
//dropdownlist vullen met productLine items
$sql2="SELECT * FROM productlines";
$result2 = mysqli_query($con,$sql2);
if(mysqli_num_rows($result2)){
    echo "<select name='select'>";
    while($rs=mysqli_fetch_assoc($result2)){
        echo $rs["productLine"];
        echo '<option value="'.$rs['productLine'].'">'.$rs['productLine'].'</option>';
    }
}
echo "</select>";
echo "<input type='submit' value='Filter'></form><br>";


$name=$_POST["select"];
echo "De geselecteerde productlijn is: <b>" . $name . "</b>";