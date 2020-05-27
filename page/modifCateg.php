<div class="police" style="margin-left: 30%; margin-right: 30%;">
	<center>
		<br>
		<h1>Modifier une catégorie</h1></center>
		<form action="index.php?page=control&param=ModifCategValid" method="post">
			<?php
				$id = $uneCateg["idcateg"];
				$lib = $uneCateg["libelle"];
			?>
			<div class="form-group">
				<label for="id">Id : </label>
				<input class="form-control" type="text" name="id" value="<?php echo $id ?>" readonly>
			</div>
			<div class="form-group">
				<label for="lib">Nom : </label>
				<input class="form-control" type="text" name="lib" value="<?php echo $lib ?>" required>
			</div>
			<div class="form-group">
				<center><button type="submit" class="btn btn-primary">Valider</button></center>
			</div>
		</form>
</div>