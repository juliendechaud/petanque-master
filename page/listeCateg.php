<div class='police'>
	<br><center><h1>Les Categories</h1></center><br>
	<table>
		<tr>

			<?php
				if (isset($_SESSION['admin']) && $_SESSION['admin']==1)
				{
					echo "<td>Panneau de contrôle</td>";
				}
			?>
		</tr>
		<!-- Section Catégories -->
<div class="container">
  <div class="row">
    <div class="col-sm6">
      <a href="index.php?page=control&param=ListeArticleCateg&categ=1">
        <img src="img/website/BOULEScateg.png" alt="Nos boules de petanque" width="350px" />
      </a>
    </div>
    <div class="col-sm6">
      <a class="margin" href="index.php?page=control&param=ListeArticleCateg&categ=2">
        <img src="img/website/ACCESSOIREScateg.png" alt="Nos accessoires" width="350px" />
      </a>
    </div>
    <div class="col-sm6">
      <a href="index.php?page=control&param=ListeArticleCateg&categ=3">
        <img src="img/website/TEXTILEScateg.png" alt="Nos textiles/goodies" width="350px" />
      </a>
    </div>
  </div>
</div><br> 
		<center>
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
	</center>
		</tr>

	</table>

</div>