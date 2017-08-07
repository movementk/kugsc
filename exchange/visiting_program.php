<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/exchange.css" rel="stylesheet">
</head>
<body class="Overview">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="visiting-program">

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
						<h3>Exchange Program Application Guide</h3>
					</div>
                    <h4 class="title">What is Student Exchange Program (SEP)</h4>
                    <p>
                        International students whose home institutions do not have an exchange agreement with KU nor has links with ISEP can apply to the VSP. 
                    </p>
                    <p>
                        The program details of SEP and VSP remain the same apart from the following: 
                    </p>
                    <ul class="dot-list">
                        <li>
                            VSP applicants do not have to be nominated by their home institution.<br> 
                            KU VSP is open to all who satisfy the KU eligibility.
                        </li>
                        <li>VSP applicants will solely be assessed on individual’s academic ability.</li>
                        <li>Visiting students directly pay for the application and tuition fee to KU.</li>
                    </ul>
                    <div class="tabs dropdown">
						<button class="btn btn-defualt btn-block" data-toggle="dropdown">
							On-campus accommodation
						</button>
						<div class="dropdown-menu">
							<ul class="nav nav-tabs nav-justified" role="tablist">
								<li role="presentation" class="active">
								    <a href="#visiting-before-1" aria-controls="visiting-before-1" role="tab" data-toggle="tab">Before you apply</a>
								</li>
								<li role="presentation">
								    <a href="#visiting-before-2" aria-controls="visiting-before-2" role="tab" data-toggle="tab">When you apply</a>
								</li>
							</ul>
						</div>
					</div>

					<!-- 탭 패널 -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="visiting-before-1">
							<div class="collapse-list">
                                <ol>
                                    <li>
                                        <div class="collapse-content">                                            
                                            <a class="btn btn-collapse" role="button" data-toggle="collapse" href="#before-apply-1" aria-expanded="false" aria-controls="before-apply-1">
                                                <strong>Step 1.</strong> Check Eligibility
                                            </a>
                                            <div class="collapse in" id="before-apply-1">
                                                <div class="well">
                                                    <p>
                                                        Students from non-exchange universities should first consider consulting with a study abroad coordinator at their home university. Only after securing approval from their home university, should applicants apply to the VSP program
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapse-content">
                                            <a class="btn btn-collapse" role="button" data-toggle="collapse" href="#before-apply-2" aria-expanded="false" aria-controls="before-apply-2">
                                                <strong>Step 2.</strong> Entry Requirements
                                            </a>
                                            <div class="collapse in" id="before-apply-2">
                                                <div class="well">
                                                    <p>To apply for SEP at KU, you must meet the following requirements: </p>
                                                    <ul class="dot-list">
                                                        <li>Accurately complete the online application form with essential supporting documents</li>
                                                        <li>A minimum GPA of 2.5 on a 4.0 scale (GPA by US standard)</li>
                                                        <li>Must be a currently enrolled student</li>
                                                        <li>Must have studied for a minimum of 2 full semesters at home institution before the application period starts. Students are required to upload the transcript that shows they have completed at least 2 semesters with the grades they achieved.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapse-content">
                                            <a class="btn btn-collapse" role="button" data-toggle="collapse" href="#before-apply-3" aria-expanded="false" aria-controls="before-apply-3">
                                                <strong>Step 3.</strong> Tuition Fees
                                            </a>
                                            <div class="collapse in" id="before-apply-3">
                                                <div class="well">
                                                    <p>
                                                        After students receive approval from their home university they will need to complete online application during the application period. All visiting students are required to pay the tuition fee by the deadline given, which will be informed after the application period ends. Students will not be able to access the tuition payment page before/after the specified dates. The refund policy is as follows;
                                                    </p>
                                                    <div class="table-respsonsive">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Amount of Refund</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Before March 1 <br class="visible-xs">Before September 1</td>
                                                                    <td>Full refund</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>March 1 - March 31<br class="visible-xs"> September 1 - September 30</td>
                                                                    <td>Five-sixths refund<br class="visible-xs"> (Approximately 83%)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>April 1 - April 30<br class="visible-xs"> October 1 - October 31</td>
                                                                    <td>Two-thirds refund<br class="visible-xs"> (Approximately 67%)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>May 1 - May 31<br class="visible-xs"> November 1 - <br class="visible-xs"> November 30</td>
                                                                    <td>50% refund</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>After June 1<br class="visible-xs">After December 1</td>
                                                                    <td>No refund</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
						</div>
						<div role="tabpanel" class="tab-pane" id="visiting-before-2">
							<div class="collapse-list">
                                <ol>
                                    <li>
                                        <div class="collapse-content">
                                            <a class="btn btn-collapse" role="button" data-toggle="collapse" href="#visiting-program-1" aria-expanded="false" aria-controls="visiting-program-1">
                                                <strong>Step 1.</strong> Application Period
                                            </a>
                                            <div class="collapse in" id="visiting-program-1">
                                                <div class="well">
                                                    <ul class="dot-list">
                                                        <li>Spring semester (Mar-Jun): 1 Oct - 15 Nov <i>(To be Confirmed)</i></li>
                                                        <li>Fall semester (Sep-Dec): 28 March - 15 May <i>(To be Confirmed)</i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapse-content">
                                            <a class="btn btn-collapse" role="button" data-toggle="collapse" href="#visiting-program-2" aria-expanded="false" aria-controls="visiting-program-2">
                                                <strong>Step 2.</strong> Required Documents
                                            </a>
                                            <div class="collapse in" id="visiting-program-2">
                                                <div class="well">
                                                    <ul class="dot-list">
                                                        <li>Original Academic Transcript</li>
                                                        <li>Personal Statement (A4 one-page)</li>
                                                        <li>Copy of a Valid Passport</li>
                                                        <li>Certificate of Health (Can be found in Application page)</li>
                                                        <li>Oath of Good Conduct (Can be found in Application page)</li>
                                                        <li>Health Insurance</li>
                                                        <li>One Academic Reference</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapse-content">
                                            <a class="btn btn-collapse" role="button" data-toggle="collapse" href="#visiting-program-3" aria-expanded="false" aria-controls="visiting-program-3">
                                                <strong>Step 3.</strong> Check Application Status
                                            </a>
                                            <div class="collapse in" id="visiting-program-3">
                                                <div class="well">
                                                    <p>
                                                        Please make sure to complete and upload all the required documents during the specified dates. If students are not able to meet the deadline, your application will be declined. Details will be given both in the application page and via e-mail.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
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