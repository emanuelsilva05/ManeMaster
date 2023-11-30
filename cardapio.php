<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ManeMaster</title>
  <link rel="stylesheet" href="css/cardapio.css">  <!-- Chamei meu css externo-->
</head>

<body>
  <div id="container">
    
    <div class="cardapio">
      
      <!-- header= cabeçalho -->
      <header>Disponíveis</header>
      
      <!-- Seção geral dos produtos-->
      <section id="produtos">
        
        <!-- Todos os meus produtos-->
        
        <!-- Aqui dividi cada um em seções, section= seção -->
        <section class="produto">
          <img class="img" src="img/cuscuz.png"> <!-- imagem do produto -->
          <p>1-Cuscuz recheado <br>R$ 20,00</p>  <!-- texto do produto -->
        </section>
        
        
         <!-- Igual eu fiz assim, todos abaixo vai ser igual, só muda os produtos -->
        <section class="produto">
          <img class="img" src="img/miojo.png">
          <p>2-Miojo <br>R$ 5,00</p>
        </section>
        
        <section class="produto">
          <img class="img" src="img/omelete.png">
          <p>3-Omelete <br>R$ 10,00</p>
        </section>
        
        <section class="produto">
          <img class="img" src="img/hamburguer.png">
          <p>4-Hambúrguer <br>R$ 15,00</p>
        </section>
        
        <section class="produto">
          <img class="img" src="img/pizza.png">
          <p>5-Pizza <br>R$ 60,00</p>
        </section>
        
        <section class="produto">
          <img class="img" src="img/pave.png">
          <p>6-Pavê <br>R$ 8,00</p>
        </section>
        
        <section class="produto">
          <img class="img" src="img/mousse.png">
          <p>7-Mousse <br>R$ 7,00</p>
        </section>
        
        <section class="produto">
          <img class="img" src="img/bolo .png">
          <p>8-Bolo de Milho <br>R$ 20,00</p>
        </section>
      
       <!-- Vai até aqui meus produtos-->
      
      
      <!--Formulario de compra -->
      
      <!-- o action= página que vai ser manda esses dado-->
      <form action="comprar.php" method="get"> 
		    	<input for="pedido" type="number" name="pedido" placeholder="Qual o número do seu pedido?" autofocus>
		    	<input type="submit" value="Comprar">
	  </form>
      
      
      <!-- Vai até aqui a seção geral dos produtos-->
      </section>
    
    
    </div>
  <!--Essas 2 div, fecha a div conteiner e cardapio que crie logo no inicio -->
  </div>

</body>

</html>