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
			$req = "Select articles.ref as ref, articles.prix as prix, articles.photo as photo, articles.description as descri, categorie.libelle as categ From articles";
			$req.= " Inner Join categorie On articles.categ = categorie.idcateg";
			//echo $req;
			$res = PdoDB::$monPdo->query($req);
			$lesLignes = $res->fetchAll();
			$nbLignes = count($lesLignes);
			return $lesLignes; 
		}

		public function getListeCateg()
		{
			$req = "Select categorie.idcateg as id, categorie.libelle as lib From categorie";
			//echo $req;
			$res = PdoDB::$monPdo->query($req);
			$lesLignes = $res->fetchAll();
			$nbLignes = count($lesLignes);
			return $lesLignes; 
		}
	}

?>