<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/0caf2b0443.js" crossorigin="anonymous"></script>
    <script src="./js/midnight.jquery.min.js"></script>
    <script>
// Start midnight
$(document).ready(function(){
  // Change this to the correct selector.
    $('.midnight').midnight();
});
</script>
    <title>Document</title>
</head>
<body>
    <header>
    <div class="midnight">
        <div id="logo">
            <!-- <img src="./images/logo.png"/> -->
        </div>
        </div>
        <ion-icon id="burgerButton" name="menu"></ion-icon>
        <div id="menuFull">
            <nav>
                <ul>
                    <a href="#"><li>Accueil</li></a>
                    <a href="#"><li>A propos</li></a>
                    <a href="#"><li>Contact</li></a>
                    <a href="#"><li>Blog</li></a>
                </ul>
            </nav>
        </div>
    </header>
    <aside>
        <ion-icon id="closeButton" name="close-circle"></ion-icon>
        <div id="clear"></div>
        <nav>
            <ul>
                <a href="#"><li>Accueil</li></a>
                <a href="#"><li>A propos</li></a>
                <a href="#"><li>Contact</li></a>
                <a href="#"><li>Blog</li></a>
            </ul>
        </nav>
    </aside>

    <section data-midnight="black" class="section1">
        <h1 id="first-h1"></h1>
        <i id="arrowDown" class="material-icons">
            double_arrow
            </i>
        <div id="hello">
            <h2>Hello<h2>
        </div>
        <div id="mainMoth"> </div>

    </section>

    <section class="section2" data-midnight="phase1">
        <h1 id="second-h1"></h1>
        <div class="mainWindow" data-aos="fade-down" data-aos-anchor-placement="top-center">
            <div class="mainWindowInner">
                <div class="mainWindowFront">
                    <div id="push">
                        <i class="material-icons push1">
                            arrow_forward_ios
                        </i>
                        <p>push</p>
                        <i class="material-icons push2">
                            arrow_forward_ios
                        </i>
                    </div>
                </div>
            <div class="mainWindowBack">
                <p>coucou</p>
            </div>
            </div>
        </div>
    </section>

    <section data-midnight="phase2" >
    <h1 id="third-h1"></h1>
    </section>

    <section data-midnight="phase3">
    <h1 id="fourth-h1"></h1>
    </section>

    <section data-midnight="phase4" class="section5" >
        <h1 id=""></h1>
        <div data-aos="flip-left" class="form">
            <div id="cadre">
                <h2>Me Contacter</h2>
                <form action="" method="post"> 
                    
                        <input type="email" id="mail" name="mail" placeholder="Adresse Mail">
                    
                        <input type="url" id="url" name="url" placeholder="Adresse URL">

                        <textarea id="message" name="message" placeholder="Votre message"></textarea>

                        <button type="submit" class="myButton" id="bouton" value="Click!">Envoyer</button>
                </form>
            </div>
        </div>
    </section>

    <section data-midnight="phase5" class="section6" >
        <h1 id=""></h1>
        
        <img src="images/deer.svg" id="montain"/>
        <img src="images/forest.svg" id="fond"/>
        <img src="images/vectorpaint.svg" id="mont" />

    </section>

    <footer>
    </footer>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="./js/index.js"></script>
</html>