<?php
	require_once('conexao.php');
	if(!empty($_POST['pesquisa'])){
		$parametro = $_POST['pesquisa'];
		$montandohtml = "";
		$montandohtml .="<table class='table table-hover'>";
		$montandohtml .="<thead>";
		$montandohtml .="<tr>";
		$montandohtml .="<th>Van:</th>";
		$montandohtml .="</tr>";
		$montandohtml .="</thead>";
		$montandohtml .="<tbody>";
		try{
			$pdo = new conexao(); 
			$resultado = $pdo->paraselect("SELECT * FROM vans WHERE van LIKE '%$parametro%' ORDER BY van ASC");
			$pdo->desconecta();
		}catch(PDOException $e){
			echo $e->getMessage();
		}	
		if(count($resultado)){
		foreach ($resultado as $res){
			$montandohtml .="<tr>";
			$montandohtml .="<td>".$res['van']."</td>";
			$montandohtml .="</tr>";
		}	
		}else{
			$montandohtml = "";
			$montandohtml .="Nenhum resultado foi encontrado...";
		}
		$montandohtml .="</tbody>";
		$montandohtml .="</table>";
		echo $montandohtml;
	}
?>