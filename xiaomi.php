<!DOCTYPE html>
<html lang="hu">

<head>
    <title>Xiaomi telefonok</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Kollár Edvárd, Szelekovszky Balázs" />
    <link rel="icon" href="images/smartphone.png" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>

    <?php include_once "header.php"; ?>


    <main>

        <div class="video">
            <iframe src="https://www.youtube.com/embed/aR9LMFOmMF0" width="1000" height="563"></iframe>
        </div>


        <div class="telefonok">
            <div class="telefon">
                <img class="img_margin" src="images/xiaomi_12t_pro.png" alt="Xiaomi 12T Pro" onmouseover="this.src='images/xiaomi_12t_pro2.png';" onmouseout="this.src='images/xiaomi_12t_pro.png';">
                
                <?php
                    include 'mytable.php';

                    $data = array(
                        array('Kijelző mérete:', '6,67 "'),
                        array('Akkumulátor kapacitása:', '5000 mAh'),
                        array('Kijelző felbontása:', '2712x1220 px'),
                        array('Kijelző technológia:', 'AMOLED DotDisplay'),
                        array('Képfrissítés:', '120 Hz'),
                        array('Processzor:', 'Snapdragon 8+ Gen 1'),
                        array('ROM:', '256 GB'),
                        array('RAM:', '8 GB'),
                        array('Hátlapi kamerák száma', '3'),
                        array('Hátlapi főkamera felbontása:', '200 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '8 MP'),
                        array('Makró kamera felbontása:', '2 MP'),
                        array('Elülső kamera felbontása:', '20 MP'),
                        array('Töltési teljesítmény:', '120 W'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '205 g'),
                    );

                    createTable('Xiaomi 12T Pro', $data);
                ?>
                
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/xiaomi_12t.png" alt="Xiaomi 12T" onmouseover="this.src='images/xiaomi_12t2.png';" onmouseout="this.src='images/xiaomi_12t.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,67 "'),
                        array('Akkumulátor kapacitása:', '5000 mAh'),
                        array('Kijelző felbontása:', '2712x1220 px'),
                        array('Kijelző technológia:', 'AMOLED DotDisplay'),
                        array('Képfrissítés:', '120 Hz'),
                        array('Processzor:', 'Snapdragon 8+ Gen 1'),
                        array('ROM:', '128 GB'),
                        array('RAM:', '8 GB'),
                        array('Hátlapi kamerák száma', '3'),
                        array('Hátlapi főkamera felbontása:', '108 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '8 MP'),
                        array('Makró kamera felbontása:', '2 MP'),
                        array('Elülső kamera felbontása:', '20 MP'),
                        array('Töltési teljesítmény:', '120 W'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '202 g'),
                    );

                    createTable('Xiaomi 12T', $data);
                ?>
                
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/redmi_note_11.png" alt="Xiaomi Redmi Note 11" onmouseover="this.src='images/redmi_note_112.png';" onmouseout="this.src='images/redmi_note_11.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,43 "'),
                        array('Akkumulátor kapacitása:', '5000 mAh'),
                        array('Kijelző felbontása:', '2400x1080 px'),
                        array('Kijelző technológia:', 'AMOLED DotDisplay'),
                        array('Képfrissítés:', '90 Hz'),
                        array('Processzor:', 'Snapdragon 680'),
                        array('ROM:', '64 GB'),
                        array('RAM:', '4 GB'),
                        array('Hátlapi kamerák száma', '4'),
                        array('Hátlapi főkamera felbontása:', '50 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '8 MP'),
                        array('Makró kamera felbontása:', '2 MP'),
                        array('Mélységszenzor felbontása:', '2 MP'),
                        array('Elülső kamera felbontása:', '13 MP'),
                        array('Töltési teljesítmény:', '33 W'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '179 g'),
                    );

                    createTable('Redmi Note 11', $data);
                ?>
                
            </div>
        </div>

        <div class="telefonok">
            <div class="telefon">
                <img class="img_margin" src="images/redmi_note_11_pro.png" alt="Xiaomi Redmi Note 11 Pro" onmouseover="this.src='images/redmi_note_11_pro_2.png';" onmouseout="this.src = 'images/redmi_note_11_pro.png';">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,67 "'),
                        array('Akkumulátor kapacitása:', '5000 mAh'),
                        array('Kijelző felbontása:', '2400x1080 px'),
                        array('Kijelző technológia:', 'AMOLED DotDisplay'),
                        array('Képfrissítés:', '120 Hz'),
                        array('Processzor:', 'Snapdragon 695'),
                        array('ROM:', '128 GB'),
                        array('RAM:', '6 GB'),
                        array('Hátlapi kamerák száma', '3'),
                        array('Hátlapi főkamera felbontása:', '108 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '8 MP'),
                        array('Makró kamera felbontása:', '2 MP'),
                        array('Elülső kamera felbontása:', '16 MP'),
                        array('Töltési teljesítmény:', '67 W'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '202 g'),
                    );

                    createTable('Redmi Note 11 Pro', $data);
                ?>
                
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/xiaomi_12_pro.png" alt="Xiaomi 12 Pro" onmouseover="this.src='images/xiaomi_12_pro_2.png';" onmouseout="this.src='images/xiaomi_12_pro.png'">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,73 "'),
                        array('Akkumulátor kapacitása:', '4600 mAh'),
                        array('Kijelző felbontása:', '3200x1440 px'),
                        array('Kijelző technológia:', 'AMOLED DotDisplay'),
                        array('Képfrissítés:', '120 Hz'),
                        array('Processzor:', 'Snapdragon 8 Gen 1'),
                        array('ROM:', '256 GB'),
                        array('RAM:', '12 GB'),
                        array('Hátlapi kamerák száma', '3'),
                        array('Hátlapi főkamera felbontása:', '50 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '50 MP'),
                        array('Telefotó kamera felbontása:', '50 MP'),
                        array('Elülső kamera felbontása:', '32 MP'),
                        array('Töltési teljesítmény:', '120 W'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '205 g'),
                    );

                    createTable('Xiaomi 12 Pro', $data);
                ?>
                
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/xiaomi_12.png" alt="Xiaomi 12" onmouseover="this.src='images/xiaomi_12_2.png';" onmouseout="this.src='images/xiaomi_12.png'">

                <?php
                    $data = array(
                        array('Kijelző mérete:', '6,28 "'),
                        array('Akkumulátor kapacitása:', '4500 mAh'),
                        array('Kijelző felbontása:', '2400x1080 px'),
                        array('Kijelző technológia:', 'AMOLED DotDisplay'),
                        array('Képfrissítés:', '120 Hz'),
                        array('Processzor:', 'Snapdragon 8 Gen 1'),
                        array('ROM:', '128 GB'),
                        array('RAM:', '8 GB'),
                        array('Hátlapi kamerák száma', '3'),
                        array('Hátlapi főkamera felbontása:', '50 MP'),
                        array('Ultra-széles látószögű kamera felbontása:', '13 MP'),
                        array('Makró kamera felbontása:', '5 MP'),
                        array('Elülső kamera felbontása:', '32 MP'),
                        array('Töltési teljesítmény:', '67 W'),
                        array('Támogatott mobilhálózat:', '5G'),
                        array('NFC támogatás:', 'Igen'),
                        array('Súly:', '180 g'),
                    );

                    createTable('Xiaomi 12', $data);
                ?>
                
            </div>
        </div>
    </main>

    <?php include_once "footer.php"; ?>

</body>

</html>