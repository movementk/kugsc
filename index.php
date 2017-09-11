<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/main.css" rel="stylesheet">
<link href="/assets/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
<link href="/assets/jquery.mCustomScrollbar/jquery.mCustomScrollbar.min.css" rel="stylesheet">
</head>
<body>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content">
	
	<div id="visual" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#visual" data-slide-to="0"></li>
			<li data-target="#visual" data-slide-to="1"></li>
			<li data-target="#visual" data-slide-to="2" class="active"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item item-1" style="background-image: url(/assets/images/main/img_visual_1.jpg);">
				<div class="carousel-caption">
					<small class="visible-lg">Establish standards for future university colleges</small>
					<h2>Pioneer the Future of Humanity</h2>
					<p>
						Korea University has concluded a student exchange agreement with 860 prestigious schools<br class="visible-lg">
						in 90 countries around the world, sending more than 1,200 students abroad each year
					</p>
					<span class="bar top"></span>
					<span class="bar left"></span>
					<span class="bar right"></span>
					<span class="bar bottom"></span>
				</div>
			</div>
			<div class="item item-2" style="background-image: url(/assets/images/main/img_visual_2.jpg);">
				<div class="carousel-caption">
					<p class="rank-logo"><img class="img-responsive" src="/assets/images/main/logo_world_university_rankings.png" alt="WORLD UNIVERSITY RANKINGS"></p>
					<h2>2017 QS World<br class="visible-xs">University Ranking</h2>
					<ul>
						<li>
							<figure>
								<img class="img-responsive" src="/assets/images/main/ico_rank_90.png">
								<figcaption>#90 in the world</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img class="img-responsive" src="/assets/images/main/ico_rank_16.png">
								<figcaption>#16 in asia</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img class="img-responsive" src="/assets/images/main/ico_rank_90.png">
								<figcaption>#1 privatem comprehensive <br class="visible-lg">university in korea</figcaption>
							</figure>
						</li>
					</ul>
					<a class="more hidden-xs" href="#">Find out more</a>
				</div>
			</div>
			<div class="item item-3 active" style="background-image: url(/assets/images/main/img_visual_4.jpg);">
				<div class="carousel-caption">
					<h2>
						The Largest <br class="visible-xs">Exchange/Visiting<br>
						Program in Korea!
					</h2>
				</div>
			</div>
		</div>
	</div>
	
	<div id="community">
		<div class="container">
			<div id="announcements" class="hidden-xs">
				<h4>Announcements<span class="bar"></span></h4>
				<figure>
					<p style="background-image: url(/assets/images/main/img_announcements.jpg);"></p>
					<figcaption>
						<h5><a href="#">World’s Leading International Exchange Programs</a></h5>
						<ul>
							<li><i class="icon-calendar"></i>2017.04.11</li>
							<li><i class="icon-eye"></i>11</li>
						</ul>
						<p>
							In a few minutes there was, so far as the soldier could see, 
							not a living things cientists use simple materials to create
							semi-soft machines that walk like insects Business School,
							SEAS announce
						</p>
					</figcaption>
				</figure>
			</div>
			<div id="events" class="hidden-xs">
			
				<!-- jquery ui 캘린더 입력 영역 -->
				<div class="calendar"></div>
				<!-- // jquery ui 캘린더 입력 영역 -->
				
				<div class="article first">
					<figure>
						<p style="background-image: url(/assets/images/main/img_article.jpg);"></p>
						<figcaption>
							<span class="date">
								<b class="day">13</b> <span class="month">MAY</span>
							</span>
							<h5><a href="#">Understanding the Universe Using Gravitational Waves</a></h5>
							<p>
								In Q&amp;A, retired judge explains the legal issues raised and
								the the legal issues...
							</p>
						</figcaption>
					</figure>
				</div>
				
				<div class="article second visible-lg">
					<span class="date">
						<b class="day">13</b> <span class="month">MAY</span>
					</span>
					<h5><a href="#">President Luis Guillermo Solis</a></h5>
					<p>
						In Q&amp;A, retired judge explains the legal issues raised and the the legal issues...
					</p>
				</div>
				
				<p class="more visible-lg">
					<a href="#"><span>Learn More</span></a>
				</p>
				
			</div>
			<div id="sns">
				<ul>
					<li class="visible-xs"><a class="announcements" href="#"><i></i>Announcements</a></li>
					<li><a class="career" href="#"><i></i>Career</a></li>
					<li><a class="kakaotalk" href="#"><i></i><span class="sr-only">Kakao Talk</span></a></li>
					<li><a class="buddy" href="#"><i></i>Buddy Program</a></li>
				</ul>
			</div>
			<div id="upcoming" class="visible-xs">
				<h4>Upcoming Events</h4>
				<ol>
					<li>
						<a href="#">
							<span class="date">
								<b class="day">13</b> <span class="month">MAY</span>
							</span>
							<h5>Understanding the Universe Using Gravitational Waves</h5>
							<p>
								Last year LIGO announced the first direct detection of gravitational waves.
							</p>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="date">
								<b class="day">13</b> <span class="month">MAY</span>
							</span>
							<h5>Understanding the Universe Using Gravitational Waves</h5>
							<p>
								Last year LIGO announced the first direct detection of gravitational waves.
							</p>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="date">
								<b class="day">13</b> <span class="month">MAY</span>
							</span>
							<h5>Understanding the Universe Using Gravitational Waves</h5>
							<p>
								Last year LIGO announced the first direct detection of gravitational waves.
							</p>
						</a>
					</li>
				</ol>
				<p class="more">
					<a href="#"><u>Learn More</u></a>
				</p>
			</div>
		</div>
	</div>
	
	<div id="statistics" class="hidden-xs">
		<div class="container">
			<h4>Statistics</h4>
			<div class="row">
				<div class="col-xs-12 col-lg-6">
					<div class="contries">
						<h5>Students from 91 countries<br>in 6 continents</h5>
						<div class="list">
							<ul>
								<li class="active">
									<a href="#">Asia</a>
									<div>
										<ul>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
										</ul>
									</div>
								</li>
								<li>
									<a href="#">Africa</a>
									<div>
										<ul>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
											<li><a href="#">country #1</a></li>
										</ul>
									</div>
								</li>
								<li>
									<a href="#">North America</a>
									<div>
										<ul>
											<li><a href="#">country #2</a></li>
										</ul>
									</div>
								</li>
								<li>
									<a href="#">South America</a>
									<div>
										<ul>
											<li><a href="#">country #2</a></li>
										</ul>
									</div>
								</li>
								<li>
									<a href="#">Europe</a>
									<div>
										<ul>
											<li><a href="#">country #2</a></li>
										</ul>
									</div>
								</li>
								<li>
									<a href="#">Australia</a>
									<div>
										<ul>
											<li><a href="#">country #2</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
						<div class="map">
							<div class="asia active"></div>
							<div class="africa"></div>
							<div class="north-america"></div>
							<div class="south-america"></div>
							<div class="europe"></div>
							<div class="australia"></div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-lg-6">
					<div class="students">
						<h5>International Students<br>Over Time</h5>
						<ol>
							<li>
								<dl>
									<dt>2013</dt>
									<dd class="count">2982</dd>
									<dd class="person" role="presentation">
										<img class="img-responsive" src="/assets/images/main/ico_person.png" alt="">
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt>2014</dt>
									<dd class="count">3325</dd>
									<dd class="person" role="presentation">
										<img class="img-responsive" src="/assets/images/main/ico_person.png" alt="">
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt>2015</dt>
									<dd class="count">3398</dd>
									<dd class="person" role="presentation">
										<img class="img-responsive" src="/assets/images/main/ico_person.png" alt="">
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt>2016</dt>
									<dd class="count">3974</dd>
									<dd class="person" role="presentation">
										<img class="img-responsive" src="/assets/images/main/ico_person.png" alt="">
									</dd>
								</dl>
							</li>
						</ol>
					</div>
				</div>
			</div>
			<p class="note">Statisctics includes; International undergraduate, graduate, exchange and visiting students 2017</p>
		</div>
	</div>
	
	<div id="contact">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-5 col-lg-3">
					<div class="contact-us">
						<h5>Contact Us</h5>
						<h6>International students<br>(Undergraduate Program)</h6>
						<dl>
							<dt>Tel</dt>
							<dd>+82-2-3290-5173, 5174</dd>
							<dt>Email</dt>
							<dd><a href="mailto:gsc@korea.ac.kr" target="_blank">gsc@korea.ac.kr</a></dd>
							<dt>Fax</dt>
							<dd>+82-921-2352</dd>
						</dl>
						<h6>Exchange and Visiting students (to KU)</h6>
						<dl>
							<dt>Tel</dt>
							<dd>+82-2-3290-5177, 5178</dd>
							<dt>Email</dt>
							<dd><a href="mailto:studyabroad@korea.ac.kr" target="_blank">studyabroad@korea.ac.kr</a></dd>
							<dt>Fax</dt>
							<dd>+82-921-2352</dd>
						</dl>
						<h6>Global Services Center</h6>
						<address>Central Plaza, office No. 104A 145 Anam-ro, seongbuk-gu, seoul, 02841,korea</address>
						<dl>
							<dt>Tel</dt>
							<dd>+82-2-3290-5177</dd>
						</dl>
					</div>
				</div>
				<div class="col-xs-12 col-sm-7 col-lg-6">
					<div class="map">
						<div id="map"></div>
					</div>
				</div>
				<div class="col-xs-12 col-lg-3">
					<div class="connect">
						<h5>Connect</h5>
						<ul>
							<li><a href="#">Korea Unveristy Main Homepage</a></li>
							<li><a href="#">International Student Undergraduate admissions</a></li>
							<li><a href="#">Korean Language Center</a></li>
							<li><a href="#">Colleges and Schools</a></li>
							<li><a href="#">International Summer Campus</a></li>
							<li><a href="#">Korea University Library</a></li>
							<li><a href="#">Student Counseling</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

</main>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
<script src="/assets/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="/assets/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
	(function($) {
		
		// 해상도: All
		// 설명: 이벤트 캘린더 생성
		$("#events .calendar").datepicker();
		
		// 해상도: All
		// 설명: 통계 영역에서 국가 클릭 시
		$(document).on("click", "#statistics .contries .list > ul > li > a", function(e) {
			$(this).parent().siblings(".active").removeClass("active");
			$(this).parent().addClass("active");
			$("#statistics .contries .map > div.active").removeClass("active");
			$("#statistics .contries .map > div:eq("+$(this).parent().index()+")").addClass("active");
			e.preventDefault();
		});
		
		$(window).on("load", function() {
			
			// 해상도: > xs
			// 설명: 통계 영역에 국가 스크롤 생성
			$("#statistics .contries .list > ul > li > div").mCustomScrollbar({
				theme: "light-3"
			});

			google_init('37.589169', '127.032638',"map");
		});
	})(jQuery);
</script>
</body>
</html>
