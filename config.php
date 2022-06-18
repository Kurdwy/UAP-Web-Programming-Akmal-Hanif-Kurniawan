<?php

$server = "sql104.epizy.com";
$user = "epiz_31984184";
$password = "FPg6jnSz2fAaoP3";
$nama_database = "epiz_31984184_pendaftaran";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
