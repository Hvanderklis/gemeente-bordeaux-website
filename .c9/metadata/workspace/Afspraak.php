{"changed":true,"filter":false,"title":"Afspraak.php","tooltip":"/Afspraak.php","value":"<!DOCTYPE html>\n<html lang=\"nl-NL\">\n    <head>\n        <meta charset=\"UTF-8\">\n        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n        <meta name=\"description\" content=\"Gemeente Bordeaux\">\n        <meta name=\"keywords\" content=\"Gemeente, Bordeaux, Frankrijk\">\n        <meta name=\"author\" content=\"Henk,Patrick,Azhar\">\n        <link href=\"css/bootstrap.css\" rel=\"stylesheet\">\n        <link href=\"css/styles.css\" rel=\"stylesheet\">\n        <link rel=\"icon\" href=\"photos/logo.png\">\n        <link rel=\"stylesheet\" type=\"text/css\" href=\"engine1/style.css\" />\n        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/font-awesome.min.css\">\n        <script type=\"text/javascript\" src=\"engine1/jquery.js\"></script>\n\t    <link rel=\"stylesheet\" href=\"css/footer-distributed-with-address-and-phones.css\">\n\t    <link href=\"http://fonts.googleapis.com/css?family=Cookie\" rel=\"stylesheet\" type=\"text/css\">\n        <title>Gemeente Bordeaux- Afspraak</title>\n    </head>\n    <body>\n        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>\n        <script src=\"js/bootstrap.js\"></script>\n        <!--ik heb hier echt geen zin in XD-->\n        <header id=\"hgroup\">\n            <nav>\n                <div class=\"nav navbar-default\">\n                    <div class=\"container-fluid\">\n                        <div class=\"navbar-header\">\n                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">\n                                <span class=\"sr-only\">Toggle navigation</span>\n                                <span class=\"icon-bar\"></span>\n                                <span class=\"icon-bar\"></span>\n                                <span class=\"icon-bar\"></span>\n                            </button>\n                            <a class=\"navbar-brand\" href=\"index.php\">Gemeente Bordeaux</a>\n                        </div>\n                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">\n                            <ul class=\"nav navbar-nav\">\n                                 <li class=\"active\"><a href=\"Afspraak.php\">Afspraak maken</a></li>\n                                 <li><a href=\"Toerist.php\">Tourist Information</a></li>\n                             </ul>\n                             <ul class=\"nav navbar-nav navbar-right\">\n                                <li><a href=\"contact.php\">Contact</a></li>\n                            </ul>\n                        </div>\n                    </div>\n                </div>\n            </nav>\n        </header>\n        <?php\n                //Email information\n                $admin_email = \"Henk@hvanderklis.nl\";\n                $voornaam = $_POST['voornaam'];\n                $achternaam = $_POST['achternaam'];\n                $adres = $_POST['adres'];\n                $postcode = $_POST['postcode'];\n                $email = $_POST['email'];\n                $telnr = $_POST['telnr'];\n                $datum = $_POST['date'];\n                $afspraak = $_POST['afspraak'];\n                if ($voornaam != \"\"){\n                    if (mail($admin_email,\"Afspraak: $afspraak\",\"$voornaam $achternaam wilt op $datum een afspraak voor: $afspraak. zijn mailadres is: $email en zijn telefoonnummer is: $telnr.\")){\n                        echo \"<div class=\\\"alert alert-success\\\"> <a href=\\\"#\\\" class=\\\"close\\\" data-dismiss=\\\"alert\\\" aria-label=\\\"close\\\">&times;</a> <strong>Geslaagd!</strong> Je melding is genoteerd bij ons.</div>\";\n                    }\n                }\n        ?>\n        <div class=\"dezeDingHahahaSwa\">\n        <form method=\"post\">\n            <table>\n                <fieldset>\n                    <legend>Vul uw gegevens in</legend>\n                    <table>\n                        <tr>\n                            <td><label for=\"voornaam\">Voornaam:</label></td>\n                            <td><input type=\"text\" size=\"20\" maxlength=\"40\" name=\"voornaam\" placeholder=\"voornaam\" required></td>\n                        </tr>\n                        <tr>\n                            <td><label for=\"achternaam\">Achternaam:</label></td>\n                            <td><input type=\"text\" size=\"20\" maxlength=\"40\" name=\"achternaam\" placeholder=\"achternaam\" required></td>\n                        </tr>\n                        <tr>\n                            <td><label for=\"Adres\">Adres:</label></td>\n                            <td><input type=\"text\" size=\"20\" maxlength=\"40\" name=\"adres\" placeholder=\"Adres\" required></td>\n                        </tr>\n                        <tr>\n                            <td><label for=\"postcode\">Postcode:</label></td>\n                            <td><input type=\"text\" size=\"20\" maxlength=\"40\" name=\"postcode\" placeholder=\"postcode\" required></td>\n                        </tr>\n                        <tr>\n                            <td><label for=\"Email\">Email:</label></td>\n                            <td><input type=\"email\" size=\"20\" maxlength=\"40\" name=\"email\" placeholder=\"Email\" required></td>\n                        </tr>\n                        <tr>\n                            <td><label for=\"Telnr\">Telefoonnummer:</label></td>\n                            <td><input type=\"text\" size=\"20\" maxlength=\"40\" name=\"telnr\" placeholder=\"Telefoonnummer\" required></td>\n                        </tr>\n                    </table>\n                <fieldset>\n                    <legend>Waar wilt u een afspraak voor maken?</legend>\n                        <input type=\"radio\" name=\"afspraak\" value=\"uitreksel\">Uitreksel Bevolkingsregister\n                        <br />\n                        <input type=\"radio\" name=\"afspraak\" value=\"Paspoort\">Paspoort aanvragen/verlengen\n                        <br/>\n                        <input type=\"radio\" name=\"afspraak\" value=\"kapvergunning\">Kap vergunning aanvragen\n                        <br />\n                        <input type=\"radio\" name=\"afspraak\" value=\"anders\">Andere reden\n                        <br />\n                </fieldset>\n                <fieldset>\n                    <legend>Voor Welke dag wilt u een afspraak maken?</legend>\n                        <select name=\"date\">\n                            <option value=\"maandag\">Maandag</option>\n                            <option value=\"dinsdag\">Dinsdag</option>\n                            <option value=\"woensdag\">Woensdag</option>\n                            <option value=\"donderdag\">Donderdag</option>\n                            <option value=\"vrijdag\">Vrijdag</option>\n                        </select>\n            <input class=\"btn btn-default\" type=\"submit\" value=\"Verzenden\">\n            </fieldset>\n            </table>\n        </form>\n        </div>\n        <footer class=\"footer-distributed\">\n\n\t\t\t<div class=\"footer-left\">\n\n\t\t\t\t<img src=\"photos/logo.png\" class=\"fotologo1\" alt=\"Foto niet geladen\">\n\n\t\t\t\t<p class=\"footer-links\">\n\t\t\t\t\t<a href=index.php>Home</a>\n\t\t\t\t\t·\n\t\t\t\t\t<a href=\"#\">Afspraak maken</a>\n\t\t\t\t\t·\n\t\t\t\t\t<a href=\"Toerist.php\">Tourist Information</a>\n\t\t\t\t\t·\n\t\t\t\t\t<a href=\"contact.php\">Contact</a>\n\t\t\t\t</p>\n\n\t\t\t\t<p class=\"footer-company-name\">Gemeente Bordeaux &copy; 2016</p>\n\t\t\t</div>\n\n\t\t\t<div class=\"footer-center\">\n\n\t\t\t\t<div>\n\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>\n\t\t\t\t\t<p><span>65 Rue de la bouteille</span> 91105VP Bordeaux, France</p>\n\t\t\t\t</div>\n\n\t\t\t\t<div>\n\t\t\t\t\t<i class=\"fa fa-phone\"></i>\n\t\t\t\t\t<p>+33 555 123456</p>\n\t\t\t\t</div>\n\n\t\t\t\t<div>\n\t\t\t\t\t<i class=\"fa fa-envelope\"></i>\n\t\t\t\t\t<p><a href=\"mailto:support@company.com\">support@gemeentebordeaux.com</a></p>\n\t\t\t\t</div>\n\n\t\t\t</div>\n\n\t\t\t<div class=\"footer-right\">\n\n\t\t\t\t<p class=\"footer-company-about\">\n\t\t\t\t\t<p><span>Openingstijden</span></p>\n\t\t\t\t\t<p>Ma 9:00 - 15:30</p>\n                    <p>Di 9:00 - 21:00</p> \n                    <p>Wo 9:00 - 15:30</p>\n                    <p>Do 9:00 - 21:00</p>\n                    <p>Vr 9:00 - 15:30</p>\n\n\t\t\t\t</p>\n\n\t\t\t\t<div class=\"footer-icons\">\n\n\t\t\t\t\t<a href=\"https://fr-ca.facebook.com/pagebordeaux\"><i class=\"fa fa-facebook\"></i></a> <!-- Linkt naar bordeaux Facebook -->\n\t\t\t\t\t<a href=\"https://twitter.com/bordeaux\"><i class=\"fa fa-twitter\"></i></a> <!-- Linkt naar Bordeaux Twitter -->\n\t\t\t\t\t<a href=\"https://www.youtube.com/user/bdxlive\"><i class=\"fa fa-youtube\"></i></a> <!-- heb deze naar random youtube kanaal gelinkt -->\n\t\t\t\t\t<a href=\"https://github.com/search?utf8=%E2%9C%93&q=bordeaux\"><i class=\"fa fa-github\"></i></a> <!--  jullie moeten ff deze checken van die github link -->\n\n\t\t\t\t</div>\n\n\t\t\t</div>\n\n\t\t</footer>\n    </body>\n</html>","undoManager":{"mark":-2,"position":1,"stack":[[{"start":{"row":174,"column":5},"end":{"row":177,"column":49},"action":"remove","lines":["<a href=\"https://fr-ca.facebook.com/pagebordeaux\"><i class=\"fa fa-facebook\"></i></a> <!-- Linkt naar bordeaux Facebook -->","\t\t\t\t\t<a href=\"https://twitter.com/bordeaux\"><i class=\"fa fa-twitter\"></i></a> <!-- Linkt naar Bordeaux Twitter -->","\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-youtube\"></i></a>","\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-github\"></i></a>"],"id":1}],[{"start":{"row":174,"column":5},"end":{"row":177,"column":159},"action":"insert","lines":["<a href=\"https://fr-ca.facebook.com/pagebordeaux\"><i class=\"fa fa-facebook\"></i></a> <!-- Linkt naar bordeaux Facebook -->","\t\t\t\t\t<a href=\"https://twitter.com/bordeaux\"><i class=\"fa fa-twitter\"></i></a> <!-- Linkt naar Bordeaux Twitter -->","\t\t\t\t\t<a href=\"https://www.youtube.com/user/bdxlive\"><i class=\"fa fa-youtube\"></i></a> <!-- heb deze naar random youtube kanaal gelinkt -->","\t\t\t\t\t<a href=\"https://github.com/search?utf8=%E2%9C%93&q=bordeaux\"><i class=\"fa fa-github\"></i></a> <!--  jullie moeten ff deze checken van die github link -->"],"id":2}]]},"ace":{"folds":[],"scrolltop":780,"scrollleft":49,"selection":{"start":{"row":117,"column":11},"end":{"row":117,"column":75},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":16,"state":"start","mode":"ace/mode/php"}},"timestamp":1459976417000}