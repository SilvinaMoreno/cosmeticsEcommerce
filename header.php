<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!----------Links------------>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>Soul to Nails</title>
    <!----------Fonts------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Hurricane&family=Inspiration&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kodchasan&family=Pacifico&family=Righteous&display=swap" rel="stylesheet">    <!---------Ends Head--------->
    
</head>
<body>
    <main>
    <header>
        <div class="container">
            <!------Logo------>
            <!--<div class="logoContainer">
                <span class="icon"><img src="./img/logoSoul.png" width="400"></span>
            </div>-->
        </div>
            <span class="back"></span>
            <div class="icon">
                <span class="soul">Soul</span>
                <span class="nails">-TO NAILS-</span>
            </div>
        </div>
        <!----End Logo---->
        <!----Cookies Advice--
        <div class="cookies-advice active" id="cookies-advice">
            <img class="cookies" src="./img/icons/cookie.png">
            <h3 class="title">Cookies</h3>
            <p class="description">
                En esta pagina utilizamos cookies propias y de terceros 
                para mejorar tu experencia de compra en nuestra tienda online!
                <button role="button" class="cookies-button" id="cookies-accept">Estoy de Acuerdo</button>
                <a class="enlace" href="cookies.php">¿Que son las Cookies?</a>
            </p>
        </div>
        <div class="cookies-advice-background active" id="cookies-advice-background"></div>
        --End Cookies Advice---->
        <!----Navigator---->
        <div class="navigator">
            <ul>
                <li>
                    <a href="index.php">
                        <span class="icon"><i class="fas fa-house-user"></i></span>
                        <span class="text">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="catalog.php">
                        <span class="icon"><i class="fas fa-tags"></i></span>
                        <span class="text">Catalogo</span>
                    </a>
                </li>
                <li>
                    <a href="contact.php">
                        <span class="icon"><i class="far fa-comments"></i></span>
                        <span class="text">Contacto</span>
                    </a>
                </li>
                <li>
                    <a href="shop.php">
                        <span class="icon"><i class="fas fa-shopping-cart"></i></span>
                        <span class="text">Canasto</span>
                    </a>
                </li>
            </ul>
        </div>
    </main>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="./js/function.js"></script>
</header>