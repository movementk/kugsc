<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/exchange.css" rel="stylesheet">
</head>
<body class="Overview">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="scholarships">

	<!-- Page header -->
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/exchange/_page_header.php"); ?>
	<!-- // Page header -->
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<!-- LNB -->
				<?php require_once($_SERVER["DOCUMENT_ROOT"]."/exchange/_lnb.php"); ?>
				<!-- // LNB -->
			</div>
			<div class="col-lg-9">
				<div class="page-content">
					<!-- 페이지 타이틀 -->
					<div class="page-title">
						<h3>Scholarships</h3>
					</div>
					<div class="tabs dropdown">
						<button class="btn btn-defualt btn-block" data-toggle="dropdown">
							On-campus accommodation
						</button>
						<div class="dropdown-menu">
							<ul class="nav nav-tabs nav-justified" role="tablist">
								<li role="presentation" class="active">
								    <a href="#scholarships-1" aria-controls="scholarships-1" role="tab" data-toggle="tab">Global KU Scholarship</a>
								</li>
								<li role="presentation">
								    <a href="#scholarships-2" aria-controls="scholarships-2" role="tab" data-toggle="tab">Universities21 Scholarship</a>
								</li>
								<li role="presentation">
								    <a href="#scholarships-3" aria-controls="scholarships-3" role="tab" data-toggle="tab">APRU Scholarship</a>
								</li>
							</ul>
						</div>
					</div>

					<!-- 탭 패널 -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="scholarships-1">
							<h4 class="title">Global KU Scholarship</h4>
							<p>
							    In celebration of its centennial in 2005, KU established Global KU Study Abroad Scholarship. This scholarship aims to support future global leaders around the world to study at KU. Only students in Student Exchange Program(SEP) and Visiting Student Program(VSP) are eligible for Global KU Scholarship.
							</p>
							<h4 class="title">Types</h4>
							<ul class="dot-list">
							    <li>Admission Scholarship: Max. KRW 400,000 per month for the first semester (4 months).</li>
							    <li>KU Travel Scholarship: Designed to help students meet basic travel costs, a one-off payment of up to a maximum of KRW1,500,000 according to distance and currency rate.</li>
							    <li>Merit Scholarship: Awarded on the basis of academic merit of the first semester at Korea University, KRW300,000 per month for a second semester (4 months). Only applicable to exchange/visiting students who participate in one-year program.</li>
							</ul>
							<h4 class="title">Required Documents</h4>
							<ul class="dot-list">
							    <li>Global KU scholarship application form</li>
							    <li>One passport-sized photograph</li>
							    <li>Academic reference</li>
							</ul>
							<h4 class="title">Important Notice</h4>
							<ul class="dot-list">
							    <li>All documents must be written and provided in English. Please attach translations in English if the document are in any other language.</li>
							    <li>Documents submitted with the application will not be returned to the applicant.</li>
							    <li>Academic reference MUST be sent directly to Global Services Center from instructors.</li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="scholarships-2">
							<h4 class="title">What is U21?</h4>
							<p>
							    IUniversitas 21 is an international network of 21 leading research-intensive universities in thirteen countries. Collectively, its members enrol over 650,000 students, employ over 130,000 staff and have over 2 million alumni. Their collective budgets amount to over US$13bn and there is an annual research grant income of over US$3bn. The network's purpose is to facilitate collaboration and cooperation between the member universities and to create opportunities for them on a scale that none of them would be able to achieve operating independently or through traditional bilateral alliances.
							</p>
							<h4 class="title">Eligibility</h4>
							<p>
							    The U21 scholarship is given to either exchange students or study abroad students studying at Korea University per semester. U21 member universities are based on the U21 executive office's member institutions. Students don’t need to apply for the scholarship since it’s automatically provided.
							</p>
							<h4 class="title">Amount of scholarship</h4>
							<ul class="dot-list">
							    <li>U21 member universities in Asia: <i>￦250,000</i></li>
							    <li>Other U21 member universities: <i>￦500,000</i></li>
							</ul>
							<p>The List of member universities : ( <a href="http://www.universitas21.com" target="_blank">www.universitas21.com</a> )</p>
						</div>
						<div role="tabpanel" class="tab-pane" id="scholarships-3">
							<h4 class="title">What’s APRU?</h4>
							<p>
							    APRU is a consortium of 42 leading research universities in the Pacific Rim. The consortium aims to foster cooperation in education, research and enterprise thereby contributing to the economic, scientific and cultural advancement of the Pacific Rim.<br>
							    APRU aims to promote scientific, educational and cultural collaboration among Pacific Rim economies. In both its objectives and guiding principles, APRU embodies a commitment to global academic and research standards.<br>
							    APRU recognizes that its activities can be powerful catalysts for expanding educational, economic and technological cooperation among the Pacific Rim economies. The association seeks to promote dialogue and collaboration between academic institutions in Pacific Rim economies so that they can become effective players in the global knowledge economy.
							</p>
							<h4 class="title">Eligibility</h4>
							<p>
							    The APRU scholarship is given to either exchange students or study abroad students studying at Korea University per semester. APRU member universities are based on the APRU executive office's member institutions. Students don’t need to apply for the scholarship since it’s automatically provided.
							</p>
							<h4 class="title">Amount of scholarship</h4>
							<p>The List of member universities : ( <a href="http://www.apru.org" target="_blank">www.apru.org</a> )</p>
							<ul class="dot-list">
							    <li>U21 member universities in Asia: <i>￦250,000</i></li>
							    <li>Other U21 member universities: <i>￦500,000</i></li>
							</ul>
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