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
                        Overzicht van het aantal orders per status en per jaar, voor de jaren 2004 en 2005, uit de tabel.
                        orders
                    </p>
                </blockquote>
                <?php

                $sql = "SELECT YEAR(orderDate) as jaar, status, COUNT(status) as aantal
        FROM orders
        WHERE (orderDate BETWEEN '2004-01-01' and '2005-12-31')
        GROUP BY YEAR(orderDate), status
        ORDER BY YEAR(orderDate) DESC, status ASC;";
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
                    echo "<td>" . $row['jaar'] . "</td><td>" . $row['status'] . "</td><td>" . $row['aantal'] . "</td>";
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
                        Overzicht van  het totaal van alle ontvangen betalingen per jaar, uit de tabel payments.
                    </p>
                </blockquote>
                <?php

                $sql = "SELECT YEAR(paymentDate) as jaar, COUNT(checkNumber) as aantalBetalingen, concat('€ ',format(sum(amount),2,'de_DE')) as totaalOrderbedrag
        FROM payments
        GROUP BY YEAR(paymentDate)
        ORDER BY YEAR(paymentDate) DESC;";

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
                    echo "<td>" . $row['jaar'] . "</td><td>" . $row['aantalBetalingen'] . "</td><td>" . $row['totaalOrderbedrag'] . "</td>";
                    echo '</tr>';
                }
                echo "</table>";

                ?>
            </div>
            <div class="well">
                <blockquote class="blockquote">
                    <p>
                        Overzicht van de orders met een orderdatum in 2005, met de status shipped en waarbij het veld comments gevuld is.
                    </p>
                </blockquote>
                <?php

                $sql = "SELECT orderNumber AS orderNummer, DATE_FORMAT(orderDate, '%d %b %y') AS orderDatum, status, comments
                        FROM orders
                        WHERE (orderDate BETWEEN '2005-01-01' AND '2005-12-31') and status='shipped' AND comments IS NOT NULL;";

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
                    echo "<td>" . $row['orderNummer'] . "</td><td>" . $row['orderDatum'] . "</td><td>" . $row['status'] . "</td><td>" . $row['comments'] . "</td>";
                    echo '</tr>';
                }
                echo "</table>";
                mysqli_close($con);

                ?>
            </div>
        </div>
    </div>
</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>