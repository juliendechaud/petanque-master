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

			case "AjoutArticle" :
				$lesLignes = $Pdo->getListeCateg();
				include (dirname(__FILE__)."/../page/ajoutArticle.php");
				break;


			case "AjoutArticleValid" :
				$nom = $_REQUEST["nom"];
				$prix = $_REQUEST["prix"];
				$photo = $_REQUEST["photo"];
				$descri = $_REQUEST["descri"];
				$categ = $_REQUEST["categ"];
				$Pdo->creeArticle($nom,$prix,$photo,$descri,$categ);
				break;

			case "AjoutCateg" :
				include (dirname(__FILE__)."/../page/ajoutCateg.php");
				break;

			case "AjoutCategValid" :
				$lib = $_REQUEST["lib"];
				$Pdo->creeCateg($lib);
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