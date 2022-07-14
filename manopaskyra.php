<?php

echo "<h1> Sveiki atvyke i savo paskyra </h1>";

$vardas="admin";
$slaptazodis="123456";

if($vardas==$_POST["vardas"] && $slaptazodis==$_POST["slaptazodis"]) {
    echo "<div>prisijungete sekmingai</div>";
} else {
    header("HTTP/1.0 404 Not Found");
}


?>