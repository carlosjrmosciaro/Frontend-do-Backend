<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remoção de Produto</title>
</head>
<body>
    <?php
    $id = $_GET['id'];
    ?>
    <form method="POST" action="../../controller/controllerProduto.php">
        <h1>Deseja realmente remover o produto?</h1>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" name="btn" value="Deletar">
        <input type="submit" name="btn" value="Cancelar">
    </form>
</body>
</html>