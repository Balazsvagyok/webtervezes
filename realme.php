<!DOCTYPE html>
<html lang="hu">



<head>
    <title>Realme telefonok</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Kollár Edvárd, Szelekovszky Balázs" />
    <link rel="icon" href="images/smartphone.png" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo 'Bejelentkezve: ' . $_SESSION['username'];
    }
    ?>

    <?php include_once "components/header.php"; ?>

    <main>

        <div class="video">
            <iframe src="https://www.youtube.com/embed/mQUYQ5KAR3o" width="1000" height="563"></iframe>
        </div>


        <div class="telefonok">
            <div class="telefon">
                <img class="img_margin" src="images/realme_gt_neo3.png" alt="Realme GT Neo 3" onmouseover="this.src='images/realme_gt_neo3_2.png';" onmouseout="this.src='images/realme_gt_neo3.png';">

                <?php
                include 'mytable.php';

                $data = array(
                    array('Kijelző mérete:', '6,7 "'),
                    array('Akkumulátor kapacitása:', '5000 mAh'),
                    array('Kijelző felbontása:', '2412x1080 px'),
                    array('Kijelző technológia:', 'AMOLED'),
                    array('Képfrissítés:', '120 Hz'),
                    array('Processzor:', 'Mediatek Dimensity 8100'),
                    array('ROM:', '256 GB'),
                    array('RAM:', '8 GB'),
                    array('Hátlapi kamerák száma', '3'),
                    array('Hátlapi főkamera felbontása:', '50 MP'),
                    array('Ultra-széles látószögű kamera felbontása:', '8 MP'),
                    array('Makró kamera felbontása:', '2 MP'),
                    array('Elülső kamera felbontása:', '16 MP'),
                    array('Támogatott mobilhálózat:', '5G'),
                    array('NFC támogatás:', 'Igen'),
                    array('Súly:', '188 g'),
                );

                createTable('GT Neo 3', $data);
                ?>

            </div>
            <div class="telefon">
                <img class="img_margin" src="images/realme_10.png" alt="Realme 10" onmouseover="this.src='images/realme_10_2.png';" onmouseout="this.src='images/realme_10.png';">

                <?php
                $data = array(
                    array('Kijelző mérete:', '6,4 "'),
                    array('Akkumulátor kapacitása:', '5000 mAh'),
                    array('Kijelző felbontása:', '2400x1080 px'),
                    array('Kijelző technológia:', 'Super AMOLED'),
                    array('Képfrissítés:', '90 Hz'),
                    array('Processzor:', 'Mediatek MT8781 Helio G99'),
                    array('ROM:', '128 GB'),
                    array('RAM:', '6 GB'),
                    array('Hátlapi kamerák száma', '2'),
                    array('Hátlapi főkamera felbontása:', '50 MP'),
                    array('Mélységérzékelő kamera felbontása:', '2 MP'),
                    array('Elülső kamera felbontása:', '16 MP'),
                    array('Támogatott mobilhálózat:', '4G'),
                    array('NFC támogatás:', 'Igen'),
                    array('Súly:', '178 g'),
                );

                createTable('Realme 10', $data);
                ?>

            </div>
            <div class="telefon">
                <img class="img_margin" src="images/realme_c33.png" alt="Realme C33" onmouseover="this.src='images/realme_c33_2.png';" onmouseout="this.src='images/realme_c33.png';">

                <?php
                $data = array(
                    array('Kijelző mérete:', '6,5 "'),
                    array('Akkumulátor kapacitása:', '5000 mAh'),
                    array('Kijelző felbontása:', '1600x720 px'),
                    array('Kijelző technológia:', 'IPS LCD'),
                    array('Képfrissítés:', '60 Hz'),
                    array('Processzor:', 'Unisoc Tiger T612'),
                    array('ROM:', '64 GB'),
                    array('RAM:', '4 GB'),
                    array('Hátlapi kamerák száma', '2'),
                    array('Hátlapi főkamera felbontása:', '50 MP'),
                    array('Mélységérzékelő kamera felbontása:', '0,3 MP'),
                    array('Támogatott mobilhálózat:', '4G'),
                    array('NFC támogatás:', 'Nem'),
                    array('Súly:', '187 g'),
                );

                createTable('Realme C33', $data);
                ?>

            </div>
        </div>

        <div class="telefonok">
            <div class="telefon">
                <img class="img_margin" src="images/realme_9.png" alt="Realme 9" onmouseover="this.src='images/realme_9_2.png';" onmouseout="this.src='images/realme_9.png';">

                <?php
                $data = array(
                    array('Kijelző mérete:', '6,4 "'),
                    array('Akkumulátor kapacitása:', '5000 mAh'),
                    array('Kijelző felbontása:', '2400x1080 px'),
                    array('Kijelző technológia:', 'Super AMOLED'),
                    array('Képfrissítés:', '90 Hz'),
                    array('Processzor:', 'Snapdragon 680 4G'),
                    array('ROM:', '128 GB'),
                    array('RAM:', '6 GB'),
                    array('Hátlapi kamerák száma', '3'),
                    array('Hátlapi főkamera felbontása:', '108 MP'),
                    array('Ultra-széles látószögű kamera felbontása:', '8 MP'),
                    array('Makró kamera felbontása:', '2 MP'),
                    array('Elülső kamera felbontása:', '16 MP'),
                    array('Támogatott mobilhálózat:', '4G'),
                    array('NFC támogatás:', 'Nem'),
                    array('Súly:', '178 g'),
                );

                createTable('Realme 9', $data);
                ?>

            </div>
            <div class="telefon">
                <img class="img_margin" src="images/realme_9_pro.png" alt="Realme 9 Pro" onmouseover="this.src='images/realme_9_pro_2.png';" onmouseout="this.src='images/realme_9_pro.png';">

                <?php
                $data = array(
                    array('Kijelző mérete:', '6,6 "'),
                    array('Akkumulátor kapacitása:', '5000 mAh'),
                    array('Kijelző felbontása:', '2412x1080 px'),
                    array('Kijelző technológia:', 'IPS LCD'),
                    array('Képfrissítés:', '120 Hz'),
                    array('Processzor:', 'Snapdragon 695 5G'),
                    array('ROM:', '128 GB'),
                    array('RAM:', '6 GB'),
                    array('Hátlapi kamerák száma', '3'),
                    array('Hátlapi főkamera felbontása:', '64 MP'),
                    array('Ultra-széles látószögű kamera felbontása:', '8 MP'),
                    array('Makró kamera felbontása:', '2 MP'),
                    array('Elülső kamera felbontása:', '16 MP'),
                    array('Támogatott mobilhálózat:', '5G'),
                    array('NFC támogatás:', 'Igen'),
                    array('Súly:', '195 g'),
                );

                createTable('Realme 9 Pro', $data);
                ?>

            </div>
            <div class="telefon">
                <img class="img_margin" src="images/realme_9_pro+.png" alt="Realme 9 Pro+" onmouseover="this.src='images/realme_9_pro+_2.png';" onmouseout="this.src='images/realme_9_pro+.png';">

                <?php
                $data = array(
                    array('Kijelző mérete:', '6,4 "'),
                    array('Akkumulátor kapacitása:', '4500 mAh'),
                    array('Kijelző felbontása:', '2400x1080 px'),
                    array('Kijelző technológia:', 'Super AMOLED'),
                    array('Képfrissítés:', '90 Hz'),
                    array('Processzor:', 'Mediatek Dimensity 920'),
                    array('ROM:', '256 GB'),
                    array('RAM:', '8 GB'),
                    array('Hátlapi kamerák száma', '3'),
                    array('Hátlapi főkamera felbontása:', '50 MP'),
                    array('Ultra-széles látószögű kamera felbontása:', '8 MP'),
                    array('Makró kamera felbontása:', '2 MP'),
                    array('Elülső kamera felbontása:', '16 MP'),
                    array('Támogatott mobilhálózat:', '5G'),
                    array('NFC támogatás:', 'Igen'),
                    array('Súly:', '128 g'),
                );

                createTable('Realme 9 Pro+', $data);
                ?>

            </div>
        </div>
    </main>

    <?php include_once "components/footer.php"; ?>

</body>

</html>