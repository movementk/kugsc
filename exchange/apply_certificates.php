<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/exchange.css" rel="stylesheet">
</head>
<body class="Overview">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="apply-certificates">

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
						<h3>How to Apply for Certificates</h3>
					</div>
                    <p>
                        While you are attending Korea University, you might need to request certificates. Below are the basic certificates student needs during their stay at Korea University.
                    </p>
                    <div class="table-wrap">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Transcript Certificate of Enrollment</th>
                                    <td>
                                        Available at One-Stop Service Center (Located at both Main Campus and Science Campus)
                                        <p class="note">
                                            Please check Student Services > One-Stop Service Center for the <i>location</i>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tuition fee receipt (Only for Visiting Students)</th>
                                    <td>
                                        Available at Global Services Center
                                        <p class="note">
                                            Please check About GSC > Contact Us for the <i>location</i>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="note">
                        <i>If you need transcript after you leave Korea, please</i>
                        <a href="#" target="_blank">click here</a>
                    </p>
				</div>
			</div>
		</div>
	</div>
	
</main>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot_sub.php"); ?>

</body>
</html>