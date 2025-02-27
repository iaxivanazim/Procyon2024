<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Procyon</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/icon" href="pics/1702.jpeg" />
	<!-- Font Awesome -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Slick slider -->
	<link href="assets/css/slick.css" rel="stylesheet">
	<!-- Theme color -->
	<link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

	<!-- sponsorslider -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="custom.js"></script>
	<!-- Main Style -->
	<link href="style.css" rel="stylesheet">
	<!-- Fonts -->
	<script src="./app.js"></script>
	<!--<script src="https://scriptsapi.netlify.app/Scripts/procyon/app.js"></script> -->
	<!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<!-- Montserrat for title -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<style type="text/css">
		.modal-content {
			background-color: #EE3268;
			color: white;
		}
	</style>
	<script>
		$(function() {
			$("#dialog").dialog({
				autoOpen: false,
				show: {
					effect: "blind",
					duration: 1000
				},
				hide: {
					effect: "explode",
					duration: 1000
				}
			});

			$("#opener").on("click", function() {
				$("#dialog").dialog("open");
			});
		});
	</script>
</head>

<body>

	<!-- Start Header -->
	<header id="mu-hero" class="" role="banner">
		<!-- Start menu  -->
		<nav class="navbar navbar-fixed-top navbar-default mu-navbar">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Logo -->
					<a class="navbar-brand" href="index.html">PROCYON 2K24</a>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav mu-menu navbar-right">
						<li><a href="#mu-hero">Home</a></li>
						<li><a href="#mu-about">About</a></li>
						<li><a href="#mu-schedule">Schedule</a></li>
						<li><a href="#mu-speakers">Glimpses</a></li>
						<li><a href="#mu-register">Register</a></li>
						<li><a href="#mu-sponsors">Sponsors</a></li>
						<li><a href="#mu-contact">Contact</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<!-- End menu -->

		<div class="mu-hero-overlay">
			<div class="container">
				<div class="mu-hero-area">

					<!-- Start hero featured area -->
					<div class="mu-hero-featured-area">
						<!-- Start center Logo -->
						<div class="mu-logo-area">
							<!-- text based logo -->
							<a class="mu-logo" href="#">PROCYON 2K24</a>
						</div>
						<!-- End center Logo -->

						<div class="mu-hero-featured-content">

							<h1>Welcome!</h1>
							<h2>The Biggest Cultural Event in DBCE</h2>
							<p class="mu-event-date-line">4th & 5th March, 2024</p>

							<div class="mu-event-counter-area">
								<div id="mu-event-counter">

								</div>
							</div>

						</div>
					</div>
					<!-- End hero featured area -->

				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start main content -->
	<main role="main">
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<img class="" src="pics/poster.png" alt="Image" style="height: auto; object-fit: cover; width:auto;">
									</div>
								</div>
								<div class="col-md-6 ">

									<div class="mu-about-right">
										<h2 style="font-size: 50px; text-align: center;">About The Event</h2>
										<div>
											<p style="text-align: center;">Procyon is an inter-department cultural fiesta, wherein students of 17 different classes showcase their talents in various cultural activities on a common platform. This year several activities like:</p>

											<ul style="list-style-type: none; text-align: center; padding-left: 0;">
												<li style="list-style-type: none;">Ghumat Aarti</li>
												<li style="list-style-type: none;">The Voice</li>
												<li style="list-style-type: none;">Skit</li>
												<li style="list-style-type: none;">Battle of Bands</li>
												<li style="list-style-type: none;">Hoist the Banner</li>
												<li style="list-style-type: none;">Food Wizard</li>
												<li style="list-style-type: none;">Art of Colors</li>
												<li style="list-style-type: none;">Slow Mo</li>
												<li style="list-style-type: none;">Mad-Lipz</li>
												<li style="list-style-type: none;">Reel Life</li>
												<li style="list-style-type: none;">Step Up Revolution</li>
												<li style="list-style-type: none;">Mr. and Ms. Procyon</li>
												<li style="list-style-type: none;">Rock the Ramp</li>
												<li style="list-style-type: none;">Street Play</li>
												<li style="list-style-type: none;">Treasure Hunt</li>
												<li style="list-style-type: none;">Face Painting</li>
												<li style="list-style-type: none;">Junkyard Beats</li>
												<li style="list-style-type: none;">Framed will be held in the college campus.</li>
											</ul>

											<p style="text-align: center;">This event is organised by the students for the students.</p>
										</div>
									</div>

								</div>
							</div>
							<!-- End Feature Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

		<!-- Start Video -->
		<section id="mu-video">
			<div class="mu-video-overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mu-video-area">
								<h2>Follow Us on Instagram!!</h2>
								<br><a href="https://www.instagram.com/dbceprocyon2k22/">
									<img border="0" alt="Instagram" src="pics/instagram.png" width="200" height="200">
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Start Video content -->
			<div class="mu-video-content">
				<div class="mu-video-iframe-area">
					<a class="mu-video-close-btn" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
					<iframe width="854" height="480" src="https://www.youtube.com/embed/Sntk8dqgF_k" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<!-- End Video content -->

		</section>
		<!-- End Video -->

		<!-- Start Schedule  -->
		<section id="mu-schedule">
			<div class="container">
				<div class="row">
					<div class="colo-md-12">
						<div class="mu-schedule-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Schedule Detail</h2>
								<p>Here are the wide range of events that would start off from the 4th of March till 5th
									of March</p>
							</div>

							<div class="mu-schedule-content-area">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs mu-schedule-menu" role="tablist">
									<li role="presentation" class="active"><a href="#first-day" aria-controls="first-day" role="tab" data-toggle="tab">Day 1 / 4th March</a>
									</li>
									<li role="presentation"><a href="#second-day" aria-controls="second-day" role="tab" data-toggle="tab">Day 2 / 5th March</a></li>
									<!--li role="presentation"><a href="#third-day" aria-controls="third-day" role="tab" data-toggle="tab">3 Day / 21 Feb</a></li-->

								</ul>

								<!-- Tab panes -->
								<div class="tab-content mu-schedule-content">

									<div role="tabpanel" class="tab-pane fade mu-event-timeline in active" id="first-day">
										<ul>

											<!--DAY 1 ON STAGE-->

											<li>
												<div class="btn mu-single-event">
													<p class="mu-event-time">9:15 - 10:30 AM</p>
													<h3>FORMAL INAUGRAL</h3>
												</div>
											</li>
											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal1">
													<img src="pics/ghumat.jpg" alt="event speaker">
													<p class="mu-event-time">10:30 - 11:30 AM</p>
													<p class="mu-event-time">MAIN STAGE</p>
													<h3>GHUMAT AARTI</h3>
													<span>GOLD</span>
												</div>
											</li>
											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal2">
													<img src="pics/TheVoice.png" alt="event speaker">
													<p class="mu-event-time">11:30 AM - 1:30 PM</p>
													<p class="mu-event-time">MAIN STAGE</p>
													<h3>THE VOICE</h3>
													<span>SILVER</span>

												</div>
											</li>
											<li>
												<div class=" btn mu-single-event" data-toggle="modal" data-target="#modal3">
													<img src="pics/Skit.jpg" alt="event speaker">
													<p class="mu-event-time">2:00 - 3:00 PM </p>
													<p class="mu-event-time">MAIN STAGE</p>
													<h3>SKIT</h3>
													<span>GOLD</span>

												</div>
											</li>


											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal5">
													<img src="pics/battleofband.jpg" alt="event speaker">
													<p class="mu-event-time">3:30 - 5:30 PM </p>
													<p class="mu-event-time">MAIN STAGE</p>
													<h3>BATTLE OF BANDS</h3>
													<span>GOLD</span>
												</div>
											</li>

											<!--DAY 1 OFF STAGE-->

											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal7">
													<img src="pics/masterchef1.png" alt="event speaker">
													<p class="mu-event-time">10:30 AM - 1:30 PM </p>
													<p class="mu-event-time">V2</p>

													<h3>FOOD WIZARD</h3>
													<span>BRONZE</span>
												</div>
											</li>
											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal6">
													<img src="pics/brush%20strokes.jpeg" alt="event speaker">
													<p class="mu-event-time">10:30 AM - 1:30 PM </p>
													<p class="mu-event-time">V1</p>
													<h3>HOIST THE BANNER</h3>
													<span>BRONZE</span>
												</div>
											</li>
											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal8">
													<img src="pics/rangoli.jpg" alt="event speaker">
													<p class="mu-event-time">10:30 AM - 1:30 PM </p>
													<p class="mu-event-time">Near the Chapel</p>
													<h3>THE ART OF COLORS</h3>
													<span>BRONZE</span>
												</div>
											</li>
											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal9">
													<img src="pics/madlip.jpg" alt="event speaker">
													<p class="mu-event-time">2:00 PM - 2:30 PM </p>
													<p class="mu-event-time">Submission</p>
													<h3>MAD-LIPZ</h3>
													<span>BRONZE</span>
												</div>
											</li>

											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal10">
													<img src="pics/movie making.png" alt="event speaker">
													<p class="mu-event-time">2:30 PM - 3:00 PM </p>
													<p class="mu-event-time">Submission</p>

													<h3>REEL LIFE</h3>
													<span>SILVER</span>
												</div>
											</li>
											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal11">
													<img src="pics/slow mo.jpg" alt="event speaker">
													<p class="mu-event-time">3:00 - 3:30 PM </p>
													<p class="mu-event-time">Outside Civil</p>
													<h3>SLOW-MO</h3>
													<span>FUN</span>
												</div>
											</li>
										</ul>

									</div>

									<!--DAY 2 ON STAGE-->

									<div role="tabpanel" class="tab-pane fade mu-event-timeline" id="second-day">
										<ul>
											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal18">
													<img src="pics/junkyard.jpg" alt="event speaker">
													<p class="mu-event-time">9:30 - 10:30 PM</p>
													<p class="mu-event-time">MAIN STAGE</p>
													<h3>Junkyard Beats</h3>
													<span>GOLD</span>
												</div>
											</li>


											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal14">
													<img src="pics/group dance.jpg" alt="event speaker">
													<p class="mu-event-time">11:00 AM - 12:30 PM </p>
													<p class="mu-event-time">MAIN STAGE</p>
													<h3>STEP UP REVOLUTION</h3>
													<span>GOLD</span>
												</div>
											</li>
											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal15">
													<img src="pics/couple.jpeg" alt="event speaker">
													<p class="mu-event-time">2:30 - 4:00 PM </p>
													<p class="mu-event-time">MAIN STAGE</p>
													<h3>MR. AND MS. PROCYON</h3>
													<span>SILVER</span>
												</div>
											</li>


											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal16">
													<img src="pics/FashionShow.jpg" alt="event speaker">
													<p class="mu-event-time">4:00 - 5:30 PM </p>
													<p class="mu-event-time">MAIN STAGE</p>
													<h3>ROCK THE RAMP</h3>
													<span>GOLD</span>
												</div>
											</li>


											<!--DAY 2 OFF STAGE-->

											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal17">
													<img src="pics/street play.jpg" alt="event speaker">
													<p class="mu-event-time">1:30 - 2:30 PM </p>
													<p class="mu-event-time">Near Chapel</p>

													<h3>STREET PLAY</h3>
													<span>SILVER</span>
												</div>
											</li>
											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal30">
													<img src="pics/treasure.jpg" alt="event speaker">
													<p class="mu-event-time">9:30 - 11:00 PM </p>
													<h3>TREASURE HUNT</h3>
													<span>BRONZE</span>
												</div>
											</li>
											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal19">
													<img src="pics/face.jpg" alt="event speaker">
													<p class="mu-event-time">11:00 - 1:00 PM </p>
													<p class="mu-event-time">Near Chapel</p>
													<h3>FACE PAINTING</h3>
													<span>BRONZE</span>
												</div>
											</li>
											<!-- <li>
												<div class="btn mu-single-event" data-toggle="modal"
													data-target="#modal18">
													<img src="pics/artificial.jpg" alt="event speaker">
													<p class="mu-event-time">11:00 - 1:00 PM</p>
													<p class="mu-event-time">V1</p>
													<h3>GARAGE BAND</h3>
													<span>BRONZE</span>
												</div>
											</li> -->

											<li>
												<div class="btn mu-single-event" data-toggle="modal" data-target="#modal20">
													<img src="pics/photography.jpg" alt="event speaker">
													<p class="mu-event-time">1:00 PM - 1:30 PM </p>
													<p class="mu-event-time">Submission</p>

													<h3>FRAMED</h3>
													<span>BRONZE</span>
												</div>
											</li>


										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>
		</section>

		<div class="rules-area">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs mu-schedule-menu" role="tablist">
			</ul>

		</div>
		</div>

		<!-- End Schedule -->


		<!-- Start General rules -->

		<div class="container">
			<div class="mu-rules-content">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-md-4"></div>
						<center>
							<div class="col-md-4"><!-- Button trigger modal -->
								<button type="button" class="btn btn-lg btn-block modal-content" data-toggle="modal" data-target="#modal24">
									General Rules
								</button>
						</center>

						<!-- Modal -->
						<div class="modal fade" id="modal24" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">General Rules</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<h3 class="rules-points"><b>POINTS SYSTEM</b></h3>
										<table class="table table-bordered table-centered table-responsive mx-auto" border="2">
											<tr>
												<td><b>POSITION</b></td>
												<td><b>GOLD</b></td>
												<td><b>SILVER</b></td>

											</tr>
											<tr>
												<td>1st</td>
												<td>200</td>
												<td>150</td>

											</tr>
											<tr>
												<td>2nd</td>
												<td>150</td>
												<td>100</td>

											</tr>
											<tr>
												<td>3rd</td>
												<td>100</td>
												<td>50</td>

											</tr>

										</table>
										<br>
										<table class="table table-bordered table-centered table-responsive mx-auto" border="2">
											<tr>
												<td><b>POSITION</b></td>
												<td><b>BRONZE</b></td>
												<td><b>FUN</b></td>
											</tr>
											<tr>
												<td>1st</td>

												<td>100</td>
												<td>50</td>
											</tr>
											<tr>
												<td>2nd</td>

												<td>50</td>
												<td>25</td>
											</tr>
											<tr>
												<td>3rd</td>

												<td>25</td>
												<td>10</td>
											</tr>

										</table>

										<br>
										<table class="table table-bordered table-centered table-responsive mx-auto" border="2">
											<tr>
												<td><b>POSITION</b></td>
												<td><b>PLATINUM</b></td>
											</tr>
											<tr>
												<td>-</td>

												<td>50</td>

											</tr>

										</table>
										<br>
										<h5>Note:</h5>
										<ol class="generalrules-content">
											<li><b>PARTICIPATION POINTS:</b>Teams participating in all events will get
												100 bonus points. All points earned by classes will go to their respective departments and the total tally will declare the overall winner.</li>
											<li><b>JOKER CARD:</b>There will be 2 joker cards i.e. one for class event
												and one for department event. Each class can put a joker on any class
												event. If that class wins that event then they will get double the
												points or else they will have to forfeit 100 points. Similarly each
												department can put a joker on any department event. If that department
												wins that event then they will get double the points or else they will
												have to forfeit 100 points. The joker works only if the team has secured
												either 1st ,2nd or 3rd place in that particular event. This is
												applicable for all class and department events as well.
												Eg. In case of department events if a department had put a joker on a
												gold event and if that department has won 1st place in that event then
												all the 4 classes of that department (FE,SE,TE,BE) will receive 400
												points each.
												The joker should be submitted in the online form by <b>15th May 2pm and
													is compulsory</b>.
											</li>
											<li>
												<b>FACULTY POINTS:</b> If any faculty participates in any department
												event then that department will automatically get 25 bonus points for
												that respective event. (Maximum 2 faculty can participate in any
												department event ) These points can be applied for all the specified
												department events.
												Eg. If a faculty participates for in ghumat aarti and another
												participates for street play in the same department then that department
												will receive 50 points (25 for ghumat aarti & 25 for street play). Even
												if a single faculty participates then that department is eligible for 25
												points. There is a faculty fashion show: Participation of minimum 3 will
												fetch the department 50 points. Any faculty from science and humanities can participate and represent any other departments.
											</li>


										</ol>
										<br>
										<br>
										<h6 class="rules-points"><b>GENERAL INSTRUCTIONS</b></h6>
										<ol class="generalrules-content">
											<li>
												Participants must <b><u>report at least 15mins</u></b> before the start
												of their respective event. Failure to do so might disqualify that team
												from that event.
											</li>
											<li>
												Decision of judges is final. Any participant arguing with the judges
												will lead to his/her <b><u>disqualification</u></b>.
											</li>
											<li>
												Vulgarity of any kind should not be portrayed in any manner, direct or
												indirect and engaging in vulgar activities will lead to
												<b><u>disqualification</u></b> of the entire team.
											</li>
											<li>
												Vulgar words are <b><u>prohibited</u></b> in the college campus.
											</li>
											<li>
												Suicidal topics are strictly banned from portraying in any of the events
												whether on stage or off stage.
											</li>
											<li>
												Participants have to strictly adhere to the timings mentioned in each of
												the events.
											</li>
											<li>
												Submission dates and timings for the photos and videos should be
												strictly taken into consideration. No photos or videos will be
												entertained after the appointed time has passed.
											</li>
											<li>
												Participants have to get their <b><u>own equipment</u></b> for all the
												events mentioned.
											</li>
											<li>
												There will be 4 departments competing against each other: Civil
												department, Mechanical department, ETC department, Computer department.
											</li>
											<li>
												First years are clubbed into their respective
												department(Civil,Mech,ETC,Comp).
											</li>
											<!-- <li>
												Faculties can participate in all department events except for Solo
												dance.
											</li> -->
											<li>
												Faculties of Humanities Department can join any other department in the
												department events based on his/her consent.
											</li>
											<li>
												Faculty members cannot participate in class events
											</li>
											<li>
												<b>Allocation of joker cards is compulsory only for
													department events.</b>
											</li>
											<li>
												Registration process is strictly online on the official PROCYON website
												(<a href="https://procyon.dbcegoa.ac.in">
													<b>www.procyon.dbcegoa.ac.in</b></a>).
											</li>
											<li>
												Details of all events including the registration form and links to the
												videos will be hosted on the website.
											</li>
											<li>
												Each department should allocate a <b><u>department coordinator</u></b>
												(any of the 4 CR’s) to submit the registration form for the department
												events.
											</li>
											<li>
												Forms submitted can be <b><u>edited till 1st March 2pm</u></b>. After
												that editing of the forms will not be allowed.
											</li>
											<li>
												Each CR will be given a <b><u>unique ID and password</u></b> which will
												enable him/her to access the registration form and to prevent misuse of
												the form.
											</li>
											<li>Forms should be submitted before 1st March 2pm. After that the online
												portal will not accept any forms and the teams will therefore not be
												able to participate in any event which they haven’t registered for.</li>
											<li>
												The submission of the audio and video files should be done to the
												respective event coordinators only.
											</li>
											<li>
												Judgement criteria given for the events mentioned in the brochure are
												tentative and are subject to change based on the decision of the judges.
											</li>
											<li>
												For fashion show event, each of the departments should compulsorily
												allocate one faculty member to ensure that the costumes are upto the
												mark.
											</li>
											<li>
												<b><u>Negative marking</u></b> will take place if the team exceeds its
												appointed time.
											</li>
											<li>
												All event timings include stage setup time and performance time. No
												extra time will be allocated for stage setup.
											</li>
											<li>
												Venues <b>V1 & V2</b> will be inside the pandal area.
											</li>
										</ol>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>
		</div>
		<!-- End rules -->
		<!-- Start Speakers -->
		<section id="mu-speakers">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-speakers-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Glimpses of events held last year</h2>
								<p></p>
							</div>

							<!-- Start Speakers Content -->
							<div class="mu-speakers-content">

								<div class="mu-speakers-slider">

									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="pics/g6.JPG" alt="speaker img">
									</div>
									<!-- End single speaker -->

									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="pics/g5.JPG" alt="speaker img">
									</div>
									<!-- End single speaker -->


									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="pics/g4.JPG" alt="speaker img">

									</div>
									<!-- End single speaker -->


									<!-- Start single speaker -->
									<div class="mu-single-speakers">

										<img src="pics/g3.JPG" alt="speaker img">
									</div>
									<!-- End single speaker -->

									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="pics/g2.JPG" alt="speaker img">
									</div>
									<!-- End single speaker -->

									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="pics/g1.JPG" alt="speaker img">
									</div>
									<!-- End single speaker -->



									<!-- End single speaker -->
								</div>
							</div>
							<!-- End Speakers Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Speakers -->

		<!-- Start Venue -->
		<section id="mu-venue">
			<div class="mu-venue-area">
				<div class="row">

					<div class="col-md-6">
						<div class="mu-venue-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15394.22519423461!2d73.9690846!3d15.291974!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfb1631736de9d%3A0x980720b4516a7a5!2sDon%20Bosco%20College%20Of%20Engineering!5e0!3m2!1sen!2sin!4v1683527701515!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15394.22519423461!2d73.9690846!3d15.291974!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfb1631736de9d%3A0x980720b4516a7a5!2sDon%20Bosco%20College%20Of%20Engineering!5e0!3m2!1sen!2sin!4v1683527701515!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
						</div>
					</div>

					<div class="col-md-6">
						<div class="mu-venue-address">
							<h2>VENUE <i class="fa fa-chevron-right" aria-hidden="true"></i></h2>
							<h3>Don Bosco College Of Engineering</h3>
							<h4>Murida Rd, Fatorda, Margao, Goa</h4>
							<p>Pin Code: 403602<br>Phone: 0832 2743944</p>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Venue -->

		<!-- Start Register  -->
		<section id="mu-register">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-register-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Register Your Team</h2>
								<p>For participation in any events, Please inform your Class Representative(CR)</p>
								<p>Note:Only CRs can register</p>
							</div>

							<div class="mu-register-content">
								<div class="mu-register-form" method="POST">

									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="User Name" id="name" name="username" required="">
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<input type="password" class="form-control" placeholder="Password" id="pass" name="password" required="">
											</div>
										</div>
										<div class="col-md-4">
											<select class="form-control" name="event-category" id="SelectionFromReg">
												<option value="" selected="selected">Choose Event Category</option>
												<option value="class-event">Class</option>
												<option value="department-event">Department</option>
											</select>
										</div>
									</div>



									<button type="submit" name="login" class="mu-reg-submit-btn" onclick="login()">LOG IN</button>
								</div>


							</div>
						</div>

					</div>
				</div>
			</div>
			</div>
		</section>
		<!-- End Register -->

		<!-- Start Sponsors -->
		<section id="mu-sponsors">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-sponsors-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Our Sponsors</h2>
								<p style="margin-right:10px;">We are grateful to all our sponsors which will help us
									make our event a grand success</p>
							</div>

							<!-- Start spnonsors brand logo -->
							<!-- <div class="mu-sponsors-content">
								<div class="row">
									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="sponsors/brand1.png" alt="">
										</div>
									</div>
									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="sponsors/brand2.png" alt="">
										</div>
									</div>
								</div>
						
							</div>	 -->
							<div class="container h-100">
								<div class="row align-items-center h-100">
									<div class="container rounded">
										<br>
										<div class="slider">
											<div class="logos">

												<!-- 											<img class="fab" src="pics/brand1.png" alt="">
											<img class="fab" src="pics/brand2.png" alt="">
											<img class="fab" src="pics/brand3.png" alt="">
											<img class="fab" src="pics/brand9.png" alt="">
											<img class="fab" src="pics/brand4.png" alt="">
											<img class="fab" src="pics/brand13.png" alt="">
											<img class="fab" src="pics/brand5.png" alt="">
											<img class="fab" src="pics/brand6.png" alt="">
											<img class="fab" src="pics/brand7.png" alt="">
											<img class="fab" src="pics/brand8.png" alt="">
											<img class="fab" src="pics/brand10.png" alt="">
											<img class="fab" src="pics/brand11.png" alt="">
											<img class="fab" src="pics/brand12.png" alt="">
											<img class="fab" src="pics/brand15.png" alt="">
											<img class="fab" src="pics/brand16.png" alt="">
											<img class="fab" src="pics/brand17.png" alt="">
											<img class="fab" src="pics/brand14.png" alt=""> -->

											</div>


										</div>
									</div>
								</div>

							</div>


							<!-- End spnonsors brand logo -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Sponsors -->
		<!-- Start Event Order-->

		<section id="mu-order">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-ordered-area">
							<div class="mu-title-area">
								<h3 class="mu-title"><a href="https://docs.google.com/spreadsheets/d/1QFCr2FWSfXsvs8rjmmcILwPDkGbPX9NRetPORtCZccc/edit?usp=drivesdk">Event Order</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- End Event Order -->

		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-title-area">
								<h2 class="mu-heading-title">Contact Us</h2>
								<p>For clarification of any doubts regarding any event contact</p>
							</div>

							<!-- Start Contact Content -->
							<div class="mu-contact-content">
								<div class="row">
									<center>
										<div class="mu-title-area">
											<h2 class="mu-heading-title"> Student's Council</h2>
											<img style="margin-bottom: 30px;" src="pics/stud_council1.JPG" />
										</div>
										<br>
										<div class="col-md-6">
											<div class="mu-contact-form-area">
												<div class="card">
													<div class="card-body">
														<h5 class="card-title">Mr. Varun Castello
														</h5>
														<h6 class="card-subtitle mb-2 text-muted">General Secretary</h6>
														<p class="card-text"><b>+91 9146992833</b></p>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="mu-contact-form-area">
												<div class="card">
													<div class="card-body">
														<h5 class="card-title">Mr. Abhishek Dias
														</h5>
														<h6 class="card-subtitle mb-2 text-muted">Cultural Secretary
														</h6>
														<p class="card-text"><b>+91 7743938887</b></p>
													</div>
												</div>
											</div>

										</div>
									</center>
								</div>

								<br>
								<br>
								<center>
									<div class="row">

										<div class="mu-title-area">
											<h2 class="mu-heading-title"> Faculty In-Charge</h2>
										</div>
										<br>
										<div class="col-md-3">
											<div class="mu-contact-form-area">
												<div class="card">
													<div class="card-body">
														<h5 class="card-title">Prof.<br> Amey K Shet Tilve</h5>
														<h6 class="card-subtitle mb-2 text-muted">Cultural Incharge DBCE
														</h6>
														<p class="card-text"><b>+91 9923412243</b></p>
													</div>
												</div>
											</div>

										</div>

										<div class="col-md-3">
											<div class="mu-contact-form-area">
												<div class="card">
													<div class="card-body">
														<h5 class="card-title">Prof.<br> Tanay Rege</h5>

														<p class="card-text"><b>Mechanical Department</b></p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="mu-contact-form-area">
												<div class="card">
													<div class="card-body">
														<h5 class="card-title">Prof.<br> Jonessa Ferrao</h5>

														<p class="card-text"><b>Civil Department</b></p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="mu-contact-form-area">
												<div class="card">
													<div class="card-body">
														<h5 class="card-title">Prof.<br> Yeshudas Muttu</h5>

														<p class="card-text"><b>ETC Department</b></p>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="mu-contact-form-area">
												<div class="card">
													<div class="card-body">
														<h5 class="card-title">Prof.<br> Carol Cardozo</h5>

														<p class="card-text"><b>Science and Humanities Department</b>
														</p>
													</div>
												</div>
											</div>

										</div>
									</div>

							</div>
							</center> <!-- End Contact Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

	</main>

	<!-- End main content -->


	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
		<div class="container">
			<div class="mu-footer-area">
				<div class="mu-footer-top">
					<div class="mu-social-media">
						<!-- <a href="https://www.facebook.com/Procyon-2K19-2138286729527922/"><i class="fa fa-facebook"></i></a> -->
						<a href="https://www.instagram.com/dbceprocyon2k22/"><i class="fa fa-instagram"></i></a>
						<!--<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>-->
					</div>
				</div>
				<div class="mu-footer-bottom">
					<p class="mu-copy-right">&copy; Copyright <a rel="nofollow" href="http://dbcegoa.ac.in">Student's
							Council Of DBCEGOA </a>. All right reserved.</p><br>
					<!--						<p class="mu-copy-right">Designed By: <a href="https://www.linkedin.com/in/prathamesh-pavnoji-5885163a">Prathamesh P.</a> &nbsp;|&nbsp; <a href="https://www.linkedin.com/in/anuj-acodkar-a7a9a1146">Anuj A.</a>&nbsp;|&nbsp; <a href="https://www.linkedin.com/in/rahul-tiwari-88b90a151">Rahul T.</a> </p>-->
					<p class="mu-copy-right">Made with &hearts; by Computer Dept. Of DBCE</p>
				</div>
			</div>
		</div>

	</footer>
	<!-- End footer -->



	<!-- 1 Rhythm of tradition-->

	<div id="modal1" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Ghumat Aarti</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Ghumat Aarti</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td> 17th May 2023 </td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>10:30am - 11:30am</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Department</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Gold</td>
										</tr>
										<tr>
											<td>Venue</td>
											<td>:</td>
											<td>Main Stage</td>
										</tr>
										<tr>
											<td>Participants</td>
											<td>:</td>
											<td>8-16 per Department</td>
										</tr>
										<tr>
											<td>Duration</td>
											<td>:</td>
											<td>10-15 Mins (performance + setup)</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Sound of Vocals above Instruments, Coordination, Dressup, Stage
												Presence, Energy</td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>

									<li>Each group must have min 2 and Max 4 ghumat vadaks.
									</li>
									<li>Maximum two faculty participation earns 25 bonus points. </li>
									<li>Each group must perform: <br>
										● 1 paramparik or own composed aarti<br>
										● 1 gajar
									</li>

								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>
											</td>
											<td><strong>Mobile No.</strong></td>
										</tr>
										<tr>
											<td>Deevyam (SE MECH)</td>
											<td>&nbsp;7030979033</td>
										</tr>
										<tr>
											<td>Kshitij (SE MECH)</td>
											<td>&nbsp;8459145895</td>
										</tr>

										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Shruti Desai&nbsp; </td><br>

										</tr>

										<tr>
											<td>Prof. Sanjeel Naik &nbsp; </td>

										</tr>
									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<!--button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button-->
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--End of Rhythm of tradition-->



	<!-- 2 The Voices-->

	<div id="modal2" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">The Voice</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Duet Singing</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td>17th May 2023 </td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>11:30am - 1:30pm</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Class</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Silver</td>
										</tr>
										<tr>
											<td>Venue</td>
											<td>:</td>
											<td>Main Stage</td>
										</tr>
										<tr>
											<td>Participants</td>
											<td>:</td>
											<td>2 per class</td>
										</tr>
										<tr>
											<td>Duration</td>
											<td>:</td>
											<td>5 Mins</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Voice modulation, beauty &amp; quality of tone, performance, stage
												presence, coordination with music</td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions:
													<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>
									<li> Both the participants must compulsorily sing. In case one of the participant
										does not sing then it will lead to disqualification of the team.</li>
									<li> Participants can choose any song of their liking in any language. </li>
									<li> Self composition is allowed. </li>
									<li> A maximum of 2 musicians can accompany the participants. </li>
									<li> Participants will not be judged based on the skills of the musicians. </li>
									<li>The musicians accompanying the participants have to carry their own musical
										instruments.</li>
									<li>The singers can also play the instruments, provided they sing as well.</li>
									<li>The singers can also provide karaoke tracks to the coordinators before 16th May
										5pm.
									</li>
									<li> If the karaoke track contains any form of vocals (main or backup) then that
										team will be disqualified.</li>
									<li> Marks will be deducted if the team exceeds its appointed time.
									</li>
									<li> Indecent lyrics are prohibited.
									</li>

								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>

											<td><strong>Mobile No.</strong></td>
										</tr>
										<tr>
											<td><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Terrance Braganca</a> (SE COMP)</td><br>
											<td>8421048011</td><br>

										</tr>
										<tr>
											<td>Abhishek Pawar(BE Mech)</td><br>
											<td>&nbsp;&nbsp;9673538047</td><br>

										</tr>
										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Samantha Cardoso&nbsp; </td>
										</tr>
										<tr>
											<td>Prof. Esta L. Pereira&nbsp; </td>
										</tr>
										</tr>
									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--End of The Voices-->



	<!-- 3 Skit-->

	<div id="modal3" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Skit</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Skit</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td>17th May 2023 </td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>2:00pm - 3:00pm</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Department</td>
										</tr>
										<tr>
											<td>Theme</td>
											<td>:</td>
											<td>Job Interview Gone Wrong</td>
										</tr>


										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Gold</td>
										</tr>
										<tr>
											<td>Venue</td>
											<td>:</td>
											<td>Main Stage</td>
										</tr>
										<tr>
											<td>Participants</td>
											<td>:</td>
											<td>10-15 per department </td>
										</tr>
										<tr>
											<td>Duration</td>
											<td>:</td>
											<td>10-13 Mins(including setup time)</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Story, acting, stage presence, confidence,<br> overall performance,
												costumes, props</td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>
									<li> One skit per department </li>
									<li> Maximum two faculty participation earns 25 bonus points. </li>
									<li> Suicidal topics and vulgarity are strictly banned from portraying in the event
										as it will lead to disqualification of the entire team </li>
									<li> Use of props is allowed, however no extra time will be given for stage setup.
									</li>
									<li> Marks will be deducted if team exceeds its appointed time. </li>
									<li> Faculties cannot be given a major role.</li>
									<li> Entire skit cannot be narrated by narrators.</li>
								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>

											<td><strong>Mobile No.</strong></td>
										</tr>
										<tr>
											<td>Xavy (FE Civil)</td>
											<br>
											<td>8830657915</td>
										</tr>
										<tr>
											<td>Idwal (TE Comp)</td>
											<br>
											<td>&nbsp;7744921799</td>
										</tr>

										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Saurabh Raikar</td>

										</tr>
										<tr>
											<td>Prof. Nadya Baracho</td>
										</tr>
									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--End of Skit-->



	<!-- 4 Riding Solo-->

	<div id="modal4" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Act In Silence</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body border border-danger">


					<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
					<div class="modal-body">
						<!-- h5 class="mt-0">Media heading</h5 -->
						<div class="ticket-description">
							<p>
							</p>
							<table>
								<tbody>
									<tr>
										<td>AKA</td>
										<td>:</td>
										<td>Mime</td>
									</tr>
									<tr>
										<td>Date</td>
										<td>:</td>
										<td> 26 may </td>
									</tr>
									<tr>
										<td>Time</td>
										<td>:</td>
										<td>3:00pm - 4:00pm</td>
									</tr>
									<tr>
										<td>Type</td>
										<td>:</td>
										<td>Department</td>
									</tr>
									<tr>
										<td>Scoring</td>
										<td>:</td>
										<td>Gold</td>
									</tr>
									<tr>
										<td>Venue</td>
										<td>:</td>
										<td>Main Stage</td>
									</tr>
									<tr>
										<td>Participants</td>
										<td>:</td>
										<td>8 - 12</td>
									</tr>
									<tr>
										<td>Duration</td>
										<td>:</td>
										<td>5 - 8 Mins</td>
									</tr>
									<tr>
										<td>Judgement Criteria &nbsp;</td>
										<td>:</td>
										<td>Portrayal, expressions, music, overall effect</td>
									</tr>

									<tr>
										<td>
											<br>
											<strong>Instructions :<strong>
										</td>
									</tr>
								</tbody>
							</table>

							<ol>
								<li> Each team can have 8-12 members.
								</li>
								<li> The teams will get a situation and a preparation time of maximum 5 minutes. </li>
								<li>Time limit is 2-3 minutes for each team. Negative points for exceeding the time.
								</li>
								<li> The act should not contain any dialogues, lip sync, props or music.
								</li>
								<li> No act shall contain any offensive, obscene, disrespectful actions or gestures. The
									act will be immediately stopped and the entry will be disqualified, if these
									instructions are not followed.
								</li>
								<li> Points will be given on the basis of innovation, depiction of the situation, team
									work and expressions.</li>
							</ol>

							<br>
							<table>
								<tbody>
									<tr>
										<td><strong>Student Co-ordinator :</strong></td>
										<!--td></td>
                                    			<td><strong>Mobile</strong></td-->
									</tr>
									<tr>
										<td>Keenan Cardozo (SE MECH)</td>
										<br>
										<td>+91 7972705108</td>
									</tr>

									<tr>
										<td> <br>
											<strong>Faculty Co-ordinator :</strong>
										</td>
									</tr>
									<tr>
										<td>Prof. Janhavi Naik (Dept. of Computers) &nbsp; </td>

									</tr>
								</tbody>
							</table>
							<p></p>
						</div>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--End of Riding solo-->


	<!-- 5 The war of the bands-->

	<div id="modal5" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Battle Of Bands</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Band Performance</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td>17th May 2023</td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>3:30pm - 5:30pm</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Department</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Gold</td>
										</tr>
										<tr>
											<td>Venue</td>
											<td>:</td>
											<td>Main Stage</td>
										</tr>
										<tr>
											<td>Participants</td>
											<td>:</td>
											<td>4-10 per department</td>
										</tr>
										<tr>
											<td>Duration</td>
											<td>:</td>
											<td>15 Mins + 5mins Setup Time</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Rhythm &amp; tempo, complexity, coordination, stage presence,
												creativity, skill, overall performance</td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions:<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>
									<li> For setting up the instruments, an additional maximum of 5mins will be given.
									</li>
									<li> Teams have to get their own instruments and equipments. Any special instruments
										to be used then to be informed prior.</li>
									<li> Standard drum kit will be provided. </li>
									<li> Unauthorized tampering with stage setting and other equipments will lead to
										disqualification. </li>
									<li> Backing tracks and prerecorded music is not allowed. </li>
									<li> Maximum two faculty participation earns 25 bonus points. </li>
									<li> Any technical difficulties faced during performance should be reported to the
										co-ordinator. </li>
									<li>Marks will be deducted if team exceeds its appointed time. </li>
									<li>Participants must wear decent costumes. Costumes must be cross checked with the
										coordinators a day prior.</li>
									<li>Each band must have a Team Leader.</li>

								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>

											<td><strong>Mobile No.</strong></td>
										</tr>
										<tr>
											<td>Varun (BE Mech)</td><br>
											<td>&nbsp;&nbsp;9527674307</td><br>

										</tr>
										<tr>
											<td>Leah (FE COMP)</td><br>
											<td>&nbsp;8830407764</td><br>

										</tr>


										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Chetan Gaonkar &nbsp;</td>

										</tr>
										<tr>
											<td>Dr.
												Shreyas Simu
											</td>
										</tr>
									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--End of The war of the bands-->

	<!-- DAY 1 OFF STAGE -->

	<!-- 6 Brush strokes-->

	<div id="modal6" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Hoist the Banner</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Flag painting</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td> 17th May 2023 </td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>10:30am - 1:30pm</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Class</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Bronze</td>
										</tr>
										<tr>
											<td>Venue</td>
											<td>:</td>
											<td>V1</td>
										</tr>
										<tr>
											<td>Theme</td>
											<td>:</td>
											<td>Open</td>
										</tr>
										<tr>
											<td>Participants</td>
											<td>:</td>
											<td>2</td>
										</tr>

										<tr>
											<td>Team</td>
											<td>:</td>
											<td>One Team Per Class</td>
										</tr>
										<tr>

										<tr>
											<td>Duration</td>
											<td>:</td>
											<td>3hrs</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Colour combination, artistic skills, portrayal of theme, overall effect
											</td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>
									<li> Participants have to get their own materials and hoist.</li>
									<li> Size of the flag should be strictly 70cm x 60cm .</li>
									<li> Flag should be hoisted on a 2m hoist.</li>
									<li> Participants have to use white backdrop color.</li>
									<li> The flag has to be sturdy and should not fall apart if it is waved.</li>
								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>

											<td><strong>Mobile No.</strong></td>
										</tr>
										<tr>
											<td>Lauren (FE COMP)</td>
											<td>9689353800</td>
											<br>
										</tr>
										<tr>
											<td>Ayush Mopkar(SE Comp)</td>
											<td>7020487805</td>
											<br>
										</tr>
										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Sharad Shanbhag&nbsp; </td>

										</tr>
										<tr>
											<td>Prof. Anirudha </td>
										</tr>
										<tr>
											<td>Arun Sail
											</td>
										</tr>
									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!--End of Brush strokes-->



	<!-- 7  Master chef-->
	<div id="modal7" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Food Wizard</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Flameless Cooking</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td> 17th May 2023</td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>10:30am - 1:30pm</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Class</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Bronze</td>
										</tr>
										<tr>
											<td>Venue</td>
											<td>:</td>
											<td>V2</td>
										</tr>
										<tr>
											<td>Participants</td>
											<td>:</td>
											<td>2 participants per class</td>
										</tr>
										<tr>
											<td>Duration</td>
											<td>:</td>
											<td>3hr</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Taste, presentation, hygiene , cooking process.</td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>
									<li> No alcohol allowed </li>
									<li> Power supply will not be provided </li>
									<li> Participants cannot make use of fire/flame </li>
									<li> Participants can only use all or at least 3 of the following 9 items from the
										pantry list, while preparing the dish </li>
									<li> Pantry : <br>
										1) Eggless mayonnaise, Soya sauce, Mustard sauce, olive oil, ketchup <br>
										2) Bread: poie(bakri), pav, bread, cooked tortilla/roti <br>
										3) Chocolate <br>
										4) Cream, milk, yogurt, coconut cream, condensed milk <br>
										5) Sugar, salt, spices, herbs and gelatin <br>
										6) Cheese, butter, jam, peanut butter <br>
										7) Biscuits <br>
										8) Fresh or cooked vegetables (Onion, tomato, beetroot, lettuce, corn, potato,
										lemon) <br>
										9) Fruits( Tender coconut, banana, avocado, orange, guava, watermelon) <br>
									<li> Participants cannot use any other ingredients other than the one’s mentioned
										above </li>
									<li> A secret ingredient will given by the coordinators at the beginning and the
										participants have to make that ingredient the highlight of the dish </li>
									<li> Marinating, if any , should be done on the spot. </li>
									<li> Gloves and head covering is compulsory. </li>
									<li> Mobile phones cannot be used while preparing the dish. </li>
									<li> One of the participant should be ready to explain the dish prepared to the
										judges and the list of item used should be mentioned. </li>
									<li> Participants are allowed to go fetch ingredients within the same time duration.
										It is compulsory to present your dish before or at sharp 1:30pm. </li>
								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>
											<td><strong>Mobile No.</strong></td>
										</tr>
										<tr>
											<td>Malcom (FE COMP)</td>
											<td>7499084979</td>
											<br>
										</tr>
										<tr>
											<td>Nathania (FE COMP)</td>
											<td>&nbsp;8459128894</td>
											<br>
										</tr>
										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td> Prof. Mathilda Colaco&nbsp; </td>

										</tr>
										<tr>
											<td>Prof. Vaishali Parakhi
											</td>
										</tr>
									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!--End of Master chef-->


	<!-- 8 Art Of Colours-->
	<div id="modal8" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Art Of Colors</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Rangoli Making</td>
										</tr>

										<tr>
											<td>Date</td>
											<td>:</td>
											<td>17th May 2023</td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>10:30am - 1:30pm</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Class</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Bronze</td>
										</tr>
										<tr>
											<td>Venue</td>
											<td>:</td>
											<td>Near Chapel</td>
										</tr>
										<tr>
											<td>Participants</td>
											<td>:</td>
											<td>2 </td>
										</tr>
										<tr>
											<td>Duration</td>
											<td>:</td>
											<td>3hr</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Colour combination, artistic skills, theme, intricacy, use of materials,
												use of surface area.</td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>
									<li> Participants have to get their own equipment and materials.</li>
									<li> Rangoli Size: 100cms x 100cms </li>
									<li> Participants should use colour powder along with any one of the following
										items: bangles, petals, clay. However, they cannot use a combination of bangles,
										petals and clay </li>
									<li> Theme for the event will be provided 2 days before the event.</li>
									<li> Rangoli can be accented with other items such as flowers, oil lamps. Use of any
										other material should be confirmed with the co-ordinator.</li>
									<li> (REFERENCE NOT ALLOWED) Mobile phones and designs already made on paper cannot
										be used while making the rangoli. However, participants can carry blank paper to
										draw their design during the competetion.</li>
								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>
											<td><strong>Mobile No.</strong></td>
										</tr>
										<tr>
											<td>Ayisha (BE MECH)</td>
											<td>&nbsp;8329093639</td>
											<br>
										</tr>
										<tr>
											<td>Sadiya (FE Civil)</td>
											<td>&nbsp;9175411708</td>
											<br>
										</tr>
										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Starina Dias &nbsp; </td>

										</tr>
										<tr>
											<td>Prof. Samprita Ghadi </td>
										</tr>

									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--End of Art Of Colours-->



	<!-- 9 Ad Mad-->

	<div id="modal9" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Mad-Lipz</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Dubsmash</td>
										</tr>

										<tr>
											<td>Date</td>
											<td>:</td>
											<td> 17th May 2023 </td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>2:00 - 2:30 (Submission)</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Class</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Bronze</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Creativity, dialogues, overall effect</td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>
									<li> Changing pitch and voice using applications is allowed. </li>
									<li> Video should be minimum 30 seconds and maximum 1 minute. </li>
									<li> Participants can either record themselves or include their voice over on any
										movie scenes. </li>
									<li> Suicidal topics are strictly banned from portraying. </li>
									<li> Caution should be taken to refrain from displaying obscenity, vulgarity,
										violence, prejudice, defamation etc in the movie, as it will lead to
										disqualification.
									</li>
									<li> Any video editing app/software can be used but the final video file should be
										either in AVI format or MP4 format
									</li>
									<li>Videos submitted after the appointed time will be rejected
									</li>
									<li>The movie should also be uploaded on YouTube and link should be shared with the
										coordinator. The link will be posted on the official PROCYON website and
										Facebook and Instagram handles.</li>
									<li>The dialogues should be in English, Hindi and Konkani languages only.</li>
									<li>Participants can either record themselves delivering the dialogue or include
										their voiceover on any movie clips.</li>

								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>
											<td><strong>Mobile No:</strong></td>
										</tr>
										<tr>
											<td>Om (FE ECS)</td>
											<td>&nbsp;7666235448</td>
											<br>
										</tr>
										<tr>
											<td>Sumukh (FE Comp )</td>
											<td>&nbsp;8600151383</td>
											<br>
										</tr>
										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Shantanu Desai&nbsp; </td>

										</tr>
										<tr>
											<td>Sujesh D. Girodkar&nbsp; </td>

										</tr>

									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!--End of Ad Mad-->

	<!-- 10 Reel Life-->
	<div id="modal10" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Reel Life</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Movie Making</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td> 17th May 2023 </td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>2:30pm - 3:00pm(Submission)</td>
										</tr>
										<tr>
											<td>Theme</td>
											<td>:</td>
											<td>Think global act local be creative</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Class</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Silver</td>
										</tr>
										<tr>
											<td>Duration</td>
											<td>:</td>
											<td>4mins(max)</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Creativity, direction, acting, video editing, story.</td>
										</tr>
										<tr>
											<td>Total No. Of Teams : &nbsp;</td>
											<td>:</td>
											<td>1</td>
										</tr>
										<tr>
											<td>Total No. Participants : &nbsp;</td>
											<td>:</td>
											<td>OPEN(No restrictions for number of participants)</td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>

									<li> Suicidal topics are strictly banned. </li>
									<li> Caution should be taken to refrain from displaying obscenity, vulgarity,
										violence, prejudice, defamation etc in the movie, as it will lead to
										disqualification if done improperly.</li>

									<li>Content should be in English, hindi or Konkani only</li>
									<li> Use of drones is allowed.</li>
									<li> Any video editing app/software can be used but the final video file should be
										either in AVI format or MP4 format </li>
									<li> Participants has to submit their videos on or before 17th May by 3:00 pm.</li>
									<li> Videos submitted after the appointed time will be rejected</li>
									<li> The movie should also be uploaded on YouTube and the link will be posted on the
										official PROCYON website and Facebook and Instagram handles.</li>
								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>

											<td><strong>Mobile No.</strong></td-->
										</tr>
										<tr>
											<td> Sneha (FE Civil )</td>
											<td>8329215668</td>
											<br>

										</tr>
										<tr>
											<td>Kinsel (FE ECS) </td>
											<td>7709607842</td>
											<br>

										</tr>

										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Satyesh Kakodkar&nbsp; </td>

										</tr>

									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--End of Reel Life-->





	<!-- 11 Slow-mo-->

	<div id="modal11" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Slow-Mo</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Slow cycling</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td>17th May 2023 </td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>3:00pm - 3:30pm</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Class</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Fun</td>
										</tr>
										<tr>
											<td>Venue</td>
											<td>:</td>
											<td>Futsal Ground</td>
										</tr>
										<tr>
											<td>Participants</td>
											<td>:</td>
											<td>1 per class</td>
										</tr>
										<tr>
											<td>Duration</td>
											<td>:</td>
											<td>30 Mins</td>
										</tr>
										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>
									<li> Participants have to get their own bicycles. </li>
									<li> Motorised bikes and scooters cannot be used. </li>
									<li> Participants can use geared / non-geared bicycles but cannot use :<br>
										● PMX Bikes<br>
										● Stunt Bikes<br>
										● Fat Tyre Bikes<br>
									</li>
									<li> Decision of the judging panel will be final.</li>
									<li> No modified cycles allowed.</li>

								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>
											<td><strong>Mobile No.</strong></td-->
										</tr>
										<tr>
											<td>Lyzander (BE MECH)</td>
											<td>9529449913</td>
											<br>

										</tr>
										<tr>
											<td>Manish (FE Civil)</td>
											<td>&nbsp;8975641637</td>
											<br>

										</tr>

										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Ryan Pereirao&nbsp; </td>

										</tr>

									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--End of Slow-mo-->






	<!-- DAY 2 ON STAGE>



<!--End of Symphony of strings-->



	<!-- 14 Step up revolution-->

	<div id="modal14" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Step Up Revolution</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Group dance</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td> 18th May 2023</td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>10:00am - 12:00pm</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Departmental</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Gold</td>
										</tr>
										<tr>
											<td>Venue</td>
											<td>:</td>
											<td>Main Stage</td>
										</tr>
										<tr>
											<td>Participants</td>
											<td>:</td>
											<td>8- 13(including faculty), two teams per department</td>
										</tr>
										<tr>
											<td>Duration</td>
											<td>:</td>
											<td>5-7 Mins</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Costumes, expressions, choreography, cordination, overall performance.
											</td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>
									<li>Maximum two teams can participate from each department.</li>
									<li> Teams can perform any form of dance.</li>
									<li>Maximum two faculty participation earns 25 bonus points.</li>
									<li> Vulgarity of any kind should not be portrayed in any manner as it will lead to
										disqualification of the entire team.</li>
									<li> Participants are responsible for their own safety.</li>
									<li> Participants must wear descent costumes. Costumes must be cross checked with
										the cordinators a day prior.</li>
									<li> Use of props is allowed, however no extra time will be given for stage setup.
									</li>
									<li> Marks will be deducted if team exceeds its appointed time .</li>
									<li> Music track should be submitted before 15th May 5pm, in a pendrive. </li>
									<li> Faculty must perform on the stage for a minimum of 2 minutes. </li>
								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>
											<td><strong>Mobile No.</strong></td-->
										</tr>
										<tr>
											<td>Adarsh (TE Mech)
											</td>
											<td>&nbsp;7972180432</td>
											<br>

										</tr>
										<tr>
											<td>Irfan (BE Mech )</td>
											<td>8010793290</td>
											<br>

										</tr>

										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Kimberly Morais &nbsp; </td>

										</tr>
										<tr>
											<td>Prof. Sachin Turi &nbsp; </td>

										</tr>
									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--End of Step up revolution-->



	<!-- 15 Couple of the year-->

	<div id="modal15" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Mr. And Ms. Procyon</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Mr &amp; Ms Procyon</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td>18th May 2023</td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>2:30 - 4:00pm</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Class</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Silver</td>
										</tr>
										<tr>
											<td>Venue</td>
											<td>:</td>
											<td>Main Stage</td>
										</tr>
										<tr>
											<td>Participants</td>
											<td>:</td>
											<td>2 per class</td>
										</tr>
										<tr>
											<td>Duration</td>
											<td>:</td>
											<td>1hr 30mins</td>
											<br>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<ol>
													<li> Introduction(1min), Ramp Walk and Talent round(4mins max)</li>
													<li> Question Answer Round (2 minutes)</li>
												</ol>
											</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Outfit, Personality, Talent showcase, Questions fielded, overall
												impression. </td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>
									<li> Dress code is decent formals.</li>

									<li> Participants should inform the coorinators well in advance about the talent
										he/she will be performing and the consequent stage requirements for it </li>
									<li> Vulgarity of any kind should not be portrayed in any manner as it will lead to
										disqualification.</li>
									<li> Use of props is allowed, however no extra time will be given for stage setup
									</li>
									<li> Participants are eligible for the participation points even if there is just
										one entry from a class.</li>
									<li> One helper is allowed for talent round. Performance or display of talent by the
										helper is not allowed. Helper’s act will not be judged in any manner.
									</li>
									<li>Further round specific rules will be provided on the day of the event.</li>
									<li>Participants have to submit a photograph at the time of registration which will
										be put up on Procyon Instagram Page.</li>

								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>
											<td><strong>Mobile No.</strong></td-->
										</tr>
										<tr>
											<td>Aries Souza (SE MECH)</td>
											<td>&nbsp;8007129966</td>
											<br>

										</tr>
										<tr>
											<td>Jayesh (FE COMP)</td>
											<td>8010489653</td>
											<br>

										</tr>

										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Kaushik Fondekar&nbsp; </td>

										</tr>
										<tr>
											<td>Prof. Avila Naik &nbsp; </td>

										</tr>
									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--End of Couple of the year-->



	<!-- 16 Rock the ramp-->

	<div id="modal16" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Rock The Ramp</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Fashion show</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td>18th May 2023 </td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>4:00pm - 5:30pm</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Departmental</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Gold</td>
										</tr>
										<tr>
											<td>Venue</td>
											<td>:</td>
											<td>Main Stage</td>
										</tr>
										<tr>
											<td>Participants</td>
											<td>:</td>
											<td>12 + 3 helpers per department(Including faculty)</td>
										</tr>
										<tr>
											<td>Duration</td>
											<td>:</td>
											<td>10 Mins</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Costume , theme, ramp walk, formations, music</td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>
									<li> Maximum two teams can participate from each department</li>
									<li> Teams have to display their theme based on the clothing design</li>
									<li> Vulgarity of any kind should not be portrayed in any manner, direct or indirect
										and engaging in vulgar activities will lead to disqualification of the entire
										team.</li>
									<li> Costume restrictions:<br>
										● Male participants cannot be bare chested unless majorly painted. Male
										participants are allowed to use full pants , half pants or shorts only. Lungis,
										dhotis and other Indian attire is permissible.<br>
										● For female participants, no revealing clothing (no deep neck lines or deep
										cuts allowed, no halter tops).If the costume is above the knees, dark or thick
										white leggings or dark stockings are a must.<br>
									</li>
									<li> No show of inner garments will be allowed.</li>
									<li> Cross Dressing not allowed.</li>
									<li> Use of props is allowed, however no extra time will be given for stage setup
									</li>
									<li> Each team must have one faculty member in charge.</li>
									<li> Registration should be done by 15th May 5pm.</li>
									<li> Music for fashon show should be submitted by 15th May 5pm to the student
										coordinator</li>
									<li> Marks will be deducted if team exceeds its appointed time or violates any of
										the above mentioned rules.
									</li>
									<li>Maximum two faculty participation earns 25 bonus points</li>
								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>
											<td><strong>Mobile No.</strong></td-->
										</tr>
										<tr>
											<td><a href="https://www.youtube.com/watch?v=xvFZjo5PgG0">Elgan (TE Comp)</a></td>
											<td>9689184658</td>
											<br>

										</tr>
										<tr>
											<td>Numan (FE Civil)</td>
											<td>&nbsp;7083373960</td>
											<br>

										</tr>


										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Natasha Jaques &nbsp; </td>

										</tr>
										<tr>
											<td>Prof. Swapnil Ramani &nbsp; </td>

										</tr>
									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--End of Rock the ramp-->




	<!-- 17 Street Menace-->

	<div id="modal17" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Street Play</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Street Play</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td> 18th May 2023 </td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>1:30 - 2:30pm</td>
										</tr>
										<tr>
											<td>Theme</td>
											<td>:</td>
											<td>Corruption</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Department</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Silver</td>
										</tr>
										<tr>
											<td>Venue</td>
											<td>:</td>
											<td>Near Chapel</td>
										</tr>
										<tr>
											<td>Participants</td>
											<td>:</td>
											<td>6 - 10
											<td>
										</tr>
										<tr>
											<td>Duration</td>
											<td>:</td>
											<td>10Mins</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Costume, artistic skills, portrayal of theme, use of area ,overall
												performance.</td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>

									<li> Maximum two faculty participation earns 25 bonus points for that respective
										event </li>
									<li> Suicidal topics are strictly banned from portraying in the event</li>

									<li> Vulgarity of any kind should not be portrayed in any manner as it will lead to
										disqualification of the entire team</li>
									<li> Use of props is allowed, however no extra time will be given for stage setup
									</li>
									<li> Marks will be deducted if team exceeds its appointed time </li>
								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>
											<td><strong>Mobile No.</strong></td-->
										</tr>
										<tr>
											<td>Preetam (FE COMP)</td>
											<td>&nbsp;9881114472</td>
											<br>

										</tr>
										<tr>
											<td>Meghashyam (FE Comp)</td>
											<td>8459282536</td>
											<br>

										</tr>

										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Harison Cota&nbsp; </td>

										</tr>
										<tr>
											<td>Ignatius Dias&nbsp; </td>

										</tr>

									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--End of Street Menace-->



	<!-- 18 The Scrapyard-->

	<div id="modal18" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Junkyard Beats</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Junkyard Beats</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td> 18 May </td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>11:00am - 1:00pm</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Class</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Bronze</td>
										</tr>
										<tr>
											<td>Venue</td>
											<td>:</td>
											<td>V1</td>
										</tr>
										<tr>
											<td>Participants</td>
											<td>:</td>
											<td>2 per class</td>
										</tr>
										<td>Theme</td>
										<td>:</td>
										<td>Nature</td>
										</tr>
										<tr>
											<td>Duration</td>
											<td>:</td>
											<td>2Hr</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Creativity, Presentation, Materials, overall effect</td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>
									<li> Participants have to get their own equipment and materials.</li>
									<li>Participants cannot create or work on their jewellery at home. </li>
									<li>Participants can create as many articles as they want within the given time.
									</li>
									<li>Using sharp objects is prohibited.</li>
									<li>Lead or other toxic materials are not allowed to be used.</li>
									<li>The primary element must be natural or artificial flowers.</li>
									<li>Other materials such as metal, plastic or glitter can be used.</li>
									<li>No use of valuable materials such as gold or jewels.</li>
								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>
											<td><strong>Mobile No.</strong></td-->
										</tr>
										<tr>
											<td>Chriag (BE MECH)</td>
											<td>&nbsp;9146668988</td>
											<br>

										</tr>
										<tr>
											<td>Ritchie(FE COMP)</td>
											<td>9049822180</td>
											<br>

										</tr>

										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Mohini Naik&nbsp; </td>

										</tr>
										<tr>
											<td>Prof. Jonessa Ferrao &nbsp; </td>

										</tr>
									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--End of The art of colours-->




	<!-- 19 Face-Painting-->

	<div id="modal19" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Face Painting</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">

						<div class="media-body">

							<div class="ticket-description">

								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Face Painting</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td> 18th May 2023 </td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>11:00am - 1:00pm</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Class</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Bronze</td>
										</tr>
										<tr>
											<td>Venue</td>
											<td>:</td>
											<td>Near Chapel</td>
										</tr>
										<tr>
											<td>Participants</td>
											<td>:</td>
											<td>2-3</td>
										</tr>
										<tr>
											<td>Duration</td>
											<td>:</td>
											<td>2hrs </td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Color combination, intricacy, overall presentation </td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>
									<li>There can be at most 2 face painters and 1 model.</li>
									<li>Skin-safe adhesives & adhesive removers must be used.</li>
									<li>Participants should bring their own colors, brushes etc.</li>
									<li>Topic will be given on the spot.</li>
									<li>Decision of the judges will be final and binding.</li>
									<li>Competitors MAY NOT use: <br>a. Acrylic paints and other commercial paints
										including tempera paint, craft paint, textile paint, airbrush paint (such as
										Createx brand and other brands), etc.
										<br>b.An airbrush system Stencils or stamps of any kind
										<br>c. Masks
										<br>d. Prosthetic pieces that are glued or taped to the face (i.e. fake cuts,
										scars, warts, noses, etc.)
										<br>e. Special effects contact lenses
									</li>
									</li>
									<li>Regular prescription eyeglasses or contact lenses will be allowed on the models
										and the artists.</li>

								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>
											<td><strong>Mobile No.</strong></td-->
										</tr>
										<tr>
											<td>Nathan (BE MECH)</td>
											<td>&nbsp;9552187005</td>
											<br>

										</tr>
										<tr>
											<td>Maryann (FE ECS)&nbsp;</td>
											<td>7666038018</td>
											<br>

										</tr>

										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Jeffery Valadares&nbsp; </td>

										</tr>
										<tr>
											<td>Prof. Flavia Leitao&nbsp; </td>

										</tr>
									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--End of Street menace-->



	<!-- 20 The Framed-->

	<div id="modal20" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Framed</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">

						<div class="media-body">

							<div class="ticket-description">
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Photography</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td> 17th-18th May 2023</td>
										</tr>
										<tr>
											<td>Time:</td>
											<td></td>
											<td>:day 1: 5pm
												<br>
												:day 2: 1pm
											</td>


										</tr>
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Class</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Bronze</td>
										</tr>

										<tr>
											<td>Topic</td>
											<td>:</td>
											<td>It will be shared on 17th May @11am</td>
										</tr>

										<tr>
											<td>Number of Teams:</td>
											<td>:</td>
											<td>1 Team</td>
										</tr>
										<tr>
											<td>Participants:</td>:</td>
											<td>:</td>
											<td>2 per class</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>Creativity, Lighting, Visual Appeal, Presentation of topic, overall
												effect</td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>
									<li>Participants have to submit 2 photos.</li>
									<li>Event is of 2 days which will have 2 separate themes.
									</li>
									<li>Photos must be in jpeg,jpg or png format only.
									</li>
									<li>Photos should be taken between the given time period.
									</li>
									<li>Use of Mobiles and DSLR cameras is allowed.
									</li>
									<li>Use of Drone and Action camera is strictly prohibited.
									</li>
									<li>Basic editing (only cropping) is allowed.
									</li>
									<li>Advanced editing, used to create illusions, deceptions and/or manipulations, and the adding and removing of significant elements within the frame is prohibited. Doing so will lead to disqualification.
									</li>
									<li>Participants are required to provide unique caption for the images submitted Submit your image files renamed as "day_1" and "day_2"
									</li>
									<li>The photograph must be original and no watermark of any kind should be present on the photograph.
									</li>
									<li>Late submission will be disqualified.</li>

								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>
											<td><strong>&nbsp;Mobile No.</strong></td-->
										</tr>
										<tr>
											<td>Masilon (SE MECH)</td>
											<td>&nbsp;9359307310</td>
											<br>

										</tr>
										<tr>
											<td>Abhishek Kudalkar (TE COMP)</td>
											<td>8698856333</td>
											<br>

										</tr>

										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Gaurish Samant&nbsp; </td>
										</tr>

									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--End of Framed-->

	<!--treasure hunt-->
	<div id="modal30" class="modal " tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Treasure Hunt</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<script>
					$(function() {
						$('[data-toggle="popover"]').popover()
					})
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
				<div class="modal-body border border-danger">

					<div class="media">
						<!--img class="mr-3" src="..." alt="Generic placeholder image"-->
						<div class="media-body">
							<!-- h5 class="mt-0">Media heading</h5 -->
							<div class="ticket-description">
								<p>
								</p>
								<table>
									<tbody>
										<tr>
											<td>AKA</td>
											<td>:</td>
											<td>Treasure Hunt</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:</td>
											<td> 18th May 2023 </td>
										</tr>
										<tr>
											<td>Time</td>
											<td>:</td>
											<td>9:30am - 11:00pm</td>
										</tr>
										<!-- <tr>
												  <td>Theme</td>
												  <td>:</td>
												  <td></td>
											  </tr> -->
										<tr>
											<td>Type</td>
											<td>:</td>
											<td>Class</td>
										</tr>
										<tr>
											<td>Scoring</td>
											<td>:</td>
											<td>Bronze</td>
										</tr>
										<tr>
											<td>Venue</td>
											<td>:</td>
											<td>Old Court</td>
										</tr>
										<tr>
											<td>Participants</td>
											<td>:</td>
											<td>2-3</td>
										</tr>
										<tr>
											<td>Duration</td>
											<td>:</td>
											<td> 1 hrs 30 mins(Max)</td>
										</tr>
										<tr>
											<td>Judgement Criteria &nbsp;</td>
											<td>:</td>
											<td>There will be 2 rounds.
												Round 1 - Aptitude test/General knowledge
												Top 4 highest scoring teams will qualify for Treasure Hunt
												Round 2 - Treasure Hunt
												The team which finds the treasure first wins. There are 2
												treasures. The treasure you find will determine the place you win.
											</td>
										</tr>

										<tr>
											<td>
												<br>
												<strong>Instructions :<strong>
											</td>
										</tr>
									</tbody>
								</table>

								<ol>
									<li> All teams must register through CR. <strong>( Note :- Just to ease the process
											of selection from class, CRs can use the process of first come first serve
											basis.)</strong></li>
									<li>3 teams per class of at most 3 members each.</li>
									<li>Follow all the COVID Protocol.</li>
									<li>All members of the team must have their ID cards for verification.</li>
									<li>Other details will be communicated 1 day prior to the event.
									</li>
								</ol>

								<br>
								<table>
									<tbody>
										<tr>
											<td><strong>Student Co-ordinator :</strong></td>
											<td><strong>Mobile No.</strong></td-->
										</tr>
										<tr>
											<td>Anish Naik (SE Comp)</td>
											<td>&nbsp;9022541380</td>
											<br>

										</tr>
										<tr>
											<td>Velinton Cardozo (SE ETC)</td>
											<td>&nbsp;7057091857</td>
											<br>

										</tr>


										<tr>
											<td> <br>
												<strong>Faculty Co-ordinator :</strong>
											</td>
										</tr>
										<tr>
											<td>Prof. Melba D'Souza &nbsp; </td>

										</tr>
										<tr>
											<td>Prof. Carol Cardozo &nbsp; </td>
										</tr>

									</tbody>
								</table>
								<p></p>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>





	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!-- jQuery library -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
	<script type="text/javascript" src="assets/js/slick.min.js"></script>
	<!-- Event Counter -->
	<script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
	<!-- Ajax contact form  -->
	<script type="text/javascript" src="assets/js/app.js"></script>



	<!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>




</body>

</html>