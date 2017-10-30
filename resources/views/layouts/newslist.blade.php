<!DOCTYPE html>
<html>
<head>
	<title>ข่าวประชาสัมพันธ์</title>
	@include ('includes.headerlib')
</head>
<body>
	@include ('includes.navbar')
	<div class="container-fluid">
		@isset($recs)
			<div class="panel panel-success panel-transparent" style="margin-top: 2%">
				<div class="panel-heading">
					<h2 class="panel-title larger-panel-title"><i class="fa fa-info-circle"></i> ข่าวประชาสัมพันธ์</h2>
				</div>
				<div class="panel-body" style="margin-left: 1%">
					<ul class="list-group">
						@foreach($recs as $rec)
						<li class="list-group-item">
							<div class="row">
								<div class="col-md-9 offset-md-1">
                  <a href="{{ url('/news/'.$rec->id)}}"><h4>{{$rec->title}}</h4></a>
								</div>
								<div class="col-md-2">
									<h6><i class="fa fa-calendar"> </i> {{$rec->created_at}}</h6>
								</div>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		@endisset
		@empty($recs)
			<div class="jumbotron">
				<h1>ไม่พบข้อมูล</h1>
			</div>
		@endempty
	</div>
	@include ('includes.footer')
</body>
</html>
