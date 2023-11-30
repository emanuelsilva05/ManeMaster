<?php
include ('conecta.php'); //conexão com nosso banco

//puxei as variaveis
$usuario = $_GET["usuario"]; 
$senha = $_GET["senha"];

//crie uma variavel para armazenar os dados da tabela
$resultado = $conexao -> query("SELECT * FROM usuario_lanchonete");

//transformei a tabela em array
while($tabelausuario = $resultado -> fetch_array(MYSQLI_ASSOC)){
  
  //Condição para ir fazer pro cardápio ou voltar para o login 
if($usuario == $tabelausuario["nome_usuario"] && $senha == $tabelausuario["senha"]){
     echo "entrou";
     echo "<a href='cardapio.php'>clique</a>";
     //header('Location: cardapio.html');
     
}   
    
}
    
    
 



$conexao -> close();


?>