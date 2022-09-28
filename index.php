<?php

define('THEMES', array('Smartphone', 'Tablette', 'PC portable', 'PC périphérique', 'Objets connectés'));
$themes = $_GET['themes'] ?? [];
$cookieCounter = 1;

if (!empty($themes)) {
    echo "<script>
alert('Veuillez cocher 3 themes');
window.location.href='http://pineapple.localhost/index.php';
</script>";
} else {
    if (count($themes) != 3) {
        foreach ($themes as $theme) {
            if (empty(THEMES[$theme])) {
                $error = 'Merci de ne pas modifier les valeurs';
                break;
            } else {
                $cookie = "cookie$cookieCounter";
                setcookie($cookie, $theme, time() + (86400 * 30));
                $cookieCounter++;
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/assets/css/modal.css">
    <title>Form test</title>
</head>

<body>
    <img src="public\assets\img\pineappleDark.png" alt="logo">
    <?php if (empty($themes)) { ?>
        <section>
            <article>
                <h2>Bienvenue</h2>
                <form>
                    <p>Choisissez 5 themes</p>
                    <div>
                        <div><input value="0" type="checkbox" name="themes[]" id=""> <span>Smartphone</span></div>
                        <div><input value="1" type="checkbox" name="themes[]" id=""> <span>Tablette</span></div>
                        <div><input value="2" type="checkbox" name="themes[]" id=""> <span>PC portable</span></div>
                        <div><input value="3" type="checkbox" name="themes[]" id=""> <span>PC périphérique</span></div>
                        <div><input value="4" type="checkbox" name="themes[]" id=""> <span>Objets connectés</span></div>
                        <div><input type="submit" value="Envoyer" id="submit"></div>
                    </div>
                </form>
            </article>
        </section>
    <?php } else {
        var_dump(count($themes));
    } ?>
</body>

</html>