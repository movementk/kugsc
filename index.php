<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/main.css" rel="stylesheet">
</head>
<body>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content">
	
	<div id="visual" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#visual" data-slide-to="0"></li>
			<li data-target="#visual" data-slide-to="1" class="active"></li>
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
			<div class="item item-2 active" style="background-image: url(/assets/images/main/img_visual_2.jpg);">
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
						<div></div>
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

</body>
</html>