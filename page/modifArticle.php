<div>
	
	<p>modifier un article</p>
	<form action="index.php?page=control&param=ModifArticleValid" method="post">
		<?php
			$nom = $unArticle["nom"];
			$prix = $unArticle["prix"];
			$photo = $unArticle["photo"];
			$descri = $unArticle["description"];
			$categ = $unArticle["categ"];
		?>
		<div>
			<label for="nom">Nom : </label>
			<input type="text" name="nom" value="<?php echo $nom ?>" required>
		</div>
		<div>
			<label for="prix">Prix : </label>
			<input type="text" name="prix" value="<?php echo $prix ?>" required>
			<label for="prix">€</label>
		</div>
		<div>
			<label for="photo">Photo : </label>
			<input type="text" name="photo" value="<?php echo $photo ?>" required>
		</div>
		<div>
			<label for="descri">Description : </label>
			<input type="text" name="descri" value="<?php echo $descri ?>" required>
		</div>
		<div>
			<label for="categ">Catégorie : </label>
			<select name="categ" required>
				<option value="">Choisir une catégorie</option>
				<?php
					foreach ($lesLignes as $uneCateg)
					{
						$catego = $uneCateg['id'];
						$lib = $uneCateg['lib'];

						echo "<option value=".$categ.">".$lib."</option>";
					}
				?>
			</select>
		</div>
		<div>
			<input type="submit" value="Valider">
		</div>
	</form>

</div>