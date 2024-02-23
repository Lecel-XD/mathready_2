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
<body>
    <?php 
        @include('nav.php')
     ?>  
    <div class="container">
        <section class="first_cont">
            <h1>Алгебра</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Одночлены</div>
            </div>
            <div class="left">
                <p><strong class="yellow">Одночлен</strong> – произведение букв и чисел</p>
                <p>Число или одну букву также называют одночленом</p>
                <p>0 – нулевой одночлен</p>
                <p><strong class='yellow'>Стандартный вид одночлена</strong> – имеется только один числовой множитель, записанный на первом месте, а каждая буква участвует в записи лишь один раз в виде некоторой её степени. При этом буквы записаны в порядке алфавита</p>
                <p><strong class="yellow">Коэффициент одночлена</strong> – числовой множитель</p>
                <p><strong class="yellow">Подобные одночлены</strong> – равны или отличаются лишь своими коэффициентами</p>
                <p>3a<sup>2</sup>b + 2a<sup>2</sup>b = 5a<sup>2</sup>b</p>
                <p>3a<sup>2</sup>b - 2a<sup>2</sup>b = a<sup>2</sup>b</p>
            </div>
        </section>
        <section class="duomial">
            <div class="theme_box">
                <div class="theme_text">Многочлены</div>
            </div>
            <div class="left">
                <p><strong class="yellow">Многочлен</strong> – сумма одночленов</p>
                <p>Одночлен также называют многочленом</p>
                <p>Число нуль называют нулевым многочленом</p>
                <p>Члены многочлена можно менять местами</p>
                <p>В многочлене можно приводить подобные члены</p>
                <p><strong class="yellow">Стандартный вид многочлена</strong> – все его члены записаны в стандартном виде и среди них нет подобных</p>
            </div>
        </section>
    </div>  
    <section class="bottom_nav">
        <nav>
            <a href="index.php"><div>На главную</div></a>
            <a href="algebra_main.php"><div>В категорию</div></a>
            <a href="algebra_progressions.php"><div>След. тема</div></a>
        </nav>
    </section>
</body>
</html>