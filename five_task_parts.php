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
<body class="fifth">
    <?php 
        @include('nav.php')
     ?>
    <div class="container">
        <h1>математика</h1>
        <h2>5 класс</h2>
        <section class="tasks_on_parts">
            <div class="theme_box">
                <h3 class="theme_text">Задачи "на части"</h3>
            </div>
            <div class="task_1">
                <div class="yellow_subheader">Задача 1</div>
                <p>Для варенья из малины на 2 части ягод берут 3 части сахара. Сколько сахара следует взять на 6кг ягод?</p>
                <div class="solution">Решение</div>
                <p>По условию задачи ягод 6 кг, и это количество составляет 2 части, поэтому на каждую часть приходится 6 : 2 = 3 кг. Сахара надо взять 3 такие же части, т.е. 3 · 3 = 9 кг.</p>
                <p class="answer">Ответ: 9 кг</p>
            </div>
            <div class="task_2">
                <div class="yellow_subheader">Задача 2</div>
                <p>На двух полках стоит 120 книг – на первой полке в 3 раза больше, чем на второй. Сколько книг стоит на каждой полке?</p>
                <div class="solution">Решение</div>
                <p>Если книги, стоящие на второй полке, составляют 1 часть, то на первой полке – 3 такие части</p>
                <img src="img/parts_tasks.svg" alt="" class="parts_img">
                <div class="episodes">
                    <p>1) Сколько частей составляют 120 книг?</p>   
                    <div class="term">1 + 3 = 4 (части)</div> 
                    <p>2) Сколько книг приходится на 1 часть?(стоит на II полке)?</p>   
                    <div class="term">120 : 4 = 30 (книг)</div> 
                    <p>3)Сколько книг стоит на I полке?</p>   
                    <div class="term">30 · 3 = 90(книг)</div>
                    <p class="answer">Ответ: 90 и 30 книг</p>      
                </div>
            </div>
        </section>
        <section class="summ_tasks" name='test_link'>
            <div class="theme_box">
                <div class="theme_text">Задачи на нахождение двух чисел по их сумме и разности</div>
            </div>
            <div class="task_3">
                <div class="yellow_subheader">Задача 1</div>
                <p>В первой коробке на 6 карандашей больше, чем во второй, а в двух вместе 30 карандашей. Сколько карандашей в каждой коробке?</p>
                <img src="img/summ_tasks.svg" alt="" class="summ_tasks_img">
                <div class="solution">Решение</div>
                <div class="episodes">
                    <p>Если из первой коробки вынуть 6 карандашей, в ней станет столько же карандашей, сколько и во второй, а в двух вместе – в 2 раза больше, чем во второй:</p>
                    <p class="term">1) 30 - 6 = 24 (кар).</p>
                    <p>Найдем число карандашей во второй коробке:</p>
                    <p class="term">2) 24 : 2 = 12 (кар).</p>
                    <p>Теперь вернём 6 карандашей в первую коробку, т.е. найдём число карандашей в первой коробке</p>
                    <p class="term">3) 12 + 6 = 18 (кар).</p>
                    <p class="answer">Ответ: 18 и 12 карандашей</p>
                </div>
            </div>
        </section>
        <section class="theme_btns">
            <div class="theme_btn"><a href="five_natural_numbers.php">предыдущая тема</a></div>
            <div class="theme_btn"><a href="index.php">главная</a></div>
            <div class="theme_btn"><a href="">следующая тема</a></div>
        </section>
    </div>
</body>
</html>