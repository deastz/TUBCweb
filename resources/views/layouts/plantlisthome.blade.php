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
					<input type="text" class="form-control typeahead"  name="inputSearch" placeholder="ชื่อต้นไม้">
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-defualt btn-block btn-success">ค้นหา</button>
				</div>
				{{ csrf_field() }}
			</form>
		</div>
		<div class="row">
			<div class="col-md-3" style="height:20em; background-color:red">
			</div>
			<div class="col-md-3" style="height:20em; background-color:yellow">
			</div>
			<div class="col-md-3" style="height:20em; background-color:blue">
			</div>
			<div class="col-md-3" style="height:20em; background-color:brown">
			</div>
		</div>
	</div>
	@include ('includes.footer')
</body>
</html>
