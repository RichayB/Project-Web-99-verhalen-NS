<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="shortcut icon" type="image/png" href="images/ns_favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>NS | Verhalen zoeken</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--Header with navigation-->
    <?php include("includes/header.php");?>
    
    <!--Page banner image-->
    <div class="page_banner" ></div>
    
    <!--Main content-->
    <main>
       	<header id="stories_page_banner"></header>
        <!--Main header-->
        <section>
           <article id="search_main_panel" class="main_panel">
				<h1>Zoek een verhaal</h1>
				<p>Browse door alle verhalen heen, zoek aan de hand van termen of gebruik de filter- en sorteeropties.</p>
				<form action="zoeken.php" method="get">
					<input id="search_bar" type="text" name="search_submit" placeholder="titel, genre of trefwoord">
					<button class="cta_blue align_right" type="submit" name="search_submit">Zoeken</button>
				</form>
            </article>
        </section>
        <!--Filter and sort buttons-->
        <section id="filter_sort">
           <button id="filter_button"  class="cta_grey">Filter</button>
           <select id="sort_button" class="cta_grey">
               <option value="" selected>Sorteer</option>
               <option value="">Aflabetisch</option>
               <option value="">Duratie</option>
               <option value="">Likes</option>
               <option value="">Reacties</option>
           </select>
        </section>
        <section id="search_main_content">
        	<!--Filter options-->
        	<section id="filter_options">
				<header>
					<h3>Resultaten verfijnen</h3>
					<button id="filter_close_button"></button>
				</header>
				<form>
					<div>
					  <fieldset>
						<legend>Duratie</legend>
						<span class="checkbox">
							<input id="5_10_minutes" type="checkbox" name="5_10_minutes" value="5_10_minutes">
							<label for="5_10_minutes">5 - 10 minuten</label>
						</span>
						<span class="checkbox">
							<input id="10_20_minutes" type="checkbox" name="10_20_minutes" value="10_20_minutes">
							<label for="10_20_minutes">10 - 20 minuten</label>
						</span>
						<span class="checkbox">
							<input id="plus_20_minutes" type="checkbox" name="plus_20_minutes" value="plus_20_minutes"> 
							<label for="plus_20_minutes"> 20 minuten</label>
						</span>
					  </fieldset>

					  <fieldset>
						<legend>Soort</legend>
						<span class="checkbox">
							<input id="dichtvorm" type="checkbox" name="dichtvorm" value="dichtvorm"> 
							<label for="dichtvorm">Dichtvorm</label>
						</span>
						<span class="checkbox">
							<input id="lied" type="checkbox" name="lied" value="lied">
							<label for="lied">Lied</label>
						</span>
						<span class="checkbox">
							<input id="verhaal" type="checkbox" name="verhaal" value="verhaal">
							<label for="verhaal">Verhaal</label>
						 </span>
					  </fieldset>

					  <fieldset>
						<legend>Thema</legend>
						<span class="checkbox">
							<input id="aandoening" type="checkbox" name="aandoening" value="aandoening">
							<label for="aandoening">Aandoening</label>
						</span>
						<span class=checkbox_label>
							<input id="fictie" type="checkbox" name="fictie" value="fictie">
							<label for="fictie">Fictie</label>
						</span>
						<span class="checkbox">
							<input id="gevoel" type="checkbox" name="gevoel" value="gevoel">
							<label for="gevoel">Gevoel</label>
						</span>
						<span class="checkbox">
							<input id="komisch" type="checkbox" name="komisch value="komisch> 
							<label for="komisch">Komisch</label>
						</span>
						<span class="checkbox">
							<input id="science_fiction" type="checkbox" name="science_fiction" value="science_fiction"> 
							<label for="science_fiction">Science-fiction</label>
						</span>
						<span class="checkbox">
							<input id="sport" type="checkbox" name="sport" value="sport">
							<label for="sport">Sport</label>
						</span>
					  </fieldset>
					</div>
				  	<div>
					  <button class="cta_blue" type="submit" value="Bekijk 32 resultaten">Bekijk 38 resultaten</button>
					  <button class="cta_grey delete_icon" type="reset" value="Wis alle filters">Wis alle filters</button>
				  	</div>
				</form>
			</section>
        	<!--Results-->
        	<section id="results">
            <h2>32 resultaten</h2>
            <!--Story-->
            <!--Future plans: Articles will be generated using JavaScript-->
            <article class="story">
				<!--Story header image-->
				<header class="alzheimer_header"></header>
				<!--Story text-->
				<div>
					<h3>Alzheimer</h3>
					<p>Ik stap uit, euh... Hoe heet het? Zo’n vervoersdinges op wielen. Van de gemeente. Wit met blauw. Kom. Lijn 12. Of was het 21? Ik weet het niet. Ik stap uit en loop achter een wagentje aan. Van wie is dat wagentje? Ik weet het niet. [...]</p>
				</div>
				<!--Story footer-->
				<footer>
					<!--Likes, comments and duration-->
					<div class="footer_left">
						<!--Likes-->
						<div>
							<button class="icon" type="button"></button> <!--Like icon-->
							<span>46</span> <!--Like counter-->
						</div>
						<!--Comments-->
						<div>
							<a class="icon" href=""></a> <!--Comment icon-->
							<span>25</span> <!--Comment counter-->
						</div>
						<!--Duration-->
						<div>
							<span class="icon"></span> <!--Duration icon-->
							<span>05:00</span> <!--Duration counter-->
						</div>
					</div>
					<!--Bookmark-->
					<div class="footer_right">
						<button class="icon"></button> <!--Bookmark icon-->
					</div>
				</footer>
			</article>
			<article class="story">
				<!--Story header image-->
				<header class="kamervragen_header"></header>
				<!--Story text-->
				<div>
					<h3>Kamervragen van Richard de Mos</h3>
					<p>Voorzitter, 1. Heeft de Minister het bericht op Nurks van Max Molovich gelezen waarin hij vertelt dat hij met bus 21 naar het Centraal Station gaat. [...]</p>
				</div>
				<!--Story footer-->
				<footer>
					<!--Likes, comments and duration-->
					<div class="footer_left">
						<!--Likes-->
						<div>
							<button class="icon" type="button"></button> <!--Like icon-->
							<span>35</span> <!--Like counter-->
						</div>
						<!--Comments-->
						<div>
							<a class="icon" href=""></a> <!--Comment icon-->
							<span>14</span> <!--Comment counter-->
						</div>
						<!--Duration-->
						<div>
							<span class="icon"></span> <!--Duration icon-->
							<span>05:00</span> <!--Duration counter-->
						</div>
					</div>
					<!--Bookmark-->
					<div class="footer_right">
						<button class="icon" type="button"></button> <!--Bookmark icon-->
					</div>
				</footer>
			</article>
			<article class="story">
				<!--Story header image-->
				<header class="cock_header"></header>
				<!--Story text-->
				<div>
					<h3>De Cock en het raadsel van het verdwenen boek</h3>
					<p>De Cock met C-O-C-K. stapte de bus uit. In de kruiwagen die De Cock voortduwde lag zijn trouwe kompaan Vledder zijn roes uit te slapen. Het miezerde en de wind joeg als een bezetene over het stationsplein. [...]</p>
				</div>
				<!--Story footer-->
				<footer>
					<!--Likes, comments and duration-->
					<div class="footer_left">
						<!--Likes-->
						<div>
							<button class="icon" type="button"></button> <!--Like icon-->
							<span>27</span> <!--Like counter-->
						</div>
						<!--Comments-->
						<div>
							<a class="icon" href=""></a> <!--Comment icon-->
							<span>13</span> <!--Comment counter-->
						</div>
						<!--Duration-->
						<div>
							<span class="icon"></span> <!--Duration icon-->
							<span>10:00</span> <!--Duration counter-->
						</div>
					</div>
					<!--Bookmark-->
					<div class="footer_right">
						<button class="icon" type="button"></button> <!--Bookmark icon-->
					</div>
				</footer>
			</article>
			<article class="story">
				<!--Story header image-->
				<header class="presentator_header"></header>
				<!--Story text-->
				<div>
					<h3>Presentator die ten onrechte denkt aansluiting te hebben gevonden bij "de kids"</h3>
					<p>Yo kids! Vet cool dat je weer kijkt! Hoor mijn verhaal: Ik stapte laatst de bus uit op het stadionplein. Je weet togh?! [...]</p>
				</div>
				<!--Story footer-->
				<footer>
					<!--Likes, comments and duration-->
					<div class="footer_left">
						<!--Likes-->
						<div>
							<button class="icon" type="button"></button> <!--Like icon-->
							<span>25</span> <!--Like counter-->
						</div>
						<!--Comments-->
						<div>
							<a class="icon" href=""></a> <!--Comment icon-->
							<span>24</span> <!--Comment counter-->
						</div>
						<!--Duration-->
						<div>
							<span class="icon"></span> <!--Duration icon-->
							<span>05:00</span> <!--Duration counter-->
						</div>
					</div>
					<!--Bookmark-->
					<div class="footer_right">
						<button class="icon" type="button"></button> <!--Bookmark icon-->
					</div>
				</footer>
			</article>
			<article class="story">
				<!--Story header image-->
				<header class="charlie_header"></header>
				<!--Story text-->
				<div>
					<h3>Charlie Sheen</h3>
					<p>Je hebt de apen, dan komen de mensen, dan een hele tijd niks, dan God en dan komt Charlie Sheen. Ik stap de bus uit. Winning! Ik loop achter mijn zoon aan. Die ligt in zijn wagen. Fastball. Komt net binnen! Duizenden losers wijken voor mij. Winning! Ik ben de messias van het wandelen. [...]</p>
				</div>
				<!--Story footer-->
				<footer>
					<!--Likes, comments and duration-->
					<div class="footer_left">
						<!--Likes-->
						<div>
							<button class="icon" type="button"></button> <!--Like icon-->
							<span>18</span> <!--Like counter-->
						</div>
						<!--Comments-->
						<div>
							<a class="icon" href=""></a> <!--Comment icon-->
							<span>9</span> <!--Comment counter-->
						</div>
						<!--Duration-->
						<div>
							<span class="icon"></span> <!--Duration icon-->
							<span>05:00</span> <!--Duration counter-->
						</div>
					</div>
					<!--Bookmark-->
					<div class="footer_right">
						<button class="icon" type="button"></button> <!--Bookmark icon-->
					</div>
				</footer>
			</article>
			<article class="story">
				<!--Story header image-->
				<header class="song_header"></header>
				<!--Story text-->
				<div>
					<h3>Song (Je vindt nooit wat je zoekt)</h3>
					<p>Ik stap uit de bus, samen met m’n zoon. Lopend over ‘t plein, de regen maakt het schoon. Ik ben op zoek naar een boek van Raymond Queneau. Alweer dik een week, staat mijn leven stil. Eén blik in dat boek, is alles wat ik wil. Krijg je dan echt niets in dit leven cadeau? [...]</p>
				</div>
				<!--Story footer-->
				<footer>
					<!--Likes, comments and duration-->
					<div class="footer_left">
						<!--Likes-->
						<div>
							<button class="icon" type="button"></button> <!--Like icon-->
							<span>14</span> <!--Like counter-->
						</div>
						<!--Comments-->
						<div>
							<a class="icon" href=""></a> <!--Comment icon-->
							<span>5</span> <!--Comment counter-->
						</div>
						<!--Duration-->
						<div>
							<span class="icon"></span> <!--Duration icon-->
							<span>03:00</span> <!--Duration counter-->
						</div>
					</div>
					<!--Bookmark-->
					<div class="footer_right">
						<button class="icon" type="button"></button> <!--Bookmark icon-->
					</div>
				</footer>
			</article>
        </section>
        </section>
        <footer>
        	<a class="cta_grey" href="zoeken.php">Vorige</a>
        	<p>3 van 6</p>
        	<a class="cta_grey" href="zoeken.php">Volgende</a>
        </footer>
    </main>
    
    <!--Footer-->
    <?php include("includes/footer.php");?>
</body>
<script src="js/javascript.js"></script>
</html>