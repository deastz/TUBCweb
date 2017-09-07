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
		<div class="container" style="margin-top: 2%">
		<span class="oi oi-chat"></span><h2>ติดต่อเรา</h2>
			<div class="container" style="background-color: #a4f298">
				<strong>สถานที่ที่สามารถติดต่อได้:</strong>
				<br>
				<p>ติดต่ออาจารย์ผู้ดูแล นายพัฒนา  สุทธิรอด ที่ห้องพักอาจารย์เรือนเกษตร ข้างตึกเฉลิมพระเกียรติ 60 ปี</p>
				<p>ติดต่อประธานกรรมการกลาง นายณภัทร	 อัฑฒ์สุขิตกุล ตึก 2 ห้อง 125</p>
				<strong>ติดต่อออนไลน์:</strong>
				<br>
				<div class="fb-page" data-href="https://web.facebook.com/TUBCofficial/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"></div>
				<br>
				<br>
				<p>หรือส่ง email มาที่ <a href="mailto:triamudom.botany@gmail.com">triamudom.botany@gmail.com</a></p>
			</div>
		</div>
	</div>
	@include("includes.footer")
</body>
</html>
