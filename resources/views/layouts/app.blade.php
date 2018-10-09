<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@include('layouts/head')

	<style>
		body{
			background-image: url( {{ asset('images/banner.jpg') }} );
		}

		footer{
			background-color: #343A40;
			color: #fff;
		}
	</style>
</head>
<body>
	
	@include('layouts/header')

	@section('main-content')



	@show

	
	@include('layouts/footer')


</body>
</html>