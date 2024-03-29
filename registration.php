<!DOCTYPE html>
<html lang="en">

<head>
    <title>Okostelefonok</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Kollár Edvárd, Szelekovszky Balázs" />
    <link rel="icon" href="images/smartphone.png" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>

    <?php include_once "components/header.php"; ?>

    <div class="phone-border">
        <img src="images/phone-border.png" alt="phone-border" width="700" />

        <div class="registration">
            <form action="register_check.php" method="POST" enctype="multipart/form-data">


                <fieldset style="border-radius: 10px; margin: 18px 0">
                    <legend>Regisztrációs adatok</legend>
                    <label>TELJES NÉV <br /> <input type="text" name="full-name" /></label> <br />
                    <label>FELHASZNÁLÓNÉV (min. 5 karakter) <br /> <input type="text" name="username" required /></label> <br />
                    <label>JELSZÓ (min. 5 karakter) <br /> <input type="password" name="passwd" required /></label> <br />
                    <label>JELSZÓ ISMÉT <br /> <input type="password" name="passwd-check" required /></label> <br />
                    <label>SZÜLETÉSI DÁTUM <br /> <input type="date" name="date-of-birth" min="1920-01-01" /></label> <br />
                    <label>E-MAIL <br /> <input type="email" name="email" required /></label> <br />
                </fieldset> <br /> Nem: <br />
                <label for="op2">Nő</label>
                <input type="radio" id="op2" name="sex" value="f" checked />
                <label for="op1">Férfi</label>
                <input type="radio" id="op1" name="sex" value="m" /> <br /> Kedvelt márka: <br />
                <label for="brand-1">Samsung</label>
                <input type="checkbox" id="brand-1" name="brands[]" value="samsung" /> <br />
                <label for="brand-2">Apple</label>
                <input type="checkbox" id="brand-2" name="brands[]" value="apple" /> <br />
                <label for="brand-3">Xiaomi</label>
                <input type="checkbox" id="brand-3" name="brands[]" value="xiaomi" /> <br />
                <label for="brand-4">Huawei</label>
                <input type="checkbox" id="brand-4" name="brands[]" value="huawei" /> <br />
                <label for="brand-5">Lenovo</label>
                <input type="checkbox" id="brand-5" name="brands[]" value="lenovo" /> <br />
                <label for="brand-6">Realme</label>
                <input type="checkbox" id="brand-6" name="brands[]" value="realme" /> <br /> <br />

                <label for="introduction">Bemutatkozás (max. 200 karakter):</label> <br />
                <textarea id="introduction" name="intro" maxlength="200" rows="3" cols="50"></textarea> <br />

                <input type="reset" name="reset-btn" value="Adatok törlése" />
                <input type="submit" name="submit-btn" value="Regisztráció" />
            </form>
        </div>
    </div>

    <?php include_once "components/footer.php"; ?>

</body>

</html>