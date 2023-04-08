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

                <table class="center">
                    <tr>
                        <th colspan="2">iPhone 14</th>
                    </tr>
                    <tr>
                        <td>Kijelző mérete: </td>
                        <td>6,1 "</td>
                    </tr>
                    <tr>
                        <td>Akkumulátor kapacitása: </td>
                        <td>3279 mAh</td>
                    </tr>
                    <tr>
                        <td>Kijelző felbontása: </td>
                        <td>2532x1170 px</td>
                    </tr>
                    <tr>
                        <td>Kijelző technológia: </td>
                        <td>Super Retina XDR OLED</td>
                    </tr>
                    <tr>
                        <td>Képfrissítés: </td>
                        <td>60 Hz</td>
                    </tr>
                    <tr>
                        <td>Processzor: </td>
                        <td>Apple A15 Bionic</td>
                    </tr>
                    <tr>
                        <td>ROM: </td>
                        <td>256 GB</td>
                    </tr>
                    <tr>
                        <td>RAM: </td>
                        <td>6 GB</td>
                    </tr>
                    <tr>
                        <td>Hátlapi kamerák száma: </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Hátlapi főkamera felbontása: </td>
                        <td>12 MP</td>
                    </tr>
                    <tr>
                        <td>Ultra-széles látószögű kamera felbontása: </td>
                        <td>12 MP</td>
                    </tr>
                    <tr>
                        <td>Elülső kamera felbontása: </td>
                        <td>12 MP</td>
                    </tr>
                    <tr>
                        <td>Támogatott mobilhálózat: </td>
                        <td>5G</td>
                    </tr>
                    <tr>
                        <td>NFC támogatás: </td>
                        <td>Igen</td>
                    </tr>
                    <tr>
                        <td>Súly: </td>
                        <td>172 g</td>
                    </tr>
                </table>
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/iphone_14_plus.png" alt="iPhone 14 Plus" onmouseover="this.src='images/iphone_14_plus_2.png';" onmouseout="this.src='images/iphone_14_plus.png';">

                <table class="center">
                    <tr>
                        <th colspan="2">iPhone 14 Plus</th>
                    </tr>
                    <tr>
                        <td>Kijelző mérete: </td>
                        <td>6,7 "</td>
                    </tr>
                    <tr>
                        <td>Akkumulátor kapacitása: </td>
                        <td>4323 mAh</td>
                    </tr>
                    <tr>
                        <td>Kijelző felbontása: </td>
                        <td>2778x1284 px</td>
                    </tr>
                    <tr>
                        <td>Kijelző technológia: </td>
                        <td>Super Retina XDR OLED</td>
                    </tr>
                    <tr>
                        <td>Képfrissítés: </td>
                        <td>60 Hz</td>
                    </tr>
                    <tr>
                        <td>Processzor: </td>
                        <td>Apple A15 Bionic</td>
                    </tr>
                    <tr>
                        <td>ROM: </td>
                        <td>256 GB</td>
                    </tr>
                    <tr>
                        <td>RAM: </td>
                        <td>6 GB</td>
                    </tr>
                    <tr>
                        <td>Hátlapi kamerák száma: </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Hátlapi főkamera felbontása: </td>
                        <td>12 MP</td>
                    </tr>
                    <tr>
                        <td>Ultra-széles látószögű kamera felbontása: </td>
                        <td>12 MP</td>
                    </tr>
                    <tr>
                        <td>Elülső kamera felbontása: </td>
                        <td>12 MP</td>
                    </tr>
                    <tr>
                        <td>Támogatott mobilhálózat: </td>
                        <td>5G</td>
                    </tr>
                    <tr>
                        <td>NFC támogatás: </td>
                        <td>Igen</td>
                    </tr>
                    <tr>
                        <td>Súly: </td>
                        <td>203 g</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="telefonok">
            <div class="telefon">
                <img class="img_margin" src="images/iphone_13.png" alt="iPhone 13" onmouseover="this.src='images/iphone_13_2.png';" onmouseout="this.src='images/iphone_13.png';">

                <table class="center">
                    <tr>
                        <th colspan="2">iPhone 13</th>
                    </tr>
                    <tr>
                        <td> Kijelző mérete: </td>
                        <td>6,1 "</td>
                    </tr>
                    <tr>
                        <td>Akkumulátor kapacitása: </td>
                        <td>3240 mAh</td>
                    </tr>
                    <tr>
                        <td>Kijelző felbontása: </td>
                        <td>2532x1170 px</td>
                    </tr>
                    <tr>
                        <td>Kijelző technológia: </td>
                        <td>Super Retina XDR OLED</td>
                    </tr>
                    <tr>
                        <td>Képfrissítés: </td>
                        <td>60 Hz</td>
                    </tr>
                    <tr>
                        <td>Processzor: </td>
                        <td>Apple A15 Bionic</td>
                    </tr>
                    <tr>
                        <td>ROM: </td>
                        <td>256 GB</td>
                    </tr>
                    <tr>
                        <td>RAM: </td>
                        <td>4 GB</td>
                    </tr>
                    <tr>
                        <td>Hátlapi kamerák száma: </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Hátlapi főkamera felbontása: </td>
                        <td>12 MP</td>
                    </tr>
                    <tr>
                        <td>Ultra-széles látószögű kamera felbontása: </td>
                        <td>12 MP</td>
                    </tr>
                    <tr>
                        <td>Elülső kamera felbontása: </td>
                        <td>12 MP</td>
                    </tr>
                    <tr>
                        <td>Támogatott mobilhálózat: </td>
                        <td>5G</td>
                    </tr>
                    <tr>
                        <td>NFC támogatás: </td>
                        <td>Igen</td>
                    </tr>
                    <tr>
                        <td>Súly: </td>
                        <td>174 g</td>
                    </tr>
                </table>
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/iphone_13_mini.png" alt="iPhone 13 Mini" onmouseover="this.src='images/iphone_13_mini_2.png';" onmouseout="this.src='images/iphone_13_mini.png';">

                <table class="center">
                    <tr>
                        <th colspan="2">iPhone 13 mini</th>
                    </tr>
                    <tr>
                        <td> Kijelző mérete: </td>
                        <td>5,4 "</td>
                    </tr>
                    <tr>
                        <td>Akkumulátor kapacitása: </td>
                        <td>2438 mAh</td>
                    </tr>
                    <tr>
                        <td>Kijelző felbontása: </td>
                        <td>2340x1080 px</td>
                    </tr>
                    <tr>
                        <td>Kijelző technológia: </td>
                        <td>Super Retina XDR OLED</td>
                    </tr>
                    <tr>
                        <td>Képfrissítés: </td>
                        <td>60 Hz</td>
                    </tr>
                    <tr>
                        <td>Processzor: </td>
                        <td>Apple A15 Bionic</td>
                    </tr>
                    <tr>
                        <td>ROM: </td>
                        <td>256 GB</td>
                    </tr>
                    <tr>
                        <td>RAM: </td>
                        <td>4 GB</td>
                    </tr>
                    <tr>
                        <td>Hátlapi kamerák száma: </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Hátlapi főkamera felbontása: </td>
                        <td>12 MP</td>
                    </tr>
                    <tr>
                        <td>Ultra-széles látószögű kamera felbontása: </td>
                        <td>12 MP</td>
                    </tr>
                    <tr>
                        <td>Elülső kamera felbontása: </td>
                        <td>12 MP</td>
                    </tr>
                    <tr>
                        <td>Támogatott mobilhálózat: </td>
                        <td>5G</td>
                    </tr>
                    <tr>
                        <td>NFC támogatás: </td>
                        <td>Igen</td>
                    </tr>
                    <tr>
                        <td>Súly: </td>
                        <td>141 g</td>
                    </tr>
                </table>
            </div>
            <div class="telefon">
                <img class="img_margin" src="images/iphone_12.png" alt="iPhone 12" onmouseover="this.src='images/iphone_12_2.png';" onmouseout="this.src='images/iphone_12.png';">

                <table class="center">
                    <tr>
                        <th colspan="2">iPhone 12</th>
                    </tr>
                    <tr>
                        <td> Kijelző mérete: </td>
                        <td>6,1 "</td>
                    </tr>
                    <tr>
                        <td>Akkumulátor kapacitása: </td>
                        <td>2815 mAh</td>
                    </tr>
                    <tr>
                        <td>Kijelző felbontása: </td>
                        <td>2532x1170 px</td>
                    </tr>
                    <tr>
                        <td>Kijelző technológia: </td>
                        <td>Super Retina XDR OLED</td>
                    </tr>
                    <tr>
                        <td>Képfrissítés: </td>
                        <td>60 Hz</td>
                    </tr>
                    <tr>
                        <td>Processzor: </td>
                        <td>Apple A14 Bionic</td>
                    </tr>
                    <tr>
                        <td>ROM: </td>
                        <td>256 GB</td>
                    </tr>
                    <tr>
                        <td>RAM: </td>
                        <td>4 GB</td>
                    </tr>
                    <tr>
                        <td>Hátlapi kamerák száma: </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Hátlapi főkamera felbontása: </td>
                        <td>12 MP</td>
                    </tr>
                    <tr>
                        <td>Ultra-széles látószögű kamera felbontása: </td>
                        <td>12 MP</td>
                    </tr>
                    <tr>
                        <td>Elülső kamera felbontása: </td>
                        <td>12 MP</td>
                    </tr>
                    <tr>
                        <td>Támogatott mobilhálózat: </td>
                        <td>5G</td>
                    </tr>
                    <tr>
                        <td>NFC támogatás: </td>
                        <td>Igen</td>
                    </tr>
                    <tr>
                        <td>Súly: </td>
                        <td>164 g</td>
                    </tr>
                </table>
            </div>
        </div>
    </main>

    <?php include_once "footer.php"; ?>

</body>

</html>