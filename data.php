<?php
include 'conexao.php';

$sql = "SELECT
    COUNT(CASE WHEN tipo = 'Tango' THEN 1 END) AS tango,
    COUNT(CASE WHEN tipo != 'Tango' THEN 1 END) AS naotango
FROM
    dancas";

$result = $connectionBD->query($sql);
$row = $result->fetch_assoc();

$tango = $row['tango'];
$naotango = $row['naotango'];
?>