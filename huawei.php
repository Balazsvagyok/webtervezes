<!DOCTYPE html>
<html lang="hu">


<head>
    <title>Huawei telefonok</title>
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

    <?php include_once "header.php"; ?>

    <main>

        <div class="video">
            <iframe src="https://www.youtube.com/embed/54tGywFswXs" width="1000" height="563"></iframe>
        </div>


        <div class="telefonok">
            <div class="telefon">
                <img class="img_margin" src="images/huawei_mate50_pro.png" alt="Huawei Mate50 Pro" onmouseover="this.src='images/huawei_mate50_pro_2.png';" onmouseout="this.src='images/huawei_mate50_pro.png';">

                <?php
                include 'mytable.php';

                $data = array(
                    array('Kijelző mérete:', '6,74 "'),
                    array('Akkumulátor kapacitása:', '3700 mAh'),
                    array('Kijelző felbontása:', '2616x1212 px'),
                    array('Kijelző technológia:', 'OLED'),
                    array('Képfrissítés:', '120 Hz'),
                    array('Processzor:', 'Snapdragon 8+ Gen 1 4G'),
                    array('ROM:', '512 GB'),
                    array('RAM:', '8 GB'),
                    array('Hátlapi kamerák száma', '3'),
                    array('Hátlapi főkamera felbontása:', '50 MP'),
                    array('Ultra-széles látószögű kamera felbontása:', '13 MP'),
                    array('Periszkóp telefotó kamera felbontása:', '64 MP'),
                    array('Elülső kamera felbontása:', '13 MP'),
                    array('Támogatott mobilhálózat:', '4G'),
                    array('NFC támogatás:', 'Igen'),
                    array('Súly:', '205 g'),
                );

                createTable('Mate 50 Pro', $data);
                ?>

            </div>
            <div class="telefon">
                <img class="img_margin" src="images/huawei_mate40_pro.png" alt="Huawei Mate40 Pro" onmouseover="this.src='images/huawei_mate40_pro_2.png';" onmouseout="this.src='images/huawei_mate40_pro.png';">

                <?php
                $data = array(
                    array('Kijelző mérete:', '6,76 "'),
                    array('Akkumulátor kapacitása:', '4400 mAh'),
                    array('Kijelző felbontása:', '2772x1344 px'),
                    array('Kijelző technológia:', 'OLED'),
                    array('Képfrissítés:', '90 Hz'),
                    array('Processzor:', 'Kirin 9000 5G'),
                    array('ROM:', '256 GB'),
                    array('RAM:', '8 GB'),
                    array('Hátlapi kamerák száma', '3'),
                    array('Hátlapi főkamera felbontása:', '50 MP'),
                    array('Ultra-széles látószögű kamera felbontása:', '20 MP'),
                    array('Periszkóp telefotó kamera felbontása:', '12 MP'),
                    array('Elülső kamera felbontása:', '13 MP'),
                    array('Támogatott mobilhálózat:', '5G'),
                    array('NFC támogatás:', 'Igen'),
                    array('Súly:', '212 g'),
                );

                createTable('Mate 40 Pro', $data);
                ?>

            </div>
            <div class="telefon">
                <img class="img_margin" src="images/huawei_mate_xs.png" alt="Huawei Mate Xs" onmouseover="this.src='images/huawei_mate_xs_2.png';" onmouseout="this.src='images/huawei_mate_xs.png';">

                <?php
                $data = array(
                    array('Kijelző mérete:', '8,0 "'),
                    array('Akkumulátor kapacitása:', '4500 mAh'),
                    array('Kijelző felbontása:', '2480x2200 px'),
                    array('Kijelző technológia:', 'Foldable OLED'),
                    array('Képfrissítés:', '60 Hz'),
                    array('Processzor:', 'Kirin 990 5G'),
                    array('ROM:', '512 GB'),
                    array('RAM:', '8 GB'),
                    array('Hátlapi kamerák száma', '3'),
                    array('Hátlapi főkamera felbontása:', '40 MP'),
                    array('Ultra-széles látószögű kamera felbontása:', '16 MP'),
                    array('Felefotó kamera felbontása:', '8 MP'),
                    array('Támogatott mobilhálózat:', '5G'),
                    array('NFC támogatás:', 'Igen'),
                    array('Súly:', '300 g'),
                );

                createTable('Mate Xs', $data);
                ?>

            </div>
        </div>

        <div class="telefonok">
            <div class="telefon">
                <img class="img_margin" src="images/huawei_p50_pro.png" alt="Huawei P50 Pro" onmouseover="this.src='images/huawei_p50_pro_2.png';" onmouseout="this.src='images/huawei_p50_pro.png';">

                <?php
                $data = array(
                    array('Kijelző mérete:', '6,6 "'),
                    array('Akkumulátor kapacitása:', '4360 mAh'),
                    array('Kijelző felbontása:', '2700x1228 px'),
                    array('Kijelző technológia:', 'OLED'),
                    array('Képfrissítés:', '120 Hz'),
                    array('Processzor:', 'Kirin 9000'),
                    array('ROM:', '256 GB'),
                    array('RAM:', '8 GB'),
                    array('Hátlapi kamerák száma', '4'),
                    array('Hátlapi főkamera felbontása:', '50 MP'),
                    array('Ultra-széles látószögű kamera felbontása:', '13 MP'),
                    array('Periszkóp telefotó kamera felbontása:', '64 MP'),
                    array('B/W kamera felbontása:', '40 MP'),
                    array('Elülső kamera felbontása:', '13 MP'),
                    array('Támogatott mobilhálózat:', '4G'),
                    array('NFC támogatás:', 'Igen'),
                    array('Súly:', '195 g'),
                );

                createTable('Huawei P50 Pro', $data);
                ?>

            </div>
            <div class="telefon">
                <img class="img_margin" src="images/huawei_p40_pro.png" alt="Huawei P40 Pro" onmouseover="this.src='images/huawei_p40_pro_2.png';" onmouseout="this.src='images/huawei_p40_pro.png';">

                <?php
                $data = array(
                    array('Kijelző mérete:', '6,58 "'),
                    array('Akkumulátor kapacitása:', '4200 mAh'),
                    array('Kijelző felbontása:', '2640x1200 px'),
                    array('Kijelző technológia:', 'OLED'),
                    array('Képfrissítés:', '90 Hz'),
                    array('Processzor:', 'Kirin 990 5G'),
                    array('ROM:', '256 GB'),
                    array('RAM:', '8 GB'),
                    array('Hátlapi kamerák száma', '3'),
                    array('Hátlapi főkamera felbontása:', '50 MP'),
                    array('Ultra-széles látószögű kamera felbontása:', '40 MP'),
                    array('Periszkóp telefotó kamera felbontása:', '12 MP'),
                    array('Elülső kamera felbontása:', '32 MP'),
                    array('Támogatott mobilhálózat:', '5G'),
                    array('NFC támogatás:', 'Igen'),
                    array('Súly:', '209 g'),
                );

                createTable('Huawei P40 Pro', $data);
                ?>

            </div>
            <div class="telefon">
                <img class="img_margin" src="images/huawei_p40.png" alt="Huawei P40" onmouseover="this.src='images/huawei_p40_2.png';" onmouseout="this.src='images/huawei_p40.png';">

                <?php
                $data = array(
                    array('Kijelző mérete:', '6,0 "'),
                    array('Akkumulátor kapacitása:', '3800 mAh'),
                    array('Kijelző felbontása:', '2340x1080 px'),
                    array('Kijelző technológia:', 'OLED'),
                    array('Képfrissítés:', '60 Hz'),
                    array('Processzor:', 'Kirin 990 5G'),
                    array('ROM:', '128 GB'),
                    array('RAM:', '6 GB'),
                    array('Hátlapi kamerák száma', '3'),
                    array('Hátlapi főkamera felbontása:', '50 MP'),
                    array('Ultra-széles látószögű kamera felbontása:', '16 MP'),
                    array('Periszkóp telefotó kamera felbontása:', '8 MP'),
                    array('Elülső kamera felbontása:', '32 MP'),
                    array('Támogatott mobilhálózat:', '5G'),
                    array('NFC támogatás:', 'Igen'),
                    array('Súly:', '175 g'),
                );

                createTable('Huawei P40', $data);
                ?>

            </div>
        </div>
    </main>

    <?php include_once "footer.php"; ?>

</body>

</html>