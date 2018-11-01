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
	    <h3>Meu PC Roda?</h3>
	    </br></br>
	   
		
			</br></br>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="input-group">
					
					<?php
				echo $_POST['score']; ?>
				
				
				<form action="tela-soma-scores.php" method="post">
				
				 <select name ="score-cpu" class="form-control" style="width:227px">
					<option value="5">Intel i3</option>
					<option value="10"  >Intel i5</option>
					<option value="15">Intel i7</option>
					<option value="20">Intel i9</option>					
			</select>
			 </br></br>
			
			<input type="submit" value="Verificar se meu PC atual roda esse jogo"   name="ola">
			
			</form>
				
				</div><!-- /input-group -->
    </div><!-- /.col-lg-4 -->


	
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
        </style>
	
	
	
	
	
	</div>	
	</center>
	</body>
	</html>
