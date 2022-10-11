<?php
    if(!isset($_SESSION['nome'], $_SESSION['email'])){
        header('Location: login');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Index</title>
</head>
<body class="body-index">
    <header>
        <nav>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a class="align-left"><?php echo $_SESSION['nome'];?></a></li>
                <li><a class="align-right" href="<?php session_destroy()?>">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main></main>
    <script src="js/mobile-navbar.js"></script>
</body>
</html>