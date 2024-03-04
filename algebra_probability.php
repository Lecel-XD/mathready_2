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
<body class="prob">
    <?php 
        @include('nav.php')
     ?>  
     <div class="container">
        <section class="first_cont">
            <div class="theme_box">
                <div class="theme_text">Теория вероятности</div>
            </div>
        </section>
        <section class="prob_part">
            <div class="box">
                <div class="flex_box">
                    <div>
                        <h4 class='yellow'>Равновероятные события</h4>
                        <div class="container_with_fraction">
                            <p>P = </p>
                            <div class="elem">
                                <div class="fraction">
                                    <p>m</p>
                                    <hr>
                                    <p>n</p>
                                </div>
                            </div>
                        </div>
                        <p>m – подходящие события</p>
                        <p>n – все события</p>
                    </div>
                    <img src="img/theory-4.svg" class='prob' alt="">
                </div>
                <div class="flex_box">
                    <div>
                        <h4 class='yellow'>Сумма несовместных событий</h4>
                        <p>P(A) + P(B)</p>
                        <p>A или B</p>
                    </div>
                    <img class='prob' src="img/theory-3.svg" alt="">
                </div>
                <div class="flex_box">
                    <div>
                        <h4 class='yellow'>Произведение совместных событий</h4>
                        <p>P(A) · P(B)</p>
                        <p>A и B</p>
                    </div>
                    <img class='prob' src="img/theory-1.svg" alt="">
                </div>
                <div class="flex_box">
                    <div>
                        <h4 class='yellow'>Сумма совместных (и независимых) событий</h4>
                        <p>P(A) + P(B) - P(A и B) = P(A) + P(B) - P(A) · P(B)</p>
                        <p>A или B</p>
                    </div>
                    <img class='prob' src="img/theory-2.svg" alt="">
                </div>
            </div>
            <div class="box second">
                <div class="flex_box">
                    <div>
                        <h4 class="yellow">Выбор с возвращением и с учётом порядка</h4>
                        <p>(размещение с повторениями)</p>
                    </div>
                    <p>n<sup>k</sup></p>
                </div>
                <div class="flex_box">
                    <div>
                        <h4 class="yellow">Выбор с возвращением и без учёта порядка</h4>
                        <p>(сочетание с повторением)</p>
                    </div>
                    <img src="img/prob-2.svg" alt="" class="prob-2">
                </div>
                <div class="flex_box">
                    <div>
                        <h4 class="yellow">Выбор без возвращения и с учётом порядка</h4>
                        <p>(размещение без повторения)</p>
                    </div>
                    <img src="img/prob-1.svg" alt="" class="prob-2">
                </div>
                <div class="flex_box">
                    <div>
                        <h4 class="yellow">Выбор без возвращения и без учёта порядка</h4>
                        <p>(сочетание без повторений)</p>
                    </div>
                    <img src="img/prob-4.svg" alt="" class="prob-2">
                </div>
                <div class="flex_box">
                    <h4 class="yellow">Число всех возможных перестановок, которые можно образовать из n элементов</h4>
                    <p>P<sub>n</sub> = n!</p>
                </div>
            </div>
        </section>
        <section class="bottom_nav">
            <nav>
                <a href="index.php"><div>На главную</div></a>
                <a href="algebra_main.php"><div>В категорию</div></a>
                <a href="algebra_derivative.php"><div>След. тема</div></a>
            </nav>
        </section>
     </div>
    
</body>
</html>