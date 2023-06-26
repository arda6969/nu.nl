<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nu.nl</title>
    <link rel='stylesheet' href="../navbar/navbar1.css">
    <script src="../navbar/navbar.js" defer></script>
</head>

<body class="body">

    <nav class="navbar">

        <ul class="main-menu">
            <li>
                <a href="http://localhost/nu.nl/homepage/home.php" class="top-logo">
                    <img class="img" src="../navbar/pics/Nu-nl-logo.png" alt="Voorpagina">
                </a>
            </li>
            <li class="nav_itemitem_default">
                <a class="patat" href="/nu.nl/catagorie/catagorie.php?catagorie=net-binnen" title="Net binnen">
                    Net binnen
                </a>
            </li>
            <li class="nav_itemitem_default">
                <a class="patat" href="/nu.nl/catagorie/catagorie.php?catagorie=algemeen" title="Algemeen">
                    Algemeen
                </a>
            </li>
            <li class="nav_itemitem_default1">
                <a href="/nu.nl/catagorie/catagorie.php?catagorie=economie" title="Economie" class="economie">
                    Economie
                </a>
            </li>
            <li class="nav_itemitem_default2">
                <a href="/nu.nl/catagorie/catagorie.php?catagorie=sport" title="Sport" class="sport">
                    Sport
                </a>
            </li>
            <li class="nav_itemitem_default3">
                <a href="/nu.nl/catagorie/catagorie.php?catagorie=entertainment" title="Media en Cultuur" class="maatschapij">
                    Media en Cultuur
                </a>
            </li>
            <li class="nav_itemitem_default4">
                <a href="/nu.nl/catagorie/catagorie.php?catagorie=achterklap" title="Achterklap" class="achterklap">
                    Achterklap
                </a>
            </li>
            <li class="nav_itemitem_default">
                <a class="patat" href="/nu.nl/catagorie/catagorie.php?catagorie=nushop-adverteerder" title="Shop">
                    Shop
                </a>
            </li>
            <li class="nav_itemitem_default">
                <button onclick="myFunction()">
                    <span id="mnm">Meer v</span>
                </button>
            </li>
            <li class="darkmode">
                <a href="/nu.nl/catagorie/catagorie.php?catagorie=nushop-adverteerder" title="Shop">
                    <img class="img1" src="../navbar/pics/contrast_318-345102.avif" alt="darkmode">
                </a>
            </li>
            <li class="login">
                <svg data-v-1dd6691c="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" height="32" width="32" aria-labelledby="" role="presentation">
                    <title data-v-1dd6691c="" lang="nl"></title>
                    <g data-v-1dd6691c=""><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" data-v-1dd6691c="">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.041 18.223c-.304-.144-.512-.24-.54-.253a.536.536 0 0 0-.72.294.583.583 0 0 0 .28.753l.133.061c.25-.315.535-.601.847-.855Zm-2.024 3.84H9.5c-.182 0-.355-.203-.39-.325-.06-.206.06-.655.632-1.057.786-.55 2.981-1.564 3.182-1.657a.583.583 0 0 0 .297-.76.54.54 0 0 0-.722-.294c-.118.054-2.468 1.135-3.366 1.763-.883.617-1.303 1.535-1.07 2.337.178.612.705.993 1.375.993h8.59a5.541 5.541 0 0 1-.01-1ZM20.375 12.924c0 2.513-1.968 4.57-4.375 4.57-2.405 0-4.374-2.057-4.374-4.57v-2.285c0-2.512 1.969-4.569 4.374-4.569 2.407 0 4.375 2.057 4.375 4.569v2.285ZM16 7.212c-1.809 0-3.28 1.538-3.28 3.427v2.285c0 1.89 1.471 3.427 3.28 3.427 1.81 0 3.282-1.537 3.282-3.427v-2.285c0-1.889-1.473-3.427-3.282-3.427Z" fill="currentColor"></path>
                            <circle cx="23.5" cy="22.5" r="4.5" fill="#E88327"></circle>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.354 20.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708l3-3a.5.5 0 0 1 .708 0Z" fill="#fff"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.646 20.646a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0Z" fill="#fff"></path>
                        </svg></g>
                </svg>
            </li>
            <li class="nav_itemitem_default">
                <a href="/nu.nl/catagorie/catagorie.php?catagorie=nushop-adverteerder" title="Shop" class="poep">
                    Inloggen
                </a>
            </li>
        </ul>
    </nav>

    <div id="myDIV" class="dropdown-menu navigation" style="display: none;">
        <ul class="site_overview">
            <li class="nav_item_item_default">
                <a href="/nu.nl/catagorie/catagorie.php?catagorie=iets">Voorpagina</a>
                <ul class="nav_submenu">
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=net-binnen">Net binnen</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=meest-gelezen">Meest gelezen</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=spanningen-oekraine">Oorlog in Oekraïne</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=binnenland">Binnenland</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=buitenland">Buitenland</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=algemeen">Algemeen</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=politiek">Politiek</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=uit-andere-media">Uit andere media</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=videos">Video</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=podcast">Podcast</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=weer">Weer</a>
                    </li>
                </ul>
            </li>
            <li class="nav_item item_nuzakelijk">
                <a class="economie" href="/nu.nl/catagorie/catagorie.php?catagorie=economie">Economie</a>
                <ul class="nav_submenu">
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=klimaat">Klimaat</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=tech">Tech</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=wonen">Wonen</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=geldzaken">Geld</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=werk">Werk</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=auto">Auto</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=aandelen">Aandelen</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=verkeer">Verkeer</a>
                    </li>
                </ul>
            </li>
            <li class="nav_itemitem_nusport">
                <a class="sport" href="/nu.nl/catagorie/catagorie.php?catagorie=sport">Sport</a>
                <ul class="nav_submenu">
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=voetbal">Voetbal</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=formule-1">Formule 1</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=live/voetbal">Scorebord</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=sportspellen">Sportspellen</a>
                    </li>
                </ul>
            </li>
            <li class="nav_itemitem_nuuit">
                <a class="maatschapij" href="/nu.nl/catagorie/catagorie.php?catagorie=entertainment">Media en Cultuur</a>
                <ul class="nav_submenu">
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=film">Films en series</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=muziek">Muziek</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=cultuur-overig">Boek en cultuur</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=media">Media</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=achterklap">Achterklap</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=koningshuis">Koningshuis</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="https://www.nu.nl">TV gids</a>
                    </li>
                </ul>
            </li>
            <li class="nav_item item_nuoverig">
                <a class="overig" href="/nu.nl/catagorie/catagorie.php?catagorie=overig">Overig</a>
                <ul class="nav_submenu">
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=spellen">Het Woord</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=kind-gezin">Kind &amp; Gezin</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=dieren">Dieren</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=eten-en-drinken">Eten en drinken</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=gezondheid">Gezondheid</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=nucheckt">NUcheckt</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=opmerkelijk">Opmerkelijk</a>
                    </li>
                    <li class="nav_subitem">
                        <a href="/nu.nl/catagorie/catagorie.php?catagorie=wetenschap">Wetenschap</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="dropdown-menu-sidebar-links">
            <li class="nav_item item_default">
                <a href="/nu.nl/catagorie/catagorie.php?catagorie=over-nu">Over NU.nl</a>
            </li>
            <li class="nav_item item_default">
                <a href="/nu.nl/catagorie/catagorie.php?catagorie=nufolder">NUfolder</a>
            </li>
            <li class="nav_item item_default">
                <a href="/nu.nl/catagorie/catagorie.php?catagorie=nushop-adverteerder">NUshop</a>
            </li>
            <li class="nav_item ">
                <a href="/nu.nl/catagorie/catagorie.php?catagorie=tickets">Tickets</a>
            </li>
        </ul>
    </div>
</body>


</html>