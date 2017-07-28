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