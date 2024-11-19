<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danças</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="salvar2.php" method="post" class="h-screen flex flex-col items-center justify-center gap-4">
        <h2 class="text-2xl">Nova Dança</h2>
        <input type="text" name="danca" placeholder="Pratica Alguma dança?" class="w-50 border border-1 border-black px-4 py-2">
        <input type="text" name="tipo" placeholder="Tipo de Dança" class="w-50 border border-1 border-black px-4 py-2">
        <input type="text" name="tempo" placeholder="Quanto tempo" class="w-50 border border-1 border-black px-4 py-2">
        <input type="number" name="quantidade" placeholder="Quantas danças" class="w-50 border border-1 border-black px-4 py-2">
        <button class="px-4 py-2 bg-violet-800 text-white rounded" type="sumbit">Cadastrar</button>
    </form>
</body>
</html>