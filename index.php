<?php
include("php/data.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aleksandr Antonov | Interactive Resume</title>
<meta name="google-site-verification" content="OlfRmxzE2z0tKxC_IeTr6q7tXgkcb-ZyeJLOZbJgzLI" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-script-type" content="text/javascript">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="content-language" content="en">
<meta name="author" content="Aleksandr Antonov">
<meta name="keywords" content="Aleksandr Antonov, Interactive Resume, PHP programmer, Web developer, Interactive CV, Resume, HRMatches, PHP, Javascript, OOP">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="7 days">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel="alternate" href="http://aleksandrantonov.com" hreflang="en-us" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KXKQNS');</script>
<!-- End Google Tag Manager -->

<div class="jumbotron" data-stellar-background-ratio="0.5">
	<div class="container">
		 <img src="img/logo.png" alt="logo">
	     <p class="lead"> Interactive Resume</p>
	</div>
	<div class="overlay"></div>
		<a href="#profile" class="scroll-down">
			<span class="glyphicon glyphicon-chevron-down"></span>
		</a>
	</div>
	<nav class="navbar navbar-default" id="navbar-example" rule="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<?php
			  		foreach($navLinks as $link){
			  			echo '<li><a href="#'.$link.'">'.ucfirst($link).'</a></li>';
			  		}
			  	?>
			</ul>
		</div>
	</nav>
  <section id="one">
    <div id="profile" class="content">
    	<h2>Profile</h2>
	    <div class="container">
	    	
			    <div id="bio" class="aboutMe">
				    <h3>Brief Bio</h3>
				    <?php echo $bio; ?>
			    </div>
			    <div id="myInfo" class="aboutMe">
			    <h3>Details</h3>
			    	<?php
			    		foreach($details as $detail => $info){
			    			echo "<h5>".ucfirst($detail).":</h5><p>".$info."</p>";
			    		}
			    	?>
			    </div>
			   
		   </div>
	    </div>
	</section>
	<section id="two">
	<div id="experiences" class="content">
		<h2>Experiences</h2>

		<div id="education" class="container">
			<h3>Education</h3>

			<?php 
				foreach($eduaction as $ed){

					echo '<div class="row">  
						<div class="place">
							<h4>'.$ed['name'].'</h4>

							<p>'.$ed['atending'].'</p>
						  </div>
						  <div class="description">
						  	<p>
						  	<strong>'.$ed['location'].'</strong>
						  	
						  	'.$ed['description'].'
						  	</p>
						  </div>
						  </div>';
				}
			?>
		</div>
		<div id="careers" class="container">
			<h3>Careers</h3>
				<?php 
				foreach($careers as $career){

					echo '<div class="row">  
						<div class="place">
							<h4>'.$career['name'].'</h4>

							<p>'.$career['atending'].'</p>
						  </div>
						  <div class="description">
						  	<h4>
						  	'.$career['position'].'
						  	</h4>';
					foreach($career['description'] as $section => $key){
						echo '<p>'.ucwords($section).'</p>';
						echo '<ul>';
							foreach($key as $description){
								echo '<li>'.$description.'</li>';
							}
						echo '</ul>';
					}	  	
						   	
					echo'</div>
						  </div>';
				}
				?>
			</div>
	</div>
	</section>
	<section id="three">
    <div id="abilities" class="content"><h2>Abilities</h2>
		<?php
			$abilityTitle = '<span class ="ability-title"><p>';
			$abilityScore = '<span class ="ability-score">';
			$filledStar = '<span class ="glyphicon glyphicon-star filled"></span>';
			$star = '<span class ="glyphicon glyphicon-star"></span>';

			for ($i=0;$i<count($abilitySec);$i++){
			arsort($abilities[$i]);
				echo '<div id="'.lcfirst($abilitySec[$i]).'" class="container">
					 <h3>'.$abilitySec[$i].'</h3>
					 <ul>';
					 foreach($abilities[$i] as $skill => $stars){
					 	echo'<li>'.$abilityTitle.$skill.'</p></span>'.$abilityScore;
					 		for($j=0;$j<MAX_NUM_OF_STARS;$j++){
					 			echo ($j<$stars) ? $filledStar : $star;
					 		}
					 	echo '</span></li>';
					 };
				echo '</ul></div>';
			};
		?>
	</div>
	</section>
	<section id="four">
    <div id="projects" class="content"><h2>Projects</h2>
    	<div class="container">
	    	<?php 
    		foreach ($projects as $project) {
    			echo '<div class="project">';
    			echo '<a href="'.$project["link"].'" target="_blank">';
    			echo '<figure class="effect-chico">';
    			echo '<img src="'.$project["img"].'" alt="'.$project["title"].'">';
    			echo '<figcaption>
	    			  <h2>'.$project["title"].'</h2>
	    			  <p><strong>Tags: </strong>'.$project["tags"].'</p>';
	    		echo '</figcaption></figure>';
	    		echo '</a></div>';
    		}
    	?>

    	</div>
    	<a href="https://github.com/Cheshire89" id="github_btn" class="btn green"><i class="fa fa-github" aria-hidden="true"></i> | Github Projects</a>
   	</div>
   	</section>
   	<section id="five">
    <div id="contact" class="content"><h2>Contact</h2>
	    <ul>
	       <?php 
	       		foreach ($contacts as $contact) {
	       		echo '<li>';
		       		echo '<a href="'.$contact["link"].'" target="_blank">';
		       			echo '<img class="svg social-link" src="img/'.$contact["img"].'" 
						       onmouseover="this.src=\'img/'.$contact["img2"].'\'"
						       onmouseout="this.src=\'img/'.$contact["img"].'\'" 
						       alt="'.$contact["alt"].'">';
				    echo '</a>';
	       		echo '</li>';
	       		};
	       ?>
	    </ul>
	  <a href="#name" id="email_btn" class="btn green">Send Email</a>
    </div>

    <?php include("php/send.php");?>
	</section>
  <footer>
    <div id="footer">
      <h4><?php echo $footer; ?></h4>
    </div>
  </footer>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.js"></script>-->
  <script type="text/javascript" src="scripts/stellar.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script type="text/javascript" src="scripts/main.js"></script>
  <script type="text/javascript" src="scripts/script.js"></script>
  
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74983683-1', 'auto');
  ga('send', 'pageview');
  </script>
</body>
</html>
