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
			$("#lnb .btn").text("Select Menu");
		}
	});
	
	// 해상도: = xs
	// 설명: TAB의 항목 선택 시 제목 자동 입력 시키기
	$(document).on("click", ".tabs .dropdown-menu > ul > li > a", function(e) {
		$(".tabs .btn").html($(this).html());
	});
	
	// 해상도: All
	// 설명: TAB의 active 클래스 항목을 자동 입력 시키기
	$(window).on("load", function() {
		if ($(".tabs .dropdown-menu > ul > li.active").length == 1) {
			$(".tabs .btn").html($(".tabs .dropdown-menu > ul > li.active > a").html());
		} else {
			$(".tabs .btn").html("Select Menu");
		}
		if($(window).width() >= 1280){
			//$("body, html").scrollTop(350);
			if(location.href.indexOf("kakao=1") <= 1){
				$('html, body').stop().animate({
					scrollTop: 350
				}, 500, 'swing');
			}
		}
	});
	
	// 해상도: All
	// 설명: 스크롤 시 탑으로 이동하는 버튼
	$(window).on("scroll", function() {
		if ($(this).scrollTop() > 315) {
			$("#goto-top").show();
		} else {
			$("#goto-top").hide();
		}
	});
	
	// 해상도: All
	// 설명: 스크롤 최상단으로 이동
	$(document).on("click", "#goto-top", function(e) {
		$('html, body').stop().animate({
			scrollTop: 0
		}, 1000, 'swing');
		e.preventDefault();
	});
	
})(jQuery);