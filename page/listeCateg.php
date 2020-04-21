<div>
	<table>
		<tr>
			<td>Id</td>
			<td>Libelle</td>
			<td>Panneau de contrôle</td>
		</tr>
		<?php
			foreach ($lesLignes as $uneCateg)
			{
				$id = $uneCateg['id'];
				$lib = $uneCateg['lib'];

				echo "<tr><td>".$id."</td>";
            	echo "<td>".$lib."</td>";
            	echo "<td><a href='index.php?page=control&param=EditCateg&numArt=".$id."'>Modifier</a></td></tr>";
			}
		?>
		</tr>

	</table>

</div>