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

			case "SuppCateg" :
				$id = $_REQUEST["numCateg"];
				$Pdo->supprimerCateg($id);
				break;

			case "SuppArticle" :
				$id = $_REQUEST["numArt"];
				$Pdo->supprimerArticle($id);
				break;

			case "ModifArticle" :
				$lesLignes = $Pdo->getListeCateg();
				$ref = $_REQUEST["numArt"];
				$unArticle = $Pdo->getArticle($ref);
				include (dirname(__FILE__)."/../page/modifArticle.php");
				break;

			case "ModifArticleValid" :
				$ref = $_REQUEST["ref"];
				$nom = $_REQUEST["nom"];
				$prix = $_REQUEST["prix"];
				$photo = $_REQUEST["photo"];
				$descri = $_REQUEST["descri"];
				$categ = $_REQUEST["categ"];
				$Pdo->updateArticle($ref,$nom,$prix,$photo,$descri,$categ);
				break;

			case "ModifCateg" :
				$id = $_REQUEST["numCateg"];
				$uneCateg = $Pdo->getCateg($id);
				include (dirname(__FILE__)."/../page/modifCateg.php");
				break;

			case "ModifCategValid" :
				$id = $_REQUEST["id"];
				$lib = $_REQUEST["lib"];
				$Pdo->updateCateg($id,$lib);
				break;

			case "Accueil" :
				$Article1 = $Pdo->getArticle(1);
				$Article2 = $Pdo->getArticle(2);
				$Article3 = $Pdo->getArticle(9);
				$Article4 = $Pdo->getArticle(10);
				include (dirname(__FILE__)."/../page/accueil.php");
				break;
			
			default:
				include "page/404.php";
				break;
		}
	}

?>