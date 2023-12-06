<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перегляд силабуса</title>
</head>
<style>

    *{
        background: #266473;
    }

    .flex-container1{
        display: flex;
        margin: 2.5% 0 3% 40%;
    }

    .flex-container5{
        display: flex;
        margin-bottom: 3%;
    }

    .flex-container8{
        font-size: 110%;
        display: flex;
        flex-direction: column;
        margin-left: 86%;
    }

    .link1{
        font-size: 20px;
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        margin-left: 60%;
        margin-right: -10%;
    }

    .link2{
        font-size: 20px;
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        margin-left: 18%;
    }

    .p2{
        width: 200%;
        margin: 100% 10% 0.75% 1.5%;
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
    .p4{
        text-align: center;
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        font-size: 120%;
        margin-top: 50px;
    }

    .p5{
        text-align: center;
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        font-size: 120%;
        margin-top: 50px;
    }

    header{
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        font-size: 130%;
        text-align: center;
    }

    .submit1{
        background-color: #DCC7BE;
        border-radius: 20px;
        color: #010100;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        width: 36%;
        margin: 7% 50% 30%;
        cursor: pointer;
    }

    .submit2{
        background-color: #DCC7BE;
        border-radius: 20px;
        color: #010100;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        width: 36%;
        margin: 7% 5% 30%;
        cursor: pointer;
    }

    .flex-container3 {
        display: flex;
    }

    .flex-container4 {
        display: flex;
        flex-direction: column;
        margin-left: 400px;
    }

    .flex-container6 {
        display: flex;
        flex-direction: column;
    }

    .flex-container7 {
        display: flex;
        flex-direction: column;
    }

    .flex-container9 {
        display: flex;
        flex-direction: column;
    }

    .flex-container10 {
        display: flex;
        flex-direction: column;
    }
    .label1, .label2, .label3, .label4, .label5, .label6, .label7, .label8, .label9,
    .label10, .label11, .label12, .label13{
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        margin-bottom: 25px;
    }

    .input1, .input2, .input3, .input4, .input5, .input6, .input7,
    .input8, .input9, .input10, .input11, .input12, .input13{
        margin-bottom: 20px;
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        width: 140%;
    }

    .label14, .label15, .label16, .label17{
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        margin-bottom: 25px;
    }

    .input14, .input15, .input16, .input17{
        margin-bottom: 20px;
        color: #F5E9E9;
        font-family: 'Labrada', serif;
        width: 65%;
    }

    .form1, .form2{
        display: flex;
        flex-direction: column;
        margin-top: 30px;
    }


    .form1{
        margin-left: 400px;
    }

    .form2{
        margin-left: 50px;
    }

    @media (min-width: 1300px) {
        * {
            font-size: 104%;
        }

        .submit1 {
            width: 100%;
            margin: 20px 7% 1% 1%;
        }
        .submit2 {
            width: 30%;
            margin: 30px 7% 1% 18%;
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
    <a href="/private" class="link1">На головну</a>
    <a href="/logout" class="link2">Вийти з акаунту</a>
</div>
<header>Силабус освітнього компонента</header>
<p class="p4">Реквізити навчальної дисципліни</p>
<div class="flex-container3">
    <form class="form1">
        <label class="label1">Рівень вищої освіти</label>
        <label class="label2">Галузь знань</label>
        <label class="label3">Спеціальність</label>
        <label class="label4">Освітня програма</label>
        <label class="label5">Статус дисципліни</label>
        <label class="label6">Форма навчання</label>
        <label class="label7">Рік підготовки, семестр</label>
        <label class="label8">Обсяг дисципліни</label>
        <label class="label9">Семестровий контроль/контрольні заходи</label>
        <label class="label10">Розклад занять</label>
        <label class="label11">Мова викладання</label>
        <label class="label12">Інформація про керівника курсу/викладачів</label>
        <label class="label13">Розміщення курсу</label>
    </form>
    @foreach($data as $cd)
    <h3>{{$cd->degree}}</h3>
    @endforeach
</div>
<p class="p5">Програма навчальної дисципліни</p>
<div class="flex-container4">
    <form class="form3">
        @csrf
        <div class="flex-container6">
            <label class="label14">Опис навчальної дисципліни, її мета, предмет вивчання та результати навчання</label>
            <input type = "text" class="input14" placeholder="Введіть опис навчальної дисципліни" name="discrbtion">
        </div>
        <div class="flex-container7">
            <label class="label15">Пререквізити та постреквізити дисципліни</label>
            <input type = "text" class="input15" placeholder="Введіть пререквізити та постреквізити" name="reqvisits">
        </div>
        <div class="flex-container9">
            <label class="label16">Зміст навчальної дисципліни</label>
            <input type = "text" class="input16" placeholder="Введіть зміст дисципліни" name="content">
        </div>
        <div class="flex-container10">
            <label class="label17">Навчальні матеріали та ресурси</label>
            <input type = "text" class="input17" placeholder="Введіть навчальні матеріали" name="materials">
        </div>
        <button class="submit2">Створити</button>
    </form>
</div>
<div class="flex-container2">
    <div class="flex-container5">
        <div class="flex-container8">
            <p class="p2">Наші контакти</p>
            <p class="p3">+3809947367</p>
        </div>
    </div>
</div>
</body>
</html>




