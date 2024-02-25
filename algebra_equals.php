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
<body class="equals">
    <?php 
        @include('nav.php')
     ?>
    <div class="container">
        <a name="first"></a>
        <section class="first_cont">
            <h1>Алгебра</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Уравнения 1-ой степени</div>
            </div>
            
        </section>
        <section class="grade_1">
            <div class="box first_grade">
                <div class="lighter_box">
                    <h4>С 1 неизвестным</h4>
                    <p><strong class="yellow">Общий вид</strong>: kx + b = 0 (k ≠ 0)</p>
                    <p>k – коэффициент при неизвестном</p>
                    <p>b – свободный член</p>
                    <p><strong class="yellow">Корень (решение)</strong> уравнения – число, при подстановке которого в уравнение вместо x получается верное числовое равенство</p>
                    <p><strong class="yellow">Как решить уравнение:</strong>
                        <p>1) Перенести свободный член b в правую часть, изменив при этом знак у числа b на противоположный</p>
                        <p>2) Разделить обе части полученного уравнения на коэффициент k (k ≠ 0) при неизвестном</p>
                    </p>
                    <div class="example"><strong class="yellow">Пример:</strong>
                        <p>3x - 21 = 0</p>
                        <p>3x = 21</p>
                        <p>x = 7</p>
                        <p>Ответ: 7</p>
                    </div>

                </div>
                <div class="lighter_box">
                    <h4>С 2 неизвестными</h4>
                    <p><strong class="yellow">Общий вид</strong>: ax + by + c = 0</p>
                    <p>a – коэффициент при x</p>
                    <p>b – коэффициент при y</p>
                    <p>c – свободный член</p>
                    <p><strong class="yellow">Решение уравнения</strong> – пара чисел (x<sub>0</sub>; y<sub>0</sub>)</p>
                    <p>Чтобы решить уравнение, можно выразить y через x или наоборот</p>
                    <div class="example"><strong class="yellow">Пример:</strong>
                        <p>2x - 5y + 2 = 0</p>
                        <p>2x + 2 = 5y</p>
                        <p>y = 0,5x + 0,4</p>
                        <p>Все решения уравнения: (x; 0,5x + 0,4) </p>
                    </div>
                </div>
            </div>
            <div class="box properties">
                <h4>Свойства уравнений</h4>
                <div class="lighter_box"><p>Если обе части уравнения умножить или разделить на одно и то же отличное от нуля число, то получим уравнение, равносильное исходному</p></div>
                <div class="lighter_box"><p>Если перенести член уравнения с противоположным знаком из одной части уравнения в другую, то получим уравнение, равносильное исходному</p></div>
                <div class="lighter_box"><p>Если в левой или правой части уравнения привести подобные члены, то получим уравнение, равносильное исходному</p></div>
            </div>
            <a name="square"></a>
        </section>
        <section class="square_equal">
            <div class="theme_box">
                <div class="theme_text">Квадратные уравнения</div>
            </div> 
            <div class="box">
                <h4>Неполное квадратное уравнение</h4>
                <div class="flex_box">
                    <div class="lighter_box">
                        <h4>ax<sup>2</sup> + bx = 0</h4>
                        <p>x(ax + b) = 0</p>
                        <p>x<sub>1</sub> = 0</p>
                        <p>ax + b = 0 </p>
                        <p>ax = -b</p>
                        <p>x = -b : a</p>
                    </div>
                    <div class="lighter_box">
                        <h4>ax<sup>2</sup> + c = 0</h4>
                        <p>ax<sup>2</sup> = -c</p>
                        <p>x<sup>2</sup> = -c : a</p>
                        <img src="img/roots.svg" class="roots" alt="">
                    </div>
                    <div class="lighter_box">
                        <h4>ax<sup>2</sup> = 0</h4>
                        <p>x<sup>2</sup> = 0</p>
                        <p>x = 0</p>
                    </div>
                </div>
            </div>
            <div class="box full_square">
                <h4>Полное квадратное уравнение</h4>
                <p>ax<sup>2</sup> + bx + c = 0</p>
                <div class="flex_box">
                    <div class="lighter_box">
                        <p class="yellow">D = b<sup class="yellow">2</sup> - 4ac</p>
                        <img class="discr" src="img/discr.svg" alt="">
                    </div>
                    <div class="lighter_box">
                        <p class="yellow">Если b - чётное:</p>
                        <img src="img/discr_duo.svg" alt="" class="discr_duo">
                    </div>
                    <div class="lighter_box">
                        <p class="yellow">Теорема Виета</p>
                        <p>Для приведенного квадратного уравнения</p>
                        <p>x<sup>2</sup> + bx + c = 0</p>
                        <p>x<sub>1</sub> + x<sub>2</sub> = -b</p>
                        <p>x<sub>1</sub> · x<sub>2</sub> = c</p>
                    </div>
                    <div class="lighter_box">
                        <p class="yellow">Дополнительная теорема Виета</p>
                        <p>ax<sup>2</sup> + bx + c = 0</p>
                        <p>Если a + b + c = 0:</p>
                        <div class="container_with_fraction">
                            <p>x<sub>1</sub> = 1; x<sub>2</sub> = </p>
                            <div class="elem">
                                <div class="fraction">
                                    <p>c</p>
                                    <hr>
                                    <p>a</p>
                                </div>
                            </div>
                        </div>
                        <p>Если a + c = b:</p>
                        <div class="container_with_fraction">
                            <p>x<sub>1</sub> = -1; x<sub>2</sub> = -</p>
                            <div class="elem">
                                <div class="fraction">
                                    <p>c</p>
                                    <hr>
                                    <p>a</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a name="beesquare"></a>
        </section>
        <section class="beesquare_equals">
            <div class="theme_box">
                <div class="theme_text">Биквадратные уравнения</div>
            </div>
            <div class="box">
                <h4>ax<sup>4</sup> + bx<sup>2</sup> + c = 0</h4>
                <p>Для решения нужно ввести замену</p>
                <div class="flex_box">
                    <div class="lighter_box">
                        <p class="yellow example">Пример:</p>
                        <p>x<sup>4</sup> - 3<sup>3</sup> + 2 = 0</p>
                        <p>Пусть x<sup>2</sup> = t, тогда x<sup>4</sup> = t<sup>2</sup></p>
                        <p>t<sup>2</sup> - 3t + 2 = 0</p>
                        <p>D = 9 - 4 · 2 = 1</p>
                        <div class="container_with_fraction">
                            <p>x<sub>1</sub> = </p>
                            <div class="elem">
                                <div class="fraction">
                                    <p>3 - 1</p>
                                    <hr>
                                    <p>2</p>
                                </div>
                            </div>
                            <p> = 1</p>
                        </div>
                        <div class="container_with_fraction">
                            <p>x<sub>2</sub> = </p>
                            <div class="elem">
                                <div class="fraction">
                                    <p>3 + 1</p>
                                    <hr>
                                    <p>2</p>
                                </div>
                            </div>
                            <p> = 2</p>
                        </div>
                    </div>
                    <div class="lighter_box">
                        <p class="yellow example">Вернемся к замене</p>
                        <p class="yellow">x<sup class="yellow">2</sup> = 2</p>
                        <img class="beesquare_root-1" src="img/beesquare_root-1.svg" alt="">
                        <img class="beesquare_root-2" src="img/beesquare_root-2.svg" alt="">
                        <p class="yellow">x<sup class="yellow">2</sup> = 1</p>
                        <p>x<sub>3</sub> = 1</p>
                        <p>x<sub>4</sub> = -1</p>
                    </div>
                </div>
            </div>
            <a name="rational"></a>
        </section>
        <section class="rational_equals">
            <div class="theme_box">
                <div class="theme_text">Рациональные уравнения</div>
            </div>
            <div class="box to">
                <p>Чтобы решить рациональное уравнение, надо перенести все его члены в левую часть, затем, применяя правила сложения и вычитания алгебраических дробей, записать левую часть как алгебраическую дробь и решить полученное уравнение</p>
            </div>
            <div class="box">
                <div class="container_with_fraction">
                    <div class="elem">
                        <div class="fraction">
                            <p>x<sup>2</sup> + 4x - 21</p>
                            <hr>
                            <p>x<sup>2</sup> - 2x - 3</p>
                        </div>
                    </div>
                    <p> = 0</p>
                </div>
                <p>Знаменатель дроби не должен быть равным нулю. Поэтому мы отдельно вычисляем корни числителя и знаменателя. При этом корни знаменателя не будут являться решением уравнения</p>
                <p>x<sup>2</sup> + 4x - 21 = 0</p>
                <p>D = 16 - 4 · (-21) = 16 + 84 = 100</p>
                
                <div class="container_with_fraction">
                    <p>x<sub>1</sub> = </p>
                    <div class="elem">
                        <div class="fraction">
                            <p> -4 - 10</p>
                            <hr>
                            <p>2</p>
                        </div>
                    </div>
                    <p> = -7</p>
                </div>
                <div class="container_with_fraction">
                    <p>x<sub>1</sub> = </p>
                    <div class="elem">
                        <div class="fraction">
                            <p> -4 + 10</p>
                            <hr>
                            <p>2</p>
                        </div>
                    </div>
                    <p> = 3</p>
                </div>
                <p>x<sup>2</sup> - 2x - 3 = 0</p>
                <p>D = 4 - 4 · (-3) = 4 + 12 = 16</p>
                <div class="container_with_fraction">
                    <p>x<sub>3</sub> = </p>
                    <div class="elem">
                        <div class="fraction">
                            <p> 2 + 4</p>
                            <hr>
                            <p>2</p>
                        </div>
                    </div>
                    <p> = 3</p>
                </div>
                <div class="container_with_fraction">
                    <p>x<sub>4</sub> = </p>
                    <div class="elem">
                        <div class="fraction">
                            <p> 2 - 4</p>
                            <hr>
                            <p>2</p>
                        </div>
                    </div>
                    <p> = -1</p>
                </div>
                <p>Число 3 является и корнем числителя, и корнем знаменателя. Значит при подстановке его в уравнение, знаменатель дроби станет равным нулю. А на нуль делить нельзя. Следовательно число 3 не будет решением уравнения</p>
                <p>Ответ: -7</p>
            </div>
            <a name="irrational"></a>
        </section>
        <section class="irrational">
            <div class="theme_box">
                <div class="theme_text">Иррациональные уравнения</div>
            </div>
            <div class="term"><strong>Иррациональное уравнение</strong> – уравнение, в котором хотя бы один член содержит неизвестное под знаком корня</div>
            <div class="box">
                <h4>Как решить рациональное уравнение</h4>
                <p>Можно возвести левую и правую части уравнения во вторую степень. При этом нужно учитывать, что выражение под знаком корня больше или равно нулю</p>
                <img class="irrational_equal" src="img/irrational_equal.svg" alt="">
            </div>
        <a name="systems"></a>
        </section>
        <section class="systems_first_grade">
            <div class="theme_box">
                <div class="theme_text">Системы уравнений</div>
            </div>
            <div class="box systems">
                <h4>Способы решения:</h4>
                <div class="flex_box">
                    <div class="lighter_box">
                        <h5>Способ подстановки</h5>
                        <p>1) Одно из неизвестных выразить (например, x) через другое неизвестное из любого уравнения системы</p>
                        <p>2) Полученное выражение подставить вместо этого неизвестного (x) в другое уравнение системы</p>
                        <p>3) Решить полученное уравнение с одним неизвестным y</p>
                        <p>4) Подставить найденное значение y в формулу для x, найти x</p>
                        <img class="sys-1" src="img/algebra_system-1.svg" alt="">
                    </div>
                    <div class="lighter_box">
                        <h5>Способ уравнивания коэффициентов</h5>
                        <p>1) Умножением на числа, отличные от нуля, уравнять коэффициенты при любом из неизвестных, в обоих уравнениях</p>
                        <p>2) Вычесть одно уравнение из другого</p>
                        <p>3) Решить полученное уравнение с одним неизвестным</p>
                        <p>4) Подставить найденное значение в любое уравнение системы и найти второе неизвестное</p>
                        <img class="sys-2" src="img/algebra_system-2.svg" alt="">
                    </div>
                    <div class="lighter_box">
                        <h5>Метод Гаусса</h5>
                        <p>Систему сначала приводят к "треугольному" виду. Домножая, вычитая и складывая системы друг из друга, мы избавляемся от неизвестных в каждом последующем уравнении</p>
                        <p>Далее с помощью способа подстановки находим все неизвестные</p>
                        <img class="sys-3" src="img/algebra_system-3.svg" alt="">
                    </div>
                    <div class="lighter_box">
                        <h5>Способ сложения</h5>
                        <p>Складывая уравнения системы друг с другом, мы получаем равносильные уравнения</p>
                        <img class="sys-4" src="img/system-1.svg" alt="">
                    </div>
                    <div class="lighter_box">
                        <h5>Способ введения новых неизвестных</h5>
                        <p>Заменяем некоторое выражение на новое неизвестное</p>
                        <img class="sys-5" src="img/algebra_system-5.svg" alt="">
                    </div>
                    <div class="lighter_box">
                        <h5>Графический способ</h5>
                        <p>Выразим y через x в каждом уравнении</p>
                        <p>Найдем точки, через которые проходят графики, построим их</p>
                        <p>Найдём точки пересечения графиков. Они и будут являться решениями системы уравнений</p>
                        <img src="img/algebra_sys-6-1.svg" alt="" class="sys-6-1">
                        <img class="sys-6" src="img/algebra_sys-6.svg" alt="">
                        <p>Ответ: (-1; -1)</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bottom_nav">
            <nav>
                <a href="index.php"><div>На главную</div></a>
                <a href="algebra_main.php"><div>В категорию</div></a>
                <a href="algebra_inequalities.php"><div>След. тема</div></a>
            </nav>
        </section>
    </div>
</body>
</html>