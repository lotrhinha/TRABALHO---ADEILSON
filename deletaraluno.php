<?php 
include 'conexao.php';
$id = $_GET["id_aluno"];

if(isset($_GET['id_aluno'])){
    $sqlDelete = mysqli_query($connectionBD, "DELETE FROM alunos WHERE id_aluno = {$id}")
    or die (mysqli_error($connectionBD));

    header('location: telaalunos.php');
}
?>