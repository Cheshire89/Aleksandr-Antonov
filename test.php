<?php
include("engine.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<span class ="ability-title"><p>Javascript</p></span>
		    	<span class ="ability-score">
			    	<span class ="glyphicon glyphicon-star filled"></span>
			    	<span class ="glyphicon glyphicon-star filled"></span>
			    	<span class ="glyphicon glyphicon-star"></span>
			    	<span class ="glyphicon glyphicon-star"></span>
			    	<span class ="glyphicon glyphicon-star"></span>
		    	</span>

<?php
for ($i=0;$i<count($abilitySec);$i++){
	echo '<div id="'.$abilitySec[$i].'" class="container">
		 	<h3>'.$abilitySec[$i].'</h3>
		 <ul>';
		 foreach($abilities[$i] as $skill => $stars){
		 	echo'<li><span class ="ability-title"><p>'.$skill.'</p></span>
		 		<span class ="ability-score">';
		 		for($j=0;$j<NUM_OF_STARS;$j++){
		 			if($j <= $stars){
		 				echo '<span class ="glyphicon glyphicon-star filled"></span>';
		 			}else{
		 				echo '<span class ="glyphicon glyphicon-star"></span>';
		 			}
		 		}
		 	echo '</span></li>';
		 };
	echo '</ul>
		 </div>';
};																

?>




</body>
</html>