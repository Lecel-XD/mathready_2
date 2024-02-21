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
    <section class="container first_cont">
        <h1>алгебра</h1>
        <h2>10-11 класс</h2>
        <div class="theme_box">
            <div class="theme_text">Виды чисел</div>
        </div>
        <div class="numbers_box">
            <div class="number_box">
                <p>Натуральные числа - используются при счёте предметов (N)</p>
                <p>N = {1, 2, 3, ...}</p>
            </div>
            <div class="number_box">
                <p>Целые числа - натуральные числа, отрицательные и нуль (Z)</p>
                <p>Z = {..., -2, -1, 0, 1, 2, ...}</p>
            </div>
            <div class="number_box">
                <p>Рациональные числа - обыкновенные дроби (Q)</p>
                <div class="rational_number">
                    <p>a</p>
                    <span></span>
                    <p>b</p>
                </div>
                <p>a ∈ N, b ≠ 0</p>
            </div>
            <div class="number_box">
                <p>Иррациональные числа - бесконечные непериодические десятичные дроби (I)</p>
                <p>π = 3,1415926...</p>
            </div>
            <div class="number_box">
                <p>Действительные (вещественные) числа - рациональные и иррациональные числа (R)</p>
                <p>R = {I + Q}</p>
            </div>
            <div class="number_box">
                <p>Комплексные числа - множество чисел C</p>
                <p>C = {x + iy, где x ∈ R и y ∈ R}, где - i мнимая единица</p>
                <img src="" alt="">
            </div>
        </div>
    </section>
    

</body>
</html>