<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção de Cliente</title>
</head>
<body>
    <form method="POST" action="../../controller/controllerCliente.php">
        <label>Nome</label>
        <input type="text" name="nome" size="40"><br>
        <label>Cpf</label>
        <input type="text" name="cpf" size="40"><br>
        <label>Endereco</label>
        <input type="text" name="endereco" size="40"><br>
        <label>Numero</label>
        <input type="text" name="numero" size="40"><br>

        <input type="submit" name="btn" value="Inserir">
        <input type="submit" name="btn" value="Cancelar">
    </form>
</body>
</html>