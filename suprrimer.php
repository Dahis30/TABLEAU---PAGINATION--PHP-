<?php
require "connect.php";
$cod = $_GET["code"];
$sql = "DELETE FROM combined_yesterday where COL1 = '$cod' ";
$db->exec($sql);
header("location:Affichage de donnes.php");
