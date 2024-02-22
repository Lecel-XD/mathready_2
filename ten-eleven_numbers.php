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
<body class="ten-eleven">
    <?php 
        @include('nav.php')
     ?>
    <div class="container">
        <section class="first_cont">
            <h1>алгебра</h1>
            <h2>10-11 класс</h2>
            <div class="theme_box">
                <div class="theme_text">Виды чисел</div>
            </div>
            <div class="numbers_box">
                <div class="number_box">
                    <p class="number_item"><strong>Натуральные числа</strong> – используются при счёте предметов (N)</p>
                    <p>N = {1, 2, 3, ...}</p>
                </div>
                <div class="number_box">
                    <p class="number_item"><strong>Целые числа</strong> – натуральные числа, отрицательные и нуль (Z)</p>
                    <p>Z = {..., -2, -1, 0, 1, 2, ...}</p>
                </div>
                <div class="number_box">
                    <p class="number_item"><strong>Рациональные числа</strong> – обыкновенные дроби (Q)</p>
                    <div class="rational_flex">
                        <div class="rational_number">
                            <p>a</p>
                            <span></span>
                            <p>b</p>
                        </div>
                        <p>, a ∈ N, b ≠ 0</p>
                    </div>
                </div>
                <div class="number_box">
                    <p class="number_item"><strong>Иррациональные числа</strong> – бесконечные непериодические десятичные дроби (I)</p>
                    <p>π = 3,1415926...</p>
                </div>
                <div class="number_box">
                    <p class="number_item"><strong>Действительные (вещественные) числа</strong> – рациональные и иррациональные числа (R)</p>
                    <p>R = {I + Q}</p>
                </div>
                <div class="number_box">
                    <p class="number_item"><strong>Комплексные числа</strong> – множество чисел C</p>
                    <p>C = {x + iy, где x ∈ R и y ∈ R}, где - i мнимая единица</p>
                    <img src="img/10-11_complex_number.svg" alt="">
                </div>
                <div class="number_box">
                    <p class="number_item"><strong>Простые числа</strong> – числа, которые делятся только на 1 и на самого себя C</p>
                    <p>Пример: 2, 3, 5, 7, 11, ...</p>
                </div>
                <div class="number_box">
                    <p class="number_item"><strong>Составные числа</strong> – числа, которые делятся на 1, на само себя и ещё как минимум на одно натуральное число</p>
                    <p>Пример: 4, 6, 8, 9, 10, ...</p>
                </div>
            </div>
        </section>
        <section class="actions_wrapper">
            <div class="theme_box">
                <div class="theme_text">Арифмметические действия</div>
            </div>
            <div class="actions">
                <div class="action start">
                    <div class="wrapper">
                        <h4>сложение</h4>
                        <p class="example">5 + 3 = 8</p>
                        <div class="elements">
                            <p>5 – слагаемое</p>
                            <p>3 – слагаемое</p>
                            <p>8 – сумма</p>
                        </div>
                    </div>
                </div>
                <div class="action">
                    <div class="wrapper">
                        <h4>вычитание</h4>
                        <p class="example">11 - 4 = 7</p>
                        <div class="elements">
                            <p>11 – уменьшаемое</p>
                            <p>4 – вычитаемое</p>
                            <p>7 – разность</p>
                        </div>
                    </div>
                </div>
                <div class="action exponentiation">
                    <div class="wrapper">
                        <h4>возведение в степень</h4>
                        <p class="example">4<sup>3</sup> = 4 · 4 · 4</p>
                        <div class="elements">
                            <p>4 – основание степени</p>
                            <p>3 – показатель степени</p>
                        </div>
                    </div>
                </div>
                <div class="action">
                    <div class="wrapper">
                        <h4>умножение</h4>
                        <p class="example">4 · 3 = 4 + 4 + 4 = 12</p>
                        <div class="elements">
                            <p>4 – множитель</p>
                            <p>3 – множитель</p>
                            <p>12 – произведение</p>
                        </div>
                    </div>
                </div>
                <div class="action start">
                    <div class="wrapper">
                        <h4>деление</h4>
                        <p class="example">15 : 5 = 3</p>
                        <div class="elements">
                            <p>15 – делимое</p>
                            <p>5 – делитель</p>
                            <p>3 – частное</p>
                        </div>
                    </div>
                </div>               
            </div>
        </section>
        <section class="actions_rules">
            <div class="box">
                <div class="lighter_box">
                    <h4>Законы умножения, сложения</h4>
                    <p>a + b = b + a</p>
                    <p>a + (b + c) = (a + b) + c</p>
                    <p>(a · b) · c = a · (b · c)</p>
                    <p>a · (b + c) = a · b + a · c</p>
                </div>
                <div class="lighter_box">
                    <h4>Формулы сокращённого умножения</h4>
                    <p>a<sup>2</sup> - b<sup>2</sup> = (a - b)(a + b)</p>
                    <p>(a + b)<sup>2</sup> = a<sup>2</sup> + 2ab + b<sup>2</sup></p>
                    <p>(a - b)<sup>2</sup> = a<sup>2</sup> - 2ab + b<sup>2</sup></p>
                    <p>(a + b)<sup>3</sup> = a<sup>3</sup> + 3a<sup>2</sup>b + 3ab<sup>2</sup> + b<sup>3</sup></p>
                    <p>(a - b)<sup>3</sup> = a<sup>3</sup> - 3a<sup>2</sup>b + 3ab<sup>2</sup> - b<sup>3</sup></p>
                    <p>a<sup>3</sup> + b<sup>3</sup> = (a + b)(a<sup>2</sup> - ab + b<sup>2</sup>)</p>
                    <p>a<sup>3</sup> - b<sup>3</sup> = (a - b)(a<sup>2</sup> + ab + b<sup>2</sup>)</p>
                    <p></p>
                </div>
                <div class="lighter_box">
                    <h4>Признаки делимости</h4>
                    <p><strong class="yellow">a ⋮ 2</strong>, если последняя цифра числа a чётная</p>
                    <p><strong class="yellow">a ⋮ 3</strong>, если сумма цифр числа делится на 3</p>
                    <p><strong class="yellow">a ⋮ 4</strong>, если число, составленное из двух последних цифр a делится на 4</p>
                    <p><strong class="yellow">a ⋮ 5</strong>, если число оканчивается на 0 или 5</p>
                    <p><strong class="yellow">a ⋮ 8</strong>, если число, составленное из трёх последних цифр a делится на 8</p>
                    <p><strong class="yellow">a ⋮ 9</strong>, если сумма цифр числа делится на 9</p>
                    <p><strong class="yellow">a ⋮ 10</strong>, если число оканчивается на 0</p>
                    <p><strong class="yellow">a ⋮ 11</strong>, если суммы цифр на чётных и нечётных позициях равны</p>
                </div>
                <div class="lighter_box"></div>
                <div class="lighter_box"></div>    

            </div>
        </section>
    </div>
    

</body>
</html>