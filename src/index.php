<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Haar Experte'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container0Padding">
                    <div class="header__box">
                        <div class="header__left">
                            <img class="header__img" src="assets/img/mainImg.jpg" alt="" >
                        </div>
                        <div class="header__right">
                            <div class="header__h1Wrap">
                                <img class="header__hirImg" src="assets/icons/hair.svg" alt="" >
                                <h1 class="header__title"><?= $title ?></h1>
                            </div>
                            <div class="header__priceWrap">
                                <h2 class="header__price">Top Angebot ab 1990 €</h2>
                            </div>
                            <ul class="header__ul">
                                <li>Flug +Österreich+ - Istanbul</li>
                                <li>Haartransplantation</li>
                                <li>Premium Hotel</li>
                                <li>Schriftliche Garantie</li>
                            </ul>
                            <div class="header__reviewsWrap">
                                <img class="header__star" src="assets/icons/stars.svg" alt="" >
                                <p class="header__reviews">4,98 Über 2400 Bewertungen</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
        <section class="theBestChoice">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="theBestChoice__box">
                            <div class="theBestChoice__left">
                                <img class="theBestChoice__img" src="assets/img/2.png" alt="" >
                            </div>
                            <div class="theBestChoice__right">
                                <h2 class="theBestChoice__title">Die beste Wahl für eine erfolgreiche Haartransplantation: Erfahrene Ärzte, Premium-Hotel und kostenlose Beratung</h2>
                                <p class="theBestChoice__dscr">Unsere Haartransplantation - die beste Wahl für volles und gesundes Haar! Mit erfahrenen Ärzten, einem Premium-Hotel und kostenloser Beratung bieten wir Ihnen eine erfolgreiche und komfortable Lösung für Ihre Haarprobleme.</p>
                                <a class="theBestChoice__btn" href="#anchor" >Kostenlose Haaranalyse!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='successfulTransplant'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='successfulTransplant__box'>
                            <div class="successfulTransplant__left">
                                <h2 class="successfulTransplant__title">Von Haarausfall zu vollem Haar - unser einfacher und effektiver Prozess für eine erfolgreiche Haartransplantation</h2>
                                <ul class="successfulTransplant__ul">
                                    <li>Schicken Sie uns Fotos Ihres Haarausfalls</li>
                                    <li>Unsere Ärzte überprüfen die Fotos und stellen eine Diagnose</li>
                                    <li>Wir machen Ihnen ein maßgeschneidertes Angebot</li>
                                    <li>Sie akzeptieren das Angebot und wir organisieren Ihre Reise nach Istanbul inklusive Flug, VIP-Transfer und Hotelunterkunft</li>
                                    <li>In  2 Tagen ist Ihre Haartransplantation erfolgreich abgeschlossen!</li>
                                </ul>
                                <a class="successfulTransplant__btn" href="https://api.whatsapp.com/send?phone=436604275976" >Jetzt starten</a>
                            </div>
                            <div class="successfulTransplant__right">
                                <img class="successfulTransplant__img" src="assets/img/3.png" alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='reviews'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <h2 class="reviews__title">Bewertungen</h2>
                        <div class='reviews__box'>
                            <div class="reviews__wrapper">
                                <img class="reviews__img" src="assets/img/4.1.jpg" alt="" >
                                <p class="reviews__txt">"Die Haartransplantation war großartig! Endlich habe ich wieder volles und gesundes Haar und fühle mich viel selbstbewusster. Das professionelle Team hat mich während des gesamten Prozesses unterstützt und ich würde es jedem empfehlen, der mit Haarausfall zu kämpfen hat."</p>
                                <div class="reviews__stars"><span></span></div>
                            </div>
                            <div class="reviews__wrapper">
                                <img class="reviews__img" src="assets/img/4.2.jpg" alt="" >
                                <p class="reviews__txt">"Ich war skeptisch, ob eine Haartransplantation wirklich funktionieren würde, aber ich bin so glücklich, dass ich es ausprobiert habe. Das Ergebnis hat meine Erwartungen übertroffen und ich fühle mich endlich wieder selbstbewusst mit meinem Aussehen. Das Team war sehr freundlich und hat mir während des gesamten Prozesses geholfen. Ich kann es jedem empfehlen, der unter Haarausfall leidet."</p>
                                <div class="reviews__stars"><span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='beforeAfter'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <h2 class="beforeAfter__title">VORHER & NACHHER</h2>
                        <div class='beforeAfter__box'>
                            <div class="beforeAfter__imgW">
                                <img class="beforeAfter__img" src="assets/img/5.1.png" alt="" >
                            </div>
                            <div class="beforeAfter__imgW">
                                <img class="beforeAfter__img" src="assets/img/5.2.png" alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='recommendation'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='recommendation__box'>
                            <div class="recommendation__left">
                                <img class="recommendation__img" src="assets/img/6.jpg" alt="" >
                            </div>
                            <div class="recommendation__right">
                                <p class="recommendation__inner">Empfehlung durch das türkische Gesundheitsministerium</p>
                                <p class="recommendation__inner">Medizinische Einrichtungen im Land wurden überprüft</p>
                                <p class="recommendation__inner">Haartransplantation in der Türkei ist eine sichere Option</p>
                                <p class="recommendation__inner">Vertrauenswürdige Lösung für Menschen mit Haarausfall</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='hairTransplantWithoutPain'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='hairTransplantWithoutPain__box'>
                            <div class="hairTransplantWithoutPain__left">
                                <h2 class="hairTransplantWithoutPain__title">Haartransplantation ohne Schmerzen</h2>
                                <p class="hairTransplantWithoutPain__txt">Eine Haartransplantation ohne Schmerzen - bei uns ist das möglich! Unsere erfahrenen Ärzte verwenden modernste Technologien und Methoden, um den Eingriff so schmerzfrei wie möglich zu gestalten. Sie können sich entspannen und sich auf Ihre Haartransplantation freuen, ohne sich Gedanken über Schmerzen machen zu müssen.</p>
                            </div>
                            <div class="hairTransplantWithoutPain__right">
                                <img class="hairTransplantWithoutPain__img" src="assets/img/7.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='galery'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='galery__box'>
                            <img class="galery__img" src="assets/img/9.jpg" alt="" >
                            <img class="galery__img" src="assets/img/9.2.jpg" alt="" >
                            <img class="galery__img" src="assets/img/9.3.jpg" alt="" >
                            <img class="galery__img" src="assets/img/9.4.jpg" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='forms' id="anchor">
           <div class='forms__wrapper'>
              <div class='container-fluid'>
                 <div class='row'>
                    <div class='col-12 container'>
                       <div class='forms__box'>
                          <h2 class='forms__title'>Kontaktieren Sie uns:</h2>
                          <form id='jq_form' class='mb-0 mt-3'>
                             <div class='my-0'>
                                <input class='form-control' placeholder='Name' name='jq_name' type='text'>
                                <div id='jq_name' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Telefonnummer' name='jq_phone' type='text'>
                                <div id='jq_phone' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Straße' name='jq_street' type='text'>
                                <div id='jq_street' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Postleitzahl/Stadt' name='jq_city' type='text'>
                                <div id='jq_city' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='E-mail' name='jq_email' type='text'>
                                <div id='jq_email' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <textarea rows='3' class='form-control' name='jq_text' placeholder='Beschreibung'></textarea>
                                <div id='jq_text' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div>
                                <input class='btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button' type='submit' id='jq_submit' value='Senden'>
                             </div>
                             <div id='jq_success' style='display:none'>Vielen Dank für Ihre Anfrage. Unsere Mitarbeiter werden sich in Kürze bei Ihnen melden.</div>
                          </form>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <section class='btnFixed'>
            <div class="btnFixed__box">
                <div class="btnFixed__tel__Wrap">
                    <a class="btnFixed__tel" href="<?= $phone_href ?>" >
                        <img class="btnFixed__imgT" src="assets/icons/telephone-fill.svg" alt="" >
                    </a>
                </div>
                <div class="btnFixed__W__Wrap">
                    <a class="btnFixed__W" href="https://api.whatsapp.com/send?phone=436604275976" >
                        <img class="btnFixed__W" src="assets/icons/WhatsApp.svg" alt="" >
                    </a>
                </div>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">© 2023</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>