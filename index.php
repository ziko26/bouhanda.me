<?php
include 'inc/en/header.php';
?>
<!-- about me section -->
<section class="about-me" id="about">
	<div class="container">
	 <h1>I'm <span>zakaria bouhanda</span></h1>
    <p class="lead">Web Developer, i build amazing and creative websites, easy to use. I use HTML, CSS and JavaScript to produce responsive websites. If you’ve got a project you’d like to work on with me just let's us work together!</p>
    <a href="cv-en.pdf" class="gl-btn">Download CV</a>
</div>
</section>
<!-- end about me section -->
<!-- start skills section -->
<section class="skills" id="skills">
	<div class="container">
		<h2 class="title">My Skills</h2>
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
        "git"
          );
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
  <h2 class="title">My Services</h2>
<div class="row">
  <div class="col-md-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab">Web Design</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab">Web Development</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab">WordPress</a>
    </div>
  </div>
  <div class="col-md-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
        <div class="desc lead">
          <i class="fa fa-file-code-o"></i>
          Creating a strong foundation for a website means getting the HTML and CSS architecture right. If you've got a design I can create the front-end code for it.
        </div>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        <div class="desc lead">
          <i class="fa fa-code"></i>
          I also work on web development with php and mySQL. Making a Dashboard and creating a websites from scratch.
        </div>
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <div class="desc lead">
          <i class="fa fa-wordpress"></i>
          with wordPress you can make perfect website with good SEO, and you can easily update every piece of content, turn sections on or off and so much more.
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
		<h2 class="title">My projects</h2>
		 <div class="row">
      <?php
      $projects = array(
        'shoping' => 'https://template-shop.netlify.app', 
        'agency'  => 'http://agency1.netlify.app',
        'nop'     => 'http://noproblems.ma',
        'mediafire' => 'https://mediafire.ma',
        'pub' => 'https://pubstudiopro.ma',
        'spoy' => 'https://spoy.ma',
      ); 
       foreach ($projects as $project => $link){ ?>
         <div class="col-md-6">
        <div class="proj">
          <img class="img-responsive" src="imgs/projects/<?php echo $project;?>.png" alt="<?php echo $project; ?>">
          <a class="btn btn-success" href="<?php echo $link;?>" target="_blanck"><i class="fa fa-search-plus"></i> Watch live</a>
        </div>
      </div>
      <?php } ?>
    </div>
	</div>
</section>
<!-- end projects section -->
<!-- start contact section -->
<?php include 'contact.php'; ?>
<!-- end contact section -->
<?php include 'inc/en/footer.php';?>