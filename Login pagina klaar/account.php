<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>account</title>
    <link rel='stylesheet' href='aa.css'>
</head>

<body>
    <div class="boven">
        <div class="icon">
            <a href="index.php"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAM9JREFUWEft1mEKwyAMBeDXm6xH2VF20u0m7VFKQKGUjuhLMmXEP6WI9PMZtQsma8tkHiRIW5FMKBPSEtD6/76GHiWBXUviW79nQoLZAAjmWZ7dLi9QxVTAp6CGgK4YSegFQFDdzZqQK0b0FpA7xgIKwbCgMAwDCsWwoDeA8wFInzl3W5ApasGEoRiQTCwMxYLCUBZQCMoKckd5gO5QQy/Xuntrocv72n2rlgFeCZ1R9M8ZczCyE28e551Q84d/8QtrxuSStUSYNaSllAlpCR20sC4l41WsUwAAAABJRU5ErkJggg==" /></i>
            </a>
        </div>
        <div class="dpg">
            <a href="dpg" class="dpg">
                <img class="img" src="dpg.png" alt="svg">
            </a>
            <p>account</p>
        </div>
    </div><!-- sluit class boven -->
    <hr>
    <div class="nu">
        <a href="nu" class="nu">
            <a href="https://www.nu.nl"><img class="img" src="Nu-nl-logo.png"></a>
        </a>
    </div><!-- sluit class nu -->
    <form action="gemaakt.php" method="post">
        <h1>Maak je account aan</h1>

        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <p>Dit account is gratis</p>
        <div class="mail">
            <p>
                Je maakt een DPG Media account aan met:
            </p>
            <div class="donker">
                <p>qijia1zhao@gmail.com</p>
            </div>
            <p><a href="index.php">wijzig e-mailadres</a></p>
        </div><!-- sluit class mail -->
        <h3>Stel je wachtwoord in</h3>
        <input type="password" name="password" placeholder="Wachtwoord"><br>
        <div class="min">
            <p>Gebruik minimaal 10 karakters</p>
        </div><!-- sluit class min -->
        <div class="spreek">
            <h2>Persoonlijke gegevens</h2>
            <h3>Aanspreekvorm</h3>
        </div><!-- sluit class spreek -->
        <div class="geslacht">

            <div class="keuze">
                <input type="radio" id="Meneer" value="Meneer" name="Welke geslacht?"><label for="Meneer"
                    class="light">Meneer</label>
            </div>
            <div class="keuze">
                <input type="radio" id="Mevrouw" value="Mevrouw" name="Welke geslacht?"><label for="Mevrouw"
                    class="light">Mevrouw</label>
            </div>

            <div class="keuze">
                <input type="radio" id="geen" value="geen" name="Welke geslacht?"><label for="Geen" class="light">Liever
                    geen
                    van beide</label>
            </div>
        </div><!-- sluit class geslacht -->
        <br>
        <div class="namen">
            <div class="voornaam">
                <input type="text" name="voornaam" placeholder="Voornaam"><br>
            </div>
            <div class="achternaam">
                <input type="text" name="achternaam" placeholder="Achternaam"><br>
            </div>
            <div class="geboortedatum">
                <input type="text" name="geboortedatum"
                    placeholder="Geboortedatum(verplicht)                             dd-mm-jjjj"><br>
            </div>
            <div class="land">
                <input type="text" name="postcode" placeholder="Postcode"><br>
            </div>
        </div><!-- sluit class namen -->
        <div class="cookie">

            <input type="checkbox" id="cookie1" value="cookie1" name="cookie"><label for="cookie1" class="light">Ja,
                ik
                wil via e-mail aanbiedingen van NU.nl ontvangen.</label><br>
            <input type="checkbox" id="cookie1" value="cookie2" name="cookie"><label for="cookie2" class="light">Ja,
                ik
                wil via e-mail productinformatie van NU.nl ontvangen(max 1x per week).</label><br>
            <input type="checkbox" id="cookie3" value="cookie3" name="cookie"><label for="cookie3" class="light">Ja,
                ik
                ontvang graag elke middag het belangrijkste nieuws van NU.nl.</label><br>

        </div><!-- sluit class cookie -->
        <div class="bo">
            <p>Je bovenstaande gegevens kunnen worden toegevoegd aan jouw profiel in overeenstemming met ons privacy
                statement. Indien je hiermee ingestemd hebt, gebruiken wij je gegevens voor analyses en om je marketing
                en
                advertentie uitingen te tonen die voor jou relevant zijn. Je kunt dit altijd wijzigen via je privacy
                instellingen in onze websites en apps. Door dit account aan te maken, ga je akkoord met de
                gebruiksvoorwaarden.
            </p>
        </div><!-- sluit class bo -->
        <div class="verder">
            <button type="submit"><a href="gemaakt.php">Maak mijn account aan</a></button>
        </div><!-- sluit class verder -->
    </form><!-- sluit form -->
    <div class="aan">
        <hr>
    </div><!-- sluit class aan -->
    <div class="einde">
        <p>Met dit account kun je inloggen bij
            o.a. deze merken van DPG Media:</p>
    </div><!-- sluit class einde -->
    <footer>
        <div class="footerlinks">
            <p><a href="https://privacy.dpgmedia.nl/nl/document/privacy-policy">Privacy-</a></p>
            <p><a
                    href="https://myprivacy.dpgmediagroup.net/consent?siteKey=tafjdbp1v2jwo1ff&callbackUrl=https%3A%2F%2Fwww.dpgmediagroup.com%2Fprivacygate-confirm%3FredirectUri%3D%252Fnl-NL%252Fcontact-dpgmedia">Klantenservice-</a>
            </p>
            <p><a
                    href="https://www.dpgmediagroup.com/nl-NL/contact-dpgmedia?referrer=https%3A%2F%2Flogin.dpgmedia.nl%2F">Gebruiksvoorwaarden</a>
            </p>

        </div><!-- sluit class footerlinks -->
        <div class="footerlinks">
            <p>© DPG Media B.V. - alle rechten voorbehouden</p>
        </div>
    </footer>
</body>

</html>