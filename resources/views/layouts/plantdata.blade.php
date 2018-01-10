<!DOCTYPE html>
<html>
<head>
	<title>{{$rec->title}}</title>
	@include ('includes.headerlib')
</head>
<body>
	@include ('includes.navbar')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<img class="img-fluid" style="max-width: 100%;height:auto;border: 1px solid #3c9a5f;" src="{{asset('/imgs/plants/'.$rec->img_src)}}">
			</div>
			<div class="col-md-8">
				<div class="panel panel-success panel-transparent">
					<div class="panel-heading" >
						<h2 class="panel-title larger-panel-title"><i class="fa fa-tree"></i> {{$rec->title}}</h2>
					</div>
					<div class="panel-body">
		        <p><strong>ชื่อสามัญ (common name) : </strong>{{$rec->c_name}}</p>
						<p><strong>ชื่ออังกฤษ (english name) : </strong>{{$rec->eng_name}}</p>
						<p><strong>ชื่อวิทยาศาสตร์ (scientific name) : </strong><i>{{$rec->s_name}}</i></p>

						<strong>ลักษณะทางกายภาพ</strong>
						<p>{{$rec->anatomy}}</p>

						<strong>คุณประโยชน์</strong>
						<p>{{$rec->usage}}</p>

						<strong>สถานที่ที่พบ</strong>
						<ul>
							<li><strong>บริเวณที่พบในธรรมชาติ:</strong> {{$rec->area}}</li>
							<li><strong>บริเวณที่พบในเตรียมอุดม:</strong> {{$rec->at_school}}</li>
						</ul>
						@isset ($rec->trivia)
						<strong>เรื่องน่ารู้</strong>
						<p>{{$rec->trivia}}</p>
						@endisset
					</div>
				</div>
			</div>
		</div>
	</div>
	@include("includes.footer")
</body>
</html>
