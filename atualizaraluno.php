<?php
      include 'conexao.php';

    if(isset($_GET['id_aluno'])){
        $id = $_GET['id_aluno'];
        $sql = mysqli_query($connectionBD, "SELECT * FROM alunos WHERE id_aluno = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $nome = $n['nome'];
            $telefone = $n['telefone'];
            $nascimento = $n['nascimento'];
            $endereco = $n['endereco'];
            
        }
    }

    if(isset($_POST['editar'])){
        $id = $_GET["id_aluno"];
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $nascimento = $_POST["nascimento"];
        $endereco = $_POST["endereco"];
        
        

        $queryUpdate = "UPDATE alunos SET nome = '$nome', telefone = '$telefone', nascimento = '$nascimento', endereco = '$endereco' WHERE id_aluno = $id";
        $consulta = mysqli_query($connectionBD, $queryUpdate);
        header('location: telaalunos.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form  method="post" class="h-screen flex flex-col items-center justify-center gap-4">
        <h2 class="text-2xl">Atualizar Aluno</h2>
        <input type="text" name="nome" placeholder="Nome" class="w-50 border border-1 border-black px-4 py-2">
        <input type="number" name="telefone" placeholder="Telefone" class="w-50 border border-1 border-black px-4 py-2">
        <input type="date" name="nascimento" placeholder="Data Nascimento (00/00/00)" class="w-50 border border-1 border-black px-4 py-2">
        <input type="text" name="endereco" placeholder="Endereço" class="w-50 border border-1 border-black px-4 py-2">
        <button name="editar" class="px-4 py-2 bg-violet-800 text-white rounded" type="sumbit">Atualizar</button>
    </form>
</body>
</html>