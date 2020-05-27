<div class="police" style="margin-left: 30%; margin-right: 30%;">
	<center>
	<br>
	<h1>Modifier un article</h1></center>
		<form action="index.php?page=control&param=ModifArticleValid" method="post">
			<?php
				$ref = $unArticle["ref"];
				$nom = $unArticle["nom"];
				$prix = $unArticle["prix"];
				$photo = $unArticle["photo"];
				$descri = $unArticle["description"];
				$lacateg = $unArticle["categ"];
			?>
			<div class="form-group">
				<label for="ref">Ref : </label>
				<input class="form-control" type="text" name="ref" value="<?php echo $ref ?>" readonly>
			</div>
			<div class="form-group">
				<label for="nom">Nom : </label>
				<input class="form-control" type="text" name="nom" value="<?php echo $nom ?>" required>
			</div>
			<div class="form-group">
				<label for="prix">Prix : </label>
				<input class="form-control" type="text" name="prix" value="<?php echo $prix ?>" required>
			</div>
			<div class="form-group">
				<label for="photo">Photo : </label>
				<input class="form-control" type="text" name="photo" value="<?php echo $photo ?>" required>
			</div>
			<div class="form-group">
				<label for="descri">Description : </label>
				<input class="form-control" type="text" name="descri" value="<?php echo $descri ?>" required>
			</div>
			<div class="form-group">
				<label for="categ">Catégorie : </label>
				<select class="form-control" name="categ" required>
					<option value="">Choisir une catégorie</option>
					<?php
						foreach ($lesLignes as $uneCateg)
						{
							$categ = $uneCateg['id'];
							$lib = $uneCateg['lib'];

							if ($categ == $lacateg)
							{
								echo "<option value=".$categ." selected>".$lib."</option>";
							}
							else
							{
								echo "<option value=".$categ.">".$lib."</option>";
							}
						}
					?>
				</select>
			</div>
			<div>
				<center><button type="submit" class="btn btn-primary">Valider</button><br><br></center>
			</div>
		</form>
</div>