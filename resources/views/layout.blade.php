<!DOCTYPE html>
<html>
<head>
<link href="/css/style.css" rel="stylesheet">
<link href="/css/favicon.jpg" rel="icon" type="image/x-icon">
	<meta charset="UTF-8">
    <title >Latvijas trifeļu entuziasti</title>
</head>
<header>    	
		<div class="info">
			<a href="{{route('welcome')}}"> 
			<img src="/img/logo.png" class="logo" alt="Heading image">
			</a>
		<h2>Latvijas trifeļu entuziasti</h2>
		</div>
		
		<div class="nav">
		<button class="button2" onclick="openNav()">&#9776; Menu</button>
		</div>
	
   <div id="myNav" class="overlay">

	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
	<div class="overlay-content"> 
	<a href="{{route('welcome')}}">Galvenā</a>
	<a href="{{route('kas_ir_trifeles')}}">Kas ir trifeles?</a>
	  <a href="#numlist">Trifeļu īpašības</a>
	  <a href="{{route('trifelu_fakti')}}">Fakti par trifelem</a>
	  <a href="{{route('trifelu_fakti')}}">DASHBOARD</a>
	</div>

	</div>
  
  <div class="maintitle">
		<h1><strong><?php echo $title;?></strong></h1> 
  </div>
	
	</header>

	@yield('content')


    <footer>
	<h2>Page footer</h2>
</footer>
</html>

<script src="{{url('/js/main.js')}}"></script>
