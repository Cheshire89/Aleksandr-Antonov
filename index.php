<?php

$page = "about";

$title = "home";

require_once('php/includes/config.php');

$description = "Open since 1981, Sloane Gallery,  is located in Denver, CO. The gallery is internationally recognized as major dealer in Contemporary Russian Art.";

$keywords = $title."History, Mina, Litinsky, Art, Russian Art, Nonconformist Art, USA, Komar and Melamid, Oleg Vassiliev, Oleg Tselkov, Ernst Neizvestny, Erik Boulatov, Genia Chef, Vladimir Nemukhin, Second Avangarde, Sots Art, Anatoly Zverev, Ilya Kabakov";

include(ROOT_PATH."php/includes/header.php");

?>

<section class="body">

   <div class="bodyContainer" itemscope="" itemtype="http://schema.org/AboutPage">

   		<div id="slider-container">

   			<div class="slider">

	   			<img id="1" src="about/img/slide1.jpg" alt="Collection of Gallery Images">

   			</div>

   		</div>

   		<div id="info-container" itemprop="description">

            <?php include(ROOT_PATH.'main-article.php'); ?>
   			
   		</div>

   		

   </div>

</section>



<?php
include(ROOT_PATH.'php/includes/footer.php');
?>

