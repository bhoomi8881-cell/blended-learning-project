<?php

$conn = mysqli_connect(
    "sql305.infinityfree.com",
    "if0_42631257",
    "Bhoomi8050",
    "if0_42631257_blendedlearning",
    3306
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>