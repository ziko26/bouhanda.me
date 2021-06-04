<?php
include 'inc/fr/header.php';
?>
<!-- about me section -->
<section class="about-me" id="about">
	<div class="container">
	<h1>Je suis <span>zakaria bouhanda</span></h1>
    <p class="lead">Développeur Web, je crée des sites Web incroyables et créatifs, faciles à utiliser. J'utilise HTML, CSS et JavaScript pour produire des sites Web responsive. Si vous avez un projet sur lequel vous aimeriez travailler avec moi, laissez-nous travailler ensemble!</p>
    <a href="cv-fr.pdf" class="gl-btn">Télécharger le CV</a>
</div>
</section>
<!-- end about me section -->
<!-- start skills section -->
<section class="skills" id="skills">
	<div class="container">
		<h2 class="title">Mes compétences</h2>
		<div class="row">
			<?php
			$skills = array(
        "html5",
        "css", 
        "bootstrap",
        "javascript",
        "php",
        "mysql",
        "wordpress",
        "git");
			 foreach ($skills as $skill){?>
				<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="single-skill">
					<img src="imgs/skills/<?php echo $skill;?>.png" alt="<?php echo $skill;?>">
					<div class="title-skill <?php echo $skill;?>"><?php echo $skill;?></div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- end skills section -->
<!-- start my services section -->
<section class="services" id="services">
  <div class="container">
  <h2 class="title">Mes Services</h2>
<div class="row">
  <div class="col-md-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab">Création de sites web</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab">Développement web</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab">WordPress</a>
    </div>
  </div>
  <div class="col-md-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
        <div class="desc lead">
          <i class="fa fa-file-code-o"></i>
         Créer une base solide pour un site Web signifie avoir la bonne architecture HTML et CSS. Si vous avez un design, je peux créer le code frontal pour celui-ci.
        </div>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        <div class="desc lead">
          <i class="fa fa-code"></i>
         Je travaille également sur le développement web avec php et mySQL. Créer un tableau de bord et créer un site Web à partir de zéro.
        </div>
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <div class="desc lead">
          <i class="fa fa-wordpress"></i>
         avec wordPress, vous pouvez créer un site Web parfait avec un bon référencement, et vous pouvez facilement mettre à jour chaque élément de contenu, activer ou désactiver des sections et bien plus encore.
        </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
 <!-- end my services section -->
<!-- start projects section -->
<section class="projects" id="projects">
	<div class="container">
		<h2 class="title">Mes projets</h2>
		 <div class="row">
      <?php
      $projects = array(
        'shoping' => 'https://template-shop.netlify.app', 
        'agency'  => 'http://agency1.netlify.app',
        'nop'     => 'http://noproblems.ma',
        'mediafire' => 'https://mediafire.ma'
      ); 
       foreach ($projects as $project => $link){ ?>
         <div class="col-md-6">
        <div class="proj">
          <img class="img-responsive" src="imgs/projects/<?php echo $project;?>.png" alt="<?php echo $project; ?>>
          <a class="btn btn-success" href="<?php echo $link;?>" target="_blanck"><i class="fa fa-search-plus"></i> Regarder en direct</a>
        </div>
      </div>
      <?php } ?>
    </div>
	</div>
</section>
<!-- end projects section -->
<!-- start contact section -->
<?php include 'contact-fr.php'; ?>
<!-- end contact section -->
<?php include 'inc/fr/footer.php'; ?>