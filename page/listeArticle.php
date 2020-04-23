<div>
	<table>
		<tr>
			<td>Ref</td>
			<td>Nom</td>
			<td>Prix</td>
			<td>Photo</td>
			<td>Description</td>
			<td>Catégorie</td>
			<td>Panneau de contrôle</td>
		</tr>
		<?php
			foreach ($lesLignes as $unArticle)
			{
				$ref = $unArticle['ref'];
				$nom = $unArticle['nom'];
				$prix = $unArticle['prix'];
				$photo = $unArticle['photo'];
				$descri = $unArticle['descri'];
				$categ = $unArticle['categ'];

				echo "<tr><td>".$ref."</td>";
				echo "<td>".$nom."</td>";
            	echo "<td>".$prix."€</td>";
            	echo "<td><img src=".$photo." width='100px'></td>";
            	echo "<td>".$descri."</td>";
            	echo "<td>".$categ."</td>";
            	echo "<td><a href='index.php?page=control&param=ModifArticle&numArt=".$ref."'>Modifier</a></td></tr>";
			}
		?>
		</tr>

	</table>

</div>