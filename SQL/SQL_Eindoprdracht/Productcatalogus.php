<?php
include 'configdb.php';
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="Custom.css">

<!-- Links and Header title -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <div class="navbar-brand navbar-brand-centered">Sales</div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-brand-centered">
            <ul class="nav navbar-nav">
                <li><a href="Sales.php">Sales</a></li>
                <li><a href="Customers.php">Customers</a></li>
                <li><a href="Productcatalogus.php">Productcatalogus</a></li>
            </ul>
            <!--
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                        </ul>
            -->
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xs-6 col-md-offset-2">
            <div class="well">
                <blockquote class="blockquote">
                    <p>
                        Overzicht van aantallen en totale voorraadwaarde per productLine
                    </p>
                </blockquote>
                <?php

                $sql = "SELECT productLine, COUNT(productName) AS aantalProducten, concat('€',format(SUM(quantityInStock * buyPrice),2,'de_DE')) as waardeVoorraad
                        FROM products
                        GROUP BY productline;";
                $result = mysqli_query($con, $sql);

                $aantalc = mysqli_num_fields($result);

                $fieldnr = 0;
                $finfo = mysqli_fetch_field_direct($result, $fieldnr);

                echo "<table class='table'>";
                echo "<thead>";
                while ($fieldnr < $aantalc) {
                    $finfo = mysqli_fetch_field_direct($result, $fieldnr);
                    echo "<th>" . $finfo->name . "</th>";
                    $fieldnr++;
                }
                echo "</thead>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['productLine'] . "</td><td>" . $row['aantalProducten'] . "</td><td>" . $row['waardeVoorraad'] . "</td>";
                    echo '</tr>';
                }
                echo "</table>";


                ?>
            </div>
        </div>
        <div class="col-lg-4 col-xs-4">
            <div class="well">
                <blockquote class="blockquote">
                    <p>
                    <form method="post" action="Productcatalogus.php">
                        <?php
                        echo'<select name="filter1">';


                            $sql = "SELECT productLine
                                FROM products
                                GROUP BY productline;";

                            $result = mysqli_query($con, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {

                                echo "<option value='" . $row['productLine'] . "'>" . $row['productLine'] . "</option>";

                            }

                        echo'</select>';
                        echo "<input type='submit' value = 'Filter'>";

                        //$filter = $_POST["filter1"];
                        //echo "De geselecteerde productlijn is: <b>" . $row['productLine'] . "</b>";
                        ?>
                    </form>
                    <?php
                    $filter1 = $_POST['filter1'];
                    //$filter1 = 'Planes';
                    echo "de filter is $filter1";

                    echo "<br/>";
                    ?>

                <?php
                $sql = "SELECT productCode, productName, concat('€',format(buyPrice,2,'de_DE')) as buyPrice
                        FROM products
                        WHERE productLine = '$filter1'";
                $result = mysqli_query($con, $sql);

                $aantalc = mysqli_num_fields($result);

                $fieldnr = 0;
                $finfo = mysqli_fetch_field_direct($result, $fieldnr);
                $aantalr = mysqli_num_rows($result);
                echo "Aantal producten: $aantalr";
                echo"</p>";
                echo "</blockquote>";
                echo "<table class='table'>";
                echo "<thead>";
                while ($fieldnr < $aantalc) {
                    $finfo = mysqli_fetch_field_direct($result, $fieldnr);
                    echo "<th>" . $finfo->name . "</th>";
                    $fieldnr++;
                }
                echo "</thead>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['productCode'] . "</td><td>" . $row['productName'] . "</td><td>" . $row['buyPrice'] . "</td>";
                    echo '</tr>';
                }
                echo "</table>";



                ?>
            </div>
        </div>
    </div>
</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>