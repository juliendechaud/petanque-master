<!DOCTYPE html>
<html>
<head>
	<title>Pétanque master</title>
</head>
<body>
	<h1>menu principal</h1>
	<a href="index.php?page=control&param=Accueil">Accueil</a>
	<a href="index.php?page=control&param=ListeArticle">Voir les articles</a>
	<a href="index.php?page=control&param=ListeCateg">Voir les catégories</a>

	<?php

		if (!isset($_SESSION['id']))
		{
			echo '<a href="index.php?page=control&param=Connexion">Connexion</a>';
		}
		elseif ($_SESSION['admin']==1)
		{
			echo "<a href='index.php?page=control&param=AjoutArticle'>Ajouter un article</a>";
			echo "<a href='index.php?page=control&param=AjoutCateg'>Ajouter une catégorie</a>";
			echo $_SESSION['nom'];
			echo '<a href="index.php?page=control&param=Deconnexion">Deconnexion</a>';
		}
		else
		{
			echo $_SESSION['nom'];
			echo '<a href="index.php?page=control&param=Deconnexion">Deconnexion</a>';
		}

	?>

