<?php
require "connect.php";

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
$num_page = 160;
$start = ($page - 1) * 10;
$que = "SELECT * from combined_yesterday ";
$result = $db->query($que);
$couunt = $result->rowCount();
echo "<h3 class='text-center'>Choisirer la page que vous vouler :</h3>";
echo "<br>";
$total_page = ceil($couunt / $num_page);

if ($page > 1) {
    $min = $page - 1;
    echo   "<a href ='Affichage de donnes.php?page=$min' class='btn btn-danger'>PREVIOUS</a>";
}

for ($i = 1; $i < $total_page; $i++) {
    echo   "<a href ='Affichage de donnes.php?page=$i' class='btn btn-primary'>$i</a>";

    echo "  ";
}
if ($page >= 1) {
    $max = $page + 1;
    echo   "<a href ='Affichage de donnes.php?page=$max' class='btn btn-success'>NEXT</a>";
}

echo "<br>";

echo "<br>";

echo "<br>";

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sty.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div>
        <div class="outer-wrapper">
            <div class="table-wrapper">
                <table border="5" class="table table-bordered">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Ex</th>
                            <th>Date</th>
                            <th>MarketCapitalization</th>
                            <th>Open</th>
                            <th>High</th>
                            <th>Low</th>
                            <th>Close</th>
                            <th>Adjusted_close</th>
                            <th>Volume</th>
                            <th>EMA_50 </th>
                            <th>EMA_200</th>
                            <th>High_250</th>
                            <th>Low_250</th>
                            <th>Avgvol_14d</th>
                            <th>Avgvol_50d</th>
                            <th>Avgvol_200d</th>
                            <th>Suprimer</th>



                        </tr>
                    </thead>

                    <?php
                    $l = 25;
                    require "connect.php";
                    $sql = "SELECT * from combined_yesterday LIMIT $start,$num_page ";
                    $result = $db->query($sql);
                    foreach ($result as $elt) {
                        echo "<tr>";
                        echo "<td>" . $elt[0] . "</td>";
                        echo "<td>" . $elt[1] . "</td>";
                        echo "<td>" . $elt[2] . "</td>";
                        echo "<td>" . $elt[3] . "</td>";
                        echo "<td>" . $elt[4] . "</td>";
                        echo "<td>" . $elt[5] . "</td>";
                        echo "<td>" . $elt[6] . "</td>";
                        echo "<td>" . $elt[7] . "</td>";
                        echo "<td>" . $elt[8] . "</td>";
                        echo "<td>" . $elt[9] . "</td>";
                        echo "<td>" . $elt[10] . "</td>";
                        echo "<td>" . $elt[11] . "</td>";
                        echo "<td>" . $elt[12] . "</td>";
                        echo "<td>" . $elt[13] . "</td>";
                        echo "<td>" . $elt[14] . "</td>";
                        echo "<td>" . $elt[15] . "</td>";
                        echo "<td>" . $elt[16] . "</td>";
                        echo "<td>" . $elt[17] . "</td>";
                        echo "<td>" . "<a href='suprrimer.php?code=$elt[0]' class='btn btn-danger' >SUPPRIMER</a> " . "</td>";


                        echo "</tr>";
                    }




                    ?>

                </table>
            </div>
        </div>
    </div>

    <?php

    ?>

    </div>



</body>

</html>