<?php

$servername = "localhost";
$username =  "root";
$password = "";
$database = "fseletro";

$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['CLIENTE']) && isset($_POST['TELEFONE']) && isset($_POST['PRODUTO']) && isset($_POST[' VALOR_UNITARIO']) && isset($_POST['QUANTIDADE']) && isset($_POST[' VALOR_TOTAL'])){

$nome_cliente = $_POST[ 'CLIENTE' ];
$telefone = $_POST[ 'TELEFONE' ];
$nome_produto = $_POST[ 'PRODUTO' ];
$valor_unitario = $_POST[ 'VALOR_UNITARIO' ];
$quantidade = $_POST[ 'QUANTIDADE' ];
$valor_total = $_POST[ ' VALOR_TOTAL' ];

    
$sql = "insert into pedidos (CLIENTE,TELEFONE, PRODUTO,  VALOR_UNITARIO, QUANTIDADE, VALOR_TOTAL) values ('$nome_cliente','$telefone','$nome_produto','$valor_unitario', '$quantidade','$valor_total')";
    
$result = $conn -> query($sql);
    
}


?> 


<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <link rel="stylesheet" href="./estilo.css">
        <meta charset="UTF-8">
        <title>Pedidos</title>

    </head>
    
<body>     

 <?php
    include('menu.html');
    ?>

<main>

<form method = 'POST' name = 'pedidos' action = ""  class="form">

    <h1 id="tituloPedido"> Pedidos: </h1>
        <div class="inputPedido">
        <h4>Nome:</h4>
        <input type="text" name= "CLIENTE" placeholder="digite seu nome"  class="nome" > <br>
        
        <h4> Telefone:</h4>
        <input type="number" name= "TELEFONE" placeholder="Digite seu telefone" class="nome" > <br>
        
        <h4> Produto:</h4>
        <input type="text" name= "PRODUTO" placeholder="descrição do  produto"  class="nome" > <br>
        
        <h4> ValorUnitário</h4>
        <input type="number" name= " VALOR_UNITARIO" placeholder="valor..." class="nome" > 
        
        <h4>Quantidade:</h4>
        <input type="number" name="QUANTIDADE" placeholder="quantidade" class="nome"  > <br>
       
        <h4>R$ Total:</h4>
        <input type="number" name="VALOR_TOTAL" number="numero" placeholder="digite valor total" class="nome"  > <br><br>
       
        <input type="submit" name="submit" value="ENVIAR!" >

</div>
</form>

  </main> 

        <br><br><br><br><br>

        <footer>
        <div>
            <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
            <img id="img" src="./img/Car.png" alt="Formas de pagemento" width="300" />
            <p id="copy">&copy; Recode Pro</p>
        </div>
    </footer>
    
    </body>

    </html>
