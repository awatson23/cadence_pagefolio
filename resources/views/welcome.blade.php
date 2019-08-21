<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadence's Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Darker+Grotesque&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <header id="header">
            <div id="logoSpace"><img src="images/watsonLogo.svg"></div>
                <nav id="mainNav">
                    <ul id="navList">
                        <li><a href="linkedIn.com">linkedIn</a></li>
                        <li class="navSeparator"> / </li>
                        <li><a href="/contact">contact me</a></li>
                    </ul>
                </nav>
        </header>

        <section class="hero">
            <div id="heroIMG">  
                <p id="heroText">data visualization</p>
            </div>
        </section>

        <section id="projects">
            <div id="projectsTitle">
                <h2 class="subTitle">Featured works</h2>
                <p class="copy">design and development</p>
            </div>
            <div id="projGridDiv">
                <div class="projGrid">1</div>
                <div class="projGrid">2</div>
                <div class="projGrid">3</div>
                <div class="projGrid">4</div>
                <div class="projGrid">5</div>
                <div class="projGrid">6</div>
            </div>
        </section>

    </body>
</html>
