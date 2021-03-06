
<?php
$title = "Kas ir trifeles?"
?>


<body>	

@extends ('layout')

@section('content')

<div class="content">

<a href="{{route('welcome')}}" class="button"><-- Atpakaļ</a>

	<div class="section1">

		<h3>Kas ir trifeles?</h3>

		<p>Trifeles - tās ir sēnes ar pazemes mīkstajiem auglīgiem ķermeņiem. Trifeles aug mērenā klimata zonās abās puslodēs ozolu un dižskābaržu audzēs. Jūs varat atrast trifeles dienvidu Francijā un Ziemeļitālijā, Austrumeiropā un pat Maskavas reģionā. Trifeles nogatavojas pazemē līdz 30 cm dziļumam, kas liek gardēžiem meklēt aizvien jaunus ieguves veidus. </p>
		<p>Veids, kā audzēt trifeles, tika atklāts tikai 21. gadsimta sākumā. Trifeles nepārsteidz sevi ar ārējo skaistumu, lielākoties viņas atgādina kartupeļu bumbuļus. Svara ziņā trifeles var sasniegt pat kilogramu, bet ir arī daži mazi īpatņi, kas lieluma ziņā ir kā zirņi. Visvērtīgākās trifeļu sugas - baltās trifeles un melnās trifeles. Tikai šīs sēnes var lepoties ar savu slaveno "trifeļu" aromātu.</p>

	</div>
	
	<div class="section2">

		<div class="column">

			<ul class="saraksts">
			<li>
					<h4>Kas ir trifeles?</h4>
					<p> Trifeles - tās ir sēnes ar pazemes mīkstajiem auglīgiem ķermeņiem. Trifeles aug mērenā klimata zonās abās puslodēs ozolu un dižskābaržu audzēs. </p>
			
			</li>
		
			<li>
					<h4>Fakti par trifelem</h4>
					<p>Trifeles ir izvēlējušas savu stratēģiju izdzīvošanai uz mūsu planētas. Šīs sēnes izvēlās slēpties zem zemes</p>
			</li>
		</ul>
		</div>

	<div class="column">
		<div id="video">
            <h3>Specifisks sēņošanas paveids ir pazemē augošo trifeļu vākšana</h3>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/ApAq7enaINM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ></iframe>
        </div>
	</div>
	</div>
</div>
    @endsection 
</body>