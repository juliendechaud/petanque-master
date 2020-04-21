<div>
	<table>
		<tr>
			<td>Id</td>
			<td>Libelle</td>
		</tr>
		<?php
			foreach ($lesLignes as $uneCateg)
			{
				$ref = $uneCateg['id'];
				$prix = $uneCateg['lib'];

				echo "<tr><td>".$ref."</td>";
            	echo "<td>".$prix."</td></tr>";
			}
		?>
		</tr>

	</table>

</div>