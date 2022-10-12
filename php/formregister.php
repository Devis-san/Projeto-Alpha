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
        //se o usuario ja existe ele retorna para o login
        $_SESSION['msg'] = "Usuário já existe";
        header('Location: ../register');
    }else{
        $sql = "INSERT INTO tb_users (nome, email, created) VALUES ('$nome', '$email', NOW())"; 
        $sqlconn = mysqli_query($conn, $sql);

        if(mysqli_insert_id($conn)){
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            $_SESSION['sucess'] = "Usuário cadastrado com sucesso";
            header("Location: ../home");
        }else{
            header("Location: ../register"); 
        }

    }
?>