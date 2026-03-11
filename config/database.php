<?php
//databace configuration
//local database configuration
$local_host     = 'localhost'; //127.0.0.1
$local_dbname   = 'app_beta';
$local_username = 'postgres';
$local_password = '@CTra^s5xc!zG';
$local_port     = '5432';
//supabase database configuration
$supa_host      = '';
$supa_dbname    = '';
$supa_username  = "";
$supa_password  = "";
$supa_port      = "";

$data_connection ="
    host = $local_host
    dbname = $local_dbname
    user = $local_username
    password = $local_password
    port = $local_port
";

    $conn = pg_connect($data_connection);

    if(!$conn){
        echo "Error: unable to connect to database.";
        exit();
    }else{
        echo"Success connection !!!";
    }
?>