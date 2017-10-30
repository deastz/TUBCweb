<!DOCTYPE html>
<html>
<head>
	<title>{{$rec->title}}</title>
	@include ('includes.headerlib')
</head>
<body>
	@include ('includes.navbar')
	<div class="container-fluid">
		<div class="panel panel-success panel-transparent" style="margin-top: 2%">
			<div class="panel-heading">
				<h2 class="panel-title larger-panel-title"><i class="fa fa-info-circle"></i> {{$rec->title}}</h2>
			</div>
			<div class="panel-body">
				@isset($rec->img_src)
					<img src="{{$rec->img_src}}" style="margin:auto;display:block;">
				@endisset
				<br>
				<p>{{"\t".$rec->detail}}<p>
				<br>
				<p align="right"><i class="fa fa-calendar"> </i> {{$rec->created_at}}</p>
			</div>
		</div>
	</div>
	@include("includes.footer")
</body>
</html>
