<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KOREA UNIVERSITY THE OFFICE OF INTERNATIONAL AFFAIRS</title>
	<link href="/assets/fontello/css/fontello.css" rel="stylesheet">
	<link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/default.css" rel="stylesheet">
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" style="height: 1000px; background-color: #666;">

	<section id="">
		
	</section>
	
</main>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>

<script>
	(function($) {
		
		// 해상도: = lg
		// 설명: 상단 gnb 관련 이벤트
		$(document).on("mouseenter focusin", "#header .nav > ul > li > a", function() {
			$("body").addClass("nav-expanded");
			$(this).parent().siblings(".active").removeClass("active");
			$(this).parent().addClass("active");
		});
		$(document).on("mouseleave", "#header", function() {
			$("body").removeClass("nav-expanded");
			$(this).find(".nav > ul > li").removeClass("active");
		});
		
		// 해상도: < lg
		// 설명: 사이드 네비게이션 열기, 닫기 이벤트
		$(document).on("click", "#header .btn-nav-open", function() {
			$('body').addClass('nav-opened');
		});
		$(document).on("click", "#side-nav", function(e) {
			if ($(e.target).attr('id') == "side-nav") {
				$('body').removeClass('nav-opened');
			}
		});
		$(document).on('click', '#side-nav .btn-nav-close', function() {
			$('body').removeClass('nav-opened');
		});
		$(document).on('click', '#side-nav .nav-body ul li a', function(e) {
			if ($(this).siblings('ul').length > 0) {
				if ($(this).parent().hasClass('active')) {
					$(this).parent().removeClass('active');
				} else {
					$(this).parent().siblings('.active').removeClass('active');
					$(this).parent().addClass('active');
				}
				e.preventDefault();
			}
		});
	})(jQuery);
</script>

</body>
</html>