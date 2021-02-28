<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mobile shop</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}

</body>
<style>
	.custom-login{
		height: 400px;
		padding: 100px;
	}
	.product-login
	{
		height:600px;
	}

	img.slider-img
	{
		height:200px;
	}
	.trending-img
	{
		height:100px;
	}
	.trend-item
	{
		float: left;
		width: 20%;
	}
	
	.trend-wrapper
	{
		margin: 20px;
	}
	.detail-img
	{
		height: 400px;
	}
	.cart-list-dividor
	{
		border-bottom: 2px soild black;
	}
	.product-link
	{
		text-decoration:none;
		color:black;
	}
</style>
</html>