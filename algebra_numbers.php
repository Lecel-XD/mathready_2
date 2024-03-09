<!DOCTYPE html>
<html lang="en">
<head>
    <title>MATHREADY</title>
    <?php 
        @include('head.php');
     ?>
</head>
<body class="ten-eleven">
    <?php 
        @include('nav.php')
     ?>
    <div class="container">
        <a name="numbers"></a>
        <section class="first_cont">
            <h1>алгебра</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Виды чисел</div>
            </div>
            <div class="numbers_box">
                <div class="number_box">
                    <p class="number_item"><strong>Натуральные числа</strong> – используются при счёте предметов (N)</p>
                    <p>N = {1, 2, 3, ...}</p>
                </div>
                <div class="number_box">
                    <p class="number_item"><strong>Отрицательные числа</strong> – числа меньше нуля</p>
                    <p>Пример: -1, -2, -3, ...</p>
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
            <a name="arifmetic"></a>
        </section>
        
        <section class="actions_wrapper">
            <div class="theme_box">
                <div class="theme_text">Арифметические действия</div>
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
                    <h4>Свойства делимости</h4>
                    <p>Если a ⋮ n, то ab ⋮ n</p>
                    <p>Если a ⋮ b, b ⋮ c, то a ⋮ c</p>
                    <p>Если a ⋮ n, b ⋮ n, то a ± b ⋮ n</p>
                    <p>Если a ⋮ n, но b не делится нацело на n, то a ± b не делится на n</p>
                </div>  
                <div class="lighter_box">
                    <h4>Формулы сокращённого умножения</h4>
                    <p>a<sup>2</sup> - b<sup>2</sup> = (a - b)(a + b)</p>
                    <p>(a + b)<sup>2</sup> = a<sup>2</sup> + 2ab + b<sup>2</sup></p>
                    <p>(a + b + c)<sup>2</sup> = a<sup>2</sup> + b<sup>2</sup> + c<sup>2</sup> + 2ab + 2ac + 2bc</p>
                    <p>(a - b)<sup>2</sup> = a<sup>2</sup> - 2ab + b<sup>2</sup></p>
                    <p>(a + b)<sup>3</sup> = a<sup>3</sup> + 3a<sup>2</sup>b + 3ab<sup>2</sup> + b<sup>3</sup></p>
                    <p>(a - b)<sup>3</sup> = a<sup>3</sup> - 3a<sup>2</sup>b + 3ab<sup>2</sup> - b<sup>3</sup></p>
                    <p>a<sup>3</sup> + b<sup>3</sup> = (a + b)(a<sup>2</sup> - ab + b<sup>2</sup>)</p>
                    <p>a<sup>3</sup> - b<sup>3</sup> = (a - b)(a<sup>2</sup> + ab + b<sup>2</sup>)</p>
                    <p class="formule_str">(a<sub>1</sub> + a<sub>2</sub> + … + a<sub>n</sub>)<sup>2</sup> = a<sub>1</sub><sup>2</sup> + a<sub>2</sub><sup>2</sup> + … + a<sub>n</sub><sup>2</sup> + 2a<sub>1</sub>a<sub>2</sub> + 2a<sub>1</sub>a<sub>3</sub> + 2a<sub>1</sub>a<sub>4</sub> + … + 2a<sub>1</sub>a<sub>n</sub> + 2a<sub>2</sub>a<sub>3</sub> + 2a<sub>2</sub>a<sub>4</sub> + … + 2a<sub>2</sub>a<sub>n</sub> + … + 2a<sub>n-1</sub>a<sub>n</sub></p>
                    <p>a<sup>n</sup> − b<sup>n</sup> = (a − b)(a<sup>n-1</sup> + a<sup>n-2</sup>b + a<sup>n-2</sup>b<sup>2</sup> + … + ab<sup>n-2</sup> + b<sup>n-1</sup>) 
                        </p>
                </div>
                
                
                <div class="lighter_box features_wider">
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

            </div>
            <a name="roots"></a>
        </section>
        <section class="roots">
            <div class="theme_box">
                <div class="theme_text">Корень, степень, модуль</div>
            </div>
            <div class="box">
                <div class="lighter_box">
                    <h4>Свойства корня</h4>
                    <img class="root" src="img/root-1.svg" alt="">
                    <img class="root" src="img/root-2.svg" alt="">
                    <img class="root" src="img/root-3.svg" alt="">
                    <img class="root" src="img/root-4.svg" alt="">
                    <img class="root" src="img/root-5.svg" alt="">
                    <img class="root" src="img/root-6.svg" alt="">
                    <img class="root" src="img/root-7.svg" alt="">
                </div>
                <div class="lighter_box">
                    <h4>Свойства степени</h4>
                    <div class="degree">
                        <p class="formule_roots">a<sup>n</sup> = a · a · a · ... · a</p>
                        <span class="tie"></span>
                        <p class="absolute">n раз</p>
                    </div>
                    <p>a – основание степени</p>
                    <p>n – показатель степени</p>
                    <p>a<sup>1</sup> = a</p>
                    <p>a<sup>0</sup> = 1</p>
                    <div class="container_with_fraction">
                        <div class="elem">
                            <p>a<sup>-1</sup> = </p>
                        </div>
                        <div class="fraction elem">
                            <p>1</p>
                            <hr>
                            <p>a<sup>n</sup></p>
                        </div>
                    </div>
                    <p>a<sup>m</sup> a<sup>n</sup> = a<sup>m+n</sup></p>
                    <p>(a<sup>m</sup>)<sup>n</sup> = (a<sup>n</sup>)<sup>m</sup> = a<sup>mn</sup></p>
                    <p>a<sup>n</sup> b<sup>n</sup> = ab<sup>n</sup></p>
                    <div class="container_with_fraction">
                        <div class="elem">
                            <div class="fraction">
                                <p>a<sup>m</sup></p>
                                <hr>
                                <p>a<sup>n</sup></p>
                            </div>
                        </div>
                        <p>= a<sup>m-n</sup></p>
                    </div>
                    <div class="container_with_fraction">
                        <div class="elem">
                            <div class="fraction">
                                <p>a<sup>n</sup></p>
                                <hr>
                                <p>b<sup>n</sup></p>
                            </div>
                        </div>
                        <p>=</p>
                        <img src="img/bracket_1.svg" alt="">
                        <div class="elem">
                            <div class="fraction">
                                <p>a</p>
                                <hr>
                                <p>b</p>
                            </div>
                        </div>
                        <img class="bracket_2_rotated" src="img/bracket_1.svg" alt="">
                        <sup class="degree_of_bracket">n</sup>
                    </div>
                    <p></p>
                    <p></p>
                </div>
                <div class="lighter_box">
                    <h4>Свойства модуля</h4>
                    <p>|a| = |-a|</p>
                    <p>|a| ≥ 0</p>
                    <p>|a| ≥ a</p>
                    <p>|a · b| = |a| · |b|</p>
                    <p>
                        <div class="container_with_fraction">
                        
                            <div class="elem">
                                <span class="high_module"></span>
                                <div class="fraction">
                                    <p>a</p>
                                    <hr>
                                    <p>b</p>
                                </div>
                                <span class="high_module"></span>
                            </div>
                            
                            <p> =</p>
                            <div class="fraction elem">
                                <p>|a|</p>
                                <hr>
                                <p>|b|</p>
                            </div>
                            <p>при b = 0</p>
                        </div>
                    </p>
                    <p>|a + b| ≤ |a| + |b|</p>
                </div>
            </div>
            <a name="approximation"></a>
        </section>
        <section class="approximation">
            <div class="theme_box">
                <div class="theme_text">Приближение. Абсолютная, относительная погрешность приближения</div>
            </div>
            <div class="left">
                <p class="yellow lh17">a ≈ <b class="approximation_line yellow">a</b></p>
                <p class="margin-bottom lh17"><b class="approximation_line">a</b> – приближение числа a</p>
                <p class="lh17"><strong>Абсолютная погрешность приближения</strong>: |a - <b class="approximation_line">a</b>|</p>
                <p>
                    <div class="container_with_fraction">
                        <p class="elem"><strong>Относительная погрешность приближения</strong>:</p>
                        <div class="fraction elem">
                            <p>|a - <b class="approximation_line">a</b>|</p>
                            <hr>
                            <p>|a|</p>
                        </div>
                    </div>
                </p>
                <p>Если заменить положительное число его приближением с точностью до k-й значащей цифры с недостатком, то относительная погрешность этого приближения не превышает 10<sup>-(k-1)</sup></p>
                <p>Если заменить положительное число его приближением с точностью до k-й значащей цифры с округлением, то относительная погрешность этого приближения не превышает 0,5 · 10<sup>-(k-1)</sup></p>
            </div>
            <a name="plenties"></a>
        </section>
        <section class="plenties">
            <div class="theme_box">
                <div class="theme_text">Множества</div>
            </div>
            <div class="left">
                <p><strong class="yellow">Множество</strong> — набор, совокупность каких-либо объектов — элементов этого множества (натуральных, действительных, целых чисел, точек и т.д.)</p>
                <p class="definition">2 ∈ N (два принадлежит множеству натуральных чисел</p>
                <p>Если любой элемент множества A является элементом множества B, то A называют <strong class="yellow">подмножеством</strong> множества B</p>
                <p class="definition">N ⊂ C (Натуральные числа есть подмножество множества целых чисел)</p>
                <p><strong class="yellow">Пустое множество</strong> (Ø) – не содержит ни одного элемента</p>
                <p><strong class="yellow">Объединение множеств</strong> (A ⋃ B) – содержит элементы, принадлежащие либо множеству A, либо множеству B</p>
                <p><strong class="yellow">Пересечение множеств</strong> (A ⋂ B) – содержит элементы, которые принадлежат обоим множествам одновременно</p>
                <p><strong class="yellow">Разность множеств</strong> (A \ B) – содержит элементы, принадлежащие только множеству A</p>
            </div>
        </section>
        <section class="bottom_nav">
            <nav>
                <a href="index.php"><div>На главную</div></a>
                <a href="algebra_main.php"><div>В категорию</div></a>
                <a href="algebra_proportions.php"><div>След. тема</div></a>
            </nav>
        </section>
    </div>
    

</body>
</html>