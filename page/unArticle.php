<div class=police>
	<center>
		<?php
			echo "<img src='".$laLigne['photo']."' width='220px'>";
			echo "<p style='color: #00bfff; text-decoration: underline;'>".$laLigne['nom']."</p>";
			echo "<p style='font-size: 20px'>".$laLigne['prix']."€</p>";
			echo "<p>".$laLigne['description']."</p>";
			echo "<p>Référence: ".$laLigne['ref']."</p><br>";
		?>
		<button type="button" class="btn btn-primary">Ajouter au panier  <img src="img/website/panier.png" height="30px"></button>
		<br><br>
	</center>
</div>