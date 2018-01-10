<!DOCTYPE html>
<html>
<head>
	<title>ฐานข้อมูลพรรณไม้</title>
	@include ('includes.headerlib')
</head>
<body>
	@include ('includes.navbar')
	<div class="container-fluid">
		<div class="row form-group has-success">
			<form action="{{ url('/plant_search') }}" method="POST">
				<label for="inputSearch" class="col-md-2" style="text-align:center">
					<h4>ค้นหาพรรณไม้</h4>
				</label>
				<div class="col-md-8">
					<input type="text" class="form-control" id="inputSearch" name="inputSearch" placeholder="ชื่อต้นไม้">
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-defualt btn-block btn-success">ค้นหา</button>
				</div>
				{{ csrf_field() }}
			</form>
		</div>
		@isset($plants[0])
			<div class="panel panel-success panel-transparent" style="margin-top: 2%">
				<div class="panel-heading">
					<h2 class="panel-title larger-panel-title"><i class="fa fa-tree"></i> พรรณไม้</h2>
				</div>
				<div class="panel-body" style="margin-left: 1%">
					<ul class="list-group">
						@foreach($plants as $plant)
						<li class="list-group-item">
							<div class="row">
								<div class="col-md-3">
									<img height="50%" width="50%" style="margin:auto; display:block;"  src="{{asset('/imgs/plants/'.$plant->img_src)}}">
								</div>
								<div class="col-md-9">
									<a href="{{ url('/plant_data/'.$plant->id)}}"><h4>{{$plant->c_name}}</h4></a>
									<div style="margin-left: 1%">
										{{$plant->anatomy}}
									</div>
								</div>
							</div>
						</li>
						@endforeach
					</ul>
					{{$plants->links('includes.paginator')}}
				</div>
			</div>
		@endisset
		@empty($plants)
			<div class="jumbotron">
				<h1>ไม่พบข้อมูล</h1>
			</div>
		@endempty
	</div>
	@include ('includes.footer')
</body>
</html>
