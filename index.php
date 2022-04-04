<!--
*   Data: 05/01/2019
*   Autor: Thelsandro Costa Antunes
*	Técnico em Redes de Computadores - CETAM
*   Discente de Engenharia de Computação - UEA
*   Projeto de Aplicativo de Busca de Conteúdo em PHP (Clone do Google)
*   6ª Versão
-->

<!DOCTYPE html>
<html>
<head>
	<title>Bem-vindo ao Google-Clone</title>

	<meta charset="UTF-8">
	<meta name="description" content="Search the web for sites and images.">
	<meta name="keywords" content="Search engine, doogao, websites">
	<meta name="author" content="Thelsandro Antunes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>

	<div class="wrapper indexPage">
	

		<div class="mainSection">

			<div class="logoContainer">
				<div>
					<img src="assets/images/brasaoImperial2.png">	
				</div>
				<img src="assets/images/doogao_google.png" title="Logo de nosso site" alt="Site logo">
			</div>
			
			<div class="searchContainer">

				<form action="search.php" method="GET">

					<input class="searchBox" type="text" name="term" autocomplete="off">
					<input class="searchButton" type="submit" value="Pesquisar">


				</form>

			</div>


		</div>


	</div>

</body>
</html>