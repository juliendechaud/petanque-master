<div>
	
	<p>modifier une catégorie</p>
	<form action="index.php?page=control&param=ModifCategValid" method="post">
		<?php
			$id = $uneCateg["idcateg"];
			$lib = $uneCateg["libelle"];
		?>
		<div>
			<label for="id">Id : </label>
			<input type="text" name="id" value="<?php echo $id ?>" readonly>
		</div>
		<div>
			<label for="lib">Nom : </label>
			<input type="text" name="lib" value="<?php echo $lib ?>" required>
		</div>
		<div>
			<input type="submit" value="Valider">
		</div>
	</form>

</div>