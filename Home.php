 <?php  include "includes/header.php"; ?>

<?php include "includes/navigation.php" ?>

<?php include('database/connexion.php')?>

<?php include('session.php')?>

<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by <a href="https://github.com/Idoufkir" target="_blank"><b>IDOUFKIR</b></a></span>
          </div>
        </div>
      </div>
    </div>
  </header>

<div class="container d-flex align-items-center flex-column" style="'margin-top: 20px'">

    <h1 class="masthead-heading text-uppercase mb-2">Last Posts ...</h1>

    <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>

</div>
<div class="d-flex flex-wrap align-items-center">
  <?php
  $query = ("SELECT * FROM `postes` INNER JOIN utilisateurs ON postes.id_utilisateur = utilisateurs.id_utilisateur");
  $result = $conn->query($query);
  $data = $result->fetchAll();
  for ($i=0; $i < count($data) ; $i++) {
      $id_poste = $data[$i]["id_poste"];
      $id_utilisateur = $data[$i]["id_utilisateur"];
      $image = $data[$i]["image"];
      $description = $data[$i]["description"];
      $date = $data[$i]["date"];
      $titre = $data[$i]["titre"];
      $nom_it = $data[$i]["nom"];




  ?>

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
    <img src="<?php echo $image;?>" class="card-img-top" alt="...">
      <h5 class="post-meta"><?php echo "Pose N°: ".$id_poste." // utilisateurs N°:".$id_utilisateur;?></h5>
      <h1 class="post-title"><?php echo $titre;?><h1>
      <h3 class="post-subtitle"><?php echo $description;?></h3>
      <h6 class="post-meta">Posted by
            <a href=""><?php echo $nom_it;?></a>
            on <a href=""><?php echo $date;?></a></h6>
    </div>
    <hr>
  </div>
  </div>
  <?php   } ?>
 
</div>
<!-- Pager -->
<div class="clearfix">
          <a class="btn btn-primary float-right" href="#">More Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

<!-- Copyright Section
<section class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright © 2020.</small></div>
</section> -->


<?php include "includes/footer.php"; ?>
