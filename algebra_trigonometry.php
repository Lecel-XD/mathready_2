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
        </section>
        <section class="tri-formules">
            <div class="theme_box">
                <div class="theme_text">Тригонометрические формулы</div>
            </div>
            <div class="box first">
                <p>sin(-α) = -sinα</p>
                <p>cos(-α) = cosα</p>
                <p>tg(-α) = -tgα</p>
                <p>ctg(-α) = -ctgα</p>
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
        </section>
        <section class="tri-tablet">
            <div class="theme_box">
                <div class="theme_text">Значения sin, cos, tg, ctg для углов</div>
            </div>
            <img class="tri-table" src="img/tri-table.svg" alt="">
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
        </section>
        <section class="tri_equals">
            <div class="theme_box">
                <div class="theme_text">Тригонометрические уравнения</div>
            </div>
            <div class="box">
                <div class="lighter_box">
                    <h4>sinα</h4>
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
                        <h4></h4>
                        <img src="" alt=""><img src="" alt=""></flex_box>
                    <flex_box>
                        <h4></h4>
                        <img src="" alt=""><img src="" alt=""></flex_box>
                    <flex_box>
                        <h4></h4>
                        <img src="" alt=""><img src="" alt=""></flex_box>
                </div>
                <div class="lighter_box">
                    <flex_box>
                        <h4></h4>
                        <img src="" alt=""><img src="" alt=""></flex_box>
                    <flex_box>
                        <h4></h4>
                        <img src="" alt=""><img src="" alt=""></flex_box>
                    <flex_box>
                        <h4></h4>
                        <img src="" alt=""><img src="" alt=""></flex_box>
                </div>
                <div class="lighter_box">
                    <flex_box>
                        <h4></h4>
                        <img src="" alt=""><img src="" alt=""></flex_box>
                    <flex_box>
                        <h4></h4>
                        <img src="" alt=""><img src="" alt=""></flex_box>
                    <flex_box>
                        <h4></h4>
                        <img src="" alt=""><img src="" alt=""></flex_box>
                </div>
            </div>
        </section>
        <section>
            <div class="theme_box">
                <div class="theme_text">Тригонометрические неравенства</div>
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