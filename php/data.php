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


define("MAX_NUM_OF_STARS",5);


$navLinks = array(
	'profile','experiences','abilities','projects','contact'
);

$bio = "<p>I am an allround web developer. 
		I am a beginer programmer with decent 
		knowledge of both front-end and back-end 
		techniques. I love structure and order 
		and I also stand for quality. I love 
		spending time on fixing little details 
		and making web apps on my spare time. Also 
		I like working in a team, you'll learn 
		faster and more. As the saying goes: 
		'two heads are better than one'.</p>";

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
	'description' => "Copmpleted several multimedia and design courses including;
					Multimedia and Design,
					Web Development, 
					and AP Art. Awarded upon graduation \"Outstanding Achevements in Visual Arts\""
		),
	$ccd = array(
	"name" => "Community College of Denver",
	"atending" => "2007-2010",
	"location" => $details['location'],
	'description' => "The education was mainly focused on graphic design using Adobe products 
					(Photoshop, Illustrator, InDesign). Along side I took a lot of other Art courses including;
					2D and 3D art, digital and film photography, art history. It was also the place where I was
					introduced to C++ and Java programming which set my desicion to graduate with Computer Science
					Degree."
		),

	$ucd = array(
	"name" => "Univercity of Colorado at Denver",
	"atending" => "2010-Present",
	"location" => $details['location'],
	'description' => "Currently Im a Junior at the UCD working on my Computer Sciense Degree. I also take interest in other
					engeneering courses as my knowlege and curiousity increases."
		)
	);

$careers = array(
	$SGA = array(
	"name" => "Sloane Gallery of Art",
	"position" => "Asistant Director",
	"atending" => "2010-Present",
	"description" => "<ul id=\"work\" class=\"new\">
						<h4>header One</h4>
						<li>Item One Testing for longer passages. Just in case Design Fails. 
						Lets make this string even longer to see how it colapses. Just in case
						Lets make it look like a paragraph.</li>
						<p>Header Two</p>
						<li>Item Two</li>
						<li>Item Three</li>
						<li>Item Four and here is another long string. Lets see what happens</li>
						<li>Item Five</li>
						<li>Item Six</li>
					</ul>"
	),

);

$abilities = array(
	$skills = array(
	"Javascript" => 2,
	"jQuery" => 3,
	"PHP" => 3,
	"MySql" => 2,
	"Java" => 1,
	"C++" => 3,
	"HTML5" => 4,
	"CSS3" => 4,
	"BootStrap Framework" => 2,
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
	"Git (1 year)" => 2,
	"XAMPP (3 years)" => 2,
	"MS Visual Studio (3 years)" => 3,
	"Eclipse (1 year)" =>1
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