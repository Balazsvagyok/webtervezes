<!DOCTYPE html>
<html lang="hu">

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location:index.php');
} else {
    echo 'Bejelentkezve: ' . $_SESSION['username'];
}

?>

<head>
    <title>Okostelefonok</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Kollár Edvárd, Szelekovszky Balázs" />
    <link rel="icon" href="images/smartphone.png" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>

    <?php include_once "header.php"; ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add-to-cart'])) {
        $product_id = $_POST['product_id'];
        $quantity = $_POST['quantity'];

        $item = array(
            'product_id' => $product_id,
            'quantity' => $quantity
        );

        $_SESSION['cart'][] = $item;

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    ?>

    <div class="phone-border">
        <img src="images/phone-border.png" alt="phone-border" width="700" />

        <div class="registration">
            <?php
            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                foreach ($_SESSION['cart'] as $item) {
                    // Display item details
                    echo '<div>';
                    echo '<p>' . $item['product_id'] . '</p>';
                    echo '<p>Mennyiség: ' . $item['quantity'] . '</p>';
                    echo '</div>';
                    echo '<br>';
                }
            }
            ?>
        </div>
    </div>



    <?php include_once "footer.php"; ?>

</body>

</html>