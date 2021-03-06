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
   			<p>Open since 1981, the Sloane Gallery, founded by Mina Litinsky, 
   			is located in historic district of lower downtown (LoDo) Denver, 
   			CO U.S.A. . The gallery is internationally recognized as one of 
   			the major dealers in Contemporary and Modern Russian Art.</p>
   			<p>The gallery represents more than fifty artists including Russian, 
   			Russian-American and artists from other republics of the former 
   			Soviet Union. Among them are such masters as Alexander Anufriev, 
   			Gleb Bogomolov, Erik Boulatov, Genia Chef, Mihail Chemiakin, Igor 
   			Galanin, Alexander Isachev, Ilya Kabakov, Viatcheslav Kalinin, Ketevan, 
   			Marc Klionsky, Vitaly Komar, Komar &amp; Melamid, Alexander Kosolapov, 
   			Yuri Krasny, Roman Kriheli, Alexander Melamid, Lev Meshberg, Ernst 
   			Neizvestny, Vladimir Nemukhin, Alexander Ney, Shimon Okshteyn, Oskar
   			 Rabine, Alek Rapoport, Alexander Rikhter, Albert Shvilly, Ilya Shenker, 
   			 Leonid Sokov, Tengiz, Igor Tiulipanov, Oleg Tselkov, Oleg Vassiliev, 
   			 Vladimir Yakovlev, Eugene Yelchin and Anatoly Zverev.</p>
   			<p>The Sloane Gallery shows works in different artistic styles such as 
   			Surrealist, Political, Conceptual, Avant-Garde, Abstract, and Sots Art. 
   			Works of many gallery artists are part of the permanent public collections 
   			of the Metropolitan Museum of Art N.Y., The Guggenheim Museum, N.Y., 
   			MOMA, N.Y., The Centre Georges Pompidou, Paris, Pushkin Museum, Moscow, 
   			and many other major museums throughout the world.
   			</p>
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
