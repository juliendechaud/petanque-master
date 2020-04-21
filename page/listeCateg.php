<div>
	<table>
		<tr>
			<td>Id</td>
			<td>Libelle</td>
			<td>Nombres d'articles</td>
			<td>Panneau de contrôle</td>
		</tr>
		<?php
			foreach ($lesLignes as $uneCateg)
			{
				$id = $uneCateg['id'];
				$lib = $uneCateg['lib'];
				$nbr = $uneCateg['nbr'];

				echo "<tr><td>".$id."</td>";
            	echo "<td>".$lib."</td>";
            	echo "<td>".$nbr."</td>";
            	echo "<td><a href='index.php?page=control&param=EditCateg&numArt=".$id."'>Modifier</a></td></tr>";
			}
		?>
		</tr>

	</table>

</div>