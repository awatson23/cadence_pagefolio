<!doctype html>
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

    <div id="contactSectionWrapper">  

        <section id="contactBlurbDiv">
        </section>

    <section id="formCon">
            <form action="/contact" method="POST">
                <div class="form-div">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-action">
                </div>
            
                <div class="form-div">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{old('email')}}" class="form-action">
                </div>

                <div class="form-div">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-action"></textarea>
                    </div>

                @csrf

                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </section>

    </div>  

        </body>
</html>