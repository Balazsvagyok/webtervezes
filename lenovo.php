<!DOCTYPE html>
<html lang="hu">

<?php
session_start();
if(isset($_SESSION['username'])) {
    echo 'Bejelentkezve: ' . $_SESSION['username'];
}
?>

<head>
    <title>Lenovo telefonok</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Kollár Edvárd, Szelekovszky Balázs" />
    <link rel="icon" href="images/smartphone.png" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>

    <?php include_once "header.php"; ?>

    <main>

        <div class="video">
            <iframe src="https://www.youtube.com/embed/wd5MgMlsNA8" width="1000" height="563"></iframe>
        </div>


        <div class="telefonok">
            <div class="telefon">
                <img class="img_margin" src="images/lenovo_y70.png" alt="Lenovo Y70" onmouseover="this.src='images/lenovo_y70_2.png';" onmouseout="this.src='images/lenovo_y70.png';">
                
                <?php
                    include 'mytable.php';

                    $data = array(
                        array('Kijelző mérete:', '6,67 "'),
                        array('Akkumulátor kapacitása:', '5100 mAh'),
                        array('Kijelző felbontása:', '2400x1080 px'),
                        array('Kijelző technológia:', 'OLED'),
                        array('Képfrissítés:', '144 Hz'),
                        array('Processzor:', 'Snapdragon 8+ Gen 1'),
                        array('ROM:', '512 GB'),
                        array('RAM:', '12 GB'),
                        array('Hátlapi kamerák száma', '3'),
                        array('Hátlapi főkamera felbontása:', '50 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '13 MP'),
                        array('Mélységszenzor felbontása:', '2 MP'),
                        array('Elülső kamera felbontása:', '16 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '209 g'),
                    );

                    createTable('Lenovo Legion Y70', $data);
                ?>
                
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/lenovo_y90.png" alt="Lenovo Y90" onmouseover="this.src='images/lenovo_y90_2.png';" onmouseout="this.src='images/lenovo_y90.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,4 "'),
                        array('Akkumulátor kapacitása:', '4500 mAh'),
                        array('Kijelző felbontása:', '2340x1080 px'),
                        array('Kijelző technológia:', 'AMOLED'),
                        array('Képfrissítés:', '120 Hz'),
                        array('Processzor:', 'Snapdragon 855+'),
                        array('ROM:', '256 GB'),
                        array('RAM:', '8 GB'),
                        array('Hátlapi kamerák száma', '2'),
                        array('Hátlapi főkamera felbontása:', '48 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '8 MP'),
                        array('Elülső kamera felbontása:', '12 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '252 g'),
                    );

                    createTable('Lenovo Legion Y90', $data);
                ?>
            
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/lenovo_k14_plus.png" alt="Lenovo K14 Plus" onmouseover="this.src='images/lenovo_k14_plus_2.png';" onmouseout="this.src='images/lenovo_k14_plus.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,2 "'),
                        array('Akkumulátor kapacitása:', '5000 mAh'),
                        array('Kijelző felbontása:', '1520x720 px'),
                        array('Kijelző technológia:', 'IPS LCD'),
                        array('Képfrissítés:', '60 Hz'),
                        array('Processzor:', 'MEDIATEK Helio P22'),
                        array('ROM:', '64 GB'),
                        array('RAM:', '4 GB'),
                        array('Hátlapi kamerák száma', '2'),
                        array('Hátlapi főkamera felbontása:', '64 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '8 MP'),
                        array('Elülső kamera felbontása:', '8 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '192 g'),
                    );

                    createTable('Lenovo K14 Plus', $data);
                ?>
            
            </div>
        </div>

        <div class="telefonok">
            <div class="telefon">
                <img class="img_margin" src="images/lenovo_k13_pro.png" alt="Lenovo K13 Pro" onmouseover="this.src='images/lenovo_k13_pro_2.png';" onmouseout="this.src='images/lenovo_k13_pro.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,5 "'),
                        array('Akkumulátor kapacitása:', '6000 mAh'),
                        array('Kijelző felbontása:', '1600x720 px'),
                        array('Kijelző technológia:', 'IPS LCD'),
                        array('Képfrissítés:', '90 Hz'),
                        array('Processzor:', 'MEDIATEK Helio G35'),
                        array('ROM:', '128 GB'),
                        array('RAM:', '6 GB'),
                        array('Hátlapi kamerák száma', '2'),
                        array('Hátlapi főkamera felbontása:', '64 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '8 MP'),
                        array('Elülső kamera felbontása:', '13 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '200 g'),
                    );

                    createTable('Lenovo K13 Pro', $data);
                ?>
                
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/lenovo_k13.png" alt="Lenovo K13" onmouseover="this.src='images/lenovo_k13_2.png';" onmouseout="this.src='images/lenovo_k13.png';">

                <?php

                    $data = array(
                        array('Kijelző mérete:', '5,4 "'),
                        array('Akkumulátor kapacitása:', '2438 mAh'),
                        array('Kijelző felbontása:', '1600x720 px'),
                        array('Kijelző technológia:', 'IPS LCD'),
                        array('Képfrissítés:', '60 Hz'),
                        array('Processzor:', 'MEDIATEK Helio G25'),
                        array('ROM:', '64 GB'),
                        array('RAM:', '3 GB'),
                        array('Hátlapi kamerák száma', '2'),
                        array('Hátlapi főkamera felbontása:', '13 MP'),
                        array('Elülső kamera felbontása:', '5 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '200 g'),
                    );

                    createTable('Lenovo K13', $data);
                ?>
                
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/lenovo_k13_note.png" alt="Lenovo K13 Note" onmouseover="this.src='images/lenovo_k13_note_2.png';" onmouseout="this.src='images/lenovo_k13_note.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,5 "'),
                        array('Akkumulátor kapacitása:', '5000 mAh'),
                        array('Kijelző felbontása:', '1600x720 px'),
                        array('Kijelző technológia:', 'IPS LCD'),
                        array('Képfrissítés:', '60 Hz'),
                        array('Processzor:', 'UNISOC SC9863A'),
                        array('ROM:', '128 GB'),
                        array('RAM:', '4 GB'),
                        array('Hátlapi kamerák száma', '2'),
                        array('Hátlapi főkamera felbontása:', '48 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '8 MP'),
                        array('Elülső kamera felbontása:', '8 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '200 g'),
                    );

                    createTable('Lenovo K13 Note', $data);
                ?>
                
            </div>
        </div>
    </main>

    <?php include_once "footer.php"; ?>

</body>

</html>