<?php

$dbHost = 'Localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'formulario';

$conexao = mysqli_connect($dbHost,$dbUser,$dbPassword,$dbName);

if(mysqli_connect_errno())
{
    echo "Erro";
}
else{
    echo "conexão efetuada 100%";
}

?>
