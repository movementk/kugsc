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
		$(".tabs .btn").text($(this).text());
	});
	
	// 해상도: All
	// 설명: TAB의 active 클래스 항목을 자동 입력 시키기
	$(window).on("load", function() {
		if ($(".tabs .dropdown-menu > ul > li.active").length == 1) {
			$(".tabs .btn").text($(".tabs .dropdown-menu > ul > li.active > a").text());
		} else {
			$(".tabs .btn").text("Select Menu");
		}
	});
})(jQuery);