<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>login</title>
    <style>
        .form_login, .form_register {
            display: flex;

        }
    </style>
</head>
<body>
    @auth
    <p>Jesteś zalogowany</p>
    <form action="/logout" method="POST">
    @csrf
    <button>Wyloguj się</button>
    </form>

    @else
    <div >
        <h2>Zarejestruj się</h2>
        <form action="/register" method="POST" class="form_register">
            @csrf
          <input name="name" type="text" placeholder="imię">
          <input name="email" type="text" placeholder="email">
          <input name="password" type="password" placeholder="hasło">
          <button>Zarejestruj się</button>
        </form>
    </div>

      <div >
        <h2>Logowanie</h2>
        <form action="/login" method="POST" class="form_login">
            @csrf
          <input name="loginname" type="text" placeholder="imię">
          <input name="loginpassword" type="password" placeholder="hasło">
          <button>zaloguj się</button>
        </form>
      </div>


    @endauth


</body>
</html>
