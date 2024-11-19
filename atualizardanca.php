<?php
      include 'conexao.php';

    if(isset($_GET['id_danca'])){
        $id = $_GET['id_danca'];
        $sql = mysqli_query($connectionBD, "SELECT * FROM dancas WHERE id_danca = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $danca = $n['danca'];
            $tipo = $n['tipo'];
            $tempo = $n['tempo'];
            $quantidade = $n['quantidade'];
            
        }
    }

    if(isset($_POST['editar'])){
        $id = $_GET["id_danca"];
        $danca = $_POST['danca'];
        $tipo = $_POST['tipo'];
        $tempo = $_POST['tempo'];
        $quantidade = $_POST['quantidade'];;
        
        

        $queryUpdate = "UPDATE dancas SET danca = '$danca', tipo = '$tipo', tempo = '$tempo', quantidade = '$quantidade' WHERE id_danca = $id";
        $consulta = mysqli_query($connectionBD, $queryUpdate);
        header('location: teladancas.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danças</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form method="post" class="h-screen flex flex-col items-center justify-center gap-4">
        <h2 class="text-2xl">Atualizar Dança</h2>
        <input type="text" name="danca" placeholder="Pratica Alguma dança?" class="w-50 border border-1 border-black px-4 py-2">
        <input type="text" name="tipo" placeholder="Tipo de Dança" class="w-50 border border-1 border-black px-4 py-2">
        <input type="text" name="tempo" placeholder="Quanto tempo" class="w-50 border border-1 border-black px-4 py-2">
        <input type="number" name="quantidade" placeholder="Quantas danças" class="w-50 border border-1 border-black px-4 py-2">
        <button name="editar" class="px-4 py-2 bg-violet-800 text-white rounded" type="sumbit">Atualizar</button>
    </form>
</body>
</html>