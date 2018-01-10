<!DOCTYPE html>
<html>
<head>
	<title>สวนพฤกษศาสตร์โรงเรียนเตรียมอุดมศึกษา</title>
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
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="{{ asset('/imgs/slide1.jpg') }}" alt="Los Angeles">
		    </div>

		    <div class="item">
		      <img src="{{ asset('/imgs/holder.jpg') }}" alt="Chicago">
		    </div>

		    <div class="item">
		      <img src="{{ asset('/imgs/holder.jpg') }}" alt="New York">
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="fa fa-chevron-left" style="position: absolute;top: 50%;"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="fa fa-chevron-right" style="position: absolute;top: 50%;"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		<div class="row">

			<div class="col-md-4">
				<div class="panel panel-info panel-transparent" style="margin-top: 2%">
					<div class="panel-heading">
						<h1 class="panel-title larger-panel-title"><i class="fa fa-info-circle"></i> ข่าวประชาสัมพันธ์</h1>
					</div>
					<div class="panel-body" style="padding-bottom: 0px">
						<ul class="list-group" style="text-align: center;">
							@isset($newsrecs)
								@foreach($newsrecs as $rec)
							<li class="list-group-item row">
								<a href="{{ url('/news/'.$rec->id)}}">{{$rec->title}}</a>
							</li>
								@endforeach
							@endisset
						</ul>
						<div class="row align-items-end">
							<a href="{{ url('/newslist') }}" class="btn btn-lg btn-block btn-info" role="button">ดูข่าวทั้งหมด <i class="fa fa-chevron-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-success panel-transparent" style="margin-top: 2%">
					<div class="panel panel-heading" style="margin-bottom: 0px">
						<h1 class="panel-title"><i class="fa fa-file-text-o"></i> งานบูรณาการสวนพฤกษศาสตร์</h1>
					</div>
					<div class="panel-body" style="text-align: center">
						<h2><br>Coming Soon!<br>&nbsp;</h2>
						<!--<div class="row">
							<div class="col-sm-6" style="margin-bottom: 3%;">
								<a href="" class="btn btn-info align-self-center btn-block col-sm-12">ภาษาไทย</a>
							</div>
							<div class="col-sm-6" style="margin-bottom: 3%;">
								<a href="" class="btn btn-danger align-self-center btn-block col-sm-12">ภาษาอังกฤษ</a>
							</div>
						</div>
						<div class="row" style="text-align: center">
							<div class="col-sm-6" style="margin-bottom: 3%;">
								<a href="" class="btn btn-warning align-self-center btn-block col-sm-12">สังคมศึกษา</a>
							</div>
							<div class="col-sm-6" style="margin-bottom: 3%;">
								<a href="" class="btn btn-success align-self-center btn-block col-sm-12">วิทยาศาสตร์</a>
							</div>
						</div>-->
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-transparent" style="margin-top: 2%;border-color: #4267B2">
					<div class="panel-heading" style="background-color: #4267B2;border-color: #4267B2">
						<h1 class="panel-title larger-panel-title" style="color: white"><i class="fa fa-facebook-square"></i> Facebook</h1>
					</div>
					<div class="panel-body">
						<div class="fb-page" data-href="https://www.facebook.com/TUBCofficial/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/TUBCofficial/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TUBCofficial/">TUBC - งานสวนพฤกษศาสตร์โรงเรียน โรงเรียนเตรียมอุดมศึกษา</a></blockquote></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include("includes.footer")
</body>
</html>
