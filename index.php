<?php
function calculateAge($dob) {
	$birthDay = new dateTime($dob);
	$today = new dateTime();
	return $today->diff($birthDay)->y;
}
	$members = [
		"member1" => [
			"name" => "Xander Murphy",
			"dob" => "2003-11-16",
			"profilePic"=> "assets/images/xanderProfile.jpg",
			"role" => "Member",
			"jobTitle" => "Software Engineer",
			"email"=> "murphyx1@mymail.nku",
			"phoneNumber"=> "859-414-7459",
			"linkedIn"=> "https://www.linkedin.com/in/xander-murphy/",
			"gitHub"=> "https://github.com/Xander-Murphy",
			"website"=> "https://github.com/Xander-Murphy",
			"summary"=> "Software Engineering junior with a passion for creating and improving 
						 everyday life through technology, seeking an internship in software development 
						 or anything in the general IT space in the Greater Cincinnati / NKY area. Prefers 
						 remote work but can transition to hybrid/onsite work.",
			"job1Title"=> "College Education",
			"job1Location"=> "NKU",
			"job1Duration" => "2023 - Present",
			"job1Description"=> "Actively studying Software Engineering, with a background in HTML, CSS, Javascript, Java, and Python languages.",
			"job1AchievementsHead"=> "Here are some of the things I have accomplished in my studies",
			"job1AchievementsList"=> [ "Passed CSC 260 and 360", "Passed INF 120 and 286", "Passed ASE 220"],
			"job1Softwares"=> ["Python","Java","HTML","CSS","Javascript"],
			"job2Title" => "Tech Assistant",
			"job2Location" => "Simon Kenton High School",
			"job2Duration" => "2022-2022",
			"job2Description" => "Kept records and worked with physical hardware doing maintenance on machines to ensure they are ready for deployment in the next school year",
			"job2AchievementsHead" => "Examples of what was worked on",
			"job2AchievementsList"=> ["Compters","Projectors","Printers","Monitors"],
			"skills" => ["HTMLCSS","CSS","NodeJS","Javascript","Python","Java","mongoDB","jsonBLob","Calculus","Discrete Math"],
			"currentEducation" => "BS in Software Engineering (in progress)",
			"currentEducationLocation"=> "Northern Kentucky University",
			"collegeDuration"=> "2023 - Present",
			"highSchoolEducation"=> "High School Diploma",
			"highSchoolDuration"=> "2018-2022",
			"highSchoolEducationLocation" => "Simon Kenton High School",
			"award1Name"=> "Perfect Attendance",
			"award1Description"=> "Did not miss a day of High School",
			"primaryLang" => "English",
			"secondaryLang" => "Spanish",
			"primaryLevel" => "Native",
			"secondaryLevel" => "Intermediate",
			"interests"=> ["Gaming","Programming","AI"],
			"project1Name" => "Chat 220",
			"project1Desc"=> "Combining Multiple LLMs into one centralized application",
			"project1Link"=> "https://joseph-ampfer.github.io/AI_Chat_220/",
		],
		"member2" => [
        "name" => "Jarred Engleman",
				"dob" => "2003-11-11",
				"profilePic"=> "assets/images/jarredProfile.png",
        "role" => "Member",
        "jobTitle" => "Penetration Tester",
        "email"=> "englemanj1@nku.edu",
        "phoneNumber"=> "859-652-6307",
        "linkedIn"=> "https://www.linkedin.com/in/jarred-engleman-799793267",
        "gitHub"=> "N/A",
        "website"=> "N/A",
        "summary"=> "I am a third year student at Northern Kentucky University and have had many jobs in customer service and am looking into expanding into jobs more relevant to my field. I am also interning at trihealth. I have created a website before and have a bit of experience with coding in java and html.",
        "job1Title"=> "Room Service Ambassador",
        "job1Location"=> "Edgewood Kentucky",
        "job1Duration" => "2023 - Present",
        "job1Description"=> "As a room service ambassador it is my job to take orders of patients and make sure they recieve their food in a timely manner. On top of this my job also includes helping them get set up to eat their food.",
        "job1AchievementsHead"=> "",
        "job1AchievementsList"=> ["Training other employees.", "Dealing with difficult social situations.", "Problem solving skills."],
        "job1Softwares"=> ["Tray monitoring system","Food ordering service","Microsoft Teams","Limited EPIC experience","Microsoft outlook"],
        "job2Title" => "Store Clerk",
        "job2Location" => "Independence Kentucky",
        "job2Duration" => "2021 - 2023",
        "job2Description" => "My role as a Store clerk at UDF was to serve customers, ensure cleanliness of the store and also to ensure the store was stocked and customers would have access to anything we served.",
        "job2AchievementsHead" => "",
        "job2AchievementsList"=> ["I have prevented petty theft through watching suspicous customers and was offered higher positions throughout my employment.", "Ensuring Cleanliness ", "Ensuring product availability ", "Quality customer service"],
        "skills" => ["JavaScript", "HTML/CSS", "Python", "Linux", "Ethical hacking", "networking fundamentals", "Team collaboration", "Java", "Wireshark", "Loss prevention"],
        "currentEducation" => "Bachelors in Cybersecurity",
        "currentEducationLocation"=> "Northern Kentucky University",
        "collegeDuration"=> "2022 - 2026",
        "highSchoolEducation"=> "High School Diploma",
        "highSchoolDuration"=> "2018-2022",
        "highSchoolEducationLocation"=> "Simon Kenton High School",
        "award1Name"=> "",
        "award1Description"=> "",
        "primaryLang" => "English",
        "secondaryLang" => "Spanish",
        "primaryLevel" => "Native",
        "secondaryLevel" => "Beginner",
        "interests"=> ["Rock Climbing", "Hiking", "Running"],
        "project1Name" => "N/A",
        "project1Desc"=> "N/A",
        "project1Link"=> "N/A"
    	],
		"member3" => [
			"name" => "Jack Dixon",
			"dob" => "2006-09-01",
			"profilePic"=> "assets/images/jackProfile.jpg",
			"role" => "Member",
			"jobTitle" => "Software Engineer",
			"email"=> "dixonj20@mymail.nku.edu",
			"phoneNumber"=> "859-415-5478",
			"linkedIn"=> "N/A",
			"gitHub"=> "https://github.com/J4K20",
			"website"=> "N/A",
			"summary"=> "I bring a strong work ethic, reliability, and a collaborative mindset developed through several years in fast-paced food service and retail roles. From being one of the youngest employees at a local pizzeria to taking on nearly full-time hours at United Dairy Farmers while still in high school, I’ve consistently shown dedication, adaptability, and the ability to learn quickly. In my current role at Raising Cane’s, I’m recognized as a fast, efficient, and dependable team member who takes pride in quality work and supporting others. Across all positions, I’ve built a reputation for positivity, consistency, and commitment — qualities I carry into every challenge I take on.",
			"job1Title"=> "Cook",
			"job1Location"=> "Raising Cane's",
			"job1Duration" => "2024 - Present",
			"job1Description"=> "At Raising Cane’s, I’ve grown into one of the strongest and most efficient cooks on the team. I’m recognized for my speed, quality, and willingness to step in and help wherever needed. My coworkers value my positivity and teamwork, and I take pride in delivering excellent results even under pressure. This role has highlighted my consistency, dependability, and pride in my work.",
			"job1AchievementsHead"=> "",
			"job1AchievementsList"=> ["", "", ""],
			"job1Softwares"=> ["Deep Fryer", "Freezer", "POS", "Ticket System", "Grill"],
			"job2Title" => "Ice Cream Specialist",
			"job2Location" => "United Dairy Farmers",
			"job2Duration" => "2022 - 2023",
			"job2Description" => "At United Dairy Farmers, I handled a wide variety of responsibilities, from cashiering and stocking to cleaning and serving customers at the ice cream counter. I consistently worked late nights and nearly full-time hours during school breaks, showing maturity and dependability at a young age. This position strengthened my adaptability, time management, and ability to stay positive in demanding situations.",
			"job2AchievementsHead" => "",
			"job2AchievementsList"=> ["", "", ""],
			"skills" => ["Python", "Java", "JavaScript", "XAMPP", "HTML/CSS", "Github", "Code Review", "Node.js", "Debugging", "Rebugging"],
			"currentEducation" => "BCs in Software Engineering",
			"currentEducationLocation"=> "Northern Kentucky University",
			"collegeDuration"=> "2024-2028",
			"highSchoolEducation"=> "High School Diploma",
			"highSchoolEducationLocation"=> "Connor High School",
			"highSchoolDuration"=> "2020 - 2024",
			"award1Name"=> "",
			"award1Description"=> "",
			"primaryLang" => "English",
			"secondaryLang" => "",
			"primaryLevel" => "Native",
			"secondaryLevel" => "",
			"interests"=> ["Digital Media", "Music Appreciation", "Consumer Electronics"], //
			"project1Name" => "The Global Blog",
			"project1Desc"=> "A simple Node.js-based social media site powered by MongoDB. I programmed the whole thing by hand as the final project for my full-stack web development class.",
			"project1Link"=> "https://github.com/J4K20/ASE-220-Final"
		]
	];
//	-------------- "" => "", ------------
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Our amazing team</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
	
	<article class="resume-wrapper text-center position-relative">
		<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		<h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
		<?php
        function createCard($infoArray, $index){
			$name = $infoArray['name'];
			$firstName = explode(" ", $name)[0];
			$imgSrc = "assets/images/" . strtolower($firstName) . "Profile.jpg";
            echo
                "<header class='resume-header mt-4 t-4 pt-4 pt-md-0'>
                    <div class='row'>
                        <div class='col-block col-md-auto resume-picture-holder text-center text-md-start'>
                            <img class='picture' src='$imgSrc' alt=''>
                        </div><!--//col-->
                        <div class='col'>
                            <div class='row p-4 justify-content-center justify-content-md-between'>
                                <div class='primary-info col-auto'>
                                    <h1 class='name mt-0 mb-1 text-white text-uppercase'>
                                        {$name}
                                    </h1>
                                    <div class='title mb-3'>
                                        {$infoArray['role']}
                                    </div>
																		<p><strong>Age:</strong> " . calculateAge($infoArray['dob']) . "</p>
                                    <a href='detail.php?member=member$index' class='btn btn-secondary' class='btn btn-secondary'>See full profile</a>
                                </div><!--//primary-info-->
                                <div class='secondary-info col-auto mt-2'>
                                </div><!--//secondary-info-->
                            </div><!--//row-->
                        </div><!--//col-->
                    </div><!--//row-->
                </header>";
        }

        $inArr1 = array("name"=>"Jack Dixon", "role"=>"Member", "dob"=>"2006-09-01");
				$inArr2 = array("name"=>"Xander Murphy", "role"=>"Member", "dob"=>"2003-11-16");
				$inArr3 = array("name"=>"Jarred Engleman", "role"=>"Member", "dob"=>"2003-11-11");


        createCard($inArr1, 3);
        createCard($inArr2, 1);
        createCard($inArr3, 2);
    ?>
	
	</article> 

	
	<footer class="footer text-center pt-2 pb-5">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i>
				<?php
					echo "by ";
					foreach ($members as $member) {
						echo $member['name'] . ", ";
					}
				?>
			</small>
	</footer>

	

</body>
</html> 

