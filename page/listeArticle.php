<div>
	<table>
		<tr>
			<td>Ref</td>
			<td>Nom</td>
			<td>Prix</td>
			<td>Photo</td>
			<td>Description</td>
			<td>Catégorie</td>

			<?php
				if (isset($_SESSION['admin']) && $_SESSION['admin']==1)
				{
					echo '<td>Panneau de contrôle</td>';
				}
			?>
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
				echo "<td><a href='index.php?page=control&param=Article&numArt=".$ref."'>".$nom."</a></td>";
            	echo "<td>".$prix."€</td>";
            	echo "<td><img src=".$photo." width='100px'></td>";
            	echo "<td>".$descri."</td>";
            	echo "<td>".$categ."</td>";

            	if (isset($_SESSION['admin']) && $_SESSION['admin']==1)
            	{
            		echo "<td><a href='index.php?page=control&param=ModifArticle&numArt=".$ref."'>Modifier</a> ";
            		echo " <a href='index.php?page=control&param=SuppArticle&numArt=".$ref."'>Supprimer</a></td>";
            	}
            	echo "</tr>";
			}
		?>
		</tr>

	</table>

</div>