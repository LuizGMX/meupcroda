<!DOCTYPE html>
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<!-- Latest compiled and minified CSS -->
			 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
			<link rel="stylesheet" type="text/css" href="css/style.css" >
			<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	
	
	<title>Meu PC Roda?</title>
	</head>
	<center>
	<body>
				<div id="bg">

	    <h3>Selecione a resolução que você deseja que o seu jogo rode</h3>
	    </br></br>
	   
		<div class="bloco">
			</br></br>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="input-group">
						
				<form class="borderBoxes tela efeitoTela" action="\BlackOps\graficos\ultra\FullHD/black-ops-IV-graficos-ultra-full-hd.php" method="POST">			
				<input class="btn btn-default" id="buscar" type="submit" name="Visualizar" value="Full HD">
				</form>	
				

				<form class="borderBoxes tela efeitoTela" action="\BlackOps\graficos\ultra\2K/black-ops-IV-graficos-ultra-2K.php" method="POST">			
				<input class="btn btn-default" id="buscar" type="submit" name="Visualizar" value="2K">
				</form>	
				
				<form class="borderBoxes tela efeitoTela" action="\BlackOps\graficos\ultra\4K/black-ops-IV-graficos-ultra-4K.php" method="POST">			
				<input class="btn btn-default" id="buscar" type="submit" name="Visualizar" value="4K">
				</form>					

				<form class="borderBoxes tela efeitoTela" action="\BlackOps\graficos\ultra\8K/black-ops-IV-graficos-ultra-8K.php" method="POST">			
				<input class="btn btn-default" id="buscar" type="submit" name="Visualizar" value="8K">
				</form>
				
				</div><!-- /input-group -->
    </div><!-- /.col-lg-4 -->
</div><!-- /.row -->

	
	<style type="text/css">
	
            .input-group{
                margin-bottom: 20px;
            }
            .bts{
                text-align: center
            }
            .tela{
                margin-top: 0px;
                max-width: 700px;
                padding: 20px;
                margin: 50px auto;
                border-radius: 8px; 
            }
			
			
	#bg {
	height:1980px;
    background-image: url("resolucao.jpg");
	background-repeat: no-repeat;
}

h3 {
    color: black;
}
        </style>
	
	
	
	
	
	</div>	
	</center>
	</body>
	</html>
