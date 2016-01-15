<?php
include("data.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aleksandr Antonov | Interactive Resume</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-script-type" content="text/javascript">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="content-language" content="en">
<meta name="author" content="Aleksandr Antonov">
<meta name="keywords" content="Aleksandr Antonov, Interactive Resume, PHP programmer, Web developer, Interactive CV, Resume, HRMatches, PHP, Javascript, OOP">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="7 days">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
<link rel="stylesheet" type="text/css" href="default.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.js"></script>

</head>
<div id="wrapper">
<header id="header">
  <nav>
  <div id="logo">
    <h1><?php echo $details["name"]?></h1>
    <h3>Interactive Resume</h3>
  </div>
  <div id="cssmenu" class="align-center">
  			<a class="glyphicon-list" id="menu_btn"></a>
    <ul>
	    <?php
	  		foreach($navLinks as $link){
	  			echo '<li><a href="#'.$link.'">'.ucfirst($link).'</a></li>';
	  		}
	  	?>
    </ul>
    </nav>
  </div>
  </header> <!--End of header -->
  <section id="one">
    <div id="profile" class="content">
    	<h2>Profile</h2>
	    <div class="container">
		    <div id="bio" class="aboutMe">
			    <h3>Brief Bio</h3>
			    <?php echo $bio; ?>
		    </div>
		    <div id="pic" class="aboutMe">
		    	<img src="img/myPic.jpg" alt="Aleksandr Antonov"
		    	onmouseover="this.src='img/myPic_reg.jpg'" onmouseout="this.src='img/myPic.jpg'" 
		    	>
		    </div>
		    <div id="myInfo" class="aboutMe">
		    <h3>Details</h3>
		    	<?php
		    		foreach($details as $detail => $info){
		    			echo "<span><h5>".ucfirst($detail).":</h5><p>".$info."</p></span>";
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
						  	<p>
						  	<strong>'.$career['position'].'</strong>
						  	
						  	'.$career['description'].'
						  	</p>
						  </div>
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
	    	<div class="project">
	    		<img src="img/project1.jpg" alt="Sloane Gallery Website">
	    	</div>
	    	<div class="project">
	    		<img src="img/project2.jpg" alt="Aleksandr Antonov Interactive Resume">
	    	</div>
	    	<div class="project">
	    	</div>
    	</div>
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
    <div id="contact-email" class="content"><h2>E-mail</h2>
    <form id="hire" method="POST" onsubmit="sendEmail()">
	      <div class="field name-box">
		        <input type="text" id="name" name="name" placeholder="Greetings!" required />
        		<label for="name">Name</label>
		        <span class="glyphicon-ok"></span>
	      </div>

	      <div class="field email-box">
		        <input type="text" type="email" id="email" name="email" placeholder="Name@email.com" required />
		        <label for="email">Email</label>
		        <span class="glyphicon-ok"></span>
	      </div>

	      <div class="field msg-box">
		        <textarea id="msg" rows="4" name="message" placeholder="How may I help you ?" required /></textarea>
		        <label for="msg">Msg</label>
		        <span class="glyphicon-ok"></span>
	      </div>
	      <div id="send">
	      <input class="button" type="submit" value="Send" />
	      </div>
  </form>
    </div>
  </section>
  <footer>
    <div id="footer">
      <h4><?php echo $footer; ?></h4>
    </div>
  </footer>
</div> <!-- End of wrapper -->
<script type="text/javascript" src="main.js"></script>
</html>
