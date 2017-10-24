<?php
    include 'conecta.php';
    
    header('Content-Type: text/html; charset=utf-8');
    //Meta Charset no Arquivo (UFT-8)
    
    mysqli_select_db($conecta,"cliente") or
    print(mysqli_error());
    
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $mensagem = $_GET['mensagem']

    $sql = "UPDATE 'contato_tcc'
               SET nome = '$nome',
                   email = '$email'
            WHERE id_usuario = $id_usuario";    
    echo $sql;
    mysqli_query($conecta,$sql);
        
    //encerra a conexão.
    mysqli_close($conecta);
?>