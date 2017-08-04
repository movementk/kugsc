<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/international.css" rel="stylesheet">
</head>
<body class="international">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="counseling-service">

	<!-- Page header -->
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/international/_page_header.php"); ?>
	<!-- // Page header -->
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<!-- LNB -->
				<?php require_once($_SERVER["DOCUMENT_ROOT"]."/international/_lnb.php"); ?>
				<!-- // LNB -->
			</div>
			<div class="col-lg-9">
				<div class="page-content">
					<!-- 페이지 타이틀 -->
					<div class="page-title">
						<h3>Student Counseling Service</h3>
					</div>
					<p>
					    Our counsellors can assist you to gain a clearer understanding of the problems you face and how to identify appropriate strategies so you can make the best possible decision for yourself. Although we can provide guidance, it is important to recognize that our counsellors cannot solve your problems for you.
					</p>
					<div class="counseling">
                        <h4 class="title">One-on-One Counseling</h4>
                        <p>
                            Our counsellor will listen without judgement, offer new perspectives and work with you on strategies that are right for you. Partners, friends and family can be included in the counselling sessions if you and the counsellor agree that it will be helpful.
                        </p>
                        <button type="button" class="btn btn-default">Book one-on-one appointment</button>
					</div>
					<div class="group-sessions">
                        <h4 class="title">Group Sessions</h4>
                        <p>
                            Group sessions are also available to students who may be in the similar situation. Please click the icon to see what sessions are available.(available only in Korean)
                        </p>
                        <button type="button" class="btn btn-primary">Student Counseling Center</button>
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