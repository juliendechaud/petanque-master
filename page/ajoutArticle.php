<div>
	
	<p>ajouter un article</p>
	<form action="index.php?page=control&param=AjoutArticleValid" method="post">
		<?php
			$nom = "";
			$prix = "";
			$photo = "";
			$descri = "";
			$categ = "";
		?>
		<div>
			<label for="nom">Nom : </label>
			<input type="text" name="nom" value="<?php echo $nom ?>" required>
		</div>
		<div>
			<label for="prix">Prix : </label>
			<input type="text" name="prix" value="<?php echo $prix ?>" required>
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
			<input type="text" name="categ" value="<?php echo $categ ?>" required>
		</div>
		<div>
			<input type="submit" value="Valider">
		</div>
	</form>

</div>