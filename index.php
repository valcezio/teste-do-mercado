<!DOCTYPE html>
<html>
<head>
	<title>teste-do-mercado</title>
	<meta charset="UTF-8">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="javascript.js"></script>
	<link rel="stylesheet" type="text/css" href="meustyle.css" />
</head>
<?php
	include_once ("config.php");
?>
<body>
<form name="formulario" action="grava.php" method="post" id="grava">
<table border=1>
<tr><!--line1-->
<td>Código da Mercadoria</td>
<td>Tipo da Mercadoria</td>
<td>Nome da Mercadoria</td>
<td>Quantidade</td>
<td>Preço</td>
<td>Tipo do Negócio</td>
</tr>
<tr><!--line2-->
<td> <input type="text"name="cd_mercadoria" ></input></td> <!--value="código" não vai dar tempo de colocar :( -->
<td> <input name="tp_mercadoria"></input></td>
<td> <input name="nm_mercadoria"></input></td>
<td> <input name="qtd"></input></td>
<td> <input name="preco"></input></td>
<td> <select name="tp_negocio"><option>Compra<option>Venda</select></td>
<tr></tr>
<td colspan="6">
<button type="reset" value="Cancela"> Limpa </button>
<button type="submit" name="cadastrar" onClick="window.location.reload();"> Adicionar </button>
</tr>
</table>
</form>
<h1>Tabela de Produtos no Carrinho</h1>
<table id="tabela2">
<tr><!--line1-->
<td>Código da Mercadoria</td>
<td>Tipo da Mercadoria</td>
<td>Nome da Mercadoria</td>
<td>Quantidade</td>
<td>Preço</td>
<td>Tipo do Negócio</td>
<td>Remove</td>
</tr>
	<?php
		$Sql = mysql_query("select * from teste_do_mercado");
		while($Prod = mysql_fetch_array($Sql)){
	?>
	<tr>
		<!--<span>Código da Negociação = <?php //print $Prod ['cd_neg']?> </span><!--não é necessario, controle-->
		<td><?php print $Prod['cd_mercadoria']?></td>
		<td><?php print $Prod['tp_mercadoria']?></td>
		<td><?php print $Prod['nm_mercadoria']?></td>
		<td><?php print $Prod['qtd']?></td>
		<td>R$<?php print $Prod['preco']?></td>
		<td><?php print $Prod ['tp_negocio']?></td>
		<td><a href="#" >X</a></td>
	</tr>
	<?php
	if($Prod ['tp_negocio']=='Compra')
		{
			$totalparc = $Prod['preco'] * $Prod['qtd'];
			$total=$total+$totalparc;
    	}
    	else
    	{
    		$totalparc = $Prod['preco'] * $Prod['qtd'];
			$total=$total-$totalparc;
    	}
    	if($total>0)
    	{
    		$saldo="À Pagar";
    	}
    	else
    	{
    		$total=-$total-0;
    		$saldo="Receber";
    	}

	}
	?>
	<tr>
	<td colspan="4" align="right">TOTAL</td>
	<td>R$<?php print $total ?></td>
	<td><?php print $saldo ?></td>
	<td><button type="submit" onClick='alert("Desculpe, em manutenção!")'>Finalizar</button></td>
	</tr>	
</table>
</body>
</html>
