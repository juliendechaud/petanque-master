<div>
	<table>
		<tr>
			<td>Id</td>
			<td>Libelle</td>
			<td>Nombres d'articles</td>
		</tr>
		<?php
			foreach ($lesLignes as $uneCateg)
			{
				$id = $uneCateg['id'];
				$lib = $uneCateg['lib'];
				$nbr = $uneCateg['nbr'];

				echo "<tr><td>".$id."</td>";
            	echo "<td>".$lib."</td>";
            	echo "<td>".$nbr."</td></tr>";
			}
		?>
		</tr>

	</table>

</div>