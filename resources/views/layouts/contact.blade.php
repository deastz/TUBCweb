<!DOCTYPE html>
<html>
<head>
	<title>ติดต่อเรา</title>
	@include ('includes.headerlib')
</head>
<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	@include ('includes.navbar')
	<div class="container-fluid">
		<div class="panel panel-success panel-transparent" style="margin-top: 2%">
			<div class="panel-heading">
				<h2 class="panel-title"><i class="fa fa-comments"></i> ติดต่อเรา</h2>
			</div>
			<div class="panel-body">
				<strong><i class="fa fa-map-marker"></i> สถานที่ที่สามารถติดต่อได้:</strong>
				<br>
				<p>ติดต่ออาจารย์ผู้ดูแล นายพัฒนา  สุทธิรอด ที่ห้องพักอาจารย์เรือนเกษตร ข้างตึกเฉลิมพระเกียรติ 60 ปี</p>
				<p>ติดต่อประธานกรรมการกลาง นายณภัทร	 อัฑฒ์สุขิตกุล ตึก 2 ห้อง 125</p>
				<strong><i class="fa fa-globe"></i> ติดต่อออนไลน์:</strong>
				<br>
				<div class="fb-page" data-href="https://web.facebook.com/TUBCofficial/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"></div>
				<br>
				<br>
				<p><i class="fa fa-envelope"></i> triamudom.botany@gmail.com</p>
			</div>
		</div>
	</div>
	@include("includes.footer")
</body>
</html>
