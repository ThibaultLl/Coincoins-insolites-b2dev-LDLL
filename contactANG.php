<!DOCTYPE HTML>
<html>
	<head>
		<link rel='icon' href='images/icon_coincoin.ico' type='image/x-icon'/ >
		<title>Coincoins Insolites</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<img class="logo" src="images/icon_coincoin.png" alt="l'icone de coincoins insolites en haut à gauche" onclick="window.location.href='index.html'"/>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>
		<!-- Nav -->
		<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="lieux.html">Places</a></li>
					<li><a href="info.html">Infos</a></li>
					<li><a href="indexANG.html">FRENCH</a></li>
				</ul>
			</nav>

		<!-- Heading -->
		<div id="heading" >
			<h1>Contact form :</h1>
		</div>
		<section>
		<br/>
		<div class="textecentre">
		<p>If you got a problem or any question, you can send us a message by filling this form, we will answer ASAP !</p>
		</div>
		<hr />

	
			<form method="post" action="#">
				<div class="row gtr-uniform">
				<div class="col-6 col-12-xsmall">
					<input type="text" name="nom" id="nom" placeholder="Nom">
				</div>
				<div class="col-6 col-12-xsmall">
					<input type="text" name="prenom" id="prenom" placeholder="Prenom">
				</div>
				</div>
				<br/>
				<div class="row gtr-uniform">
				<div class="col-6 col-12-xsmall">
					<input type="email" name="email" id="email" placeholder="Email">
				</div>
				<div class="col-6 col-12-xsmall">
					<input type="text" name="objet" id="objet" placeholder="Objet">
				</div>
				</div>
				<br/>
				<div class="col-12">
					<textarea name="textarea" id="textarea" placeholder="Votre message"></textarea>
				</div>
				<br/>
					<input type="Submit" value="Envoyer" name="formsend" id="formsend" class="primary">
			</form>
			</section>

		<!-- Footer -->
		<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>Our company :</h3>
							<p>We are a group of four students from Campus Academy Nantes, and we are carrying out a project called "Coincoins insolite" consisting of creating an application of sharing of unusual places and a website presenting it.</p>
						</section>
						<section>
							<h4>You can also see :</h4>
							<ul class="alt">
								<li><a href="index.html">Home</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="lieux.html">Places</a></li>
								<li><a href="info.html">Infos</a></li>
								<li><a href="indexANG.html">FRENCH</a></li>
							</ul>
						</section>
						<section>
							<h4>Our networks : </h4>	
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="https://github.com/ThibaultLl/Coincoins-insolites-b2dev-LDLL"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>



			<?php
			mysql_connect("localhost","root") or die ("Erreur !");
			mysql_select_db("coinscoinsforms") or die("BDD introuvable !");
				if(isset($_POST['formsend'])){
					$nom = $_POST['nom'];
					$prenom = $_POST['prenom'];
					$email = $_POST['email'];
					$objet = $_POST['objet'];
					$textarea = $_POST['textarea'];
				if(!empty($nom) AND !empty($prenom) AND !empty($email) AND !empty($objet) AND !empty($textarea)){
					mysql_querry('INSERT INTO coinscoinsforms (nom, prenom, email, objet, textarea) VALUES ("'.$nom.'","'.$prenom.'","'.$email.'","'.$objet.'","'.$textarea.'")')or die('Erreur: '.mysql_error());
					echo "Votre formulaire a bien été transmit !";
				}
				else echo "Remplissez tous les champs !";
				}
			?>

	</body>
</html>