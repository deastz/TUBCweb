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
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-info" style="margin-top: 2%">
					<div class="panel-heading">
						<h1 class="panel-title larger-panel-title"><i class="fa fa-info"></i> ข่าวประชาสัมพันธ์</h1>
					</div>
					<div class="panel-body">
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
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-success" style="margin-top: 2%">
					<div class="panel panel-heading">
						<h1 class="panel-title">งานบูรณาการสวนพฤกษศาสตร์</h1>
					</div>
					<div class="panel-body">
						<div class="row" style="text-align: center">
							<a href="" class="btn btn-info col-sm-4 col-md-offset-1">ภาษาไทย</a>
							<a href="" class="btn btn-danger col-sm-4 col-md-offset-2">ภาษาอัวกฤษ</a>
						</div>
						<br>
						<div class="row" style="text-align: center">
							<a href="" class="btn btn-warning col-sm-4 col-md-offset-1">สังคมศึกษา</a>
							<a href="" class="btn btn-success col-sm-4 col-md-offset-2">วิทยาศาสตร์</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include("includes.footer")
</body>
</html>