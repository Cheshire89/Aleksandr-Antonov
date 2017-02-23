<?php

function yearsSince($bDay){/* Y-m-d format*/

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

	'profile','experiences','abilities','projects','contact','tutorials'

);

		

$bio = "<p>I am a junior level web developer with knowledge of both front and back end 

        technologies. I love structure and order and I also stand for quality. I love

        spending time on fixing little details, learning code, and making web apps. 

        I have been programming for past ". intval(date('Y')-2013).  " years and it brings me sheer joy to find 

        solution to perplexed problems. My range of expertise include, UI Web and Mobile Design and Development. I wil work with you to discover what you need 

        and create the best solution. My priorities are quality and respect for deadlines and 

        budget. I love to share my enthusiasm and passion for code and design/ Feel free to

        contact me with any of your Web needs</p>";

        

        



$details = array(

	"age" => yearsSince("1989-10-09"),

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

	"position" => "Assistant",

	"atending" => "2010-Present",

	"description" => array(

			"web Design" => array(

				"first" => "Created a website for Sloane Gallery of Art",

				"second" => "Ongoing update and improvement of the website",

				"third"	=> "Content management of all social platforms",

				"fourth" => "SEO optimization and online advertising",

				"fifth" => "Trouble shooting and error handling"

				)

		)

	),

	$Lasyte = array(

	"name" => "Lasyte Solutions",

	"position" => "Font-End Developer | Graphic Designer",

	"atending" => "2016-Present",

	"description" => array(

			"Front End Development" => array(

				"first" => "UI | UX Development",

				"second" => "Front End Development Using Javascript, jQuery, Sass, and Bootstrap"
				),

			"Website Design" => array(

				"first" => "Created PSD Website Design",

				)

		)

	)



);



$abilities = array(

	$skills = array(

	"Javascript" => 4,

    "Angularjs" => 2,

    "Nodejs" => 3,

    "JSON" => 5,

	"jQuery" => 4,

	"AJAX" => 2,

	"PHP" => 4,

	"MySql" => 3,

	"Java" => 1,

	"C++" => 3,

	"HTML5" => 5,

	"CSS3 / Sass" => 4,

	"BootStrap / Bourbon" => 4,

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

	"Adobe PhotoShop (".intval(date('Y')-2007)." years)" => 5,

	"Adobe Illustrator (".intval(date('Y')-2007)." years)" => 4,

	"Adobe Dreamweaver (2 years)" => 3,

	"Windows (".intval(date('Y')-2003)." years)" => 5,

	"Mac (2 years)" => 2,

	"Linux (1 year)" => 1,

	"MS Office (".intval(date('Y')-2003)." years)" => 5,

	"Git (".intval(date('Y')-2014)." year)" => 3,

	"XAMPP (".intval(date('Y')-2013)." years)" => 2,

	"MS Visual Studio (3 years)" => 3,

	"Eclipse (1 year)" =>1,

	"Various APIs (".intval(date('Y')-2013)." years)" => 4,

    "WordPress (> 1 year)" => 2,

    "NPM (".intval(date('Y')-2013)." years)" => 3,

    "Bower (".intval(date('Y')-2013)." years)" => 3

	)

);



$projects = array(

	$sloaneGallery = array(

		"title" => "Sloane Gallery of Art",

		"img" => "img/project1.jpg",

		"tags" => "PHP, MySql, Javascript, jQuery",

		"link" => "http://www.sloanegalleryofart.com"

		),

	$dialecticHealing = array(

		"title" => "Dialectic Healing",

		"img" => "img/project7.jpg",

		"tags" => "PHP, Javascript, jQuery, Sass",

		"link" => "http://dialectichealing.com"

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

	$toDoAngular = array(

		"title" => "Task App Angular",

		"img" => "img/project6.jpg",

		"tags" => "Angularjs, Javascript",

		"link" => "projects/TodoApp/todoApp.html"

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