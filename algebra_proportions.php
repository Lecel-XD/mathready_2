<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATHREADY</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="sass/style.css">
</head>
<body class="proportions">
    <?php 
        @include('nav.php');
     ?>
    <div class="container">
        <section class="first_cont">
            <h1>алгебра</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Проценты и пропорции</div>
            </div>
        </section>
        <section class="procent">
            <p class="left"><strong class="yellow">Процент</strong> – одна сотая от числа</p>
            <div class="progr_box_center left">
                <p class="progr_text_center">Чтобы узнать, сколько первое число составляет от второго, надо первое число разделить на второе и результат умножить на 100</p>
                <p class="progr_text_center">270 от 540 = 270 : 540 · 100% = 50%</p>
            </div>
            <p class="proportion left"><strong class="yellow">Пропорция</strong> – равенство 2-ух отношений</p>
            
            <div class="box">
                <img class="flex_elem" src="img/progression_elem.svg" alt="">
                <div class="flex_elem">
                    <p>Произведение крайних членов пропорции равно произведению её средних членов</p>
                    <p>Две величины называют <strong class="yellow">прямо пропорциональными</strong>, если при уведичении одной из них в несколько раз другая увеличивается во столько же раз</p>
                    <p>Две величины называют <strong class="yellow">обратно пропорциональными</strong>, если при уведичении одной из них в несколько раз другая уменьшается во столько же раз</p>
                </div>
            </div>
        </section>
        <section class="bottom_nav">
            <nav>
                <a href="index.php"><div>На главную</div></a>
                <a href="algebra_main.php"><div>В категорию</div></a>
                <a href="algebra_units.php"><div>След. тема</div></a>
            </nav>
        </section>
    </div>
</body>
</html>