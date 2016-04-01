<?php
  include("config.php");
  $cd_mercadoria = mysql_real_escape_string($_POST['cd_mercadoria']);
  $tp_mercadoria = mysql_real_escape_string($_POST['tp_mercadoria']);
  $qtd = mysql_real_escape_string($_POST['qtd']);
  $nm_mercadoria = mysql_real_escape_string($_POST['nm_mercadoria']);
  $preco = mysql_real_escape_string($_POST['preco']);
  $tp_negocio = mysql_real_escape_string($_POST['tp_negocio']);  

  if(mysql_query("INSERT INTO teste_do_mercado (cd_mercadoria, tp_mercadoria, nm_mercadoria, qtd, preco, tp_negocio ) VALUES ('$cd_mercadoria','$tp_mercadoria', '$nm_mercadoria','$qtd', '$preco','$tp_negocio')"))
  {
  	//$total=$qtd*$preco;
    echo '<p>Produto adicionado</p>'/* + $total*/;

  } else {
    echo '<p>Problema na gravacao</p>';  
  }
?>
