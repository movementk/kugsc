<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/js/common.js"></script>
<script src="/assets/js/common_sub.js"></script>

<!-- 구글맵 연동 -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBV_5tzP2rxKQqcEJi_wKoJ87cFDts9RsU&signed_in=true"></script>
<script>
function google_init(x,y,target) {
	var map;
	var myLatlng = new google.maps.LatLng(x,y);
	var myOptions = {
		zoom: 16,
		center: myLatlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}

	var map = new google.maps.Map(document.getElementById(target), myOptions);

	var image = "/assets/images/kugsc-marker.png";

	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		icon: image
	});
}
</script>
