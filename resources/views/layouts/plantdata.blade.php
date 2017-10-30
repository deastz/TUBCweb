<!DOCTYPE html>
<html>
<head>
	<title>{{$rec->c_name}}</title>
	@include ('includes.headerlib')
</head>
<body>
	@include ('includes.navbar')
	<div class="container-fluid">
		<img style="display:block;margin:auto;" height="25%" width="25%" src="{{$rec->img_src}}">
		<div class="panel panel-success panel-transparent" style="margin-top: 2%">
			<div class="panel-heading">
				<h2 class="panel-title larger-panel-title"><i class="fa fa-tree"> ข้อมูลพรรณไม้</h2>
			</div>
			<div class="panel-body">
        <p><strong>ชื่อสามัญ (common name): </strong>{{$rec->c_name}}</p>
				<p><strong>ชื่อวิทยาศาสตร์ (scientific name): </strong><i>{{$rec->s_name}}</i><p>
				<p>{{"\t".$rec->sum}}</p>

				<strong>ลักษณะทางกายภาพ</strong>
				<p>{{$rec->anatomy}}</p>

				<strong>คุณประโยชน์</strong>
				<p>{{$rec->usage}}</p>

				<strong>สถานที่ที่พบ</strong>
				<ul>
					<li><strong>บริเวณที่พบในธรรมชาติ:</strong> {{$rec->place}}</li>
					<li><strong>บริเวณที่พบในเตรียมอุดม:</strong> gogogog</li>
				</ul>
			</div>
		</div>
	</div>
	@include("includes.footer")
</body>
</html>
