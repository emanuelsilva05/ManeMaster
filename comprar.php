<?php
include ('conecta.php'); //conexão com nosso banco

//puxei a variavel da compra no html cardapio
$pedido = $_GET["pedido"];

switch($pedido){
    case 1:
     $resultado = $conexao -> query("SELECT * FROM produtos where nome_produto ='cuscuz';");
    break;
    
    case 2:
     $resultado = $conexao -> query("SELECT * FROM produtos where nome_produto ='miojo';");
    break;
    
    case 3:
     $resultado = $conexao -> query("SELECT * FROM produtos where nome_produto ='omelete';");
    break;
    
    case 4:
     $resultado = $conexao -> query("SELECT * FROM produtos where nome_produto ='hamburguer';");
    break;
    
    case 5:
     $resultado = $conexao -> query("SELECT * FROM produtos where nome_produto ='pizza';");
    break;
    
    case 6:
     $resultado = $conexao -> query("SELECT * FROM produtos where nome_produto ='pave';");
    break;
    
    case 7:
     $resultado = $conexao -> query("SELECT * FROM produtos where nome_produto ='mousse';");
    break;
    
    case 8:
     $resultado = $conexao -> query("SELECT * FROM produtos where nome_produto ='bolo';");
    break;
}


//transformando a tabela em array
while($linhas = $resultado -> fetch_array(MYSQLI_ASSOC)){
    
    $quantidade = $linhas["quantidade"] ;
    
    //Um switch para diminuir o produto no banco dependendo do que ele comprou 
    switch($pedido){
  
  case 1:
    
    //condição para dizer que acabou do estoque
    if($quantidade >= 1){
        
        $quantidade = $linhas["quantidade"] -1;
        
        //Diminuir um produto no bando de dados
        $sql = "UPDATE produtos SET quantidade = $quantidade WHERE nome_produto ='cuscuz' ";
        $resultado = $conexao -> query($sql);
        echo "Obrigado pela escolha dos nossos produtos!";
        
    } else{ echo "Acabou o estoque!!!";}
    break;
  
  
  case 2:
      if($quantidade >= 1){
        
        $quantidade = $linhas["quantidade"] -1;
        
        //Diminuir um produto no bando de dados
        $sql = "UPDATE produtos SET quantidade = $quantidade  WHERE nome_produto ='miojo' ";
        $resultado = $conexao -> query($sql);
        echo "Obrigado pela escolha dos nossos produtos!";
        
    } else{ echo "Acabou o estoque!!!";}
    break;
    
    
    case 3:
      if($quantidade >= 1){
        
        $quantidade = $linhas["quantidade"] -1;
        //Diminuir um produto no bando de dados
        $sql = "UPDATE produtos SET quantidade = $quantidade  WHERE nome_produto ='omelete' ";
        $resultado = $conexao -> query($sql);
        echo "Obrigado pela escolha dos nossos produtos!";
        
    } else{ echo "Acabou o estoque!!!";}
    break;
    
    case 4:
      if($quantidade >= 1){
        
        $quantidade = $linhas["quantidade"] -1;
        //Diminuir um produto no bando de dados
        $sql = "UPDATE produtos SET quantidade = $quantidade  WHERE nome_produto ='hamburguer' ";
        $resultado = $conexao -> query($sql);
        echo "Obrigado pela escolha dos nossos produtos!";
        
    } else{ echo "Acabou o estoque!!!";}
    break;
    
    case 5:
      if($quantidade >= 1){
        
        $quantidade = $linhas["quantidade"] -1;
        //Diminuir um produto no bando de dados
        $sql = "UPDATE produtos SET quantidade = $quantidade  WHERE nome_produto ='pizza' ";
        $resultado = $conexao -> query($sql);
        echo "Obrigado pela escolha dos nossos produtos!";
        
    } else{ echo "Acabou o estoque!!!";}
    break;
    
    case 6:
      if($quantidade >= 1){
        
        $quantidade = $linhas["quantidade"] -1;
        //Diminuir um produto no bando de dados
        $sql = "UPDATE produtos SET quantidade = $quantidade  WHERE nome_produto ='pave' ";
        $resultado = $conexao -> query($sql);
        echo "Obrigado pela escolha dos nossos produtos!";
        
    } else{ echo "Acabou o estoque!!!";}
    break;
    
    case 7:
      if($quantidade >= 1){
        
        $quantidade = $linhas["quantidade"] -1;
        //Diminuir um produto no bando de dados
        $sql = "UPDATE produtos SET quantidade = $quantidade  WHERE nome_produto ='mousse' ";
        $resultado = $conexao -> query($sql);
        echo "Obrigado pela escolha dos nossos produtos!";
        
    } else{ echo "Acabou o estoque!!!";}
    break;
    
    case 8:
      if($quantidade >= 1){
        
        $quantidade = $linhas["quantidade"] -1;
        //Diminuir um produto no bando de dados
        $sql = "UPDATE produtos SET quantidade = $quantidade  WHERE nome_produto ='bolo' ";
        $resultado = $conexao -> query($sql);
        echo "Obrigado pela escolha dos nossos produtos!";
        
    } else{ echo "Acabou o estoque!!!";}
    break;

    
}
    echo "<a href='cardapio.html'> Volte a comprar</a>";
    
}


    
    




//Volta a comprar
//header('Location: cardapio.html');

$conexao -> close();
?>
