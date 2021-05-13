<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<h1>MESSAGE N</h1>
	<div class="row">
		<div class="col-6"></div>
		<div class="col-6">
			<form method="GET" action="recu.php">
				<textarea type="texte" name="ecrire"> </textarea>

				<button class="btn-danger" type="submit">envoyer</button>

			</form>
		</div>

	</div>	
</body>
</html>
<?php 
		if ($_SERVER["REQUEST_METHOD"]=="GET") {
			if (isset($_REQUEST["recu_ecrire"])) {
				echo $_REQUEST["recu_ecrire"];
			}
		}
	 ?>