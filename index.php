<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">  
    <title>Hello World en PHP</title>
</head>
<body>
    
		
	<h3> Ma liste de courses</h3>
	<form action="index.php" method="POST">
		<label for="text"> Ma liste </label>
		<input type= "text"  name="text" id="text" placeholder="Ajouter des produits.."/> 
		<input type="submit" value="afficher la liste" name="ok"/>				
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
		
	}   
		
	
	
?>
</body>
</html>

