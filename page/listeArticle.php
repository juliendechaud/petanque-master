<div>
	<table>
		<tr>
			<td>Ref</td>
			<td>Prix</td>
			<td>Photo</td>
			<td>Description</td>
			<td>Catégorie</td>
		</tr>
		<?php
			foreach ($lesLignes as $unArticle)
			{
				$ref = $unArticle['ref'];
				$prix = $unArticle['prix'];
				$photo = $unArticle['photo'];
				$descri = $unArticle['descri'];
				$categ = $unArticle['categ'];

				echo "<tr><td>".$ref."</td>";
            	echo "<td>".$prix."</td>";
            	echo "<td><img src=".$photo." width='100px'></td>";
            	echo "<td>".$descri."</td>";
            	echo "<td>".$categ."</td></tr>";
			}
		?>
		</tr>

	</table>

</div>