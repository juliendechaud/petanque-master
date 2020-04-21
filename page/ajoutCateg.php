<div>
	
	<p>ajouter un article</p>
	<form action="index.php?page=control&param=AjoutCategValid" method="post">
		<?php
			$lib = "";
		?>
		<div>
			<label for="nom">Nom : </label>
			<input type="text" name="lib" value="<?php echo $lib ?>" required>
		</div>
		<div>
			<input type="submit" value="Valider">
		</div>
	</form>

</div>