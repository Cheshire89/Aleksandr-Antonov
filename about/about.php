<?php

$page = "about";

$title = "about";

require_once("../php/includes/config.php");

$description = "Open since 1981, Sloane Gallery,  is located in Denver, CO. The gallery is internationally recognized as major dealer in Contemporary Russian Art.";

$keywords = $title." ,description, history, Mina, Litinsky, 1981";

include(ROOT_PATH."php/includes/header.php");

?>

<section class="body">

   <div class="bodyContainer" itemscope="" itemtype="http://schema.org/AboutPage">

   		<div id="slider-container">

   			<div class="slider">

	   			<img id="1" src="img/slide1.jpg" alt="Collection of Gallery Images">

   			</div>

   		</div>

   		<div id="info-container" itemprop="description">

   			<?php include(ROOT_PATH.'main-article.php'); ?>

   		</div>

   		

   </div>

</section>

<script type="text/javascript">

/*   function slider(){

      $(".slider #1").show("fade",500);

      $(".slider #1").delay(5000).hide("fade",800);

      $(".slider").css("background-image","none");





      var sliderCount = $(".slider img").size();

      var count = 2;



      setInterval(function(){

         $(".slider #"+count).show("fade",800);

         $(".slider #"+count).delay(5000).hide("fade",800);



         if(count == sliderCount){

            count=1;

         }else{

            count++;

         }

      }, 6500);

   }*/

</script>

<?php

include(ROOT_PATH.'php/includes/footer.php');



?>

