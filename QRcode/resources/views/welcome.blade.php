<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Absensi Karyawan</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
	</head>
	<body>
		<div id="app"></div>
        @vite('resources/js/app.js')
		<form class="text-center" action="{{route('generate')}}" method="get" accept-charset="utf-8">
			<div class="row mt-5">
				<div class="col-md-12">
					<h2>Absensi</h2>
					<button class="btn btn-success" type="submit">Generate</button> 
					<a href="{{asset('qrcode.png')}}" class="btn btn-primary" download>Download</a><br>
					<img class="img-thumbnail" src="{{asset('qrcode.png')}}" width="150" height="150" style="margin-top: 20px">
				</div>
			</div>
		</form>
	</body>
	<script>
		
	</script>
</html>


