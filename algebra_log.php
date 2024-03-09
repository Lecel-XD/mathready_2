<!DOCTYPE html>
<html lang="en">
<head>
    <title>MATHREADY</title>
    <?php 
        @include('head.php');
     ?>
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
                <p>log<sub>a</sub>b = c то же самое, что a<sup>c</sup> = b, при этом b > 0, a > 0, a ≠ 1</p>
                <p><strong class="yellow">Десятичный логарифм</strong> - логарифм с основанием 10 (lg b)</p>
                <p><strong class="yellow">Натуральный логарифм</strong> - логарифм с основанием e (ln b)</p>
                <p>e ≈ 2,7182818</p>
                <p>y = log<sub>a</sub>x и y = a<sup>x</sup> взаимно обратны</p>
            </div>
            <div class="main_log_func">
                <h4>Основное тригонометрическое тождество:</h4>
                <p>a<sup>log<sub>a</sub>b</sup> = b, log<sub>a</sub>a<sup>c</sup> = c</p>
            </div>
            <a name='formules'></a>
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
            <a name='func'></a>
        </section>
        <section class="log_func">
            <div class="theme_box">
                <div class="theme_text">Логарифмическая функция</div>
            </div>
            <div class="box">
                <div class="flex_box">
                    <div class="column-1">
                        <img src="img/log-1.svg" alt="">
                        <img src="img/log-2.svg" alt="">
                        <img src="img/log-3.svg" alt="">
                    </div>
                    <div class="column-2">
                        <div>
                            <h4>При a > 1:</h4>
                            <ul>
                                <li>Область определения: (0; +∞)</li>
                                <li>Множество значений: (-∞; +∞)</li>
                                <li>Функция не ограничена</li>
                                <li>Возрастающая функция</li>
                                <li>Принимает положительные значения при x > 1</li>
                                <li>Принимает отрицательные значения при 0 < x < 1</li>
                            </ul>
                        </div>
                        <div>
                            <h4>При  0 < a < 1:</h4>
                            <ul>
                                <li>Область определения: (0; +∞)</li>
                                <li>Множество значений: (-∞; +∞)</li>
                                <li>Функция не ограничена</li>
                                <li>Убывающая функция</li>
                                <li>Принимает положительные значения при 0 < x < 1</li>
                                <li>Принимает отрицательные значения при x > 1</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a name='equal'></a>
        </section>
        <section class="log_equals">
            <div class="theme_box">
                <div class="theme_text">Логарифмические уравнения</div>
            </div>
            <div class="box">
                <p>Уравнение log<sub>a</sub>b = log<sub>a</sub>c равносильно b = c</p>
            </div>
            <div class="box second">
                <p>log<sub>2</sub> (x + 1) + log<sub>2</sub> (x + 3) = 3</p>
                <p>log<sub>2</sub> ((x + 1)(x + 3)) = 3</p>
                <p>(x + 1)(x + 3) = 8</p>
                <p>x<sup>2</sup> + 4x - 5 = 0</p>
                <p>x<sub>1</sub> = 1</p>
                <p>x<sub>2</sub> = -5</p>
            </div>
            <a name='ineq'></a>
        </section>
        <section class="log_ineq">
            <div class="theme_box">
                <div class="theme_text">Логарифмические неравенства</div>
            </div>
            <div class="box">
                <p>Неравенство log<sub>a</sub>b > log<sub>a</sub>c равносильно b > c при a > 1</p>
                <p>Неравенство log<sub>a</sub>b > log<sub>a</sub>c равносильно b < c при 0 < a < 1</p>
            </div>
            <div class="box second">
                <h4>log<sub>a</sub>b > c или log<sub>a</sub>b < c</h4>
                <p class="yellow">lg (x + 1) ≤ 2</p>
                <p>Число 2 можно представить в виде lg 100. Перепишем данное неравенство</p>
                <p>lg (x + 1) ≤ lg 100</p>
                <p>Основания логарифмов одинаковые и больше 1, значит</p>
                <p>x + 1 ≤ 100</p>
                <p>x ≤ 99</p>
                <p>Число b всегда больше нуля, значит x + 1 > 0</p>
                <p>x > -1</p>
                <p>Из этих 2-ух неравенств следует, что -1 < x ≤ 99</p>
                <p>Ответ: x ∈ (-1; 99]</p>
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