<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
        <div id="burgerButton">X</div>
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
        <nav>
            <ul>
                <a href="#"><li>Accueil</li></a>
                <a href="#"><li>A propos</li></a>
                <a href="#"><li>Contact</li></a>
                <a href="#"><li>Blog</li></a>
            </ul>
        </nav>
    </aside>

    <section data-midnight="black">
    <h1 id="first-h1"></h1>
    </section>

    <section data-midnight="phase1">
    <h1 id="second-h1"></h1>
    </section>

    <section data-midnight="phase2" >
    <h1 id="third-h1"></h1>
    </section>

    <section data-midnight="white">
    <h1 id="fourth-h1"></h1>
    </section>
</body>
<script src="./js/index.js"><script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</html>