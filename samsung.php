<!DOCTYPE html>
<html lang="hu">

<?php
session_start();
if(isset($_SESSION['username'])) {
    echo 'Bejelentkezve: ' . $_SESSION['username'];
}
?>

<head>
    <title>Samsung telefonok</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Kollár Edvárd, Szelekovszky Balázs" />
    <link rel="icon" href="images/smartphone.png" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>

    <?php include_once "header.php"; ?>

    <main>

        <div class="video">
            <iframe src="https://www.youtube.com/embed/iBvfhAuSdUQ" width="1000" height="563"></iframe>
        </div>


        <div class="telefonok">
            <div class="telefon">
                <img class="img_margin" src="images/galaxy_z_fold4.png" alt="Samsung Galaxy Z Fold4" onmouseover="this.src='images/galaxy_z_fold4_2.png';" onmouseout="this.src='images/galaxy_z_fold4.png';">
                
                <?php
                    include 'mytable.php';

                    $data = array(
                        array('Kijelző mérete:', '7,6 "'),
                        array('Akkumulátor kapacitása:', '4400 mAh'),
                        array('Kijelző felbontása:', '2176x1812 px'),
                        array('Kijelző technológia:', 'Foldable Dynamic AMOLED 2X'),
                        array('Képfrissítés:', '120 Hz'),
                        array('Processzor:', 'Snapdragon 8+ Gen 1'),
                        array('ROM:', '512 GB'),
                        array('RAM:', '12 GB'),
                        array('Hátlapi kamerák száma', '3'),
                        array('Hátlapi főkamera felbontása:', '50 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '12 MP'),
                        array('Telefotó kamera felbontása:', '10 MP'),
                        array('Elülső kamera felbontása:', '10 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '263 g'),
                    );

                    createTable('Galaxy Z Fold4', $data);
                ?>
                
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/galaxy_s23.png" alt="Samsung Galaxy S23" onmouseover="this.src='images/galaxy_s23_2.png';" onmouseout="this.src='images/galaxy_s23.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,1 "'),
                        array('Akkumulátor kapacitása:', '3900 mAh'),
                        array('Kijelző felbontása:', '2340x1080 px'),
                        array('Kijelző technológia:', 'Dynamic AMOLED 2X'),
                        array('Képfrissítés:', '120 Hz'),
                        array('Processzor:', 'Snapdragon 8 Gen 2'),
                        array('ROM:', '256 GB'),
                        array('RAM:', '8 GB'),
                        array('Hátlapi kamerák száma', '3'),
                        array('Hátlapi főkamera felbontása:', '50 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '12 MP'),
                        array('Telefotó kamera felbontása:', '10 MP'),
                        array('Elülső kamera felbontása:', '12 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '168 g'),
                    );

                    createTable('Galaxy S23', $data);
                ?>
                
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/galaxy_s23_ultra.png" alt="Samsung Galaxy S23 Ulra" onmouseover="this.src='images/galaxy_s23_ultra_2.png';" onmouseout="this.src='images/galaxy_s23_ultra.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,8 "'),
                        array('Akkumulátor kapacitása:', '5000 mAh'),
                        array('Kijelző felbontása:', '3088x1440 px'),
                        array('Kijelző technológia:', 'Dynamic AMOLED 2X'),
                        array('Képfrissítés:', '120 Hz'),
                        array('Processzor:', 'Snapdragon 8 Gen 2'),
                        array('ROM:', '256 GB'),
                        array('RAM:', '8 GB'),
                        array('Hátlapi kamerák száma', '4'),
                        array('Hátlapi főkamera felbontása:', '200 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '12 MP'),
                        array('Telefotó kamera felbontása:', '10 MP'),
                        array('Periszkóp telefotó kamera felbontása:', '10 MP'),
                        array('Elülső kamera felbontása:', '12 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '234 g'),
                    );

                    createTable('Galaxy S23 Ultra', $data);
                ?>
                
            </div>
        </div>

        <div class="telefonok">
            <div class="telefon">
                <img class="img_margin" src="images/galaxy_s22.png" alt="Samsung Galaxy S22" onmouseover="this.src='images/galaxy_s22_2.png';" onmouseout="this.src = 'images/galaxy_s22.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,1 "'),
                        array('Akkumulátor kapacitása:', '3700 mAh'),
                        array('Kijelző felbontása:', '2340x1080 px'),
                        array('Kijelző technológia:', 'Dynamic AMOLED 2X'),
                        array('Képfrissítés:', '120 Hz'),
                        array('Processzor:', 'Snapdragon 8 Gen 1'),
                        array('ROM:', '256 GB'),
                        array('RAM:', '8 GB'),
                        array('Hátlapi kamerák száma', '3'),
                        array('Hátlapi főkamera felbontása:', '50 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '12 MP'),
                        array('Telefotó kamera felbontása:', '10 MP'),
                        array('Elülső kamera felbontása:', '10 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '167 g'),
                    );

                    createTable('Galaxy S22', $data);
                ?>
                
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/galaxy_s22_ultra.png" alt="Samsung Galaxy S22 Ultra" onmouseover="this.src = 'images/galaxy_s22_ultra_2.png';" onmouseout="this.src = 'images/galaxy_s22_ultra.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,8 "'),
                        array('Akkumulátor kapacitása:', '5000 mAh'),
                        array('Kijelző felbontása:', '3088x1440 px'),
                        array('Kijelző technológia:', 'Dynamic AMOLED 2X'),
                        array('Képfrissítés:', '120 Hz'),
                        array('Processzor:', 'Snapdragon 8 Gen 1'),
                        array('ROM:', '256 GB'),
                        array('RAM:', '8 GB'),
                        array('Hátlapi kamerák száma', '4'),
                        array('Hátlapi főkamera felbontása:', '108 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '12 MP'),
                        array('Telefotó kamera felbontása:', '10 MP'),
                        array('Periszkóp telefotó kamera felbontása:', '10 MP'),
                        array('Elülső kamera felbontása:', '40 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '228 g'),
                    );

                    createTable('Galaxy S22 Ultra', $data);
                ?>
                
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/galaxy_a51.png" alt="Samsung Galaxy A51" onmouseover="this.src = 'images/galaxy_a51_2.png';" onmouseout="this.src = 'images/galaxy_a51.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,5 "'),
                        array('Akkumulátor kapacitása:', '4000 mAh'),
                        array('Kijelző felbontása:', '2400x1080 px'),
                        array('Kijelző technológia:', 'Super AMOLED'),
                        array('Képfrissítés:', '60 Hz'),
                        array('Processzor:', 'Exynos 9611'),
                        array('ROM:', '128 GB'),
                        array('RAM:', '4 GB'),
                        array('Hátlapi kamerák száma', '4'),
                        array('Hátlapi főkamera felbontása:', '48 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '12 MP'),
                        array('Makró kamera felbontása:', '5 MP'),
                        array('Mélységszenzor felbontása:', '5 MP'),
                        array('Elülső kamera felbontása:', '32 MP'),
                        array('Támogatott mobilhálózat:', '4G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '172 g'),
                    );

                    createTable('Galaxy A51', $data);
                ?>
                
            </div>
        </div>
    </main>

    <?php include_once "footer.php"; ?>

</body>

</html>