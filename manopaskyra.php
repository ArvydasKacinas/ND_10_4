<?php

$vardas="admin";
$slaptazodis="123456";

$vardasIvestas=$_POST["vardas"];
$slaptazodisIvestas=$_POST["slaptazodis"];

if($vardas==$vardasIvestas && $slaptazodis==$slaptazodisIvestas) {
    echo "<h1> Sveiki atvyke i savo paskyra </h1>";
    echo "<div>prisijungete sekmingai</div>";
} else {
    header("HTTP/1.0 404 Not Found");
};


?>