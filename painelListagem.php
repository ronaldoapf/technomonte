<?php
error_reporting(1);
session_start();

include_once "conexao.php";	
include "verifica_login.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel TechNoMonte</title>
	
	<style>
	#tabelaPagamentos td {
		border: 1px solid;
	}
	#tabelaPagamentos th {
		border: 1px solid;
	}
	</style>
</head>
<body>
<h2 style="text-align: right"><a href="logout.php">Sair</a></h2>
<h2>Usuario logado no sistema: <?php echo $_SESSION['usuario'];?></h2>
<br>
<table border=1>
    <tr>
        <th>Atividade</th>
        <th>Inscritos</th>
        <th>Disponível</th>
    </tr>
<?php
$sql="SELECT * FROM atividade";
$retorno=$conexao->query($sql);
while($registro = $retorno->fetch_array()){
    $vnome = $registro["nome"];
    $vvagas = $registro["vagasdisponiveis"];
    $vinsc = $registro["vagastotais"] - $vvagas;
    echo "<tr>
              <td>$vnome</td>
              <td style='text-align: center;'>$vinsc</td>
              <td style='text-align: center;'>$vvagas</td>
          </tr>";
}
?>
</table>
<br>
<br>
<table>
  <tr>
    <th>Total de Inscricoes:</th>
        <?php
        	$sql = "SELECT *FROM inscricao";
        	$retorno = $conexao->query($sql);
        	$num_rows = mysqli_num_rows($retorno);
            echo "<td>$num_rows</td>";
            $sql = "SELECT *FROM pagamento";
        	$retorno = $conexao->query($sql);
        	$vpagos = mysqli_num_rows($retorno);
            echo "<th>Pago:</th>";
            echo "<td>$vpagos</td>";
        ?>
    </tr>
</table>
<br>
<table  id="tabelaPagamentos">
	<tr>
		<th>DATA</th>
		<th>UFU</th>
		<th>FUCAMP</th>
		<th>TOTAL</th>
		<th style="border: 0px; padding-right: 30px;"></th>
		<?php
		  $sql = "SELECT * FROM usuario";
		  $retorno = $conexao->query($sql);
		  while ($registro = $retorno->fetch_array() ) {
		    $usuario_mostra = $registro["nome"];
		    echo "<th>$usuario_mostra</th>";
		  }
		?>
	</tr>

	<?php
	$sql = "SELECT data, SUM(total) total, SUM(totalFucamp) totalFucamp, datapagamento,
				(SELECT SUM(p3.valor) 
				FROM pagamento p3
				WHERE p3.valor is not null and p3.usuario_responsavel = 'caixa1' and DATE_FORMAT(p3.datapagamento, '%d/%m/%Y') = data) AS caixa1,
				(SELECT SUM(p3.valor) 
				FROM pagamento p3
				WHERE p3.valor is not null and p3.usuario_responsavel = 'caixa2' and DATE_FORMAT(p3.datapagamento, '%d/%m/%Y') = data) AS caixa2,
				(SELECT SUM(p3.valor) 
				FROM pagamento p3
				WHERE p3.valor is not null and p3.usuario_responsavel = 'caixa3' and DATE_FORMAT(p3.datapagamento, '%d/%m/%Y') = data) AS caixa3,
				(SELECT SUM(p3.valor) 
				FROM pagamento p3
				WHERE p3.valor is not null and p3.usuario_responsavel = 'caixa4' and DATE_FORMAT(p3.datapagamento, '%d/%m/%Y') = data) AS caixa4,
				(SELECT SUM(p3.valor) 
				FROM pagamento p3
				WHERE p3.valor is not null and p3.usuario_responsavel = 'caixa5' and DATE_FORMAT(p3.datapagamento, '%d/%m/%Y') = data) AS caixa5,
				(SELECT SUM(p3.valor) 
				FROM pagamento p3
				WHERE p3.valor is not null and p3.usuario_responsavel = 'Fucamp' and DATE_FORMAT(p3.datapagamento, '%d/%m/%Y') = data) AS fucamp,
				(SELECT SUM(p3.valor) 
				FROM pagamento p3
				WHERE p3.valor is not null and p3.usuario_responsavel = 'igor' and DATE_FORMAT(p3.datapagamento, '%d/%m/%Y') = data) AS igor,
				(SELECT SUM(p3.valor) 
				FROM pagamento p3
				WHERE p3.valor is not null and p3.usuario_responsavel = 'rafael' and DATE_FORMAT(p3.datapagamento, '%d/%m/%Y') = data) AS rafael
			FROM (
			SELECT DATE_FORMAT(p1.datapagamento, '%d/%m/%Y') as data, sum(p1.valor) as total, 0 as totalFucamp, p1.datapagamento
			FROM pagamento p1
			WHERE p1.valor is not null and p1.usuario_responsavel <> 'Fucamp'
			GROUP BY DATE_FORMAT(p1.datapagamento, '%d/%m/%Y')
			UNION
			SELECT DATE_FORMAT(p2.datapagamento, '%d/%m/%Y') as data, 0 as total, sum(p2.valor) as totalFucamp, p2.datapagamento 
			FROM pagamento p2 
			WHERE p2.valor is not null and p2.usuario_responsavel = 'Fucamp'
			GROUP BY DATE_FORMAT(p2.datapagamento, '%d/%m/%Y') ) pagamentos
			GROUP BY data
			ORDER BY datapagamento
			";

	$retorno = $conexao->query( $sql );
	
	/*if($retorno == false){
		echo $conexao->error;exit;
	}*/
	$totalgeral=0;
	while ($registro = $retorno->fetch_array() ) {
		$data = $registro["data"];
		$totaldia = $registro["total"];
		
		is_null($registro["totalFucamp"]) ? $totaldiafucamp = 0 : $totaldiafucamp = $registro["totalFucamp"];
		
		$totaldiageral = $totaldia + $totaldiafucamp;

		$totalgeralufu = $totalgeralufu + $totaldia;
		$totalgeralfucamp = $totalgeralfucamp + $totaldiafucamp;
		$totalgeral = $totalgeral + $totaldia + $totaldiafucamp;

		$caixa1 = is_null($registro["caixa1"]) || $registro["caixa1"] == 0 ? "-" : $registro["caixa1"];
		$caixa2 = is_null($registro["caixa2"]) || $registro["caixa2"] == 0 ? "-" : $registro["caixa2"];
		$caixa3 = is_null($registro["caixa3"]) || $registro["caixa3"] == 0 ? "-" : $registro["caixa3"];
		$caixa4 = is_null($registro["caixa4"]) || $registro["caixa4"] == 0 ? "-" : $registro["caixa4"];
		$caixa5 = is_null($registro["caixa5"]) || $registro["caixa5"] == 0 ? "-" : $registro["caixa5"];
		$Fucamp = is_null($registro["fucamp"]) || $registro["fucamp"] == 0 ? "-" : $registro["fucamp"];
		$igor = is_null($registro["igor"]) || $registro["igor"] == 0 ? "-" : $registro["igor"];
		$rafael = is_null($registro["rafael"]) || $registro["rafael"] == 0 ? "-" : $registro["rafael"];
		
		echo "<tr>
				<td style='text-align: center;'>$data</td>
				<td style='text-align: center;'>$totaldia</td>
				<td style='text-align: center;'>$totaldiafucamp</td>
				<td style='text-align: center;'>$totaldiageral</td>
				<td style='border: 0px;'></td>
				<td style='text-align: center;'>$caixa1</td>
				<td style='text-align: center;'>$caixa2</td>
				<td style='text-align: center;'>$caixa3</td>
				<td style='text-align: center;'>$caixa4</td>
				<td style='text-align: center;'>$caixa5</td>
				<td style='text-align: center;'>$Fucamp</td>
				<td style='text-align: center;'>$igor</td>
				<td style='text-align: center;'>$rafael</td>
		      </tr>";
	}

	echo "<tr>
			<td><b>TOTAIS GERAIS:</b></td>
			<td style='text-align: center;'>$totalgeralufu</td>
			<td style='text-align: center;'>$totalgeralfucamp</td>
			<td style='text-align: center;'>$totalgeral</td>
		  </tr>";
	?>		
</table>
<br>
<table border="1">
	<tr>
		<th>Instituição</th>
		<th>Inscritos</th>
		<th>Pagos</th>
	</tr>
	
	<?php
	  //$sql = "SELECT instituicao,COUNT(cpf) as total FROM inscricao GROUP BY instituicao";
	  $sql = "SELECT instituicao,COUNT(cpf) as total, COUNT(pagamento.inscricao_cpf) as totalPagos FROM inscricao left join pagamento on inscricao.cpf = pagamento.inscricao_cpf GROUP BY instituicao";
	  
	  $retorno = $conexao->query( $sql );
	  /*if($retorno == false){
		  echo $conexao->error;exit;
	  }*/
	  while ($registro = $retorno->fetch_array() ) {
		  $instituicao = $registro["instituicao"];
		  $contagem = $registro["total"];
		  $contagemPagos = $registro["totalPagos"];
		  
		  echo "<tr>
				  <td>$instituicao</td>
				  <td style='text-align: center;'>$contagem</td>
				  <td style='text-align: center;'>$contagemPagos</td>
			</tr>";
	  }
	?>
</table>
<br>
<table border="1">
	<tr>
		<th>CPF</th>
		<th>Nome</th>
		<th>Data Inscr.</th>
		<th>Instituição</th>
		<th>Pago</th>
		<th>Data Pago</th>
		<th>Responsável</th>
	</tr>
	
	<?php
	$sql = "SELECT inscricao.*, pagamento.*, usuario.nome as nomeResponsavel FROM inscricao left join pagamento on inscricao.cpf = pagamento.inscricao_cpf left join usuario on usuario.usuario = pagamento.usuario_responsavel order by inscricao.nome";

	$retorno = $conexao->query( $sql );
	/*if($retorno == false){
		echo $conexao->error;exit;
	}*/
	while ($registro = $retorno->fetch_array() ) {
		$cpf = $registro["cpf"];
		$nome = $registro["nome"];
		$data = $registro["data"];
		$datapago = $registro["datapagamento"];
		$instituicao = $registro["instituicao"];
		//$pago = is_null($registro["valor"]) ? "" : "X";
		$pago = is_null($registro["valor"]) ? "" : $registro["valor"];
		$responsavel = is_null($registro["nomeResponsavel"]) ? "" : $registro["nomeResponsavel"];
		
		echo "<tr>
				<td>$cpf</td>
				<td>$nome</td>
				<td>$data</td>
				<td>$instituicao</td>
				<td style='text-align: center;'>$pago</td>
				<td>$datapago</td>
				<td>$responsavel</td>
				
		      </tr>";
	}

	?>		

</table>
<br>
</body>
</html>
