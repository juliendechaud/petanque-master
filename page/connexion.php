<div>
	
	<p>Connexion</p>
	<form action="index.php?page=control&param=ConnexionValid" method="post">
		<?php
			$email = "";
			$mdp = "";
		?>
		<div>
			<label for="email">Email : </label>
			<input type="text" name="email" value="<?php echo $email ?>" required>
		</div>
		<div>
			<label for="mdp">Mot de passe : </label>
			<input type="password" name="mdp" value="<?php echo $mdp ?>" required>
		</div>
		<div>
			<input type="submit" value="Connexion">
		</div>
	</form>

</div>