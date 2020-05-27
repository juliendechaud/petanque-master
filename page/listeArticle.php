<div class="police">
	<table>

			<?php
				if (isset($_SESSION['admin']) && $_SESSION['admin']==1)
				{
					
				}
			?>
			<br>
		<center><h1>Nos Articles</h1></center>
		<br>
		<div style="color: blue;">
		<center>
		<?php
			foreach ($lesLignes as $unArticle)
			{
				$ref = $unArticle['ref'];
				$nom = $unArticle['nom'];
				$prix = $unArticle['prix'];
				$photo = $unArticle['photo'];
				$descri = $unArticle['descri'];
				$categ = $unArticle['categ'];

				//echo "<tr><td>".$ref."</td>";
				echo "<img src=".$photo." width='200px'>";
				echo "<br><a style='color: black' href='index.php?page=control&param=Article&numArt=".$ref."'>".$nom."</a><br>";
            	echo "".$prix."€";
            	echo "<br>";
            	//echo "<td>".$descri."</td>";
            	//echo "<td>".$categ."</td>";
            	

            	if (isset($_SESSION['admin']) && $_SESSION['admin']==1)
            	{
            		echo "<a style='color:red' href='index.php?page=control&param=ModifArticle&numArt=".$ref."'>Modifier</a> ";
            		echo " <a <a style='color:red' href='index.php?page=control&param=SuppArticle&numArt=".$ref."'>Supprimer</a>";
            	}
            	
            	echo "<div class='traitBleu'> </div>";
			}
		?>
	</center>
</div>
		</tr>

	</table>

</div>