<?php

try {
    $chain = "mysql:host=localhost;dbname=base1";
    $user = "root";
    $pass = "";

    $db = new PDO($chain, $user, $pass);
} catch (PDOException $m) {
    die($m->getMessage());
}
