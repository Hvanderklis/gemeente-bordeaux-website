<!DOCTYPE html>
<html lang="nl-NL">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Gemeente Bordeaux">
        <meta name="keywords" content="Gemeente, Bordeaux, Frankrijk">
        <meta name="author" content="Henk,Patrick,Azhar">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link rel="icon" href="photos/logo.png">
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <script type="text/javascript" src="engine1/jquery.js"></script>
	    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <title>Gemeente Bordeaux- Afspraak</title>
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <!--ik heb hier echt geen zin in XD-->
        <header id="hgroup">
            <nav>
                <div class="nav navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php">Gemeente Bordeaux</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                 <li class="active"><a href="Afspraak.php">Afspraak maken</a></li>
                                 <li><a href="Toerist.php">Tourist Information</a></li>
                             </ul>
                             <ul class="nav navbar-nav navbar-right">
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <?php
                //Email information
                $admin_email = "Henk@hvanderklis.nl";
                $voornaam = $_POST['voornaam'];
                $achternaam = $_POST['achternaam'];
                $adres = $_POST['adres'];
                $postcode = $_POST['postcode'];
                $email = $_POST['email'];
                $telnr = $_POST['telnr'];
                $datum = $_POST['date'];
                $afspraak = $_POST['afspraak'];
                if ($voornaam != ""){
                    if (mail($admin_email,"Afspraak: $afspraak","$voornaam $achternaam wilt op $datum een afspraak voor: $afspraak. zijn mailadres is: $email en zijn telefoonnummer is: $telnr.")){
                        echo "<div class=\"alert alert-success\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a> <strong>Geslaagd!</strong> Je melding is genoteerd bij ons.</div>";
                    }
                }
        ?>
        <div class="dezeDingHahahaSwa">
        <form method="post">
            <table>
                <fieldset>
                    <legend>Vul uw gegevens in</legend>
                    <table>
                        <tr>
                            <td><label for="voornaam">Voornaam:</label></td>
                            <td><input type="text" size="20" maxlength="40" name="voornaam" placeholder="voornaam" required></td>
                        </tr>
                        <tr>
                            <td><label for="achternaam">Achternaam:</label></td>
                            <td><input type="text" size="20" maxlength="40" name="achternaam" placeholder="achternaam" required></td>
                        </tr>
                        <tr>
                            <td><label for="Adres">Adres:</label></td>
                            <td><input type="text" size="20" maxlength="40" name="adres" placeholder="Adres" required></td>
                        </tr>
                        <tr>
                            <td><label for="postcode">Postcode:</label></td>
                            <td><input type="text" size="20" maxlength="40" name="postcode" placeholder="postcode" required></td>
                        </tr>
                        <tr>
                            <td><label for="Email">Email:</label></td>
                            <td><input type="email" size="20" maxlength="40" name="email" placeholder="Email" required></td>
                        </tr>
                        <tr>
                            <td><label for="Telnr">Telefoonnummer:</label></td>
                            <td><input type="text" size="20" maxlength="40" name="telnr" placeholder="Telefoonnummer" required></td>
                        </tr>
                    </table>
                <fieldset>
                    <legend>Waar wilt u een afspraak voor maken?</legend>
                        <input type="radio" name="afspraak" value="uitreksel">Uitreksel Bevolkingsregister
                        <br />
                        <input type="radio" name="afspraak" value="Paspoort">Paspoort aanvragen/verlengen
                        <br/>
                        <input type="radio" name="afspraak" value="kapvergunning">Kap vergunning aanvragen
                        <br />
                        <input type="radio" name="afspraak" value="anders">Andere reden
                        <br />
                </fieldset>
                <fieldset>
                    <legend>Voor Welke dag wilt u een afspraak maken?</legend>
                        <select name="date">
                            <option value="maandag">Maandag</option>
                            <option value="dinsdag">Dinsdag</option>
                            <option value="woensdag">Woensdag</option>
                            <option value="donderdag">Donderdag</option>
                            <option value="vrijdag">Vrijdag</option>
                        </select>
            <input class="btn btn-default" type="submit" value="Verzenden">
            </fieldset>
            </table>
        </form>
        </div>
        <footer class="footer-distributed">

			<div class="footer-left">

				<img src="photos/logo.png" class="fotologo1" alt="Foto niet geladen">

				<p class="footer-links">
					<a href=index.php>Home</a>
					·
					<a href="#">Afspraak maken</a>
					·
					<a href="Toerist.php">Tourist Information</a>
					·
					<a href="contact.php">Contact</a>
				</p>

				<p class="footer-company-name">Gemeente Bordeaux &copy; 2016</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>65 Rue de la bouteille</span> 91105VP Bordeaux, France</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+33 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@gemeentebordeaux.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<p><span>Openingstijden</span></p>
					<p>Ma 9:00 - 15:30</p>
                    <p>Di 9:00 - 21:00</p> 
                    <p>Wo 9:00 - 15:30</p>
                    <p>Do 9:00 - 21:00</p>
                    <p>Vr 9:00 - 15:30</p>

				</p>

				<div class="footer-icons">

					<a href="https://fr-ca.facebook.com/pagebordeaux"><i class="fa fa-facebook"></i></a> <!-- Linkt naar bordeaux Facebook -->
					<a href="https://twitter.com/bordeaux"><i class="fa fa-twitter"></i></a> <!-- Linkt naar Bordeaux Twitter -->
					<a href="https://www.youtube.com/user/bdxlive"><i class="fa fa-youtube"></i></a> <!-- heb deze naar random youtube kanaal gelinkt -->
					<a href="https://github.com/search?utf8=%E2%9C%93&q=bordeaux"><i class="fa fa-github"></i></a> <!--  jullie moeten ff deze checken van die github link -->

				</div>

			</div>

		</footer>
    </body>
</html>