<?php
include ('conecta.php');

//puxei as variaveis do cadastro
$nome_usuario = $_GET ["nome_usuario"];
$senha = $_GET ["senha"];
$nome = $_GET ["nome"];

//Adicionei no banco de dados
$sql = "INSERT INTO usuario_lanchonete (nome, nome_usuario, senha) VALUES ('$nome','$nome_usuario', '$senha')";

//ver a conexão e voltar para login
if($conexao -> query($sql)){
  echo "inserção realizada com sucesso <br>";
  echo "Você está cadastrado!!!";
  echo "<a href='index.php'>Login</a><br>";
}else{
    echo "erro";
}

$conexao -> close();
?>