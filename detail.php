<?php
$team = [
	[
		'name' => 'Alice Smith',
		'role' => 'Project Manager',
		'skills' => ['Leadership', 'Agile', 'Communication'],
		'summary' => 'Experienced project manager with a passion for team success.',
		'image' => 'assets/images/Profile1.jpeg',
		// assigned dob so age will be between 19-21
		'dob' => '2004-09-15',
		'email' => 'alice.smith@email.com',
		'phone' => '555-123-4567',
		'linkedin' => 'linkedin.com/in/alicesmith',
		'github' => 'github.com/alicesmith',
		'website' => 'alicesmith.com',
		'work_experience' => [
			[
				'title' => 'Project Manager',
				'company' => 'Acme Corp',
				'years' => '2022 - Present',
				'description' => 'Managed a team of 10 to deliver projects on time and within budget.'
			],
			[
				'title' => 'Team Lead',
				'company' => 'Beta Inc',
				'years' => '2020 - 2022',
				'description' => 'Led cross-functional teams and improved workflow efficiency.'
			]
		]
	],
	[
		'name' => 'Bob Johnson',
		'role' => 'Lead Developer',
		'skills' => ['PHP', 'JavaScript', 'SQL'],
		'summary' => 'Full-stack developer specializing in web applications.',
		'image' => 'assets/images/Profile2.jpeg',
		'dob' => '2005-03-22',
		'email' => 'bob.johnson@email.com',
		'phone' => '555-234-5678',
		'linkedin' => 'linkedin.com/in/bobjohnson',
		'github' => 'github.com/bobjohnson',
		'website' => 'bobjohnson.dev',
		'work_experience' => [
			[
				'title' => 'Lead Developer',
				'company' => 'Startup Hub',
				'years' => '2023 - Present',
				'description' => 'Architected and built scalable web applications.'
			],
			[
				'title' => 'Senior Software Developer',
				'company' => 'Google',
				'years' => '2019 - 2023',
				'description' => 'Worked on high-traffic systems and mentored junior developers.'
			],
			[
				'title' => 'Web Developer',
				'company' => 'Amazon',
				'years' => '2017 - 2019',
				'description' => 'Developed e-commerce features and optimized performance.'
			]
		]
	],
	[
		'name' => 'Charlie Lee',
		'role' => 'UI/UX Designer',
		'skills' => ['Figma', 'Adobe XD', 'CSS'],
		'summary' => 'Creative designer focused on user experience and interfaces.',
		'image' => 'assets/images/Profile3.jpeg',
		'dob' => '2006-05-30',
		'email' => 'charlie.lee@email.com',
		'phone' => '555-345-6789',
		'linkedin' => 'linkedin.com/in/charlielee',
		'github' => 'github.com/charlielee',
		'website' => 'charlielee.design',
		'work_experience' => [
			[
				'title' => 'UI/UX Designer',
				'company' => 'Design Studio',
				'years' => '2021 - Present',
				'description' => 'Designed interfaces for mobile and web applications.'
			]
		]
	]
];
$index = isset($_GET['index']) ? (int)$_GET['index'] : 0;
if (!isset($team[$index])) $index = 0;
$member = $team[$index];
// include helpers
require_once __DIR__ . '/inc/helpers.php';
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Your name's Resume</title>
    
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
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
	    	<header class="resume-header pt-4 pt-md-0">
	    		<div class="row">
	    			<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
	    			    <img class="picture" src="<?= htmlspecialchars($member['image']) ?>" alt="">
	    			</div><!--//col-->
	    			<div class="col">
	    			    <div class="row p-4 justify-content-center justify-content-md-between">
	    				    <div class="primary-info col-auto">
	    				    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= htmlspecialchars($member['name']) ?></h1>
	    				    <div class="title mb-3"><?= htmlspecialchars($member['role']) ?></div>
	    				    <ul class="list-unstyled">
								<li class="mb-2"><a class="text-link" href="mailto:<?= htmlspecialchars($member['email']) ?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= htmlspecialchars($member['email']) ?></a></li>
								<li><a class="text-link" href="tel:<?= htmlspecialchars($member['phone']) ?>"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= htmlspecialchars($member['phone']) ?></a></li>
								<?php if (!empty($member['dob'])): ?>
									<li class="mt-2"> <strong>Age:</strong> <?= htmlspecialchars(calculate_age($member['dob'])) ?> yrs</li>
								<?php endif; ?>
	    				    </ul>
	    				    </div><!--//primary-info-->
	    				    <div class="secondary-info col-auto mt-2">
	    				    <ul class="resume-social list-unstyled">
	                	    <li class="mb-3"><a class="text-link" href="https://<?= htmlspecialchars($member['linkedin']) ?>" target="_blank"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= htmlspecialchars($member['linkedin']) ?></a></li>
	                	    <li class="mb-3"><a class="text-link" href="https://<?= htmlspecialchars($member['github']) ?>" target="_blank"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= htmlspecialchars($member['github']) ?></a></li>
	                	    <li><a class="text-link" href="https://<?= htmlspecialchars($member['website']) ?>" target="_blank"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?= htmlspecialchars($member['website']) ?></a></li>
	    				    </ul>
	    				    </div><!--//secondary-info-->
	    			    </div><!--//row-->
	    			    
	    			</div><!--//col-->
	    		</div><!--//row-->
	    	</header>
		    <div class="resume-body p-5">
				<section class="resume-section summary-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
					<div class="resume-section-content">
						<p class="mb-0"><?= htmlspecialchars($member['summary']) ?></p>
					</div>
				</section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
						<section class="resume-section experience-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
							<div class="resume-section-content">
								<div class="resume-timeline position-relative">
									<?php foreach($member['work_experience'] as $job): ?>
										<?php render_work_experience($job); ?>
									<?php endforeach; ?>
								</div><!--//resume-timeline-->
							</div>
						</section><!--//projects-section-->
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
						<section class="resume-section skills-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
							<div class="resume-section-content">
								<div class="resume-skill-item">
									<ul class="list-unstyled mb-4">
										<?php foreach($member['skills'] as $skill): ?>
											<li class="mb-2">
												<div class="resume-skill-name"><?= htmlspecialchars($skill) ?></div>
											</li>
										<?php endforeach; ?>
									</ul>
								</div><!--//resume-skill-item-->
							</div><!--resume-section-content-->
						</section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold">MSc in Computer Science</div>
								        <div class="resume-degree-org">University College London</div>
								        <div class="resume-degree-time">2013 - 2014</div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold">BSc Maths and Physics</div>
								        <div class="resume-degree-org">Imperial College London</div>
								        <div class="resume-degree-time">2010 - 2013</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Lorem</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Ipsum</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque.</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
								    <li><span class="resume-lang-name font-weight-bold">Spanish</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1">Climbing</li>
								    <li class="mb-1">Snowboarding</li>
								    <li class="mb-1">Cooking</li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image1.jpg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 1</h5>
									<p class="card-text">Brief description of Project 1.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image2.jpg" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 2</h5>
									<p class="card-text">Brief description of Project 2.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image3.jpg" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 3</h5>
									<p class="card-text">Brief description of Project 3.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>

    

</body>
</html> 

