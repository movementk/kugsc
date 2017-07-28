<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/international.css" rel="stylesheet">
</head>
<body class="international">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="career">

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
						<h3>About Korea University</h3>
					</div>

					<!-- 탭 -->
					<div class="nav nav-tabs nav-justified"  role="tablist">
						<ul>
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
							<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
							<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
							<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
						</ul>
					</div>

					<!-- 탭 패널 -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							탭 패널 #1
						</div>
						<div role="tabpanel" class="tab-pane" id="profile">
							탭 패널 #2
						</div>
						<div role="tabpanel" class="tab-pane" id="messages">
							탭 패널 #3
						</div>
						<div role="tabpanel" class="tab-pane" id="settings">
							탭 패널 #4
						</div>
					</div>
					
					<h4>What is an ‘Orientation Week’?</h4>
					
					<p>Orientation Week offers you social, sporting, study and support sessions and events to help you get familiar with the campus, meet people, get prepared for study, find out who’s there to help and most importantly have fun!</p>

					<p>Attending orientation is an important step of starting university so attendance is considered essential. The orientation conducted by Global Services Center is mandatory.</p>
					
				</div>
				
			</div>
		</div>
	</div>
	
</main>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot_sub.php"); ?>

</body>
</html>