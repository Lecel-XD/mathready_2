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
     <div class="container">
        <section class="first_cont">
            <div class="theme_box">
                <div class="theme_text">Теория вероятности</div>
            </div>
        </section>
        <section class="prob_part">
            <div class="box">
                <div class="flex_box">
                    <p>Равновероятные события</p>
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
                    <img src="prob-1" alt="">
                </div>
                <div class="flex_box">
                    <p>Сумма несовместных событий</p>
                    <p>P(A) + P(B)</p>
                    <img class='prob-2' src="prob-1.asv" alt="">
                </div>
                <div class="flex_box">
                    <p>Произведение совместных событий</p>
                    <p>P(A) * P(B)</p>
                    <img class='prob-3' src="prob-2.svg" alt="">
                </div>
                <div class="flex_box">
                    <p>Сумма совместных (и независимых) событий</p>
                    <p>P(A) + P(B) - P(A и B) = P(A) + P(B) - P(A) * P(B)</p>
                    <img class='prob-4' src="prob-3.svg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="flex_box">
                    <p>Выбор с возвращением и с учётом порядка (размещение с повторениями)</p>
                    <p>n<sup>k</sup></p>
                </div>
                <div class="flex_box">
                    <p>Выбор с возвращением и без учёта порядка (сочетание с повторением)</p>
                    <div class="container_with_fraction">
                        <p>C<sup>k</sup><sub>n + k - 1</sub> = C<sup>n - 1</sup><sub>n + k - 1</sub> = </p>
                        <div class="elem">
                            <div class="fraction">
                                <p>(n + k - 1) !</p>
                                <hr>
                                <p>(n - 1)! k!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex_box">
                    <p>Выбор без возвращения и с учётом порядка (размещение без повторения)</p>
                    <div class="container_with_fraction">
                        <p>A<sup>k</sup><sub>n</sub> = </p>
                        <div class="elem">
                            <div class="fraction">
                                <p>n!</p>
                                <hr>
                                <p>(n - k)!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex_box">
                    <p>Выбор без возвращения и без учёта порядка (сочетание без повторений)</p>
                    <div class="container_with_fraction">
                        <p>C<sup>k</sup><sub>n</sub> =</p>
                        <div class="elem">
                            <div class="fraction">
                                <p>n!</p>
                                <hr>
                                <p>k! (n - k)!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex_box">
                    <p>Число всех возможных перестановок, которые можно образовать из n элементов</p>
                    <p>P<sub>n</sub> = n!</p>
                </div>
            </div>
        </section>
        <section class="bottom_nav">
            <nav>
                <a href="index.php"><div>На главную</div></a>
                <a href="algebra_main.php"><div>В категорию</div></a>
                <a href="algebra_.php"><div>След. тема</div></a>
            </nav>
        </section>
     </div>
    
</body>
</html>