<?php 
include 'conexao.php';
$id = $_GET["id_danca"];

if(isset($_GET['id_danca'])){
    $sqlDelete = mysqli_query($connectionBD, "DELETE FROM dancas WHERE id_danca = {$id}")
    or die (mysqli_error($connectionBD));

    header('location: teladancas.php');
}
?>