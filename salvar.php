<?php
 
include 'conexao.php';
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$nascimento = $_POST['nascimento'];
$endereco = $_POST['endereco'];
$sql = mysqli_query($connectionBD, "INSERT INTO alunos(nome, telefone, nascimento, endereco) VALUES ('$nome', '$telefone','$nascimento', '$endereco')");

if ($sql){
    header('Location: telaalunos.php');

}
?>