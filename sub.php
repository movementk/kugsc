<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content">

	<div class="page-header hidden-xs">
 		<div class="container">
			<h1>About GSC</h1>
			<p>
				Agnes Scott College, founded in 1889,<br class="hidden-lg">
				is an independent national liberal arts college
			</p>
  		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
			
				<!-- LNB -->
				<nav id="lnb" class="dropdown lnb-1">
			  		<h2 class="visible-lg">About GSC</h2>
				  	<button class="btn btn-link btn-block dropdown-toggle" type="button" data-toggle="dropdown">
						Select
				  	</button>
				  	<ul class="dropdown-menu">
						<li>
							<a href="#">Overview</a>
						</li>
						<li>
							<a href="#">Exchange Program <br class="visible-lg">Application Guide</a>
						</li>
						<li>
							<a href="#">Visiting Program <br class="visible-lg">Application Guide</a>
						</li>
						<li>
							<a href="#">After Acceptance</a>
						</li>
						<li class="has-child active">
							<a href="#">While in KU</a>
							<ul>
								<li><a href="#">Visa &amp; Immigration for Exchange/Visiting Students</a></li>
								<li><a href="#">Accomodation</a></li>
								<li><a href="#">Insurance</a></li>
								<li><a href="#">Scholarships</a></li>
								<li><a href="#">KUBA</a></li>
								<li><a href="#">How to Apply for Certificates</a></li>
							</ul>
						</li>
						<li class="has-child">
							<a href="#">Request</a>
							<ul>
								<li><a href="#">Certificates and other related documents</a></li>
								<li><a href="#">Airport Pick-up</a></li>
							</ul>
						</li>
						<li class="has-child">
							<a href="#">Board</a>
							<ul>
								<li><a href="#">Notice</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Q&amp;A</a></li>
							</ul>
						</li>
				  	</ul>
				</nav>
				<!-- // LNB -->
				
			</div>
			<div class="col-lg-9">
				
				<div class="page-content">
				
					<!-- 페이지 타이틀 -->
					<div class="page-title">
						<h3>About Korea University</h3>
					</div>

					<!-- 탭 -->
					<ul class="nav nav-tabs nav-justified" role="tablist">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
						<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
						<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
					</ul>

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
					
				</div>
				
			</div>
		</div>
	</div>
	
</main>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
<script>
	(function($) {		
		// 해상도: < lg
		// 설명: 메뉴 클릭 시 active 클래스
		$(document).on("click", "#lnb .dropdown-menu > li > a", function(e) {
			if ($(this).parent().hasClass('active')) {
				$(this).parent().removeClass('active');
			} else {
				$(this).parent().siblings('.active').removeClass('active');
				$(this).parent().addClass('active');
			}
			if ($(this).siblings('ul').length > 0) {	
				return false;
			}
		});
		
		// 해상도: All
		// 설명: LNB의 active 클래스 항목을 자동 입력 시키기
		$(window).on("load", function() {
			if ($("#lnb .dropdown-menu > li.active").length == 1) {
				$("#lnb .btn").text($("#lnb .dropdown-menu > li.active > a").text());
			} else {
				$("#lnb .btn").text("Select");
			}
		});
	})(jQuery);
</script>

</body>
</html>