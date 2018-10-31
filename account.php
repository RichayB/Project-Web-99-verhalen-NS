<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="images/ns_favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>NS | Account</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--Header with navigation-->
    <?php include("includes/header.php");?>
    
    <!--Main content-->
    <main>
       	<!--Main header-->
    	<header id="account_page_banner"></header>
        <!--Main header-->
        <section>
			<article id="account_main_panel" class="main_panel">
				<h1>Welkom Henry</h1>
				<p>Hier kunt u uw leestlijst vinden en een overzicht van al uw likes en reacties.</p>
			</article>
        </section>
        <section id="user_panels">
        	<h2>Uw overzicht</h2>
			<!--Saved stories-->
			<article id="user_stories" class="list_panel">
				<header><h3>Leeslijst</h3></header>
				<ul class="footer_list">
					<li><a>Alzheimer</a></li>
					<li><a>Kamervragen van Richard de Mos</a></li>
					<li><a>De Cock en het raadsel van het verdwenen boek</a></li>
					<li><a>Presentator die ten onrechte denkt aansluiting te hebben gevonden bij "de kids"</a></li>
					<li><a>Charlie Sheen</a></li>
					<li><a>Song (Je vindt nooit wat je zoek)</a></li>
				</ul>
			</article>
			<!--Liked stories-->
			<article id="user_likes" class="list_panel">
				<header><h3>Likes</h3></header>
				<ul class="footer_list">
					<li><a>Alzheimer</a></li>
					<li><a>Kamervragen van Richard de Mos</a></li>
					<li><a>De Cock en het raadsel van het verdwenen boek</a></li>
					<li><a>Presentator die ten onrechte denkt aansluiting te hebben gevonden bij "de kids"</a></li>
					<li><a>Charlie Sheen</a></li>
					<li><a>Song (Je vindt nooit wat je zoek)</a></li>
				</ul>
			</article>
        </section>
    </main>
    
    <!--Footer-->
    <?php include("includes/footer.php");?>
</body>
<script src="js/javascript.js"></script>
</html>