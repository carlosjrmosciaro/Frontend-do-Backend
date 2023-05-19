<?php
    $btn = $_POST['btn'];
    switch ($btn){
        case 'Inserir': inserir(); break;
        case 'Cancelar': cancelar(); break;
        case 'Deletar': remover(); break;
    }

    function cancelar(){
        header("Location: ../view/produto/listaProduto.php");
    }

    function inserir(){
        $marca = $_POST['marca'];
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
    
        $array = array('nome' => $nome,'marca' => $marca, 'valor' => $valor);
        $json = json_encode($array);
        $ch = curl_init('localhost:8080/produto');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Lenght: ' . strlen($json))
        );

        $jsonRet = json_decode(curl_exec($ch));

        header('Location: ../view/produto/listaProduto.php');
    }

    function remover(){
        $id = $_POST['id'];
        $url = "localhost:8080/produto/".$id;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        header('Location: ../view/produto/listaProduto.php');
    }

?>