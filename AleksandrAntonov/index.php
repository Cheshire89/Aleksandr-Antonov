<?php
include("php/data.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aleksandr Antonov | Web Developer</title>
<meta name="google-site-verification" content="OlfRmxzE2z0tKxC_IeTr6q7tXgkcb-ZyeJLOZbJgzLI" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-script-type" content="text/javascript">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="content-language" content="en">
<meta name="author" content="Aleksandr Antonov">
<meta name="keywords" content="Aleksandr Antonov, Interactive, Resume, PHP, MySqul, Programmer, Web, Developer,  CV, PHP, Javascript, jQuery, Bootstrap, Angularjs, Sass, Nodejs, For Hire, Freelance">
<meta name="description" content="I am a junior level web developer with knowledge of both front and back end technologies. I love structure and order and I also stand for quality. I love spending time on fixing little details, learning code, and making web apps.  I have been programming for past <?php echo intval(date('Y')-2013)  ?> years and it brings me sheer joy to find  solution to perplexed problems. My range of expertise include, UI Web and Mobile Design and Development. I wil work with you to discover what you need  and create the best solution. My priorities are quality and respect for deadlines and  budget. I love to share my enthusiasm and passion for code and design. Feel free to contact me with any of your Web needs">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="7 days">
<link rel="alternate" href="http://aleksandrantonov.com" hreflang="en-us" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles/css/styles.css">
</head>

<body>

	<div class="jumbotron">
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

			  			if($link !== 'tutorials'){
				  			echo '<li><a href="#'.$link.'" title="'.ucfirst($link).' Page">'.ucfirst($link).'</a></li>';
			  			} else{
				  			echo '<li><a href="'.$link.'.php" title="Tutorials" id="'.$link.'">'.ucfirst($link).'</a></li>';
			  			}

			  		}

			  	?>
			</ul>
		</div>
	</nav>
  <div class="container-fluid">
	  <section id="one" class="row">
	    <div id="profile" class="content">
	    	<h2 class="section-header">Profile</h2>
		    
		    	<div class="row">
		    		<div class="col-md-9 col-md-offset-1">
		    			<div class="row">
		    				
						    <div id="bio" class="col-md-6 aboutMe">
							    <h3 class="sub-header">Brief Bio</h3>
							    <?php echo $bio; ?>
						    </div>
						    <div id="myInfo" class="col-md-6 aboutMe">
						    		<h3 class="sub-header">Details</h3>

						    	<?php

						    		foreach($details as $detail => $info){

						    			echo "<h5>".ucfirst($detail).":</h5><p>".$info."</p>";

						    		}

						    	?>

						    </div>
		    			</div>
					    

		    		</div>
				</div>

			   </div>
		    
	  </section>
	  <section id="two" class="row">

			<div id="experiences" class="content">
				<h2 class="section-header">Experiences</h2>
				<div id="education" class="container">
					<div class="col-md-9 col-md-offset-1">
					<h3 class="sub-header">Education</h3>
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
				</div>

				<div id="careers" class="container">
						<div class="col-md-9 col-md-offset-1">
							<h3 class="sub-header">Careers</h3>
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

			</div>
	  </section>

	  <section id="three" class="row">
	    <div id="abilities">
	    <h2 class="section-header">Abilities</h2>

			<?php

				$abilityTitle = '<span class ="ability-title"><p>';

				$abilityScore = '<span class ="ability-score">';

				$filledStar = '<span class ="glyphicon glyphicon-star filled"></span>';

				$star = '<span class ="glyphicon glyphicon-star"></span>';



				for ($i=0;$i<count($abilitySec);$i++){

				arsort($abilities[$i]);

					echo '<div id="'.lcfirst($abilitySec[$i]).'" class="col-md-9 col-md-offset-1">

						 <h3 class="sub-header">'.$abilitySec[$i].'</h3>

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

	  <section id="four" class="row">
		    <div id="projects" class="content">
		      <h2 class="section-header">Projects</h2>
		    	<div class="container">
			    	<?php 

		    		foreach ($projects as $project) {
		    			echo '<div class="project">';
		    			echo '<a href="'.$project["link"].'" target="_blank">';
		    			echo '<figure class="effect-chico">';
		    			echo '<img src="'.$project["img"].'" alt="'.$project["title"].'">';
		    			echo '<figcaption>
			    			  <h2 class="section-header">'.$project["title"].'</h2>
			    			  <p><strong>Tags: </strong>'.$project["tags"].'</p>';
			    		echo '</figcaption></figure>';
			    		echo '</a></div>';
		    		}

		    	?>

		    	</div>
		   	</div>
	  </section>

	  <section id="five" class="row">

		    <div id="contact" class="content">
		    <h2 class="section-header">Contact</h2>

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
		    </div>
		    <?php include("php/send.php");?>
	   </section>

	  <footer class="row">
	    <div id="footer">
	      <h4><?php echo $footer; ?></h4>
	    </div>
	  </footer>
  </div>

  <script type="text/javascript" src="scripts/main.js"></script>

  <script type="text/javascript" src="scripts/script.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

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

