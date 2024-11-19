<?php

include 'conexao.php';
$danca = $_POST['danca'];
$tipo = $_POST['tipo'];
$tempo = $_POST['tempo'];
$quantidade = $_POST['quantidade'];
$sql = mysqli_query($connectionBD, "INSERT INTO dancas(danca, tipo, tempo, quantidade) VALUES ('$danca', '$tipo','$tempo', '$quantidade')");

if ($sql){
    header('Location: teladancas.php');

}


?>