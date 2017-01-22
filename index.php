<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Caronas e vans</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<style type="text/css">
			#pesquisa{
			width:500px;
			}
			#formdepesquisa{
			margin-top:50px;
			}
		</style>
		<script type="text/javascript" src="js/jquery-2.1.0.js"></script>
		<script type="text/javascript" src="js/busca.js"></script>	
	</head>
	<body>
		<center>
			<article>
				<form name="formdepesquisa" id="formdepesquisa" method="post" action="">
					<fieldset>
						<legend>Busque sua van/carona já</legend>
						<div class="input-prepend">
							<span class="add-on"><i class="icon-search"></i></span>
							<input type="text" name="pesquisa" id="pesquisa" value="" tabindex="1" placeholder="Pesquise...">
						</div>
					</fieldset>
				</form>
				<div id="contentLoading">
					<div id="mostraimagem"></div>
				</div>
				<section class="jumbotron">
					<div id="mostrarresultado"></div>
				</section>
			</article>
		</center>
	</body>
</html>