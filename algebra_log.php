<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        @include('nav.php')
     ?>
     <div class="container">
        <a name='first'></a>
        <section class="first_cont">
            <h1>Алгебра</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Логарифмы</div>
            </div>
        </section>
        <section class="about_log">
            <div class="box">
                <p><strong class="yellow">Логарифм</strong> положительного числа b по основанию a это показатель степени, в которую надо возвести a, чтобы получить b</p>
                <p>log<sub>a</sub>b = c то же самое, что a<sup>c</sup> = b</p>
                <p>При этом b > 0, a > 0, a != 1</p>
                <p><strong class="yellow">Десятичный логарифм</strong> - логарифм с основанием 10 (lg b)</p>
                <p><strong class="yellow">Натуральный логарифм</strong> - логарифм с основанием e (In b)</p>
                <p>e +-= 2,7182818</p>
                <p>Основное тригонометрическое тождество:</p>
                <img src="" class='log-1' alt="">
            </div>
        </section>
        <section class="log_formules">
            <div class="theme_box">
                <div class="theme_text">Формулы для логарифмов</div>
            </div>
            <div class="box">
                <h4>Основные формулы для логарифмов:</h4>
                <p>log<sub>a</sub>(bc) = log<sub>a</sub>b + log<sub>a</sub>c</p>
                <p>log<sub>a</sub>b<sup>m</sup> = m log<sub>a</sub>b</p>
                <div class="container_with_wraction"></div>
                <div class="container_with_wraction"></div>
                <div class="container_with_wraction"></div>
            </div>
        </section>
     </div>
</body>
</html>