<?php
    $btn = $_POST['btn'];
    switch ($btn){
        case 'Inserir': inserir(); break;
        case 'Cancelar': cancelar(); break;
        case 'Deletar': remover(); break;
    }

    function cancelar(){
        header("Location: ../view/cliente/listaCliente.php");
    }

    function inserir(){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
    

        $array = array('nome' => $nome, 'cpf' => $cpf, 'endereco' => $endereco, 'numero' => $numero);
        $json = json_encode($array);
        $ch = curl_init('localhost:8080/cliente');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Lenght: ' . strlen($json))
        );

        $jsonRet = json_decode(curl_exec($ch));

        header('Location: ../view/cliente/listaCliente.php');
    }

    function remover(){
        $id = $_POST['id'];
        $url = "localhost:8080/cliente/".$id;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        header('Location: ../view/cliente/listaCliente.php');
    }
?>