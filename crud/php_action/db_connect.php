<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error());
    echo "Erro de conexão com o banco de dados" .mysqli_connect_error();
endif;