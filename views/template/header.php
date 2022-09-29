<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/css/home.css">    
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <title>Pineapple</title>
</head>

<body>
    <div class="page">
        <header class="header">
            <img id="logo" src="../../public/assets/img/pineappleDark.png" alt="Logo Pineapple">
            <h1 class="header-title">Pineapple</h1>
            <div id="menu-button" class="close"></div>
        </header>
        <nav id="menu" class="">
            <h3>Catégories</h3>
            <ul>
                <li>Téléphone</li>
                <li>Tablette</li>
                <li>Pc Portable</li>
                <li>Pc périphérique</li>
                <li>Objets connectés</li>
            </ul>
            <h3>Changez votre flux</h3>
            <form>
                <p>Choisissez 3 themes</p>
                <div>
                    <div><input value="0" type="checkbox" name="themes[]" id=""> <span>Smartphone</span></div>
                    <div><input value="1" type="checkbox" name="themes[]" id=""> <span>Tablette</span></div>
                    <div><input value="2" type="checkbox" name="themes[]" id=""> <span>PC portable</span></div>
                    <div><input value="3" type="checkbox" name="themes[]" id=""> <span>PC périphérique</span></div>
                    <div><input value="4" type="checkbox" name="themes[]" id=""> <span>Objets connectés</span></div>
                </div>
                <p>Choisissez le nombre d'articles</p>
                <select name="articleAmount" id="articleAmount">
                    <option value="6">6 articles</option>
                    <option value="8">8 articles</option>
                    <option value="10">10 articles</option>
                </select>
                <div id="noPaddingInput"><input type="submit" value="Envoyer" id="submitNav"></div>
            </form>
        </nav>
        <button id="switchMode">☀️</button>