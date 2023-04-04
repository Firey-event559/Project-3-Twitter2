<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/main.css" />
    <title>Verkennen/ Twitter</title>
</head>

<body class="aanpassen">

    <main class="twitter-inleiding">
        <a href="index.php">
            <img class="logo-twitter" src="../img/foto-twitter.png" alt="logo-twitter" width="45px" height="45px" />
        </a>
        <section class="verkennen">
            <img src="../img/hastag-logo.png" alt="hastag-logo" width="45px" height="45px" />
            <a class="link_verkennen" href="index.php"><h1 class="grootte">Verkennen</h1></a>
        </section>

        <section class="instelling">
            <img class="gear" src="../img/gear.png" alt="gear" width="45px" height="45px" />
            <a class="link_instellingen" href="Instellingen.php"><h2 class="grootte">Instellingen</h2></a>
        </section>
    </main>


    </div>
    <div class="border"></div>

    <div class="border2"></div>



    <footer class="onderkant">
        <div class="button-display-flex">
            <button id="popup" class="button-footer">Inloggen</button>
            <button id="popup2" class="button-footer2">Registreren</button>
        </div>
        <h1 class="footer-tekst">Mis niets van wat er gebeurt</h1>

        <p class="footer-tekst">
            Mensen die lid zijn van Twitter, zijn als eersten op de hoogte.
        </p>
    </footer>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img class="logo-twitter2" src="../img/foto-twitter.png" alt="foto-twitter" width="45px" height="45px" />
            <h1 class="grootte2">Inloggen bij Twitter</h1>
            <form id="form" method="post" action="../HTML/Inloggen.php">
                <input class="form" type="text" placeholder="Gebruikersnaam" required name="Gebruikersnaam">
                <input class="form2" type="password" placeholder="Wachtwoord" required name="Wachtwoord">
                <input class="form3" type="submit" value="Inloggen" id="inloggen" name="inloggen">
            </form>
            <button class="form4">Wachtwoord vergeten?</button>

            <h2 class="Registreren">Heb je geen account? <a href="../HTML/account_Aanmaken.php" class="Registreren">Registreren</a> </h2>

        </div>
    </div>


    <div id="myModal2" class="modal2">
        <div class="modal-content2">
            <span class="close2">&times;</span>
            <img class="logo-twitter3" src="../img/foto-twitter.png" alt="foto-twitter" width="45px" height="45px" />
            <h1 class="tekst-accountaanmaken">Registreer<br> je vandaag nog op<br> Twitter</h1>
            <a href="../HTML/account_Aanmaken.php"><button class="form5">Account aanmaken</button></a>
            <p class="algemene-voorwaarden">Door je te registreren, ga je akkoord met<br> de<a class="voorwaarden"
                    href="https://twitter.com/en/tos" target="_blank"> Algemene voorwaarden</a> en
                het <a class="Privacybeleid" href="https://twitter.com/en/privacy"
                    target="_blank">Privacybeleid</a>,<br> inclusief het <a class="cookies"
                    href="https://help.twitter.com/nl/rules-and-policies/twitter-cookies" target="_blank">gebruik
                    van cookies</a>.</p>

        </div>
    </div>








    <div class="tabel">
        <h1 class="tekst-tabel"> Nieuw op Twitter?</h1>
        <p class="tekst-tabel2">Registreer nu en krijg je eigen gepersonaliseerde<br> tijdlijn! </p>
        <a href="../HTML/account_Aanmaken.php"><button class="account">Account aanmaken</button></a>

        <p class="tekst-tabel3">Door je te registreren, ga je akkoord met de <a class="link-tabel"
                href="https://twitter.com/en/tos" target="_blank">Algemene <br> voorwaarden</a> en het <a
                class="link2-tabel" href="https://twitter.com/en/privacy" target="_blank"> Privacybeleid</a>,
            inclusief het <br> <a class="link3-tabel"
                href="https://help.twitter.com/nl/rules-and-policies/twitter-cookies" target="_blank">gebruik
                van cookies</a>.</p>







        <script src="../Javascript/main.js"></script>
</body>

</html>