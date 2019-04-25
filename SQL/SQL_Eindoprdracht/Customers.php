<?php
include 'configdb.php';

if(empty($_SERVER['CONTENT_TYPE']))
{
    $_SERVER['CONTENT_TYPE'] = "application/x-www-form-urlencoded";
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="Custom.css">

<!-- Links and Header title -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <div class="navbar-brand navbar-brand-centered">Customers</div>
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
                        Klanten in de USA, Australie en Japan met een kredietlimiet van meer dan 100.000
                    </p>
                </blockquote>
                <?php

                $sql = "SELECT customerName, country, concat('€ ',format(creditLimit,2,'de_DE')) as creditLimit 
                        FROM customers 
                        WHERE Country IN ('USA', 'Australia', 'Japan') and creditLimit>100000;";
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
                    echo "<td>" . $row['customerName'] . "</td><td>" . $row['country'] . "</td><td>" . $row['creditLimit'] . "</td>";
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
                        Overzicht van landen met meer dan 10 klanten in dat land.
                    </p>
                </blockquote>
                <?php

                $sql = "SELECT country, COUNT(customerNumber) AS aantalCustomers
                        FROM customers
                        GROUP BY country
                        HAVING COUNT(customerNumber) > 10;";

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
                    echo "<td>" . $row['country'] . "</td><td>" . $row['aantalCustomers'] . "</td>";
                    echo '</tr>';
                }
                echo "</table>";

                ?>
            </div>
            <div class="well">
                <blockquote class="blockquote">
                    <form method="POST" action="Customers.php">
                        <label>Zoek Begin Letter</label>
                        <input type="text" class="form-control" required="required" name="term" maxlength="10"
                               placeholder="placeholder">
                        <input type="submit" class="btn btn-primary" value="Submit"/>
                    </form>
                </blockquote>
                <?php
                $term = $_POST['term'];
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

                <?php
/*
                $sql = "SELECT customerName, CONCAT_WS(' ', contactFirstName, contactLastName) AS contactFullname, phone
                        FROM customers;";

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
                mysqli_close($con);
*/
                ?>
            </div>
        </div>
    </div>
</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>