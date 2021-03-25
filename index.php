<?php include 'header.php' ?>

<section class="index"><div class="entete" id="index_bkg"><div class="container">
  <div class="row">
    <div class="col-lg-6"></div>
    <div class="col-lg-6">
      <div class="text">
        <h1>Laissez-moi donnez vie à vos design</h1>
        <p>Si vous cherchez un partenaire de projet fiable avec qui vous pourrez avoir un suivi, un soutien et un contact honnête.</p>
      </div>
      <button><a href="mailto:mgabriellebrault@gmail.com"><h2>Contactez-moi!</h2></a></button>
    </div>
  </div>
</div></div></section>

<!-- Communication outils -->
<?php include 'images/waves-white_bkg.php'?>
<section class="communication_outils bkg"><div class="container">
  <div class="row title">
    <h2>Trouvons l'outil de communication idéale</h2>
    <p>pour travailler ensemble</p>
  </div>
  <div class="row outils"><?php include 'modules/comm_outil.php' ?></div>
</div></section>

<!-- Projets -->
<?php include 'images/waves-white.php'?>
<section class="meilleurs_projets"><div class="container">
  <div class="row"><?php include 'modules/projet1.php'?></div>
  <div class="row"><?php include 'modules/projet2.php'?></div>
  <div class="row autres_projets"><a href="projets.php"><h2>Voir d'autres projets</h2></a></div>
</div></section>

<!-- Objectifs professionnelles -->
<?php include 'images/waves-white_bkg.php'?>
<section class="objectifs bkg"><div class="container">
  <div class="row title">
    <h2>Objectifs professionnelles 2021</h2>
    <i class="fas fa-calendar-alt fa-3x"></i>
  </div>
  <div class="row about_row">
    <div class="col-lg-6 col-md-12"><?php include 'modules/obj_professionnelle.php'?></div>
    <div class="col-lg-6"></div>
  </div>
</div></section>

<!--Section CV -->
<section class="cv" id="cv"><div class="entete" id="cv_bkg"><div class="container">
  <div class="row">
    <div class="col-lg-6"></div>
    <div class="col-lg-6">
      <div class="text"><h1>CV et compétences</h1></div>
      <button><a class="button" href="cv2021.pdf" id="download_cv" download="CV_MarylineBrault.pdf"><h2>Version PDF</h2></a></button>
    </div>
  </div>
</div></div></section>

<!-- Expériences -->
<?php include 'images/waves-white_bkg.php'?>
<section class="cv_learning bkg"><div class="container">
  <div class="row title">
      <h2>Web developpeuse</h2>
      <i class="fas fa-map-marked-alt fa-3x"></i>
  </div>
  <div class="row">
    <div class="col-md-6 col-xs-12">
      <h2 class="competences">Agences</h2>
      <?php include 'modules/experiences_agences.php'?>
    </div>
    <div class="col-6"></div>
  </div>
  <div class="row">
      <div class="col-6"></div>
      <div class="col-md-6 col-xs-12">
          <h2 class="competences">Scolarités</h2>
          <div class="details">
            <p class="date">Septembre 2019 - Juin 2021</p>
            <div class="content">
              <p>Bachelier Écriture Multimédia</p>
              <p>Haute-École ISFSC</p>
            </div>
          </div>
      </div>
  </div>
  <div class="row projets_button">
    <a class="button" href="ancienne_vie.php"><h2>Expériences d'anciennes vies</h2></a>
  </div>
</div></section>

<!-- Competences -->
<?php include 'images/waves-white.php'?>
<section class="cv_skill"><div class="container">
  <div class="row title">
      <i class="fas fa-dumbbell fa-3x"></i>
      <h2>Compétences</h2>
  </div>
  <div class="row about_row">
    <div class="col-md-6 col-xs-12">
    <p class="text-center">Outils pratiques utilisés</p>
      <div class="row content"><?php include 'modules/competences_outils.php'?></div>
    </div>
    <div class="col-md-6"></div>
  </div>
  <div class="row about_row">
    <div class="col-md-6"></div>
    <div class="col-md-6 col-xs-12">
      <p class="text-center">Outils Organisation</p>
      <div class="row content"><?php include 'modules/competences_organisation.php'?></div>
    </div>
  </div>
</div></section>



<!-- Objectifs d'apprentissages -->
<?php include 'images/waves-white_bkg.php'?>
<section class="objectifs bkg"><div class="container">
  <div class="row title">
    <i class="fas fa-clipboard-list fa-3x"></i>
    <h2>Objectifs d'apprentissages 2021</h2>
  </div>
  <div class="row about_row">
    <div class="col-lg-6 col-md-12"><?php include 'modules/obj_apprentissage.php'?></div>
    <div class="col-lg-6"></div>
  </div>
</div></section>

<!-- Section About -->
<section class="about"  id="about"><div class="entete" id="about_bkg"><div class="container">
  <div class="row">
    <div class="col-lg-6"></div>
    <div class="col-lg-6">
      <h1 class="text">A propos de moi</h1>
      <div class="social_network">
          <div class="social-buttons">
            <a href="https://www.linkedin.com/in/mgabriellebrault/"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.facebook.com/mgabriellebrault"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/mgabriellebrault"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
    </div>
  </div>
</div></div></section>

<!-- Qui suis-je -->
<?php include 'images/waves-white_bkg.php'?>
<section class="qui bkg"><div class="container">
  <div class="row title">
    <i class="fas fa-heart fa-3x"></i>
    <h2>Qui suis-je?</h2>
  </div>
  <?php include 'modules/about.php'?></div>
</div></section>

<!-- Facts -->
<?php include 'images/waves-white.php'?>
<section class="facts"><div class="container">
  <div class="row title">
    <h2>Fait interessant sur moi</h2>
  </div>
  <div class="row about_row">
    <div class="col-md-6 col-xs-12">
      <?php include 'modules/facts.php'?>
    </div>
    <div class="col-6"></div>
  </div>
</div></section>

<?php include 'footer.php' ?>
