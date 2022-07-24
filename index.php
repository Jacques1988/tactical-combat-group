<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-png" href="./img/Logo_transparent.png">

    <link href="./dist/main.css" rel="stylesheet">
    <title>Airsoft auf Rügen</title>
</head>

<body>
    <header class="header">
        <nav class="header__navigation">
            <div id="burger" onclick="open_menu()" class="header__navigation__burger">
                <span class="header__navigation__burger__bar"></span>
                <span class="header__navigation__burger__bar"></span>
            </div>
            <div id="menu" class="header__navigation__menu">
                <ul class="header__navigation__menu__box">
                <span onclick="close_menu()" class="header__navigation__menu__close-button">X</span>
                    <li class="header__navigation__menu__box__list"><a class="header__navigation__menu__box__list__link" href="#">Home</a></li>
                    <li class="header__navigation__menu__box__list"><a class="header__navigation__menu__box__list__link" href="#" href="#">Wer wir sind</a></li>
                    <li class="header__navigation__menu__box__list"><a class="header__navigation__menu__box__list__link" href="#" href="#">Shop</a></li>
                    <li class="header__navigation__menu__box__list"><a class="header__navigation__menu__box__list__link" href="#" href="#">Login</a></li>
                </ul>
            </div>
            <a class="header__navigation__link" href="index.php">
                <img class="logo header__navigation__link__logo" src="./img/Logo_transparent.png" alt="Captain's Pride tactical combat group">
            </a>
            <button class="button-primary header__navigation--button-primary">Kontakt</button>
        </nav>

        <div class="container">
            <div class="header__teaser">
                <h1 class="heading">Willkommen im Airsoft Team von Captain's Pride Tactical</h1>
                <div class="scene">
                    <div class="card header__teaser--card">
                        
                        <div class="card__image--front">
                            <img src="./img/members/tom.jpg" alt="Airsoft Spieler Tom in Aktion">
                        </div>
                        <p class="card__text--front">Mit unserem Training bist du immer Spielbereit</p>
                        
                        <div class="card__image--back">
                            <img src="./img/members/sniper.jpeg" alt="Sniper in Position">
                        </div>
                        <p class="card__text--back">Mit uns bist du immer in der besten Position</p> 
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script src="./scripts/open_menu.js"></script>
</body>

</html>