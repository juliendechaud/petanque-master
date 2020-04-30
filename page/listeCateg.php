<div>
	<table>
		<tr>
			<td>Id</td>
			<td>Libelle</td>
			<?php
				if (isset($_SESSION['admin']) && $_SESSION['admin']==1)
				{
					echo "<td>Panneau de contrôle</td>";
				}
			?>
		</tr>
		<?php
			foreach ($lesLignes as $uneCateg)
			{
				$id = $uneCateg['id'];
				$lib = $uneCateg['lib'];

				echo "<tr><td>".$id."</td>";
            	echo "<td>".$lib."</td>";
            	if (isset($_SESSION['admin']) && $_SESSION['admin']==1)
            	{
            		echo "<td><a href='index.php?page=control&param=ModifCateg&numCateg=".$id."'>Modifier</a> ";
            		echo " <a href='index.php?page=control&param=SuppCateg&numCateg=".$id."'>Supprimer</a></td>";
            	}
            	echo "</tr>";
			}
		?>
		</tr>

	</table>

</div>