<?php
include 'conexao.php';
include 'read2.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lista de danças</title>
</head>

<body>
    <br><br>
    <h2 class="text-4xl">Lista de danças Cadastrados:</h2>

    <div class="container" col-md-6 offset-md-3>
        <table class="table table-hover">

            <thead>
                <tr>
                    <th scope="col">Id dança</th>
                    <th scope="col">Pratica alguma dança</th>
                    <th scope="col">Tipo de dança</th>
                    <th scope="col">Tempo de prática</th>
                    <th scope="col">Quantidade</th>
                    <th>Funções</th>
                </tr>
            </thead>
            <?php
            while ($dancas = mysqli_fetch_assoc($listarSQL)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $dancas['id_danca'] ?></td>
                        <td><?php echo $dancas['danca'] ?></td>
                        <td><?php echo $dancas['tipo'] ?></td>
                        <td><?php echo $dancas['tempo'] ?></td>
                        <td><?php echo $dancas['quantidade'] ?></td>
                        
                        <td>
                            <a href="deletardanca.php?id_danca=<?php echo $dancas['id_danca']; ?>" class="btn btn-sm btn-danger">Excluir</a>
                            <a href="atualizardanca.php?id_danca=<?php echo $dancas['id_danca']; ?>" class="btn btn-sm btn-warning">Atualizar</a> 
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