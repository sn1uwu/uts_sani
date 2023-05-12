<?php

$user = "root";
$server = "localhost";
$password = "";
$database = "uts_perpus";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
