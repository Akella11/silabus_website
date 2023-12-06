<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Сторінка Реєстрації</title>
</head>
<style>

    *{
        background: #266473;
        box-sizing: border-box;
        font-size: 102%;
    }

    body{
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    form{
        display: flex;
        flex-direction: column;
        width: 500px;
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        margin-left: 10%;
    }

    label{
        font-size: 130%;
    }

    input{
        margin: 10px 0;
        padding: 10px;
        color: #F5E9E9;
        border-bottom: 2px solid #e3e3e3;
        outline: none;
    }

    select{
        margin: 10px 0;
        padding: 10px;
        color: #F5E9E9;
        border-bottom: 2px solid #e3e3e3;
    }

    option{
        margin: 10px 0;
        padding: 10px;
        color: #F5E9E9;
        border-bottom: 2px solid #e3e3e3;
    }

    .submit1{
        margin: 8% 18% 9%;
        padding: 10px;
        background-color: #DCC7BE;
        border-radius: 30px;
        color: #010100;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 160%;
        width: 60%;
        cursor: pointer;
    }

    .submit2{
        background-color: #DCC7BE;
        border-radius: 30px;
        color: #010100;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 150%;
        width: 50%;
        margin: 0 23% 7%;
        cursor: pointer;
    }

</style>

<body>
<div class="flex-container1">
    <form action="{{route('user.registration')}}" method="POST">
        @csrf
        <label>Повне ім'я</label>
        <input type = "text" placeholder="Введіть повне ім'я" name="name">
        <label>Електронна пошта</label>
        <input type = "text" placeholder="Введіть електронну пошту" name="email">
        <label>Новий пароль</label>
        <input type = "text" placeholder="Введіть новий пароль" name="password">
        <label>Перевірка паролю</label>
        <input type = "text" placeholder="Введіть пароль повторно">
        <button class="submit1">Зареєструватись</button>
        <a href="/login" class="submit2">Вже зареєстровані?</a>
    </form>
</div>
</body>
</html>
