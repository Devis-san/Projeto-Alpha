<?php
    //inicia a sessão e inclue o arquivo 'server.php'
    session_start();
    include_once("../php/server.php");

    //cria variáveis com o valor dos valores correspondentes passados no formulário
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    //verifica se o usuario já existe na tabela
    $verify = "SELECT * FROM tb_users WHERE nome = '$nome' AND email = '$email'";
    $result = mysqli_query($conn, $verify);
    $row = mysqli_num_rows($result);

    if($row == 1){
        
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['sucess'] = 'Bem vindo ' . $nome;
        header("Location: ../home");
    }else{

        $_SESSION['msg'] = "Usuário não existe";
        header('Location: ../login');

    }

?>