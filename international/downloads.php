<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/international.css" rel="stylesheet">
</head>
<body class="international">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="downloads">

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
						<h3>Downloads</h3>
					</div>
                    <div class="downloads-list">
                        <ul class="row">
                            <li class="col-xs-12 col-sm-6">
                                <a href="#">
                                    <p>Application Form</p>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-6">
                                <a href="#">
                                    <p>
                                        Confirmation of Residence/<br class="visible-xs visible-sm">
                                        Accommodation
                                    </p>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-6">
                                <a href="#">
                                    <p>
                                        Confirmation Form for Faculty<br class="visible-xs">
                                        Advisor on<br class="hidden-xs"> a Student's Thesis<br class="visible-xs">Schedule
                                    </p>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-6">
                                <a href="#">
                                    <p>초과학기 사유서</p>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-6">
                                <a href="#">
                                    <p>
                                        Part-time work of Foreign Student<br>
                                        Confirmation Form
                                    </p>
                                </a>
                            </li>
                        </ul>
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