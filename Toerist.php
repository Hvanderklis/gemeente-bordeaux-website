<!DOCTYPE html>
<html lang="en-NL">
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
        <title>Gemeente Bordeaux - Tourist</title>
        <!-- verdomd wat een hoop content in de head-->
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <!--ik heb hier echt geen zin in-->
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
                                 <li><a href="Afspraak.php">Afspraak maken</a></li>
                                 <li class="active"><a href="Toerist.php">Tourist Information</a></li>
                             </ul>
                             <ul class="nav navbar-nav navbar-right">
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="laag0">
            <?php
                $tips = array(  array("Esplanade des Quinconces, the biggest city-center esplanade in Europe","images/1.jpg"),
                    array("The Cathedral and the two basilicas, Unesco World Heritage Sites","images/2.jpg"),
                    array("The squares of old Bordeaux, with their craft shops and cafe terraces","images/3.jpg"),
                    array("Musée des Beaux Arts (Fine arts museum)","images/4.jpg"),
                    array("Musée d'Aquitaine (archeological and history museum)","images/5.jpg"),
                    array("Musée du Vin et du Négoce (museum of the wine trade)","images/6.jpg"),
                    array("Musée des Arts Décoratifs (museum of decorative arts)","images/7.jpg"),
                    array("Musée d'Histoire Naturelle (natural history museum)","images/8.jpg"),
                    array("Centre d'arts plastiques contemporains (CAPC) (contemporary art museum)","images/9.jpg"),
                    array("Musée National des Douanes","images/10.jpg"),
                    array("Vinorama","images/11.jpg") );
                $kiezer = rand(0,sizeof($tips));
               echo "<h1 class=\"tekst\">".$tips[$kiezer][0]."</h1>";
               echo "<img src=\"".$tips[$kiezer][1]."\" alt=\"no img\" class=\"oprottenMetDieCamera\">";
               
            ?>
        </div>
        <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">About Bordeaux</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">About Bordeaux</h4>
      </div>
      <div class="modal-body">
              <p>
                    Bordeaux is considered a very tolerant and relaxed place - no one will bother you about your political beliefs, religion, or sexual orientation. 
                    The cultural, artistic, and music scenes are very vibrant. 
                    The city was ruled by the English for a long time, which is why Bordeaux seems to have an "English flair".
                    Bordeaux is often referred to as "Little Paris" and the rivalry between the "Bordelais" (people from Bordeaux) and "Parisiens" is a hot subject, 
                    so you may experience some heated arguments on the subject during your stay
            </p>
            <p>
                <strong><h2>Things to do in Bordeaux</h2></strong>
            <ul>
                    <li>Have a walk along the Sainte-Catherine street in the Pedestrian Center and enjoy the scenery.</li>
                    <li>Consider crossing the bridges or taking the ferry boat over the river (see Les Quais).Climb the 243 steps of the tower of Saint-Michel, and enjoy the panoramic view of Bordeaux </li>
                    <li>Spend some time at the miroir d'eau (water mirror) at the border of the river. Every now and then, it is filled with 2 cm of water, alternated with a cloud of mist.</li>
                    <li>Have a drink and a dance at one of the many bars or clubs in Les Quais or La Victoire.</li>
                    <li>Watch the ducks play in the big public park north of the center and escape from the city at the Jardin Botanique, Bordeaux's Botanical Garden.</li>
                    <li>Bordeaux gardens open: end March to end October - 8AM to 8PM; end October to end March</li>
                    <liFly a jet fighter. You can fly the L39 Albatros from Bordeaux International Airport. ></li>
                    <li>SuperCar RoadTrip, Organizes private road trips near Bordeaux.</li>
                </ul>
            </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      
    <footer class="footer-distributed">

			<div class="footer-left">

				<img src="photos/logo.png" class="fotologo1" alt="Foto niet geladen">

				<p class="footer-links">
					<a href=index.php>Home</a>
					·
					<a href="Afspraak.php">Afspraak maken</a>
					·
					<a href="#">Tourist Information</a>
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