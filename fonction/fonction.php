<?php

	class PdoDB
	{   		
		private static $serveur='mysql:host=localhost';
		private static $bdd='dbname=petanquemaster';   		
		private static $user='root';    		
		private static $mdp='root';	
		private static $monPdo;
		private static $monPdoDB=null;  
		
		private function __construct()
		{
	    	PdoDB::$monPdo = new PDO(PdoDB::$serveur.';'.PdoDB::$bdd, PdoDB::$user, PdoDB::$mdp); 
			PdoDB::$monPdo->query("SET CHARACTER SET utf8");
		}
		public function _destruct()
		{
			PdoDB::$monPdo = null;
		}
		
		public  static function getPdoDB()
		{
			if(PdoDB::$monPdoDB==null)
			{
				PdoDB::$monPdoDB= new PdoDB();
			}
			return PdoDB::$monPdoDB;  
		}

		public function getListeArticles()
		{
			$req = "Select articles.ref as ref, articles.nom as nom, articles.prix as prix, articles.photo as photo, articles.description as descri, categorie.libelle as categ From articles";
			$req.= " Inner Join categorie On articles.categ = categorie.idcateg GROUP BY ref";
			//echo $req;
			$res = PdoDB::$monPdo->query($req);
			$lesLignes = $res->fetchAll();
			$nbLignes = count($lesLignes);
			return $lesLignes; 
		}

		public function getListeCateg()
		{
			$req = "SELECT idcateg as id, libelle as lib FROM categorie";

			//echo $req;
			$res = PdoDB::$monPdo->query($req);
			$lesLignes = $res->fetchAll();
			$nbLignes = count($lesLignes);
			return $lesLignes; 
		}

		public function creeArticle($nom,$prix,$photo,$descri,$categ)
		{
			$req = 'insert into articles (nom, prix, photo, description, categ) values("'.$nom.'","'.$prix.'","'.$photo.'","'.$descri.'","'.$categ.'")';
			//echo $req;
			PdoDB::$monPdo->exec($req);
		}

		public function creeCateg($lib)
		{
			$req = 'insert into categorie (libelle) values("'.$lib.'")';
			//echo $req;
			PdoDB::$monPdo->exec($req);
		}

		public function supprimerCateg($id)
		{
			$req = 'DELETE FROM categorie WHERE idcateg = "'.$id.'"';
			//echo $req;
			PdoDB::$monPdo->exec($req);
		}

		public function getArticle($ref)
		{
			$req = "SELECT * FROM articles WHERE ref = ".$ref;
			//echo $req;
			$res = PdoDB::$monPdo->query($req);
			$laLigne = $res->fetch();
			return $laLigne;
		}

		public function getCateg($id)
		{
			$req = "SELECT * FROM categorie WHERE idcateg = ".$id;
			//echo $req;
			$res = PdoDB::$monPdo->query($req);
			$laLigne = $res->fetch();
			return $laLigne;
		}
	}

?>