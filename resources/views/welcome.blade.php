

<?php
$title = "Uzsāc vērtigo trifeļu audzēšanu savā saimniecībā!"
?>
	

<body>	

@extends ('layout')

@section('content')
	
<div class="content">

	
	<div class="section1">
<a href="{{route('login')}}" class="button">Login</a>
<a href="{{route('register')}}" class="button">Register</a>
	
		<h3>Latvijas trifeļu dārzi</h3>

		<p>Audzēt trifeles – šīs izsmalcinātās un vērtīgās sēnes – mākslīgi ir mēģināts jau izsenis, bet tikai apmēram pirms četrdesmit gadiem Francijā ieviesa kultivēšanas metodi, īpaši izvēlētos dārzos stādot ozolus, lazdas un citus kokus, kuri inficēti ar trifelēm. Tagad iespēja audzēt trifeles paradijas arī latvijas lauksaimniekiem.</p>
		<p>2010. gada vasaras sākumā Latvijā viesojās trifeļu audzētājs un Eiropas trifeļu zinātniskās grupas viceprezidents Salems Šameks no Somijas. Vizītes laikā viņš dalījies pieredzē par neparastu lauksaimniecības kultūraugu audzēšanas iespējām. Pēc šīs vizītes Latvijas Mikologu biedrība kopā ar Latvijas Zemkopības ministriju ir pasludinājuši projektu “Latvijas trifeļu dārzi”.</p>
		<p>Projekta ietvaros jebkurš entuziasts var saņemt līdz 100 ar trifeļu miceliju apstrādātas kociņas un vērtīgus padomus ka stādīt tos savā saimniecībā. Tie ir speciāli sēņu audzēšanai piemēroti kociņi ar micēliju. Svarīgi, ka tie ir arī aprobēti ziemeļu klimatam.</p>
		
	</div>
	
	<div class="section2">

		<div class="column">

			<ul class="saraksts">
			<li>
					<h4>Kas ir trifeles?</h4>
					<p> Trifeles - tās ir sēnes ar pazemes mīkstajiem auglīgiem ķermeņiem. Trifeles aug mērenā klimata zonās abās puslodēs ozolu un dižskābaržu audzēs. <a href="{{route('kas_ir_trifeles')}}"><strong><em>Lasīt tālāk</em></strong></a>
			
			</li>
			<li>
					<h4>Trifeļu vērtīgās īpašības</h4>
					<p>Trifeļu vērtība ir to sastāvā esošais B1 vitamīns, kas ir svarīgs cilvēkiem ar imūndeficīta un zarnu mikrofloras traucējumiem <a href="#numlist"><strong><em>Lasīt tālāk</em></strong></a>
			</li>
			<li>
					<h4>Fakti par trifelem</h4>
					<p>Trifeles ir izvēlējušas savu stratēģiju izdzīvošanai uz mūsu planētas. Šīs sēnes izvēlās slēpties zem zemes  <a href="{{route('trifelu_fakti')}}"><strong><em>Lasīt tālāk</em></strong></a>
			</li>
		</ul>
		</div>

	<div class="column">
		<img src="https://media.springernature.com/full/springer-static/image/art%3A10.1186%2Fs40694-020-00097-x/MediaObjects/40694_2020_97_Fig2_HTML.png" class="img1" alt="Section image">
		
	</div>
	</div>


	
	<div class="section1" id="numlist">

		<h3>Trifeļu vērtīgās īpašības</h3>
		
		<p>Trifeļu vērtība ir to sastāvā esošais B1 vitamīns, kas ir svarīgs cilvēkiem ar imūndeficīta un zarnu mikrofloras traucējumiem. Pateicoties riboflavīna klātbūtnei sēnēs, to izmantošana pārtikā palīdz izārstēt gastrītu, nervu sistēmas traucējumus, hroniskus kolītus un ādas slimības. Neapšaubāma trifeļu priekšrocība ir tās spēja uzlabot imūnsistēmu.</p>
		
		<ul>
				
				<div>
					
					<li><h4>Trifeļu sastāvs</h4></li>
					<ol>
						<li>Pelni - 1g</li>
						<li>Ūdens - 90g</li>
						<li>Šķiedrvielas - 1g</li>
						<li>Olbaltumvielas - 3g</li>
						<li>Tauki - 0,5 g</li>
					</ol>
				</div>	
				<div>
					
					<li><h4>Trifeļu vitamīni</h4></li>
					<ol>
						<li>Vitamīns PP ( niacīna ekvivalents) - 9498 mg/li>
						<li>ŪC vitamīns - 6mg/li>
						<li>B2 vitamīns ( riboflavīns ) 0,4 mg</li>
						<li>B1 vitamīns ( tiamīns ) 0.02 mg</li>
					</ol>
				</div>	
		</ul>
	</div>
	

	<div>

		<div class="form">
			<div class="form">
				<form action="/saveForm" method="POST">
					<h3>Saņemt bezmaksas kociņas</h3>
					<div style="margin-top: 10px; display: flex; flex-direction: column;">
						
						<label class="input" for="name">Jūsu vārds</label>
				
						<input class="input" type="text" placeholder="Vārds un uzvārds" id="name" required>
					</div>
				
					<div style="margin-top: 10px; display: flex; flex-direction: column;">
						<label for="kocinu-skaits">Cik kociņas gribāt pasūtīt?</label>
						<select>
							<option value="1">10 kociņas</option>
							<option value="2">20 kociņas</option>
							<option value="3">50 kociņas</option>
							<option value="4s">100 kociņas</option>
						</select>
					</div>

					<div style="margin-top: 10px; display: flex; flex-direction: column;">
					
						<textarea style="margin-top: 10px;" rows="5" cols="10"  placeholder="Jūsu komentārs" id="name"></textarea>
					</div>
		
					<div style="margin-top:20px; display: flex; justify-content: center;"">
						<!-- Submit tips saka pārlūkprogrammai, ka šo formu ir jāapstrādā un jāaizsūtā uz serveri
							 Kura vieta serverī atbildes par šo nosaka attribūti action un method
						-->
						<input class="button" type="submit" value="Apstiprināt">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection 
</body>
