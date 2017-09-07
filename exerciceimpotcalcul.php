<?php
// définiton des textes
define("msg1","Remplissez correctement le formulaire");
define("msg2","Votre impôt prévisionnel est de :");

//Controles et calculs
	
		if (isset($_POST['check'])) {
				$marie = 2;
			}

			else {
				$marie = 1;
			} ;
		
		if (isset($_POST['nbenfants']) and (isset($_POST['salaire'])) and (is_numeric($_POST['nbenfants'])) and (is_numeric($_POST['salaire'])))
			
			{
			$nbenfant = (int)$_POST['nbenfants'];
		    $salaire = (int)$_POST['salaire'];
			$part=$nbenfant/2+$marie;
		    $revenu=$salaire*0.72;	
$quotienFamilial=$revenu/$part;
		if ($quotienFamilial>=66680) 
			$impot=0.4;
		else if ($quotienFamilial>=24873)
			$impot=0.3;
		else if ($quotienFamilial>=11199)
			$impot=0.14;
		else if ($quotienFamilial>=5615)
			$impot=5.5;
		else 
			$impot=0;
		
		$impotAPayer=($salaire/12)*$impot*$part;
		$message=msg2.$impotAPayer;
		
			
			}		
				

	else
				
				{
					$message=msg1;
					
				}
//affichage
?>
		
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page PHP</title>
</head>
<body>
	<form action="exerciceimpotcalcul.php" method="post">
	  <label>
	  Nombre d'enfants :
	  </label>
	  <input type="text" name="nbenfants" id="nbenfants" value="">
	  <label>
	  <br>
	  Marié :
	  </label>
	  <input type="checkbox" name="check" id="check" value="">
	  <label>
	  <br>
	  Salaire annuel :
	  </label>
	  <input type="text" name="salaire" id="salaire" value="">
	  <br>
	  <input type="submit" value="Calculer"> 
	</form>

		<?php 
		
		
		
	echo "$message";
		
		 
	


		?>	


</body>
</html>