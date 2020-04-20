<div>
	<table>
		<tr>
			<td>Ref</td>
			<td>Prix</td>
			<td>Photo</td>
			<td>Description</td>
		</tr>

		<?php
			foreach ($lesLignes as $unArticle)
			{
				$ref = $unArticle['ref'];
				$prix = $unArticle['prix'];
				$photo = $unArticle['photo'];
				$descri = $unArticle['descri'];
			}
		?>

		<tr>
			<td><?php echo $ref; ?></td>
            <td><?php echo $prix; ?></td>
            <td><?php echo $photo; ?></td>
            <td><?php echo $descri; ?></td>
		</tr>

	</table>

</div>