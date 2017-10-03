<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Moreau bcc</title>

    <link rel="stylesheet" href="css/main.css">


    </head>

        

    <body>

        <h1 style="text-align: center;">Moreau Society</h1>

        


<?php
	
try{

 $bdd = new PDO('mysql:host=localhost;dbname=moreau;charset=utf8', 'root', 'root');

}

catch(Exception $e){
	die('Erreur: '.$e->getMessage());
}

$answer = $bdd->query('SELECT * FROM moreTwo');

while ($data = $answer->fetch()) { 
?>


	<div>
		<p>Sylvain : <?php echo $data["titre"]; ?></p>
		<p>Ali : <?php echo $data["contenu"]; ?></p>
		<p><?php echo $data["date_creation"]; ?></p>
	<a href="readMoreTwo.php?moreTwo=<?php echo $donnees['id']; ?>"></a>	
	</div>

<?php
}
?>



    </body>

</html>    