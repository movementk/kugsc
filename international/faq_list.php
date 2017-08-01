<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/international.css" rel="stylesheet">
</head>
<body class="international">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="faq-list">

	<!-- Page header -->
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/page_header.php"); ?>
	<!-- // Page header -->
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<!-- LNB -->
				<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/lnb.php"); ?>
				<!-- // LNB -->
			</div>
			<div class="col-lg-9">
				<div class="page-content">
					<!-- 페이지 타이틀 -->
					<div class="page-title">
						<h3>FAQ</h3>
					</div>
                   
                    <div class="tabs dropdown">
						<button class="btn btn-defualt btn-block" data-toggle="dropdown" aria-expanded="false">General info</button>
						<div class="dropdown-menu">
							<ul class="nav nav-tabs nav-justified" role="tablist">
								<li role="presentation" class="active">
								    <a href="#general-info" aria-controls="general-info" role="tab" data-toggle="tab">
								        General info
								    </a>
								</li>
								<li role="presentation">
                                    <a href="#academics" aria-controls="academics" role="tab" data-toggle="tab">
                                        Academics
                                    </a>
								</li>
								<li role="presentation">
                                    <a href="#scholarships" aria-controls="scholarships" role="tab" data-toggle="tab">
                                        Scholarships
                                    </a>
								</li>
								<li role="presentation">
                                    <a href="#immigration-issues" aria-controls="immigration-issues" role="tab" data-toggle="tab">
                                        Immigration issues
                                    </a>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="general-info">
						    <nav class="question-type">
                                <ul class="row">
                                    <li class="col-xs-6 col-sm-2 active">
                                        <a href="#">Issue of<br>Certificates</a>
                                    </li>
                                    <li class="col-xs-6 col-sm-2">
                                        <a href="#">Student ID Card</a>
                                    </li>
                                    <li class="col-xs-6 col-sm-2">
                                        <a href="#">Change of<br>studentship status </a>
                                    </li>
                                    <li class="col-xs-6 col-sm-2">
                                        <a href="#">Insurance</a>
                                    </li>
                                    <li class="col-xs-6 col-sm-2">
                                        <a href="#">Change of personal<br> info and log-in on <br>Portal (KUPID)</a>
                                    </li>
                                    <li class="col-xs-6 col-sm-2">
                                        <a href="#">Full time and<br>part-time jobs</a>
                                    </li>
                                </ul>
                            </nav>
                            
                            <!-- collapse List -->
                            <div class="panel-group question-list" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-1">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                            <i class="question">Q</i>
                                            Where can I get all kinds
                                            of certificates? 
                                        </a>
                                    </div>
                                    <div id="collapse-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-1">
                                        <div class="panel-body">
                                            <i class="asked">A</i>
                                            If you haven’t paid the Mutual Health
                                            Aid Association fee or submitted a copy
                                            of your private insurance policy, you
                                            won’t be able to issue your certificates
                                            at all until you submit a proof of
                                            buying insurance to GSC
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-2">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                            <i class="question">Q</i>
                                            I went to One-Stop Service
                                            Center and tried to issue my
                                            academic transcript but failed.
                                            What can I do?
                                        </a>
                                    </div>
                                    <div id="collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2">
                                        <div class="panel-body">
                                            <i class="asked">A</i>
                                            If you haven’t paid the Mutual Health
                                            Aid Association fee or submitted a copy
                                            of your private insurance policy, you
                                            won’t be able to issue your certificates
                                            at all until you submit a proof of
                                            buying insurance to GSC
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
						<div role="tabpanel" class="tab-pane" id="academics">
							탭 패널 #2
						</div>
						<div role="tabpanel" class="tab-pane" id="scholarships">
							탭 패널 #3
						</div>
						<div role="tabpanel" class="tab-pane" id="immigration-issues">
							탭 패널 #4
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