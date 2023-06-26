<?php
require_once('../db/db.inc.php');
?>

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
    function algemeen($c, $k, $d, $l)
    {
        echo "<div class='cat toploos'>";
        $basicSQL = "select * from artikel limit $l";
        $recordset = $d->query($basicSQL);
        $check = 1;
        while ($row = $recordset->fetch()) {
            if ($check == 1) {
                picCat($row['img'], $row['naam']);
            } else {
                linkCat($row['naam'], $k);
            }

            ++$check;;
        }
        meerknop($c, $k);
        echo '<hr>';
    }
    function mainCat($c, $k, $d, $l)
    {
        titleCat($c, $k);
        $basicSQL = "select * from artikel where id in ( select artikel_id from artikelOnderwerp where onderwerp_id in (select id from onderwerp where main_onderwerp = '$c')) limit $l";
        $recordset = $d->query($basicSQL);
        $check = 1;
        while ($row = $recordset->fetch()) {
            if ($check == 1) {
                picCat($row['img'], $row['naam']);
            } else {
                linkCat($row['naam'], $k);
            }

            ++$check;;
        }
        meerknop($c, $k);
        echo '<hr>';
    };
    function subCat($t, $c, $k, $d, $l)
    {
        titleCat($t, $k);
        $basicSQL = "select * from artikel where id in ( select artikel_id from artikelOnderwerp where onderwerp_id in (select id from onderwerp where sub_onderwep = '$c')) limit $l";
        $recordset = $d->query($basicSQL);
        $check = 1;
        while ($row = $recordset->fetch()) {
            if ($check == 1) {
                picCat($row['img'], $row['naam']);
            } else {
                linkCat($row['naam'], $k);
            }

            ++$check;;
        }
        meerknop($t, $k);
        echo '<hr>';
    };
    function multicat($t, $c1, $c2, $k, $d, $l)
    {
        titleCat($t, $k);
        $basicSQL = "select * from artikel where id in ( select artikel_id from artikelOnderwerp where onderwerp_id in (select id from onderwerp where sub_onderwep = '$c1' || sub_onderwep = '$c2')) limit $l";
        $recordset = $d->query($basicSQL);
        $check = 1;
        while ($row = $recordset->fetch()) {
            if ($check == 1) {
                picCat($row['img'], $row['naam']);
            } else {
                linkCat($row['naam'], $k);
            }

            ++$check;;
        }
        meerknop($t, $k);
        echo '<hr>';
    }
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
    <div>
        <div class="video-title">
            <h1></h1>
        </div>
        <div class="video-body">
            <div class="video-line">
                <div class="video-block">
                    <a href="nu.nl">
                        <img src="">
                        <span></span>
                    </a>
                </div>
                <div class="video-block">
                    <a href="nu.nl">
                        <img src="">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="video-meer">
            <div class="video-img">
                <img src="../navbar/pics/Nu-nl-logo.png">
            </div>
            <span class="video-span">Bekijk hier meer video's</span>
        </div>
    </div>
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
                            algemeen('algemeen', 'black', $db, 11);
                            //ad
                            videos("Nieuwsvideo's", 6);
                            mainCat('economie', 'blue', $db, 8);
                            mainCat('sport', 'red', $db, 8);
                            mainCat('media en cultuur', 'oranje', $db, 4);
                            subcat('achterklap', 'achterklap', 'paars', $db, 4);
                            subcat('Uit andere media', 'vakantie', 'black', $db, 4);
                            videos("Uitgelichte video's", 8);
                            multicat('Tech & Wetenschap', 'tech', 'wetenschap', 'paars', $db, 4);
                            subcat('Achtergronden', 'klimaat', 'black', $db, 4);
                        case 'sport':
                            $cat = 'sport';
                            $subcat1 = 'voetbal';
                            $subcat2 = 'formule1';
                            $subcat3 = 'wielrennen';
                            $subcat4 = 'sportspellen';
                            $kleur = 'rood';
                            mainCat($cat, $kleur, $db, 18);
                            subCat('voetbal', $subcat1, $kleur, $db, 9);
                            subCat('formule 1', $subcat2, $kleur, $db, 9);
                            subCat('wielrennen', $subcat3, $kleur, $db, 9);
                            subCat('sport overig', $subcat4, $kleur, $db, 9);
                            break;
                        case 'entertainment':
                            $cat = 'Media en cultuur';
                            $subcat1 = 'films';
                            $subcat2 = 'muziek';
                            $subcat3 = 'media';
                            $subcat4 = 'boeken';
                            $kleur = 'orange';
                            mainCat($cat, $kleur, $db, 18);
                            subCat('films & series', $subcat1, $kleur, $db, 9);
                            subCat('muziek', $subcat2, $kleur, $db, 9);
                            subCat('media', $subcat3, $kleur, $db, 9);
                            subCat('boek & cultuur', $subcat4, $kleur, $db, 9);
                            break;
                        case 'economie':
                            $cat = 'economie';
                            $subcat1 = 'tech';
                            $subcat2 = 'klimaat';
                            $subcat3 = 'geld';
                            $subcat4 = 'werk';
                            $subcat5 = 'auto';
                            $kleur = 'blue';
                            mainCat($cat, $kleur, $db, 18);
                            subCat('tech', $subcat1, $kleur, $db, 9);
                            subCat('klimaat', $subcat2, $kleur, $db, 9);
                            subCat('geld', $subcat3, $kleur, $db, 9);
                            subCat('werk', $subcat4, $kleur, $db, 9);
                            subCat('onderweg', $subcat5, $kleur, $db, 9);
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
                            subCat('opmerkelijk', $subcat1, $kleur, $db, 9);
                            subCat('wetenschap', $subcat2, $kleur, $db, 9);
                            subCat('gezondheid', $subcat3, $kleur, $db, 9);
                            subCat('eten en drinken', $subcat4, $kleur, $db, 9);
                            subCat('wonen', $subcat5, $kleur, $db, 9);
                            subCat('kind en gezin', $subcat6, $kleur, $db, 9);
                            subCat('vakantie', $subcat7, $kleur, $db, 9);
                            subCat('dieren', $subcat8, $kleur, $db, 9);
                            subCat('nucheckt', $subcat9, $kleur, $db, 9);
                            break;
                        default:
                            $cat = $_GET['catagorie'];
                            $kleur = 'black';
                            subCat($cat, $cat, $kleur, $db, 9);
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