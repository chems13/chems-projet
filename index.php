<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">  
    <title>Hello World en PHP</title>
</head>
<body>
    
		
	<h3> Ma liste de courses</h3>
	<form action="index.php" method="POST">
		<label for="text"> Produits a ajouter </label><br>
		<br>
		<input type ="submit" value = "Ajouter a la liste">
		<input type ="text"  name ="pseudo" value =" " placeholder ="Nouvelle taches"required><br>
		<br>
        <textarea name="article-content" id ="" cols="30" rows="20">ce ci est mon texte</textarea><br>
	</form>	
  
<?php
	//vérifier si la variable $_POST['text'] existe et quelle n'est pas vide		
	if (isset($_POST['text']) && $_POST['text'] !== '' ) {			
		$maClass = "";
	
		//traiter le cas exceptionnel de Kaikou
		if ($_POST['text'] == "kaikou") {
			$maClass = "kaikou";			
		}	
		//traiter le cas exceptionnel de younes
		if ($_POST['text'] == "younes") {			
			$maClass = "younes";
		}			
		//traiter le cas exceptionnel de hadjou
		if ($_POST['text'] == "hadjou") {			
			$maClass = "hadjou";
		}			
	
		echo "<div class=".$maClass.">" . $_POST['text']  . "</div>";			
		// mon nouveau projet sur github
		// ajouter des puces dans mon HTML
		// J ai modifier le code pour afficher la liste mais j ai pas pu
		
	}
	
		
	
	
?>
</body>
</html>

