<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Budowa</title>

        <!-- Styles -->
        <style>
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

       </style>
</head>
<body>

</head>
    <body>
        <!--header - menu-->
        <header>
            <div >
                <ul class="header_list" >
                    <li><a href="index.php">strona główna</a></li>
                    <li><a href="building.php">budowa</a></li>
                    <li><a href="renovation.php">remont</a></li>
                    <li><a href="login/login-form.php">konto</a></li>
                </ul>
            </div>
        </header>
    <div class="form">
        <!--form -->
        <form action="building_form.php" method="post">
            <!-- województwo-->
            <label for="state">województwo</label>
             <select name="state" id="state">
            <option value="2.8">dolnośląskie</option>
            <option value="3">kujawsko-pomorskie</option>
            <option value="3.1">lubelskie</option>
            <option value="0.8">lubuskie</option>
            <option value="1.1">łódzkie</option>
            <option value="1.5">małopolskie</option>
            <option value="1.9">mazowieckie</option>
            <option value="1">opolskie</option>
            <option value="1.7">podkarpackie</option>
            <option value="2">podlaskie</option>
            <option value="1.5">pomorskie</option>
            <option value="1.9">śląskie</option>
            <option value="1">świętokrzyskie</option>
            <option value="1.7">warmińsko-mazurskie</option>
            <option value="2">wielkopolskie</option>
            <option value="2">zachodniopomorskie</option>
        </select>
            <!-- powierzchnia-->
        <label for="surface"> powierzchnia
            <input type="number" name="surface" id="surface" value="surface"> m2
        </label>
         <!-- garaż-->
         <label for="garage">garaż</label>
        <select name="garage" id="garage">
            <option value="1000" >garaż na 1 samochód</option>
            <option value="1500">garaż na 2 samochody</option>
            <option value="0">brak garażu</option>
        </select>
        <!-- dach-->
        <label for="roof">dach</label>
        <select name="roof" id="roof">
            <option value="1000" >płaski</option>
            <option value="1500">dwuspadowy</option>
            <option value="0">wielospadowy</option>
        </select>





        </form>
    </div>




</body>
</html>
