<!DOCTYPE html>
<html lang="hu">

<head>
    <title>Apple telefonok</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Kollár Edvárd, Szelekovszky Balázs" />
    <link rel="icon" href="images/smartphone.png" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>

    <?php include_once "header.php"; ?>

    <main>

        <div class="video">
            <iframe src="https://www.youtube.com/embed/ehbmC1irQuY" width="1000" height="563"></iframe>
        </div>


        <div class="telefonok">
            <div class="telefon">
                <img class="img_margin" src="images/iphone_14_pro.png" alt="iPhone 14 Pro" onmouseover="this.src='images/iphone_14_pro_2.png';" onmouseout="this.src='images/iphone_14_pro.png';">
                
                <?php
                    include 'mytable.php';

                    $data = array(
                        array('Kijelző mérete:', '6,1 "'),
                        array('Akkumulátor kapacitása:', '3200 mAh'),
                        array('Kijelző felbontása:', '2556x1179 px'),
                        array('Kijelző technológia:', 'LTPO Super Retina XDR OLED'),
                        array('Képfrissítés:', '120 Hz'),
                        array('Processzor:', 'Apple A16 Bionic'),
                        array('ROM:', '256 GB'),
                        array('RAM:', '6 GB'),
                        array('Hátlapi kamerák száma', '3'),
                        array('Hátlapi főkamera felbontása:', '48 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '12 MP'),
                        array('Telefotó kamera felbontása:', '12 MP'),
                        array('Elülső kamera felbontása:', '12 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '206 g'),
                    );

                    createTable('iPhone 14 Pro', $data);
                ?>
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/iphone_14.png" alt="iPhone 14" onmouseover="this.src='images/iphone_14_2.png';" onmouseout="this.src='images/iphone_14.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,1 "'),
                        array('Akkumulátor kapacitása:', '3279 mAh'),
                        array('Kijelző felbontása:', '2532x1179 px'),
                        array('Kijelző technológia:', ' Super Retina XDR OLED'),
                        array('Képfrissítés:', '60 Hz'),
                        array('Processzor:', 'Apple A15 Bionic'),
                        array('ROM:', '256 GB'),
                        array('RAM:', '6 GB'),
                        array('Hátlapi kamerák száma', '2'),
                        array('Hátlapi főkamera felbontása:', '12 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '12 MP'),
                        array('Elülső kamera felbontása:', '12 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '172 g'),
                    );

                    createTable('iPhone 14', $data);
                ?>
        
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/iphone_14_plus.png" alt="iPhone 14 Plus" onmouseover="this.src='images/iphone_14_plus_2.png';" onmouseout="this.src='images/iphone_14_plus.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,7 "'),
                        array('Akkumulátor kapacitása:', '4323 mAh'),
                        array('Kijelző felbontása:', '2778x1284 px'),
                        array('Kijelző technológia:', ' Super Retina XDR OLED'),
                        array('Képfrissítés:', '60 Hz'),
                        array('Processzor:', 'Apple A15 Bionic'),
                        array('ROM:', '256 GB'),
                        array('RAM:', '6 GB'),
                        array('Hátlapi kamerák száma', '2'),
                        array('Hátlapi főkamera felbontása:', '12 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '12 MP'),
                        array('Elülső kamera felbontása:', '12 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '203 g'),
                    );

                    createTable('iPhone 14 Plus', $data);
                ?>
        
            </div>
        </div>

        <div class="telefonok">
            <div class="telefon">
                <img class="img_margin" src="images/iphone_13.png" alt="iPhone 13" onmouseover="this.src='images/iphone_13_2.png';" onmouseout="this.src='images/iphone_13.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,1 "'),
                        array('Akkumulátor kapacitása:', '3240 mAh'),
                        array('Kijelző felbontása:', '2532x1170 px'),
                        array('Kijelző technológia:', ' Super Retina XDR OLED'),
                        array('Képfrissítés:', '60 Hz'),
                        array('Processzor:', 'Apple A15 Bionic'),
                        array('ROM:', '256 GB'),
                        array('RAM:', '4 GB'),
                        array('Hátlapi kamerák száma', '2'),
                        array('Hátlapi főkamera felbontása:', '12 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '12 MP'),
                        array('Elülső kamera felbontása:', '12 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '174 g'),
                    );

                    createTable('iPhone 13', $data);
                ?>
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/iphone_13_mini.png" alt="iPhone 13 Mini" onmouseover="this.src='images/iphone_13_mini_2.png';" onmouseout="this.src='images/iphone_13_mini.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '5,4 "'),
                        array('Akkumulátor kapacitása:', '2438 mAh'),
                        array('Kijelző felbontása:', '2340x1080 px'),
                        array('Kijelző technológia:', ' Super Retina XDR OLED'),
                        array('Képfrissítés:', '60 Hz'),
                        array('Processzor:', 'Apple A15 Bionic'),
                        array('ROM:', '256 GB'),
                        array('RAM:', '4 GB'),
                        array('Hátlapi kamerák száma', '2'),
                        array('Hátlapi főkamera felbontása:', '12 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '12 MP'),
                        array('Elülső kamera felbontása:', '12 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '141 g'),
                    );

                    createTable('iPhone 13 mini', $data);
                ?>
                
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/iphone_12.png" alt="iPhone 12" onmouseover="this.src='images/iphone_12_2.png';" onmouseout="this.src='images/iphone_12.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,1 "'),
                        array('Akkumulátor kapacitása:', '2815 mAh'),
                        array('Kijelző felbontása:', '2532x1170 px'),
                        array('Kijelző technológia:', ' Super Retina XDR OLED'),
                        array('Képfrissítés:', '60 Hz'),
                        array('Processzor:', 'Apple A14 Bionic'),
                        array('ROM:', '256 GB'),
                        array('RAM:', '4 GB'),
                        array('Hátlapi kamerák száma', '2'),
                        array('Hátlapi főkamera felbontása:', '12 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '12 MP'),
                        array('Elülső kamera felbontása:', '12 MP'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '164 g'),
                    );

                    createTable('iPhone 12', $data);
                ?>
                
            </div>
        </div>
    </main>

    <?php include_once "footer.php"; ?>

</body>

</html>