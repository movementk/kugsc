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
	
	// 해상도: All
	// 설명: 스크롤 시 body에 scrolled 클래스 추가
	$(window).on("scroll", function() {
		if ($(this).scrollTop() > 0) {
			$("body").addClass("scrolled");
		} else {
			$("body").removeClass("scrolled");
		}
	});
})(jQuery);