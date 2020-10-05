<?php
$servername = "localhost";
$username = "root";
$password = "sophya13";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");
if(mysqli_connect_error()):
    echo "Erro de conexão com o banco de dados" .mysqli_connect_error();

endif;