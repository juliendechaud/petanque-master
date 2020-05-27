<div class="police" style="margin-left: 30%; margin-right: 30%;">

		<center><h1>Ajouter un article</h1></center>
		<form action="index.php?page=control&param=AjoutArticleValid" method="post">
			<?php
				$nom = "";
				$prix = "";
				$photo = "";
				$descri = "";
				$categ = "";
			?>
			<div class="form-group">
				<label for="nom">Nom : </label>
				<input  class="form-control" type="text" name="nom" value="<?php echo $nom ?>" required>
			</div>
			<div class="form-group">
				<label for="prix">Prix : </label>
				<input class="form-control" type="text" name="prix" placeholder="€"value="<?php echo $prix ?>" required>
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

							echo "<option value=".$categ.">".$lib."</option>";
						}
					?>
				</select>
			</div>
			<div class="form-group">
				<center><button type="submit" class="btn btn-primary">Valider</button></center>
			</div>
		</form>

</div>