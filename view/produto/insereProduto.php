<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção de Produto</title>
</head>
<body>
    <form method="POST" action="../../controller/controllerProduto.php">
        <label>Marca</label>
        <input type="text" name="marca" size="40"><br>
        <label>Nome</label>
        <input type="text" name="nome" size="40"><br>
        <label>Valor</label>
        <input type="text" name="valor" size="40"><br>

        <input type="submit" name="btn" value="Inserir">
        <input type="submit" name="btn" value="Cancelar">
    </form>
</body>
</html>