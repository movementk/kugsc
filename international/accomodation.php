<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/international.css" rel="stylesheet">
</head>
<body class="international">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="accomodation">

	<!-- Page header -->
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/page_header.php"); ?>
	<!-- // Page header -->
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
			
				<!-- LNB -->
				<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/lnb_international.php"); ?>
				<!-- // LNB -->
				
			</div>
			<div class="col-lg-9">
				
				<div class="page-content">
				
					<!-- 페이지 타이틀 -->
					<div class="page-title">
						<h3>Accommodation</h3>
					</div>
					
					<h4 class="title">Choosing Where to Live</h4>
					
					<p>From on-campus to off-campus student housing or privately rented houses and studios, you will find place that suits your life style</p>

					<!-- 탭 -->
					<div class="tabs dropdown">
						<button class="btn btn-defualt btn-block" data-toggle="dropdown">
							On-campus accommodation
						</button>
						<div class="dropdown-menu">
							<ul class="nav nav-tabs nav-justified" role="tablist">
								<li role="presentation">
									<a href="#accomodation-1" aria-controls="accomodation-1" role="tab" data-toggle="tab">On-campus accommodation</a>
								</li>
								<li role="presentation">
									<a href="#accomodation-2" aria-controls="accomodatio-2" role="tab" data-toggle="tab">Off-campus accommodation</a>
								</li>
								<li role="presentation" class="active">
									<a href="#accomodation-3" aria-controls="accomodation-3" role="tab" data-toggle="tab" class="high">Temporary Short-term <br>Accommodation</a>
								</li>
							</ul>
						</div>
					</div>

					<!-- 탭 패널 -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane" id="accomodation-1">
							탭 패널 #1
						</div>
						<div role="tabpanel" class="tab-pane" id="accomodation-2">
							탭 패널 #2
						</div>
						<div role="tabpanel" class="tab-pane active" id="accomodation-3">
							<h5 class="title">Temporary Short-term <br class="visible-xs">Accommodation</h5>
							<figure>
								<div class="row">
									<div class="col-xs-12 col-sm-4"><img class="img-responsive" src="/assets/images/international/accomodation/tab3_figure1.jpg"></div>
									<div class="col-xs-12 col-sm-4"><img class="img-responsive" src="/assets/images/international/accomodation/tab3_figure2.jpg"></div>
									<div class="col-xs-12 col-sm-4"><img class="img-responsive" src="/assets/images/international/accomodation/tab3_figure3.jpg"></div>
								</div>
								<figcaption>
									Where to look if you need a place for a few days or weeks<br>
									As the university accommodation does not offer any short-term accommodation, students arriving freshly from overseas can choose to stay on a short-term accommodation until their long-term housing is arranged. The listed ones are mostly serviced residences that are 3-4 subway stops away from the campus. 
								</figcaption>
							</figure>
							<div class="box grey space">
								<dl>
									<dt>Somerset Palace</dt>
									<dd><a href="http://www.somersetpalace.co.kr/kr/main/main.asp" target="_blank"><i class="icon-link-ext"></i>http://www.somersetpalace.co.kr/kr/main/main.asp</a></dd>
									
									<dt>Coop residence</dt>
									<dd><a href="http://rent.co-op.co.kr/rent_coop/eng/body09.htm" target="_blank"><i class="icon-link-ext"></i>Dongdaemoon http://rent.co-op.co.kr/rent_coop/eng/body09.htm</a></dd>
									
									<dt>Euljiro</dt>
									<dd><a href="http://rent.co-op.co.kr/rent_coop/eng/body02.htm" target="_blank"><i class="icon-link-ext"></i>http://rent.co-op.co.kr/rent_coop/eng/body02.htm</a></dd>
									
									<dt>Orakai Insadong Suites</dt>
									<dd><a href="http://www.orakaihotels.com/insa/eng/default.asp" target="_blank"><i class="icon-link-ext"></i>http://www.orakaihotels.com/insa/eng/default.asp</a></dd>
								</dl>
								<p>Any inquiries for On-campus accommodation for international students: 02- 3290-1554 or <a href="mailto:reslife@korea.ac.kr" target="_blank">reslife@korea.ac.kr</a></p>
								<p>Any inquiries for Off-campus accommodation for KU International regular students : 02-3290-5179 or <a href="mailto:gsc@korea.ac.kr" target="_blank">gsc@korea.ac.kr</a></p>
								<p>Any inquiries for Off-campus accommodation for Exchange/Visiting students : 02-3290-5177~8  or <a href="mailto:studyabroad@korea.ac.kr" target="_blank">studyabroad@korea.ac.kr</a></p>
							</div>
							<div class="box">
								<p>Moreover, general information on housings in Seoul is also available at the Seoul Global Center website, (http://global.seoul.go.kr) > Living > Housing or other <a href="#" target="_blank">accommodation tips</a></p>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</div>
	
</main>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot_sub.php"); ?>

</body>
</html>