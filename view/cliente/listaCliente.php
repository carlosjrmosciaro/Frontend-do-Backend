<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comercio Eletronico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">    
</head>

    <body>
        <?php
        include "../menu/cabecalho.php";
        
        $url = "localhost:8080/cliente";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));      
        ?>       

        <div class="panel panel-default" style="margin: 10px">
        
        <div class="panel-heading">
                <div class="clearfix">
                    <h2 class="panel-title aw-titulo-panel">Listagem de Clientes</h2>  
                    <a class="btn btn-success" href="inserecliente.php">Inserir</a>               
                                   
                </div>
        </div>
        
        <div class="panel-body">            
            
            <table class="table">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Endereco</th>
                    <th>Numero</th>

                    <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($resultado as $obj) {
                    ?>
                    <tr> 
                        <td><?=$obj->id?></td>
                        <td><?=$obj->nome?></td>
                        <td><?=$obj->cpf?></td>
                        <td><?=$obj->endereco?></td>
                        <td><?=$obj->numero?></td>
                                   
                        <td>
                            <a class="btn btn-sm btn-primary" href="editaCliente.php?id=<?=$obj->id?>">Editar</a>                                                   
                            <a class="btn btn-sm btn-danger" href="removeCliente.php?id=<?=$obj->id?>">Remover</a>              
                        </td>                                        
                    </tr> 
                    <?php
                        }
                    ?>            
                
                </tbody>                
                
            </table>
            
            
        </div>
    
    </div>
    <?php
    include '../menu/rodape.php';
    ?>
    </body>
</html>