<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" required>

        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao"></textarea>

        <input type="submit" value="Cadastrar">
</form>
</body>
</html>