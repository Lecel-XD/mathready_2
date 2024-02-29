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
<body class='logs'>
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
                <p><strong class="yellow">Логарифм</strong> положительного числа b по основанию a – показатель степени, в которую надо возвести a, чтобы получить b</p>
                <p>log<sub>a</sub>b = c то же самое, что a<sup>c</sup> = b, при этом b > 0, a > 0, a != 1</p>
                <p><strong class="yellow">Десятичный логарифм</strong> - логарифм с основанием 10 (lg b)</p>
                <p><strong class="yellow">Натуральный логарифм</strong> - логарифм с основанием e (In b)</p>
                <p>e ≈ 2,7182818</p>
            </div>
            <div class="main_log_func">
                <h4>Основное тригонометрическое тождество:</h4>
                <p>a<sup>log<sub>a</sub>b</sup> = b, log<sub>a</sub>a<sup>c</sup> = c</p>
            </div>
        </section>
        <section class="log_formules">
            <div class="theme_box">
                <div class="theme_text">Формулы для логарифмов</div>
            </div>
            <div class="box">
                <h4>Формулы</h4>
                <p>log<sub>a</sub>(bc) = log<sub>a</sub>b + log<sub>a</sub>c</p>
                <p>log<sub>a</sub>b<sup>m</sup> = m log<sub>a</sub>b</p>
                <div class="container_with_fraction">
                    <p>log<sub>a</sub></p>
                    <div class="elem">
                        <div class="fraction">
                            <p>b</p>
                            <hr>
                            <p>c</p>
                        </div>
                    </div>
                    <p> = log<sub>a</sub>b - log<sub>a</sub>c</p>
                </div>
                <div class="container_with_fraction">
                    <p>log<sub>a</sub>b =</p>
                    <div class="elem">
                        <div class="fraction">
                            <p>log<sub>c</sub>b</p>
                            <hr>
                            <p>log<sub>c</sub>a</p>
                        </div>
                    </div>
                </div>
                <div class="container_with_fraction">
                    <p>log<sub>a</sub>b =</p>
                    <div class="elem">
                        <div class="fraction">
                            <p>1</p>
                            <hr>
                            <p>log<sub>b</sub>a</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second_method">
                <h4>Метод замены множителя</h4>
                <div class="flex_box">
                    <div class="column-1">
                        <p>log<sub>h</sub>f</p>
                        <p>log<sub>h</sub>f - 1</p>
                        <p>log<sub>h</sub>f - log<sub>h</sub>g</p>
                        <p>h<sup>f</sup> - h<sup>g</sup></p>
                        <p>h<sup>f</sup> - 1</p>
                        <p>f<sup>h</sup> - g<sup>h</sup></p>
                        <p>|f| - |g|</p>
                    </div>
                    <div class="column-2">
                        <p>(h - 1)(f - 1)</p>
                        <p>(h - 1)(f - h)</p>
                        <p>(h - 1)(f - g)</p>
                        <p>(h - 1)(f - g)</p>
                        <p>(h - 1) · f</p>
                        <p>(f - g) · h</p>
                        <p>f<sup>2</sup> - g<sup>2</sup></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="theme_box">
                <div class="theme_text">Логарифмическая функция</div>
            </div>
        </section>
        <section>
            <div class="theme_box">
                <div class="theme_text">Логарифмические уравнения</div>
            </div>
        </section>
        <section>
            <div class="theme_box">
                <div class="theme_text">Логарифмические неравенства</div>
            </div>
        </section>
        <section class="bottom_nav">
            <nav>
                <a href="index.php"><div>На главную</div></a>
                <a href="algebra_main.php"><div>В категорию</div></a>
                <a href="algebra_probability.php"><div>След. тема</div></a>
            </nav>
        </section>
     </div>
</body>
</html>