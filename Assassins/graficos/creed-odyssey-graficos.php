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
	    <h3>Selecione o gráfico que você deseja que o seu jogo rode</h3>
	    </br></br>
	   
		<div class="bloco">
			</br></br>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="input-group">
						
				<form class="borderBoxes tela efeitoTela" action="\Assassins\graficos\low/creed-odyssey-low.php" method="POST">			
				<input class="btn btn-default" id="buscar" type="submit" name="Visualizar" value="Low">
				</form>	
				

				<form class="borderBoxes tela efeitoTela" action="\Assassins\graficos\medium/creed-odyssey-medium.php" method="POST">			
				<input class="btn btn-default" id="buscar" type="submit" name="Visualizar" value="Medium">
				</form>	
				
                <form class="borderBoxes tela efeitoTela" action="\Assassins\graficos\high/creed-odyssey-high.php" method="POST">			
				<input class="btn btn-default" id="buscar" type="submit" name="Visualizar" value="High">
				</form>					

				<form class="borderBoxes tela efeitoTela" action="\Assassins\graficos\ultra/creed-odyssey-ultra.php" method="POST">			
				<input class="btn btn-default" id="buscar" type="submit" name="Visualizar" value="Ultra">
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
                margin-top: 40px;
                max-width: 700px;
                padding: 20px;
                margin: 50px auto;
                border-radius: 8px; 
            }
        </style>
	
	
	
	
	
	</div>	
	</center>
	</body>
	</html>
