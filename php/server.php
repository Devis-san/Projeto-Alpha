<?php

//credenciais do banco de dados
//nome_do_banco = "db_jhuan"
//host = localhost
//usuario = "jhuan"
//senha = "123321"

//conectando ao banco de dados
$servername = "localhost";
$username = "jhuan";
$password = "123321";
$dbname = "db_jhuan";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>