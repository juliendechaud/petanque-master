<div class="police" style="margin-left: 35%; margin-right: 35%; ">
	<center>
	<h1>Connexion</h1><br></center>
		<form action="index.php?page=control&param=ConnexionValid" method="post">
			<?php
				$email = "";
				$mdp = "";
			?>
			<div class="form-group">
				<label for="email">Email : </label>
				<input type="email" class="form-control" name="email" placeholder="Entrer email" value="<?php echo $email ?>" required>
			</div class="form-group">
			<div class="form-group">
				<label for="mdp">Mot de passe : </label>
				<input type="password" class="form-control" placeholder="Mot de passe" name="mdp" value="<?php echo $mdp ?>" required>
			</div>
			<center><button type="submit" value="Connexion" class="btn btn-primary">Se connecter</button><br><br></center>

		</form>
</div>