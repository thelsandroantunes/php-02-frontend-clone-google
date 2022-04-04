<?php
	
	include("../config.php");

	if(isset($_POST["imageUrl"])) 
	{
		$query = $con->prepare("UPDATE images SET clicks = clicks + 1 WHERE imageurl=:imageurl");
		$query->bindParam(":imageurl", $_POST["imageUrl"]);

		$query->execute();
	}
	else 
	{
		echo "Nenhuma imagem URL passou para página";
	}
?>