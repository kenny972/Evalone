<?php
try

{

    // Connexion à mysql
    $bdd = new PDO('mysql:host=localhost;dbname=moreau;charset=utf8', 'root', 'root');

}

catch(Exception $e)

{

    // En cas d'erreur, on affiche un message et on arrête tout

        die('Erreur : '.$e->getMessage());

}
?>


<!doctype html>
<html class="no-js" lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>M, Building construction company</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Place favicon.ico in the root directory -->
		<link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
		<!-- <link rel="stylesheet" href="css/normalize.css"> -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">

	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
	<body>





</body>
</html>