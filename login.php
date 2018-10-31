<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="images/ns_favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>NS | Welkom bij uw NS-acccount</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--Header with navigation-->
    <?php include("includes/header.php");?>

    <!--Main content-->
    <main id="ns_account">
      <!--Main header-->
       <header class="page_banner" id="login_page_banner"></header>
       <section>
			<!--Login-->
			<article id="login_main_panel">
				<header>
					<h1>Welkom bij uw NS-account</h1>
					<p>Door in te loggen met uw NS-account kunt u verhalen liken, reacties achterlaten en een leeslijst bijhouden.</p>
				</header>
				<form action="account.php" method="get">
					<h3>Log in</h3>
					<label for="username">Gebruikersnaam of e-mailadres</label>
					<input id="username" type="text" name="username" required>
					<label>Wachtwoord</label>
					<input id="password" type="password" name="password" required>
					<button class="cta_blue" type="submit" value="Inloggen">Inloggen</button>
				</form>
			</article>

			<!--Create account-->
			<article id="create_account">
				<!--Create account intro-->
				<header>
					<h3>NS-account aanmaken</h3>
					<p>Heeft u nog geen NS-account? Vul dan de volgende gegevens in om een NS-account aan te maken.</p>
				</header>
				<!--Create account form-->
				<form action="account.php" method="get">
					<fieldset>
						<legend>Uw gegevens</legend>

						<label for="emailaddress">E-mailadres</label>
						<input id="emailaddress" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="emailaddress" placeholder="johndoe@mail.nl" required>

						<label for="confirm_emailaddress">Bevestig e-mailadres</label>
						<input id="confirm_emailaddress" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="confirm_emailaddress" placeholder="johndoe@mail.nl" required>
					</fieldset>
					<fieldset>
						<legend>NS-account gegevens</legend>

						<label for="create_username">Gebruikersnaam</label>
						<p>Minimaal 4 karakters. Uitsluitend letters en cijfers.</p>
						<input id="create_username" type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,}$" name="create_username" placeholder="JohnDoe" required>

						<label>Wachtwoord</label>
						<p>Minimaal 6 karakters waarvan minstens 2 cijfers.</p>
						<input id="create_password" type="password" name="create_password" required>

						<label>Bevestig wachtwoord</label>
						<input id="confirm_password" type="password" name="confirm_password" required>
					</fieldset>
					<fieldset>
						<legend>NS voorwaarden</legend>
						<span class="checkbox">
							<input id="terms" type="checkbox" name="terms" value="terms" required> 
							<label for="terms">Ik ga akkoord met de <a>voorwaarden</a></label>
						</span>
					</fieldset>
					<button class="cta_blue" type="submit" value="Account aanmaken">Account aanmaken</button>
			</form>
			</article>
        </section>
    </main>
    
    <!--Footer-->
    <!--Future plans: Footer will be inserted with a PHP include-->
    <?php include("includes/footer.php");?>
</body>
<script src="js/javascript.js"></script>
</html>