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
<body class="trigo">
    <?php 
        @include('nav.php')
     ?>
     <div class="container">
        <a name="first"></a>
        <section class="first_cont">
            <h1>Алгебра</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Тригонометрия в прямоугольном треугольнике</div>
            </div>
        </section>
        <section class="trig_in_triangle">
            <div class="box">
                <img class="trig-1" src="img/trig-corners.svg" alt="">
                <div>
                    <p><strong class="yellow">Синус острого угла</strong> – отношение противолежащего катета к гипотенузе</p>
                    <p><strong class="yellow">Косинус острого угла</strong> – отношение прилежащего катета к гипотенузе</p>
                    <p><strong class="yellow">Тангенс острого угла</strong> – отношение противолежащего катета к прилежащему</p>
                    <p><strong class="yellow">Котангенс острого угла</strong> – отношение прилежащего катета к противолежащему</p>
                </div>
            </div>
            <a name="arbitrary"></a>
        </section>
        <section class="trig_arbitrary_angle">
            <div class="theme_box">
                <div class="theme_text">Тригонометрия для произвольного угла</div>
            </div>
            <div class="box">
                <div class="first">
                    <img src="img/tri-4.svg" alt="" class="trig-2">
                    <img src="img/trig-cos-sin.svg" alt="" class="trig-3">
                </div>
                <div class="second">
                    <p><strong class="yellow">Единичная окружность</strong> – окружность с центром в начале координат и радиусом 1</p>
                    <p>Отсчитываем углы от положительного направления оси x против часовой стрелки</p>
                </div>
            </div>
            <div class="box second">
                <img src="img/tri-5.svg" alt="" class="trig-4">
                <img src="img/tri-1.svg" alt="" class="trig-4">
                <img src="img/tri-3.svg" alt="" class="trig-4">
                <img src="img/tri-2.svg" alt="" class="trig-4">
            </div>
            <a name="formules"></a>
        </section>
        <section class="tri-formules">
            <div class="theme_box">
                <div class="theme_text">Тригонометрические формулы</div>
            </div>
            <div class="box first">
                <p>sin(-α) = -sin α</p>
                <p>cos(-α) = cos α</p>
                <p>tg(-α) = -tg α</p>
                <p>ctg(-α) = -ctg α</p>
                <p>arcsin(-α) = -arcsin α</p>
                <p>arccos(-α) = π - arccos α</p>
                <p>arctg(-α) = -arctg α</p>
                <p>arcctg(-α) = π - arcctg α</p>
            </div>
            <div class="box third">
                <div class="container_with_fraction third_elem">
                    <p class="elem">arcsin a = α, если sin α = a и </p>
                    <p>-</p>
                    <div class="fraction elem">
                        <p>π</p>
                        <hr>
                        <p>2</p>
                    </div>
                    <p> ≤ α ≤ </p>
                    <div class="fraction elem">
                        <p>π</p>
                        <hr>
                        <p>2</p>
                    </div>
                </div>
                <p class="third_elem">arccos a = α, если cos α = a и 0 ≤ α ≤ π</p>
                <div class="container_with_fraction third_elem">
                    <p class="elem">arctg a = α, если tg α = a и </p>
                    <p>-</p>
                    <div class="fraction elem">
                        <p>π</p>
                        <hr>
                        <p>2</p>
                    </div>
                    <p> < α < </p>
                    <div class="fraction elem">
                        <p>π</p>
                        <hr>
                        <p>2</p>
                    </div>
                </div>
                <p class="third_elem">arcctg a = α, если ctg α = a и 0 < α < π</p>
            </div>
            <div class="box second">
                <div class="lighter_box">
                    <h4>Основные тригонометрические формулы</h4>
                    <p>sin<sup>2</sup>α + cos<sup>2</sup>α = 1</p>
                    <p>sin<sup>2</sup>α = 1 - cos<sup>2</sup>α</p>
                    <p>cos<sup>2</sup>α = 1 - sin<sup>2</sup>α</p>
                    <p>tgα ctgα = 1</p>
                    <div class="container_with_fraction">
                        <p class="elem">tgα = </p>
                        <div class="fraction elem">
                            <p>1</p>
                            <hr>
                            <p>ctgα</p>
                        </div>
                    </div>
                    <div class="container_with_fraction">
                        <p class="elem">ctgα = </p>
                        <div class="fraction elem">
                            <p>1</p>
                            <hr>
                            <p>tgα</p>
                        </div>
                    </div>
                    <div class="container_with_fraction">
                        <p class="elem">tgα = </p>
                        <div class="fraction elem">
                            <p>sinα</p>
                            <hr>
                            <p>cosα</p>
                        </div>
                    </div>
                    <div class="container_with_fraction">
                        <p class="elem">ctgα = </p>
                        <div class="fraction elem">
                            <p>cosα</p>
                            <hr>
                            <p>sinα</p>
                        </div>
                    </div>
                    <div class="container_with_fraction">
                        <p>1 + ctg<sup>2</sup>α = </p>
                        <div class="fraction elem">
                            <p>1</p>
                            <hr>
                            <p>sin<sup>2</sup>α</p>
                        </div>
                    </div>
                    <div class="container_with_fraction">
                        <p>1 + tg<sup>2</sup>α = </p>
                        <div class="fraction elem">
                            <p>1</p>
                            <hr>
                            <p>cos<sup>2</sup>α</p>
                        </div>
                    </div>
                    
                </div>
                <div class="lighter_box">
                    <h4>Формулы сложения</h4>
                    <p>cos(α + β) = cosα cosβ - sinα sinβ</p>
                    <p>cos(α - β) = cosα cosβ + sinα sinβ</p>
                    <p>sin(α + β) = sinα cosβ + cosα sinβ</p>
                    <p>sin(α - β) = sinα cosβ - cosα sinβ</p>
                    <div class="container_with_fraction">
                        <p class="elem">tg(α + β) = </p>
                        <div class="fraction elem">
                            <p>tgα + tgβ</p>
                            <hr>
                            <p>1 - tgα tgβ</p>
                        </div>
                    </div>
                    <div class="container_with_fraction">
                        <p class="elem">tg(α - β) = </p>
                        <div class="fraction elem">
                            <p>tgα - tgβ</p>
                            <hr>
                            <p>1 + tgα tgβ</p>
                        </div>
                    </div>
                    <div class="container_with_fraction">
                        <p class="elem">ctg(α + β) = </p>
                        <div class="fraction elem">
                            <p>ctgα ctgβ - 1</p>
                            <hr>
                            <p>ctgα + ctgβ</p>
                        </div>
                    </div>
                    <div class="container_with_fraction">
                        <p class="elem">ctg(α - β) = </p>
                        <div class="fraction elem">
                            <p>ctgα ctgβ + 1</p>
                            <hr>
                            <p>ctgβ - ctgα</p>
                        </div>
                    </div>
                </div>
                <div class="lighter_box">
                    <h4>Двойные и тройные углы</h4>
                    <p>sin2α = 2sinα cosα</p>
                    <p>cos2α = cos<sup>2</sup>α - sin<sup>2</sup>α</p>
                    <p>cos2α = 2cos<sup>2</sup>α - 1</p>
                    <p>cos2α = 1 - 2sin<sup>2</sup>α</p>
                    <div class="container_with_fraction">
                        <p class="elem">tg2α = </p>
                        <div class="fraction elem">
                            <p>2tgα</p>
                            <hr>
                            <p>1 - tg<sup>2</sup>α</p>
                        </div>
                    </div>
                    <p>2cosα cosβ = cos(α + β) + cos(α - β)</p>
                    <p>2sinα sinβ = cos(α - β) - cos(α + β)</p>
                    <p>2sinα cosβ = sin(α + β) + sin(α - β)</p>
                    <p>sin3α = 3sinα - 4sin<sup>3</sup>α</p>
                    <p>cos3α = 4cos<sup>3</sup>α - 3cosα</p>
                </div>
                <div class="lighter_box">
                    <h4>Другие формулы</h4>
                    <div class="container_with_fraction">
                        <p class="elem">sin<sup>2</sup>α = </p>
                        <div class="fraction elem">
                            <p>1 - cos2α</p>
                            <hr>
                            <p>2</p>
                        </div>
                    </div>
                    <div class="container_with_fraction">
                        <p class="elem">cos<sup>2</sup>α = </p>
                        <div class="fraction elem">
                            <p>1 + cos2α</p>
                            <hr>
                            <p>2</p>
                        </div>
                    </div>
                    <div class="container_with_fraction">
                        <p class="elem">sinα + sinβ = 2sin</p>
                        <div class="fraction elem">
                            <p>α + β</p>
                            <hr>
                            <p>2</p>
                        </div>
                        <p>cos</p>
                        <div class="fraction elem">
                            <p>α - β</p>
                            <hr>
                            <p>2</p>
                        </div>
                    </div>
                    <div class="container_with_fraction">
                        <p class="elem">sinα - sinβ = 2sin</p>
                        <div class="fraction elem">
                            <p>α - β</p>
                            <hr>
                            <p>2</p>
                        </div>
                        <p>cos</p>
                        <div class="fraction elem">
                            <p>α + β</p>
                            <hr>
                            <p>2</p>
                        </div>
                    </div>
                    <div class="container_with_fraction">
                        <p class="elem">cosα + cosβ = 2cos</p>
                        <div class="fraction elem">
                            <p>α + β</p>
                            <hr>
                            <p>2</p>
                        </div>
                        <p>cos</p>
                        <div class="fraction elem">
                            <p>α - β</p>
                            <hr>
                            <p>2</p>
                        </div>
                    </div>
                    <div class="container_with_fraction">
                        <p class="elem">cosα - cosβ = -2sin</p>
                        <div class="fraction elem">
                            <p>α - β</p>
                            <hr>
                            <p>2</p>
                        </div>
                        <p>sin</p>
                        <div class="fraction elem">
                            <p>α + β</p>
                            <hr>
                            <p>2</p>
                        </div>
                    </div>
                </div>
            </div>
            <a name="sin"></a>
        </section>
        <section class="tri-tablet">
            <div class="theme_box">
                <div class="theme_text">Значения sin, cos, tg, ctg для углов</div>
            </div>
            <img class="tri-table" src="img/tri-table.svg" alt="">
            <a name="priv"></a>
        </section>
        <section class="priv_formules">
            <div class="theme_box">
                <div class="theme_text">Формулы приведения</div>
            </div>
            <div class="box priv">
                <div class="lighter_box">
                    <img class="priv-1" src="img/priv-1.svg" alt="">
                    <p>Если к аргументу прибавляется(вычитается) нечетное число, умноженное на π , то функция НЕ меняется на кофункцию  </p>
                </div>
                <div class="lighter_box">
                    <p>Определяем знак первоначальной функции. Такого же знака и будет получившееся выражение</p>
                </div>
                <img src="img/priv-2.svg" alt="" class="priv-2">
            </div>
            <a name="func"></a>
        </section>
        <section class="tri-funcs">
            <div class="theme_box">
                <div class="theme_text">Тригонометрические функции</div>
            </div>
            <div class="box">
                <h4>Тригонометрические функции</h4>
                <div class="flex_box">
                    <img src="img/tri-func-2.svg" alt="" class="tri-func">
                    <img src="img/tri-func-1.svg" alt="" class="tri-func">
                    <img src="img/tri-func-4.svg" alt="" class="tri-func">
                    <img src="img/tri-func-3.svg" alt="" class="tri-func">
                </div>
            </div>
            <div class="box">
                <h4>Обратные тригонометрические функции</h4>
                <div class="flex_box second">
                    <img src="img/arc-f-4.svg" alt="" class="arc-f">
                    <img src="img/arc-f-3.svg" alt="" class="arc-f">
                    <img src="img/arc-f-2.svg" alt="" class="arc-f">
                    <img src="img/arc-f-1.svg" alt="" class="arc-f">
                </div>
            </div>
            <a name="equals"></a>
        </section>
        <section class="tri_equals">
            <div class="theme_box">
                <div class="theme_text">Простейшие тригонометрические уравнения</div>
            </div>
            <div class="box">
                <div class="lighter_box">
                    <h4>sinα</h4>
                    <h5>Нет корней, если |α| > 1</h5>
                    <div class="flexes">
                        <hr>
                        <div class='flex_box'>
                            <h5>Частный случай</h5>
                            <div>
                                <img class="sin-1" src="img/sin-1.svg" alt="">
                                <img class="sin-1" src="img/sin-2.svg" alt="">
                                <img class="sin-1" src="img/sin-3.svg" alt="">
                            </div>
                        </div>
                        <hr>
                        <div class='flex_box'>
                            <h5>Общий случай</h5>
                            <div>
                                <img class="sin-1" src="img/sin-4.svg" alt="">
                                <img class="sin-1" src="img/sin-5.svg" alt="">
                            </div>
                        </div>
                        <hr>
                        <div class='flex_box'>
                            <h5>Общий случай. Нетабличное значение</h5>
                            <div>
                                <img class="sin-1" src="img/sin-6.svg" alt="">
                                <img class="sin-1" src="img/sin-7.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lighter_box">
                    <flex_box>
                        <h4>cosα</h4>
                        <h5>Не имеет корней, если |α| > 1</h5>
                        <div class="flexes">
                            <hr>
                            <div class='flex_box'>
                                <h5>Частный случай</h5>
                                <div>
                                    <img class="sin-1" src="img/cos-1.svg" alt="">
                                    <img class="sin-1" src="img/cos-2.svg" alt="">
                                    <img class="sin-1" src="img/cos-3.svg" alt="">
                                </div>
                            </div>
                            <hr>
                            <div class='flex_box'>
                                <h5>Общий случай</h5>
                                <div>
                                    <img class="sin-1" src="img/cos-4.svg" alt="">
                                    <img class="sin-1" src="img/cos-5.svg" alt="">
                                </div>
                            </div>
                            <hr>
                            <div class='flex_box'>
                                <h5>Общий случай. Нетабличное значение</h5>
                                <div>
                                    <img class="sin-1" src="img/cos-6.svg" alt="">
                                    <img class="sin-1" src="img/cos-7.svg" alt="">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="lighter_box">
                    <flex_box>
                        <h4>tgα</h4>
                        <div class="flexes">
                            <hr>
                            <div class='flex_box'>
                                <h5>Общий случай</h5>
                                <div>
                                    <img class="sin-1" src="img/tg-1.svg" alt="">
                                    <img class="sin-1" src="img/tg-2.svg" alt="">
                                    <img class="sin-1" src="img/tg-3.svg" alt="">
                                </div>
                            </div>
                            <hr>
                            <div class='flex_box'>
                                <h5>Общий случай. Нетабличное значение</h5>
                                <img class="tg-1" src="img/tg-4.svg" alt="">
                            </div>
                        </div>
                </div>
                <div class="lighter_box">
                    <flex_box>
                        <h4>ctgα</h4>
                        <div class="flexes">
                            <hr>
                            <div class='flex_box'>
                                <h5>Общий случай</h5>
                                <div>
                                    <img class="sin-1" src="img/ctg-1.svg" alt="">
                                    <img class="sin-1" src="img/ctg-2.svg" alt="">
                                    <img class="sin-1" src="img/ctg-3.svg" alt="">
                                </div>
                            </div>
                            <hr>
                            <div class='flex_box'>
                                <h5>Общий случай. Нетабличное значение</h5>
                                <img class="tg-1" src="img/ctg-4.svg" alt="">
                            </div>
                        </div>
                </div>
            </div>
            <div class="box tri-methods">
                <h4>Методы решения тригонометрических уравнений / неравенств</h4>
                <ul>
                    <li>Сведение к квадратному уравнению</li>
                    <li>Преобразование при помощи формул</li>
                    <li>Деление уравнения на некоторое выражение</li>
                    <li>Разложение левой части на множители</li>
                    <li>Введение вспомогательного угла</li>
                </ul>
            </div>
        </section>
        <section class="bottom_nav">
            <nav>
                <a href="index.php"><div>На главную</div></a>
                <a href="algebra_main.php"><div>В категорию</div></a>
                <a href="algebra_log.php"><div>След. тема</div></a>
            </nav>
        </section>
     </div>
</body>
</html>