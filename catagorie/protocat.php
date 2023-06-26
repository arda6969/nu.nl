<!DOCTYPE html>
<html>

<head>
    <title>
        <?php
        if ($_GET['catagorie'] == 'home') {
            echo 'nu.nl';
        } else {
            echo $_GET['catagorie'] . ' - nu.nl';
        }
        ?>
    </title>
    <link rel='stylesheet' href="catogorie.css">
</head>

<body>
    <?php
    function titleCat($catagorie, $kleur)
    {
        echo "  <div class='cat'>
                    <div>
                        <a class='box-title $kleur' href='http://localhost/nu.nl/catagorie/catagorie.php?catagorie=$catagorie''>$catagorie</a>
                    </div>";
    };
    function picCat($img, $title_full)
    {
        echo "  <figure>
                    <div class='figimg'>
                        <img src='../artikel/pics/$img.webp'>  
                    </div>
                    <figcaption><span>$title_full</span></figcaption>
                </figure>";
    };
    function linkCat($title_full, $kleur)
    {
        echo ("
            <div class='cat-links'>
                <a href='' class='row'>
                    <div class='item-marker' style='background-color: var(--$kleur)'>
                    </div>
                    <div class='title-wrapper'>
                        <div class='item-title'>
                            <span class='echt-title'>$title_full</span>
                        </div>
                    </div>
                </a>
            </div>");
    };
    function meerknop($catagorie, $kleur)
    {
        echo "
            <div>
                <a class='meer-knop $kleur' href='http://localhost/nu.nl/catagorie/catagorie.php?catagorie=$catagorie'>meer $catagorie ></a>
            </div>
        </div>";
    };
    function mainCat($c, $k, $l)
    {
        titleCat($c, $k);
        $title = 'Rust terug in Rostov aan de Don, Prigozhin houdt zich stil na deal met Rusland';
        picCat('doodskist', $title);
        for ($x = 1; $x <= $l; $x++) {
            linkCat($title, $k);
        }
        meerknop($c, $k);
        echo '<hr>';
    };
    function subCat($t, $c, $k, $l)
    {
        titleCat($t, $k);
        $title = 'Rust terug in Rostov aan de Don, Prigozhin houdt zich stil na deal met Rusland';
        picCat('doodskist', $title);
        for ($x = 1; $x <= $l; $x++) {
            linkCat($title, $k);
        }
        meerknop($t, $k);
        echo '<hr>';
    };
    function videos($title, $aantal)
    {
        echo "  <div class='video column'>
                    <div class='video-title'>
                        <h1>$title</h1>
                    </div>";
        echo "  <div class='video-body'>";
        $video_title = 'iets';
        for ($x = 1; $x <= $aantal; $x++) {
            if ($x % 2 != 0) {
                echo "<div class='video-line row'>";
            }
            echo "
                <div class='video-block'>
                    <a href='nu.nl' class='column'>
                        <img src='../Homepage/img/video$x.png'>
                        <span>$video_title</span>
                    </a>
                </div>";
            if ($x % 2 == 0) {
                echo "</div>";
            }
        }
        echo "</div>";
        echo "
                <a href= 'https://www.nu.nl/videos' class='video-meer row'>
                    <div class='video-img'>
                        <img src='../navbar/pics/Nu-nl-logo.png'>
                    </div>
                    <span class='video-span'>Bekijk hier meer video's</span>
                </a>
            </div>

        ";
    }
    ?>
    <?php
    include '..\navbar\navbar.php';
    ?>
    <div class="middle">
        <div class="column">
            <div class="top-links">
                <?php
                $date = date("l d M y");
                echo "<div>$date | Het laatste nieuws het eerst op NU.nl</div>";
                ?>
                <a href="nu.nl" class="zoek-link">
                    <img class="zoek-img" src="pics/zoek.png" alt="zoek">
                </a>
            </div>
            <div class="aside-column">
                <div class="news column">
                    <?php
                    switch ($_GET['catagorie']) {
                        case 'home':
                            echo "<div class='cat toploos'>";
                            $title = 'Rust terug in Rostov aan de Don, Prigozhin houdt zich stil na deal met Rusland';
                            picCat('doodskist', $title);
                            for ($x = 1; $x <= 10; $x++) {
                                linkCat($title, 'black');
                            }
                            meerknop('Algemeen', 'black');
                            echo '<hr>';
                            //ad
                            videos("Nieuwsvideo's", 6);
                            mainCat('economie', 'blue', 8);
                            mainCat('sport', 'red', 8);
                            mainCat('media en cultuur', 'orange', 4);
                            subcat('achterklap', '', 'purple', 4);
                            subcat('Uit andere media', '', 'black', 4);
                            videos("Uitgelichte video's", 8);
                            subcat('Tech & Wetenschap', '', 'purple', 4);
                            subcat('Achtergronden', '', 'black', 4);
                        case 'sport':
                            $cat = 'sport';
                            $subcat1 = 'voetbal';
                            $subcat2 = 'formule1';
                            $subcat3 = 'wielrennen';
                            $subcat4 = 'sportspellen';
                            $kleur = 'red';
                            mainCat($cat, $kleur, 5);
                            subCat('voetbal', $subcat1, $kleur, 5);
                            subCat('formule 1', $subcat2, $kleur, 5);
                            subCat('wielrennen', $subcat3, $kleur, 5);
                            subCat('sport overig', $subcat4, $kleur, 5);
                            break;
                        case 'entertainment':
                            $cat = 'Media en cultuur';
                            $subcat1 = 'films';
                            $subcat2 = 'muziek';
                            $subcat3 = 'media';
                            $subcat4 = 'boeken';
                            $kleur = 'orange';
                            mainCat($cat, $kleur, 5);
                            subCat('films & series', $subcat1, $kleur, 5);
                            subCat('muziek', $subcat2, $kleur, 5);
                            subCat('media', $subcat3, $kleur, 5);
                            subCat('boek & cultuur', $subcat4, $kleur, 5);
                            break;
                        case 'economie':
                            $cat = 'economie';
                            $subcat1 = 'tech';
                            $subcat2 = 'klimaat';
                            $subcat3 = 'geld';
                            $subcat4 = 'werk';
                            $subcat5 = 'auto';
                            $kleur = 'blue';
                            mainCat($cat, $kleur, 5);
                            subCat('tech', $subcat1, $kleur, 5);
                            subCat('klimaat', $subcat2, $kleur, 5);
                            subCat('geld', $subcat3, $kleur, 5);
                            subCat('werk', $subcat4, $kleur, 5);
                            subCat('onderweg', $subcat5, $kleur, 5);
                            break;
                        case 'overig':
                            $subcat1 = 'opmerkelijk';
                            $subcat2 = 'wetenschap';
                            $subcat3 = 'gezondheid';
                            $subcat4 = 'eten en drinken';
                            $subcat5 = 'wonen';
                            $subcat6 = 'kind en gezin';
                            $subcat7 = 'vakantie';
                            $subcat8 = 'dieren';
                            $subcat9 = 'nucheckt';
                            $kleur = 'black';
                            subCat('opmerkelijk', $subcat1, $kleur, 5);
                            subCat('wetenschap', $subcat2, $kleur, 5);
                            subCat('gezondheid', $subcat3, $kleur, 5);
                            subCat('eten en drinken', $subcat4, $kleur, 5);
                            subCat('wonen', $subcat5, $kleur, 5);
                            subCat('kind en gezin', $subcat6, $kleur, 5);
                            subCat('vakantie', $subcat7, $kleur, 5);
                            subCat('dieren', $subcat8, $kleur, 5);
                            subCat('nucheckt', $subcat9, $kleur, 5);
                            break;
                        default:
                            $cat = $_GET['catagorie'];
                            $kleur = 'black';
                            subCat($cat, $cat, $kleur, 5);
                    }


                    ?>
                </div>
                <div class="aside"></div>
            </div>
        </div>
    </div>
    <?php
    include '..\footer\footer.php';
    ?>
</body>

</html>