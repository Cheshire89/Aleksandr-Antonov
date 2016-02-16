<?php
include("php/data.php");
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
<link rel="stylesheet" type="text/css" href="styles/default.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.js"></script>

</head>
<div id="wrapper">
<header id="header">
	<div id="logo">
	    <img src="img/logo.png" alt="logo">
	    <h3>Interactive Resume</h3>
	 </div>
  <nav>
	  <div id="cssmenu" class="align-center">
	    <ul id="menu">
		    <?php
		  		foreach($navLinks as $link){
		  			echo '<li><a href="#'.$link.'">'.ucfirst($link).'</a></li>';
		  		}
		  	?>
	    </ul>
	   </div>
	    <div id="mobile" class="mobile_menu">
	     <select onchange="location = this.options[this.selectedIndex].value;">
	      <option value="#" selected>MENU</option>
	      <option value="#">----------------------------------</option>
	      <?php
	      		foreach ($navLinks as $link) {
	      			echo '<option value="#'.$link.'">'.ucfirst($link).'</option>';
	      		}
	      ?>
	     </select>
	     <!--<script type="text/javascript" src="scripts/mobile_menu_selection.js"></script>-->
	    </div>
   </nav>
  
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
</div> <!-- End of wrapper -->
<script type="text/javascript" src="scripts/main.js"></script>
</html>
