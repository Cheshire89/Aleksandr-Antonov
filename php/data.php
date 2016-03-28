<?php
function getAge($bDay){/* Y-m-d format*/
	$now = explode("-",date('Y-m-d'));
	$bDay = explode("-", $bDay);
	$age = $now[0] - $bDay[0];
		if($now[1]<$bDay[1]){
			$age--;
		}elseif ($now[2]<$bDay[2]) {
			$age--;
		}
	return $age;
}

define("GALLERY_NAME","Sloane Gallery of Art");
define("MAX_NUM_OF_STARS",5);


$navLinks = array(
	'profile','experiences','abilities','projects','contact'
);
		//Last Update 02/12/16
$bio = "<p>I am a junior level programmer with decent knowledge of both 
		front-end and back-end techniques. I love structure and order 		
		and I also stand for quality. I love spending time on fixing 
		little details, learning code, and making web apps.  I have been
	    doing programming as a hobby for past ". intval(date('Y')-2013).  " years and it brings me 
	    sheer joy to find solution to perplexed problems. Also, I like 
	    working in a team, you'll learn faster and a lot more. As the 
	    saying goes: \"two heads are better than one\".</p>";

$details = array(
	"age" => getAge("1989-10-09"),
	"name" => "Aleksandr Antonov",
	"location" => "Denver, CO"
	);

$abilitySec = array(
	"Skills","Languages","Tools"
);

$eduaction = array(
	$southHS= array(
	"name" => "South High School",
	"atending" => "2003-2007",
	'location' => $details["location"],
	'description' => "Completed  several multimedia and design courses including;
					Multimedia and Design,
					Web Development, 
					and AP Art. Awarded upon graduation \"Outstanding Achievements  in Visual Arts\""
		),
	$ccd = array(
	"name" => "Community College of Denver",
	"atending" => "2007-2010",
	"location" => $details['location'],
	'description' => "The education was mainly focused on graphic design using Adobe products 
					(Photoshop, Illustrator, InDesign). Along side I took a lot of other Art courses including;
					2D and 3D art, digital and film photography. It was also the place where I was
					introduced to C++ and Java programming which set my decision to graduate with Computer Science
					Degree."
		),

	$ucd = array(
	"name" => "Univercity of Colorado at Denver",
	"atending" => "2010-Present",
	"location" => $details['location'],
	'description' => "Currently I'am a Junior at the UCD working on my Computer Science Degree. I also take interest in other
					engineering courses."
		)
	);

$careers = array(
	$SGA = array(
	"name" => GALLERY_NAME,
	"position" => "Assistant Director",
	"atending" => "2010-Present",
	"description" => array(
			"web Design" => array(
				"first" => "Created a website for Sloane Gallery of Art",
				"second" => "Ongoing update and improvement of the website",
				"third"	=> "Content management of all social platforms",
				"fourth" => "SEO optimization and online advertising",
				"fifth" => "Trouble shooting and error handling"
				),
			"gallery Work"=>array(
				"first" => "Held regular lectures about Russian Contemporary Art with students from various Universities",
				"second" => "Preparation of various documents (Appraisals, Invoices, Press releases etc)",
				"third" => "Art market analysis",
				"fourth" => "Evaluation of private collections",
				"fifth" => "Cataloging of the inventory and records keeping",
				"sixth" => "Translation of documents from Russian to English"
				),
			"big Projects" => array(
				"first" => "\"Genia Chef Glory of a New Century\", Russian State Museum, St.Petersburg, Russia 2011",
				"second" => '"In Memory of Tengiz Mirzashvili" ,'.GALLERY_NAME.', Denver, CO 2013'
				)
		)
	),

);

$abilities = array(
	$skills = array(
	"Javascript" => 3,
	"jQuery" => 3,
	"AJAX" => 2,
	"PHP" => 4,
	"MySql" => 2,
	"Java" => 1,
	"C++" => 3,
	"HTML5" => 4,
	"CSS3 / Sass" => 4,
	"BootStrap / Bourbon" => 3,
	"SEO" => 3,
	"Comand Line" => 3,
	"Windows PowerShell" => 3
	),
$languages = array(
	"Russian (Native)" => 5,
	"English (Fluent)" => 5
	),
$tools = array(
	/*-Last Update Jan, 1, 2016-*/
	/*Modify "years" to automatically update*/
	"Adobe PhotoShop (5 years)" => 5,
	"Adobe Illustrator (4 years)" => 4,
	"Adobe Dreamweaver (2 years)" => 2,
	"Windows (10 years)" => 5,
	"Mac (2 years)" => 2,
	"Linux (1 year)" => 1,
	"MS Office (10 years)" => 5,
	"Git (1 year)" => 3,
	"XAMPP (3 years)" => 2,
	"MS Visual Studio (3 years)" => 3,
	"Eclipse (1 year)" =>1,
	"Various APIs (1 year)" => 3
	)
);

$projects = array(
	$sloaneGallery = array(
		"title" => "Sloane Gallery of Art",
		"img" => "img/project1.jpg",
		"tags" => "PHP, MySql, Javascript, jQuery",
		"link" => "http://www.sloanegalleryofart.com"
		),
	$aleksandrAntonov = array(
		"title" => "Aleksandr Antonov",
		"img" => "img/project2.jpg",
		"tags" => "PHP, Javascript, jQuery",
		"link" => "/"
		),
	$toDoList = array(
		"title" => "To Do List",
		"img" => "img/project3.jpg",
		"tags" => "Javascript",
		"link" => "http://codepen.io/Cheshire89/pen/RaNVOq/"
		),
	$toDoList = array(
		"title" => "Weather App",
		"img" => "img/project5.jpg",
		"tags" => "AJAX, jQuery, BootStrap",
		"link" => "http://codepen.io/Cheshire89/full/grRjLB/"
		),
	$funnyQuotes = array(
		"title" => "Random Fun Quotes",
		"img" => "img/project4.jpg",
		"tags" => "Javascript, jQuery",
		"link" => "http://codepen.io/Cheshire89/pen/JGRaJg/"
		)
	);



$contacts = array(
	$facebook =array(
		"link" => "https://www.facebook.com/sashka.antonov",
		"img" => "facebook-blue.png",
		"img2" => "facebook-yellow.png",
		"alt" => "facebook"
		),
	$github =array(
		"link" => "https://github.com/Cheshire89",
		"img" => "github-blue.png",
		"img2" => "github-yellow.png",
		"alt" => "github"
		),
	$linkedin =array(
		"link" => "https://www.linkedin.com/in/antonovaleksandr",
		"img" => "linkedin-blue.png",
		"img2" => "linkedin-yellow.png",
		"alt" => "linkedin"
		),
	$twitter = array(
		"link" => "https://twitter.com/Cheshire89",
		"img" => "twitter-blue.png",
		"img2" => "twitter-yellow.png",
		"alt" => "twitter"
		)
	);

$footer = $details["name"]." &copy;".date('Y'); 
  
?>