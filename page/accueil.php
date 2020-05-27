<!-- Carousel -->
<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target=".carousel" data-slide-to="0" class="active"></li>
    <li data-target=".carousel" data-slide-to="1"></li>
    <li data-target=".carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/website/Carousel1.png" alt="CODEPROMOPPE">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/website/Carousel2.png" alt="NEWBOULE">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/website/Carousel3.png" alt="PROMOOBUT">
      <div class="carousel-caption">
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> 
</div><br>

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


<!-- Section Meilleures ventes -->
<br>
<div class="Mvente">Selection Pétanque Master</div>
<center><div class="traitBleu"></div></center>
<div class="container">
  <div class="row police">
    <div class="col-sm ">
      <center>
        <?php
          echo $Article1['nom'];
          echo "<img src=".$Article1['photo']." width='200px'>";
          echo "<br>";
          echo $Article1['prix']."€";
        ?>
      </center>
    </div>
    <div class="col-sm">
      <center>
        <?php
          echo $Article2['nom'];
          echo "<img src=".$Article2['photo']." width='195px'>";
          echo "<br>";
          echo $Article2['prix']."€";
        ?> 
      </center>
    </div>
    <div class="col-sm">
      <center>
        <?php
          echo $Article3['nom'];
          echo "<img src=".$Article3['photo']." width='200px'>";
          echo "<br>";
          echo $Article3['prix']."€";
        ?> 
      </center>   
    </div>
    <div class="col-sm">
      <center>
        <?php
            echo $Article4['nom'];
            echo "<img src=".$Article4['photo']." width='200px'>";
            echo "<br>";
            echo $Article4['prix']."€";
        ?> 
      </center>
    </div>
  </div>
  </div>
<div class="bouton margin">
<center><a href="index.php?page=control&param=ListeArticle" class="btn btn-warning" role="button">Découvrir tous nos produits</a></center>
</div>
<center><div class="traitBleu"></div></center>
<!-- Présentation pétanque master -->
<br><br>
<div class="container">
    <div class="row">
      <div class="col-7">
<p class="police"><b>Bienvenue chez l'expert en ligne des boules de pétanque !</b><br>
Chez Pétanque Master, une équipe de passionnés est à votre écoute pour vous conseiller dans le choix de vos boules de pétanque. Nous proposons des boules de compétition et loisir, accessoires de pétanque, vêtements de sport et objets autour du jeu de pétanque.<br>
Au sein de notre magasin à Brives charensac, nous disposons de notre propre atelier de gravure pour personnaliser vos boules de pétanque.<br>
Depuis 2019, des milliers de clients ont fait confiance au professionnalisme de Petanque Master, faites comme eux ! Bonne visite sur notre super site du futur !</p>
      </div>
    <div class="col-5">
      <img src="img/website/Carreau.png" width="380px">
    </div>
  </div>
</div>

<!-- Baniere d'info -->
<br><br>
<div class="container">
    <div class="row">
      <div class="col-sm margin">
        <a href="#">
          <img src="img/website/livraison_rapide.png" height="100px">
        </a>
      </div>
      <div class="col-sm margin">
        <a href="#">
          <img src="img/website/Retours_gratuits.png" height="100px">
        </a>
      </div>
      <div class="col-sm margin">
        <a href="#">
            <img src="img/website/SAV.png" height="100px">
        </a>
      </div>
      <div class="col-sm margin">
        <a href="#">
          <img src="img/website/paiement_sécurisé.png" height="100px">
        </a>
      </div>
    </div>
</div>
