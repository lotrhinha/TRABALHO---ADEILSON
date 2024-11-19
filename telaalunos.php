<?php
include 'conexao.php';
include 'read1.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lista de alunos</title>
</head>

<body>
    <br><br>
    <h2 class="text-4xl">Lista de alunos Cadastrados:</h2>

    <div class="container" col-md-6 offset-md-3>
        <table class="table table-hover">

            <thead>
                <tr>
                    <th scope="col">Id alunos</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Endereço</th>
                    <th>Funções</th>
                </tr>
            </thead>
            <?php
            while ($alunos = mysqli_fetch_assoc($listarSQL)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $alunos['id_aluno'] ?></td>
                        <td><?php echo $alunos['nome'] ?></td>
                        <td><?php echo $alunos['telefone'] ?></td>
                        <td><?php echo $alunos['nascimento'] ?></td>
                        <td><?php echo $alunos['endereco'] ?></td>
                        
                        <td>
                            <a href="deletaraluno.php?id_aluno=<?php echo $alunos['id_aluno']; ?>" class="btn btn-sm btn-danger">Excluir</a>
                            <a href="atualizaraluno.php?id_aluno=<?php echo $alunos['id_aluno']; ?>" class="btn btn-sm btn-warning">Atualizar</a> 
                        </td>
                    </tr>

                </tbody>
            <?php
            }
            ?>
        </table>
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>