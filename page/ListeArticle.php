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
			}
		?>

		<tr>
			<td><?php echo $ref; ?></td>
            <td><?php echo $prix; ?>€</td>
            <td><?php echo $photo; ?></td>
            <td><?php echo $descri; ?></td>
            <td><?php echo $categ; ?></td>
		</tr>

	</table>

</div>