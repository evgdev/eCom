<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-commerce Project</title>

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
	{{View::make('header')}}
	@yield('content')
	{{View::make('footer')}}	
</body>
<style>
	.container {
		padding: 20px;
	}
	.navbar {
		margin:0px;
	}
	.custom-login{
		height: 100vh;
		padding-top: 100px;
	}

@media (min-width: 1300px) {
	.main-slider {
		width: 1200px;
		margin: 0 auto;
	}

}
	img.slider-img {
		height: 400px !important;
	}
	.custom-product {
		height: 600px;
	}
	.carousel-caption {
		background: #6e666699;
		margin-top:0px;
		padding-top:0px;
	}
	.slider-text {
		background-color: #35443585 !important;
	}
	.trending-image {
		height:100px;
	}
	.trending-item {
	display: flex;
	}
	.trending-wrapper-items {
		padding-top:10px;
	display: flex;
	margin:auto;
	justify-content: space-around;
	}
	.footer {
		clear:both;
		margin-top:50px;
	}
	.margin-left-10 {
		margin-left:50px;
	}
	.detail-img {
		height: 200px;
	}
	.button-area {
		margin-top: 40px;
	}
	.search-box {
		width:500px !important;
	}
	.search-wrapper-items {
		display: flex;
  		justify-content: center;
	}
	.search-item {
		margin-left: 50px;
		display: flex;
	}
</style>
</html>