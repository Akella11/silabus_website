<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Головна сторінка</title>
</head>
<style>

    *{
        background: #266473;
    }

    .flex-container1{
        display: flex;
        margin: 2.5% 3%;
    }

    .flex-container4{
        display: flex;
        flex-direction: column;
    }

    .flex-container5{
        display: flex;
        margin-bottom: 3%;
    }

    .flex-container8{
        font-size: 115%;
        display: flex;
        flex-direction: column;
        margin-left: 84%;
    }

    .flex-container9{
        font-size: 105%;
        display: flex;
        flex-direction: column;
        margin-left: 8%;
        margin-top: 2%;
        width: 85%;
    }

    .link1{
        font-size: 20px;
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        margin-left: 49%;
        margin-right: 4%;
    }

    .link2{
        font-size: 20px;
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        margin-left: 4%;
        margin-right: 4%;
    }

    .link3{
        font-size: 20px;
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        margin-left: 4%;
    }

    .p1{
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        margin-left: 11%;
        margin-right: 11%;
    }

    .p2{
        width: 200%;
        margin: 2% 10% 0.75% 1.5%;
        color: #F5E9E9;
        font-family: 'Labrada', serif;
    }

    .p3{
        width: 200%;
        margin: 0.75% 5% 3.5% 25%;
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        font-size: 66%;
    }

    .header1{
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        font-size: 200%;
        margin: 5% 11% 2.5% 11%
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
        width: 36%;
        margin: 6% 32% 3%;
        cursor: pointer;
    }

    .submit3{
        background-color: #DCC7BE;
        border-radius: 30px;
        color: #010100;
        padding: 8px 8px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 120%;
        width: 25%;
        margin: 3% 37.5% 6%;
        cursor: pointer;
    }

    @media (min-width: 1300px){
        *{
            font-size: 104%;
        }

        .submit2{
            font-size: 150%;
            width: 25%;
            margin: 6% 7% 1% 37%;
        }

        .submit3{
            font-size: 120%;
            width: 22%;
            margin: 3% 32.5% 6% 38.5%;
        }
    }

    @media (min-width: 480px) and (max-width: 1024px) {
        *{
            font-size: 80%;
        }
    }

</style>

<body>
<div class="flex-container1">
    <a href="/silabus_watch" class="link1">Переглянути наявні</a>
    <a href="/silabus_create" class="link2">Створити новий</a>
    <a href="/logout" class="link3">Вийти з акаунту</a>
</div>
<div class="flex-container2">
    <div class="flex-container9">
        <div class="header1">Вітаємо Вас у системі "Створення силабусів"</div>
        <div class="p1" align="justify">Цей інструмент зроблений, щоб полегшити процес створення та управління вашими
            навчальними планами. Цей сайт дозволить вам легко створювати свої силабуси,
            вказуючи предмети, теми, години, та інші необхідні деталі.
            Ви також можете змінювати їх у будь-який момент. Бажаємо вам продуктивної роботи та натхнення!</div>
    </div>
    <div class="flex-container4">
        <a href="/silabus_create" class="submit2">Створити новий силабус</a>
        <a href="/silabus_watch" class="submit3">Переглянути наявні силабуси</a>
    </div>
    <div class="flex-container5">
        <div class="flex-container8">
            <p class="p2">Наші контакти</p>
            <p class="p3">+3809947367</p>
        </div>
    </div>
</div>
</body>
</html>
