<?php
require "./buildCaptcha.php";
?>

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
                    <div class="header__navigation__menu__box__teaser">
                        <div class="header__navigation__menu__box__teaser__logo-container">
                            <img src="./img/Logo.jpg" alt="Captain's Pride Tactical combat group">
                        </div>
                        <span onclick="close_menu()" class="header__navigation__menu__close-button">X</span>
                    </div>
                    <li class="header__navigation__menu__box__list"><a onclick="close_menu()" class="header__navigation__menu__box__list__link" href="#">Home</a></li>
                    <li class="header__navigation__menu__box__list"><a onclick="close_menu()" class="header__navigation__menu__box__list__link" href="#" href="#">Wer wir sind</a></li>
                    <li class="header__navigation__menu__box__list"><a onclick="close_menu()" class="header__navigation__menu__box__list__link" href="#" href="#">Shop</a></li>
                    <li class="header__navigation__menu__box__list"><a onclick="close_menu()" class="header__navigation__menu__box__list__link" href="#" href="#">Login</a></li>
                </ul>
            </div>
            <a class="header__navigation__link" href="index.php">
                <img class="logo header__navigation__link__logo" src="./img/Logo_transparent.png" alt="Captain's Pride tactical combat group">
            </a>
            <a class="button-primary button-primary--link button-primary--header-link" href="#contact">Kontakt</a>
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
    <main class="main">
        <section class="presentation">
            <div class="container container--row">
                <div class="scene">
                    <div class="presentation__design-element">
                        <img class="presentation__design-element__image--front" src="./img/G36A11_re.png" alt="G36 Heckler und Koch für Spezialeinheiten">
                        <p class="card__text--front">G36 A11</p>
                        <img class="presentation__design-element__image--back" src="./img/Kalaschnikow_AK_107_noBG.png" alt="AK107 weit verbreitet und sehr effektiv in der Handhabung">
                        <p class="card__text--back">AK 107</p>
                    </div>
                </div>
                <div class="container__content">
                    <h1 class="heading heading--green">Tritt unserem Team bei und</h1>
                    <p class="text-panel text-panel--brown">erhalte Zugriff auf unsere Community</p>
                    <p class="text-panel text-panel--brown">diskutiere mit uns die neuesten Trends</p>
                    <p class="text-panel text-panel--brown">erhalte Vorteile bei Events und Seminaren</p>
                    <p class="text-panel text-panel--brown">lerne neue Freunde kennen, die immer zusammenhalten</p>
                    <a class="button-primary button-primary--on-white button-primary--link" href="#contact">Kontakt</a>
                </div>
            </div>
        </section>
        <section class="advantages">
            <div class="container">
                <h1 class="heading">Was du bei uns lernst:</h1>
                <div class="advantages__products">
                    <div class="scene">
                        <div class="card advantages__products__card">
                            <img class="advantages__products__card__image" src="./img/members/heino.jpg" alt="Soldat visiert Ziel an">
                            <p class="card__text--front">Taktisches agieren mit Kurz und Langwaffe</p>
                            <p class="advantages__products__card__backside-description">In unserem Training vermitteln wir den taktischen, als auch den generellen Umgang mit Kurz und Langwaffen, damit du stets weißt, wie du auf dem Airsoftspielfeld agierst um mit deinem Team optimal zusammenarbeiten zu können<br> <br>Dazu gehört der generelle Umgang mit Funk als auch deiner gesamten taktischen Ausrüstung. Das Team hilft dir steht, dich bestens zurecht zu finden </p>
                        </div>
                    </div>
                    <div class="scene">
                        <div class="card advantages__products__card">
                            <img class="advantages__products__card__image" src="./img/nahkampf.jpg" alt="Im Nahkampf immer Bereit">
                            <p class="card__text--front">Ausgebildet im Nahkampf ohne Waffe</p>
                            <p class="advantages__products__card__backside-description">Ohne Waffen zu kämpfen bedeutet, sich nicht nur auf seine physische Fitness verlassen zu können, sondern auch den Gegner strategisch dorthin zu positionieren, wo man ihn am besten bearbeiten kann.<br> <br> Wir vermitteln den MMA Sport, da dieser die effektivsten Techniken aus allen Kampfsportarten vereint und optimale Ergebnisse liefert, die zum eigenen Schutz beitragen</p>
                        </div>
                    </div>
                    <div class="scene">
                        <div class="card advantages__products__card">
                            <img class="advantages__products__card__image" src="./img/bushcraft.jpg" alt="Feuer machen ohne Feuerzeug">
                            <p class="card__text--front">Intensives Outdoortraining</p>
                            <p class="advantages__products__card__backside-description">Sich in der Natur zurecht zu finden, gehört zu den essentiellen Fähigkeiten, die das Leben unserer Spezies über Generationen gesichert haben. <br> <br> Durch intensive Outdoorschulungen im Bushcraft stil, vermitteln wir das Wissen, das uns nicht nur dazu befähigt draußen zu überleben, sondern auch einen gewissen Komfort zu erreichen.</p>
                        </div>
                    </div>
                </div>
                <a class="button-primary button-primary--link" href="#phone">Termin vereinbaren</a>
            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container">
                <h1 class="heading heading--green">Schreibe uns eine Nachricht</h1>
                <form class="form" action="./info_mail.php" method="post">
                    <div class="form__input-container">
                        <input required class="form__input-container__input" type="text" name="name" placeholder="Dein Name">
                        <input required class="form__input-container__input" type="text" name="phone" placeholder="Deine Telefonnummer">
                    </div>
                    <div class="form__input-container">
                        <input required class="form__input-container__input" type="text" name="email" placeholder="Deine E-Mail">
                        <input required class="form__input-container__input" type="text" name="captcha" placeholder="Bitte hier das Captcha eingeben">
                        <input type="hidden" name="bildtext" value="<?php password_hash(substr($signs,0,5), PASSWORD_DEFAULT) ?>">
                    </div>
                    <div class="form__input-container">
                        <textarea required class="form__textarea" name="message" placeholder="Deine Nachricht"></textarea>
                    </div>
                    <img src="./captcha.png" style="width:300px; height:75px;">
                    <div class="form__agb-container">
                        <input required class="form__agb-container__checkbox" type="checkbox">
                        <p class="form__agb-container__text">Ich habe die Datenschutzrichtlinien gelesen und bin damit einverstanden das meine Daten ausschließlich zum Zweck der Weiterverarbeitung meiner Anfrage verwendet wird</p>
                        <button type="submit" class="button-primary button-primary--link" href="#">Nachricht senden</button>
                    </div>
                </form>
                <h1 id="phone" class="heading heading--green">Oder rufe einfach an um ein Probetraining zu vereinbaren</h1>
                <a class="button-primary button-primary--on-white button-primary--link" href="tel:+4915735291696">Direkt anrufen</a>
            </div>
        </section>
        <section class="find-us">
            <div class="container">
                <h1 class="heading">So findest du zu uns</h1>
                <iframe class="find-us__map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9263.484517576044!2d13.6473421!3d54.5181341!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd05033c7cc419af6!2sCaptain&#39;s%20Pride%20Warriors!5e0!3m2!1sde!2sde!4v1659065259901!5m2!1sde!2sde" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container container--row">
            <div class="footer__socialmedia">
                <a href="#"><img src="./img/fb.png"></a>
                <a href="#"><img src="./img/insta.png"></a>
                <a href="#"><img src="./img/yt.png"></a>
            </div>
            <div class="footer__slogan">
                <a class="footer__links__link" href="https://captains-pride.com/">-Captain's Pride Group-</a>
                <h2>gemeinsam stark</h2>
            </div>
            <div class="footer__links">
                <a class="footer__links__link" href="#">Impressum</a>
                <a class="footer__links__link" href="#">Datenschutz</a>
                <a class="footer__links__link" href="https://captains-web.com/">@copy Captains Web 2022</a>
            </div>
        </div>
    </footer>
    <script src="./scripts/open_menu.js"></script>
</body>

</html>