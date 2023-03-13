<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/main.css"/>
    <title>Verkennen/ Twitter</title>
</head>

<body class="aanpassen">
    <main class="twitter-inleiding">
        <a href="index.php">
            <img class="logo-twitter" src="../img/foto-twitter.png" alt="logo-twitter" width="45px" height="45px" />
        </a>
        <section class="verkennen">
            <img src="../img/hastag-logo.png" alt="hastag-logo" width="45px" height="45px" />
            <h1 class="grootte">Verkennen</h1>
        </section>

        <section class="instelling">
            <img class="gear" src="../img/gear.png" alt="gear" width="45px" height="45px" />
            <h2 class="grootte">Instellingen</h2>
        </section>
    </main>

    <div class="border"></div>

    <div class="border2"></div>

    <footer class="onderkant">
        <div class="button-display-flex">
            <button id="popup" class="button-footer">Inloggen</button>
            <button id="popuptweede" class="button-footer2">Registreren</button>
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
            <form>
                <input class="form" type="text" placeholder="Emailadres">
                <input class="form2" type="password" placeholder="password">

                <input class="form3" type="submit" value="Volgende">
                <input class="form4" type="submit" value="Wachtwoord vergeten?">

                <h2 class="Registreren">Heb je geen account? <a class="Registreren">Registreren</a> </h2>
            </form>
        </div>
    </div>

    <div id="myPopup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <p>This is a popup!</p>
        </div>
    </div>








    <script src="../Javascript/main.js"></script>
</body>

</html>