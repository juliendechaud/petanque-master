<?php

	require(dirname(__FILE__)."/../fonction/fonction.php");

	$Pdo = PdoDB::getPdoDB();

	if (isset($_REQUEST["param"]))
	{
		$param = $_REQUEST["param"];
		switch ($param)
		{
			case "ListeArticle" :
				$lesLignes = $Pdo->getListeArticles();
				include (dirname(__FILE__)."/../page/listeArticle.php");
				break;

			case "ListeCateg" :
				$lesLignes = $Pdo->getListeCateg();
				include (dirname(__FILE__)."/../page/listeCateg.php");
				break;

			case "Accueil" :
				include (dirname(__FILE__)."/../page/accueil.php");
				break;
			
			default:
				include "page/404.php";
				break;
		}
	}

?>