<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>kosztorys</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
         <!-- water css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

        <!-- Styles -->
        <style>
            * {
                background-color: rgb(187, 187, 235);
                font-size: 50px;
            }
             .header_list {
            display: flex;
            flex-direction: row;

        }

        .header_list li {
            list-style: none;
            padding-right: 30px;

        }

        .header_list li a {
            text-decoration: none;
            color: white;
        }
        * {
            margin: 0;
            padding: 0;
        }
        /*.background_photo {
            background-image: url(image/housebackground.jpg);
            background-size: cover;
            height: 1000px;
            width: 1600px;
        } */

        </style>
    </head>
    <body>
        <header>
            <div >
                <ul class="header_list" >
                    <li><a href="index.php">strona główna</a></li>
                    <li><a href="building.php">budowa</a></li>
                    <li><a href="renovation.php">remont</a></li>
                    <li><a href="/account">konto</a></li>
                </ul>
            </div>
        </header>
        <div class="background_photo"></div>
        <div class="choose_option">
        <p>OBLICZ</p>
        <form action="/building" method="post">
            @csrf
        <a href="/building">budowę</a>
        <a href="/renovation">remont</a>
        <a href="">niew eim</a>
    </form>
    </div>
    </body>
</html>
