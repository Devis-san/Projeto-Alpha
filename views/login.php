<?php
    include('php/server.php');
  
    if(isset($_SESSION['msg'])){
        //usa isso ai dps amigao -> https://sweetalert2.github.io/
        echo '<p style="color: white">' . $_SESSION['msg'] . '</p>';
        unset($_SESSION['msg']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body class="bodylogin">

    <section class="area-login">
        <div class="login">
            <div>
                <h4>Logo</h4>
            </div>
            <form method="POST" action="../php/formlogin.php">
                <input type="text" name="nome" placeholder="Nome de Usuario" autofocus>
                <input type="email" name="email" placeholder="Email">
                <input type="submit" value="Conectar">
            </form>
            <p>Ainda não tem uma conta? <a href="register">Criar Conta</a></p>
        </div>
    </section>
</body>
<footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</footer>
</html>