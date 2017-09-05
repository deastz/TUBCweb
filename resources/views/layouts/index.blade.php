<!DOCTYPE html>
<html>
<head>
	<title>สวนพฤกษศาสตร์โรงเรียนเตรียมอุดมศึกษา</title>
	@include ('includes.headerlib')
</head>
<body>
	@include ('includes.navbar')
	<div class="container-fluid">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="min-width: 50%;min-height: 50%">
  		<ol class="carousel-indicators">
  		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
   	 	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   	 	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		</ol>
  	<div class="carousel-inner">
    	<div class="carousel-item active">
      	<img class="d-block w-100" style="width: 50%;height: 50%" src="{{ asset('/imgs/slide1.jpg') }}" alt="First slide">
    	</div>
    	<div class="carousel-item">
    	  <img class="d-block w-100" src="..." alt="Second slide">
 	   </div>
  	  <div class="carousel-item">
    	  <img class="d-block w-100" src="..." alt="Third slide">
	    </div>
  	</div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
 	 	</a>
 	 	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
 	   <span class="carousel-control-next-icon" aria-hidden="true"></span>
  	</a>
	</div>
		<div class="container" style="margin-top: 2%">
			<span class="oi oi-info"></span><h2>ข่าวประชาสัมพันธ์</h2>
			<ul class="list-group" style="text-align: center">
				<li class="list-group-item">
					<a href="">รายละเอีดค่ายสวนพฤกษศาสตร์ต.อ.ปี๒๕๖๐</a>
				</li>
				<li class="list-group-item">
					<a href="">รายละเอีดค่ายสวนพฤกษศาสตร์ต.อ.ปี๒๕๖๐</a>
				</li>
				<li class="list-group-item">
					<a href="">รายละเอีดค่ายสวนพฤกษศาสตร์ต.อ.ปี๒๕๖๐</a>
				</li>
				<li class="list-group-item">
					<a href="">รายละเอีดค่ายสวนพฤกษศาสตร์ต.อ.ปี๒๕๖๐</a>
				</li>
			</ul>
		</div>
		<div class="container" style="margin-top: 2%">
			<span class="oi oi-info"></span><h2>งานบูรณาการสวนพฤกษศาสตร์</h2>
			<div class="row" style="text-align: center">
				<div class="col">
					<a href="">ภาษาไทย</a>
				</div>
				<div class="col">
					<a href="">ภาษาอัวกฤษ</a>
				</div>
			</div>
			<div class="row" style="text-align: center">
				<div class="col">
					<a href="">สังคมศึกษา</a>
				</div>
				<div class="col">
					<a href="">วิทยาศาสตร์</a>
				</div>
			</div>
		</div>
	</div>
	@include("includes.footer")
</body>
</html>