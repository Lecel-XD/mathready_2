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
            <p class="term"><strong class="yellow">Логарифм</strong> положительного числа b по основанию a это показатель степени, в которую надо возвести a, чтобы получить b</p>
            <p class="term">log<sub>a</sub>b = c то же самое, что a<sup>c</sup> = b</p>
            <p class="term">При этом b > 0, a > 0, a != 1</p>
        </section>
     </div>
</body>
</html>