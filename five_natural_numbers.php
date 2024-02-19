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
        @include('nav.php');
     ?>
    <div class="container">
        <h1>математика</h1>
        <h2>5 класс</h2>
        <section class="natural_numbers">
            <div class="theme_box"><h3 class="theme_text">Натуральные числа</h3></div>
            <div class="yellow_illustration numbers">1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, ...,</div>
            <img src="img/arrow.png" alt="" class="arrow">
            <p class="comment nat_first">В натуральном ряду есть первое число 1, но нет последнего</p>
            <p class="term"><strong>Натуральные числа</strong> – числа, которые мы используем при счете</p>
            <p class="term"><strong>Ряд натуральных чисел (натуральный ряд)</strong> – натуральные числа, записанные в порядке возрастания без пропусков</p>
            <p class="term"><strong>Числовое выражение</strong> – запись, в которой используются только числа, знаки арифметических действий и скобки</p>
            <div class="box_center zero"><p class="text_center">Нуль НЕ считают натуральным числом</p></div>
            <div class="ranks">
                <div class="rank">
                    <p>1</p>
                    <p>10</p>
                    <p>100</p>
                    <p>1 000</p>
                    <p>10 000</p>
                    <p>100 000</p>
                    <p>1 000 000</p>
                    <p>10 000 000</p>
                    <p>100 000 000</p>
                    <p>1 000 000 000</p>
                    <p>10 000 000 000</p>
                    <p>100 000 000 000</p>
                </div>
                <div class="definition">
                    <p>– единица</p>
                    <p>– десять</p>
                    <p>– сто</p>
                    <p>– тясяча</p>
                    <p>– десять тысяч</p>
                    <p>– сто тысяч</p>
                    <p>– миллион</p>
                    <p>– десять миллионов</p>
                    <p>– сто миллионов</p>
                    <p>– миллиард</p>
                    <p>– десять миллиардов</p>
                    <p>– сто миллиардов</p>
                </div>
            </div>
            <div class="single_digit">
                <div class="main_digit">
                    <p class="single">однозначные</p>
                    <p class="plenty">многозначные</p>
                </div>
                <span class="bracket_1"></span>
                <span class="bracket_2"></span>
                <div class="number_digit">
                    <p>1, 2, 3</p>
                    <p>21, 75, 99 – двузначные</p>
                    <p>521, 796 – трёхзначные</p>
                    <p class="">и т.д.</p>
                </div>
            </div>
            <img src="img/numbers_ranks.png" alt="numbers_ranks" class="rank_numbers">
            <div class="every_natural">
                <div class="box_center every_nat">
                    <p class="text_center">Каждое натуральное число можно записать в виде суммы разрядных слагаемых</p>
                </div>
                <p class="examples">89 = 8 · 10 + 9 · 1</p>
                <p class="examples">3278 = 3 · 1000 + 2 · 100 + 7 · 10 + 8 · 1</p>
            </div>
            <div class="box_center whole">
                <p class="text_center">Натуральное число = целое положительное число</p>
            </div>
        </section>
        <section class="comparison_nat">
            <div class="theme_box">
                <h3 class="theme_text">Сравнение натуральных чисел</h3>
            </div>
            <div class="term bigger">Из двух натуральных чисел больше то, которое в ряду натуральных чисел стоит правее (дальше от начала)</div>
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-5">
                        <p class="term">Числа удобно представлять точками прямой. Для этого задают луч, выходящий из точки O в направлении, отмеченном стрелкой, и отрезок, длину которого принимают за единицу. Этот отрезок называют единичным отрезком.
                        Из двух натуральных чисел больше то, которое на координатном луче находится правее.
                        </p>
                    </div>
                    <div class="col-md-7">
                        <img src="img/number_line.png" alt="number line" class="number_line">
                    </div>
                </div>
            </div>
            <div class="term">• Каждое натуральное число a больше нуля; это записывают так: a > 0</div>
            <div class="term">• Число, большее нуля, называют положительным</div>
            <div class="term">• Из a < b и b < c следует, что a < c</div>
        </section>
        <section class="actions_with_naturals">
            <div class="theme_box">
                <div class="theme_text">Действия с натуральными числами</div>
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
            <div class="addition_rule box">
                <h4 class="module">Переместительный закон сложения</h4>
                <p class="m">От перестановки слагаемых сумма не меняется</p>
                <div class="yellow_subheader">a + b = b + a </div>
            </div>
            <div class="addition_rule box">
                <h4 class="module">Сочетательный закон сложения</h4>
                <p class="m">Чтобы к сумме двух чисел прибавить третье число, можно к первому числу прибавить сумму второго и третьего чисел </p>
                <div class="yellow_subheader">(a + b) + c = a + (b + c)</div>
            </div>
            <div class="box finish">
                <p class="m">В сумме нескольких слагаемых можно менять слагаемые местами и заключать их в скобки любым образом</p>
            </div>
            <div class="addition_rule box">
                <h4 class="module">Переместительный закон умножения</h4>
                <p class="m">От перестановки множителей произведение не меняется</p>
                <div class="yellow_subheader">a · b = b · a</div>
            </div>
            <div class="addition_rule box">
                <h4 class="module">Сочетательный закон умножения</h4>
                <p class="m">Чтобы произведение двух чисел умножить на третье число, можно первое число умножить на произведение второго и третьего чисел</p>
                <div class="yellow_subheader">(a · b) · c = a · (b · c)</div>
            </div>
            <div class="box finish">
                <p class="m">В произведении нескольких множителей можно менять местами множители и заключать их в скобки любым способом</p>
            </div>
            <div class="addition_rule box finish">
                <h4 class="module">Распределительный закон</h4>
                <p class="m">Чтобы число умножить на сумму двух чисел, можно это число умножить на каждое слагаемое и полученных произведения сложить</p>
                <div class="yellow_subheader mb">a · (b + c) = a · b + a · c</div>
                <p class="brackets">• a · (b + c) = a · b + a · c – раскрытие скобок</p>
                <p class="brackets">• a · b + a · c  =  a · (b + c) – вынесение общего множителя за скобки</p>
            </div>
            <div class="exponentiation_more box"> 
                <div class="lighter">
                    <p>10 = 10<sup>1</sup></p>
                    <p>100 = 10<sup>2</sup></p>
                    <p>1 000 = 10<sup>3</sup></p>
                    <p>10 000 = 10<sup>4</sup></p>
                    <p>100 000 = 10<sup>5</sup></p>
                    <p>1 000 000 = 10<sup>6</sup></p>
                    <p>10 000 000 = 10<sup>7</sup></p>
                    <p>100 000 000 = 10<sup>8</sup></p>
                    <p>1 000 000 000 = 10<sup>9</sup></p>
                    <p>10 000 000 000 = 10<sup>10</sup></p>
                    <p>100 000 000 000 = 10<sup>11</sup></p>
                    <p>1 000 000 000 000 = 10<sup>12</sup></p>
                    <p>10 000 000 000 000 = 10<sup>13</sup></p>
                    <p>100 000 000 000 000 = 10<sup>14</sup></p>
                </div>
                <div class="exp_rules">
                    <h4>возведение в степень</h4>
                    <div class="a_in_n">
                        <p>a<sup>n</sup> = a · a · a · ... a,  при n > 1</p>
                        <span class="bracket_3"></span>
                        <p class="n_raz">n - раз</p>
                    </div>
                    <div class="lighter_box">
                        <p>a<sup>1</sup> = a</p>
                        <p>a<sup>2</sup> – квадрат числа</p>
                        <p>a<sup>3</sup> – куб числа</p>

                    </div>

                </div>
            </div>
            <div class="division box">
                <h4>деление</h4>
                <p class="yellow_subheader">A : b = c, если b · c = a</p>
                <div class="wrapper">
                    <div class="first_column">
                        <p class="division_rules">Говорят, что a делится на b нацело, если существует натуральное число c, при умножении которого на b получается a</p>
                        <p class="division_rules">Любое натуральное число делится на 1 и само на себя</p>
                        <p class="division_rules">Единица не является ни простым, ни составным числом</p>
                        <p>Делить на нуль нельзя</p>
                        <p class="division_rules">Делимое и делитель можно умножить или разделить нацело на одно и то же натуральное число – частное от этого не изменится</p>
                    </div>
                    <div class="second_column">
                        <p class="division_rules"><strong>Простое число</strong> – натуральное число, которое больше единицы и делится ТОЛЬКО на 1 и на само себя (2, 3, 5, 7, 11, 13, 17, 19, 23, 29 и т.д.)</p>
                        <p class="division_rules"><strong>Составное число</strong> – непростое число. Оно делится на 1, на себя и еще хотя бы на одно натуральное число (4, 6, 8, 9, 10, 12, 14, 15, 16, 18 и т.д.)</p>
                        <p><strong>Разложить</strong> составное число на простые множители – значит представить его в виде произведения различных его простых делителей или их степеней</p>
                        
                    </div>
                </div>
            </div>
            <div class="division_rules_box box" name="natural_numbers">
                <h4>Свойста и признаки делимости</h4>
                <div class="wrapper">
                    <div class="first_column">
                        <div class="lighter_box">Если один из множителей делится на некоторое число, то и произведение делится на это число</div>
                        <div class="lighter_box">Если первое число делится на второе, а второе делится на третье, то первое число делится на третье</div>
                        <div class="lighter_box">Если каждое из двух чисел делится на некоторое число, то их сумма и разность делятся на это число</div>
                        <div class="lighter_box">Если одно из двух чисел делится на некоторое число, а другое не делится, то их сумма и разность не делятся на это число</div>
                    </div>
                    <div class="second_column">
                        <div class="lighter_box">Если число оканчивается цифрой 0, то оно делится на 10</div>
                        <div class="lighter_box">Если число оканчивается одной из цифр 0 или 5, то оно делится на 5</div>
                        <div class="lighter_box">Если число оканчивается одной из цифр 0, 2, 4, 6, 8, то оно делится на 2</div>
                        <div class="lighter_box">Если сумма цифр числа делится на 9, то и само число делится на 9</div>
                        <div class="lighter_box">Если сумма цифр числа делится на 3, то и само число делится на 3</div>
                    </div>
                </div>
            </div>
            <div class="division_flex">
                <div class="biggest_division_box">
                    <h4>Наибольший общий делитель (НОД)</h4>
                    <p>Чтобы найти НОД, нужно каждое из чисел разложить на простые множители</p>
                    <p>После этого перемножаются множители, которые присутствуют в обоих числах</p>
                    <p class='examples'>180 = <u>2</u> · <u>2</u> · <u>3</u> · 3 · 5</p>
                    <p class='examples'>336 = <u>2</u> · <u>2</u> · 2 · 2 · <u>3</u> · 7</p>
                    <p>НОД(180, 336) = 2 · 2 · 3 = 12</p>
                    <p>Взаимно простые числа – числа, не имеющие простых общих множителей</p>
                    <img src="" alt="">
                </div>
                <div class="lowest_factor_box">
                    <h4>Наименьшее общее кратное (НОК)</h4>
                    <p>НОК – наименьшее натуральное число, которое нацело делится на оба данных числа</p>
                    <p>Чтобы найти НОК, нужно взять все множители первого числа, и умножить их на множители второго, которых не было в разложении первого</p>
                    <p class='examples'>24 = 2 · 2 · 2 · 3</p>
                    <p class='examples'>18 = 2 · 3 · 3</p>
                    <p>НОК(24, 18) = (2 · 2 · 2 · 3) · 3 = 72</p>
                    <img src="" alt="">
                </div>

            </div>
            <div class="division_with_rest box">
                <h4>деление с остатком</h4>
                <p class="yellow_subheader">14 = 3 · 4 + 2</p>
                <div class="division_rest_rules">
                    <p class="division_rules">4 – неполное частное – наибольшее число, произведение которого на 3 меньше 14. 2 – остаток. Остаток меньше делителя</p>
                    <p class="division_rules">Записывают: 14:3 = 4 (остаток 2)</p>
                    <p class="division_rules">Чтобы разделить число a на число b, надо найти частное a:b, если a делится на b, или найти неполное частное и остаток, если a не делится на b (деление столбиком)</p>
                </div>
            </div>
        </section>
        <section class="actions_order">
            <div class="theme_box"><div class="theme_text">Порядок выполнения действий</div></div>
            <div class="box actions_order_container">
                <ol>
                    <li>Действия в скобках</li>
                    <li>Возведение в степень</li>
                    <li>Умножение/деление</li>
                    <li>Сложение/вычитание</li>
                </ol>
                <ul>
                    <li>Если в числовом выражении несколько арифметических действий сложения/вычитания или умножения/деления, то они выполняются по порядку, слева направо</li>
                    <li>Изменять принятый порядок действий можно только в тех случаях, когда это позволяют законы сложения и умножения</li>
                </ul>
            </div>
        </section>
        <section class="theme_btns">
            <div class="theme_btn"><a href="index.php">главная</a></div>
            <div class="theme_btn"><a href="five_task_parts.php">следующая тема</a></div>
        </section>
    </div>
</body>
</html>