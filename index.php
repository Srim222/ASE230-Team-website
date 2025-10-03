<?php
$team = [
	[
		'name' => 'Alice Smith',
		'role' => 'Project Manager',
		'skills' => ['Leadership', 'Agile', 'Communication'],
		'summary' => 'Experienced project manager with a passion for team success.',
		'image' => 'assets/images/Profile1.jpeg',
		// assigned dob so age will be between 19-21
		'dob' => '2004-09-15'
	],
	[
		'name' => 'Bob Johnson',
		'role' => 'Lead Developer',
		'skills' => ['PHP', 'JavaScript', 'SQL'],
		'summary' => 'Full-stack developer specializing in web applications.',
		'image' => 'assets/images/Profile2.jpeg',
		'dob' => '2005-03-22'
	],
	[
		'name' => 'Charlie Lee',
		'role' => 'UI/UX Designer',
		'skills' => ['Figma', 'Adobe XD', 'CSS'],
		'summary' => 'Creative designer focused on user experience and interfaces.',
		'image' => 'assets/images/Profile3.jpeg',
		'dob' => '2006-05-30'
	]
];
// include helpers
require_once __DIR__ . '/inc/helpers.php';
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
			<?php for($i = 0; $i < count($team); $i++): ?>
				<?php render_member_card($team[$i], $i); ?>
			<?php endfor; ?>
		</div>
	</article>

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Sri Maligireddy</small>
    </footer>

    

</body>
</html> 

