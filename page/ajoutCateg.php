<div class="police" style="margin-left: 30%; margin-right: 30%;">
	<center><h1>Ajouter une catégorie</h1></center><br>
	<form action="index.php?page=control&param=AjoutCategValid" method="post">
		<?php
			$lib = "";
		?>
		<div class="form-group">
			<label for="nom">Nom : </label>
			<input  class="form-control"type="text" name="lib" value="<?php echo $lib ?>" required>
		</div>
		<div class="form-group">
			<center><button type="submit" class="btn btn-primary">Valider</button></center>
		</div><br><br><br>
	</form>
</div>