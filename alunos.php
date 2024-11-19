<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="salvar.php" method="post" class="h-screen flex flex-col items-center justify-center gap-4">
        <h2 class="text-2xl">Novo Aluno</h2>
        <input type="text" name="nome" placeholder="Nome" class="w-50 border border-1 border-black px-4 py-2">
        <input type="number" name="telefone" placeholder="Telefone" class="w-50 border border-1 border-black px-4 py-2">
        <input type="date" name="nascimento" placeholder="Data Nascimento (00/00/00)" class="w-50 border border-1 border-black px-4 py-2">
        <input type="text" name="endereco" placeholder="Endereço" class="w-50 border border-1 border-black px-4 py-2">
        <button class="px-4 py-2 bg-violet-800 text-white rounded" type="sumbit">Cadastrar</button>
    </form>
</body>
</html>