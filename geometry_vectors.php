<!DOCTYPE html>
<html lang="en">
<head>
    <title>MATHREADY</title>
    <?php 
        @include('head.php');
     ?>
</head>
<body class='vectors'>
    <?php 
        @include('nav.php')
     ?> 
    <div class="container">
        <a name='first'></a>
        <section class="first_cont">
            <h1>Геометрия</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Векторы</div>
            </div>
        </section>
        <section class="vectors_planimetry">
            <div class="left">
                <p><strong class="yellow">Векторные величины</strong> – физические величины, имеющие не только абсолютное значение, но и направление</p>
                <p><strong class="yellow">Вектор</strong> – это направленный отрезок</p>
                <p><strong class="yellow">Длина вектора</strong> – длина этого отрезка</p>
                <p><strong class="yellow">Равные векторы</strong> – векторы, имеющие одинаковые длины и одинаковое направление</p>
                <p><strong class="yellow">Единичный вектор</strong> – вектор с длиной 1</p>
                <p><strong class="yellow">Нулевой вектор</strong> – вектор с длиной, равной нулю. Его начало совпадает с концом</p>
                <p>Векторы <strong class="yellow">перпендикулярны</strong>, если их скалярное произведение равно нулю</p>
                <p><strong class="yellow">Коллинеарные векторы </strong>– векторы, лежащие на одной прямой или на параллельных прямых</p>
                <p><strong class="yellow">Скалярное произведение векторов</strong> – произведение длин векторов на косинус угла между ними</p>
                <div><strong class="yellow">Разность векторов</strong> <img src="img/v-a.svg" alt="" class="vec"> и <img src="img/v-b.svg" alt="" class="vec"> – это сумма вектора <img src="img/v-a.svg" alt="" class="vec"> и вектора <img src="img/v-b.svg" alt="" class="vec"></div>
            </div>
            <div class="box">
                <div class="wrapper">
                    <h4>Координаты вектора</h4>
                    <div class="flex_box">
                        <img class="cord_vect" src="img/vector-1.svg" alt="">
                    </div>
                </div>
                <div class="wrapper">
                    <h4>Длина вектора</h4>
                    <div class="flex_box">
                        <img class="cord_vect" src="img/vector-2.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="flex_box">
                    <h4>Умножение вектора на число</h4>
                    <p>При умножениее вектора <img src="img/v-a.svg" alt="" class="vec"> на число k получается вектор, длина которого в k раз отличается от длины <img src="img/v-a.svg" alt="" class="vec"></p>
                    <p>Он сонаправлен с вектором, если k > 0, и направлен противоположно, если k < 0</p>
                </div>
                <img class="vec-3" src="img/vector-3.svg" alt="">
            </div>
            <div class="box">
                <div class="flex_box">
                    <h4>Скалярное произведение векторов</h4>
                    <p><strong class="yellow">Скалярное произведение векторов</strong> – произведение длин векторов на косинус угла между ними</p>
                    
                </div>
                <img class="vec-4" src="img/vector-4.svg" alt="">
                <div class="scal"><img src="img/v-a.svg" alt="" class="vec"> · <img src="img/v-b.svg" alt="" class="vec"> = |<img src="img/v-a.svg" alt="" class="vec">| · |<img src="img/v-b.svg" alt="" class="vec">| · cos α</div>
            </div>
        </section>
        <section class="summ_vectors">
            <div class="theme_box">
                <div class="theme_text">Сложение и вычитание векторов</div>
            </div>
            <div class="box">
                <h4>Сложение векторов</h4>
                <div class="lighter_box">
                    <div class="flex_box">
                        <h5>Правило параллелограмма</h5>
                        <div class="summ-text">Чтобы сложить векторы <img src="img/v-a.svg" alt="" class="vec"> и <img src="img/v-b.svg" alt="" class="vec">, помещаем начала обоих в одну точку. Достраиваем до параллелограмма и из той же точки проводим диагональ параллелограмма. Это и будет сумма векторов <img src="img/v-a.svg" alt="" class="vec"> и <img src="img/v-b.svg" alt="" class="vec"></div>
                        <img class="vec-5" src="img/vector-5.svg" alt="">
                    </div>
                    <div class="flex_box">
                        <h5>Правило треугольника</h5>
                        <div class="summ-text">Возьмём векторы <img src="img/v-a.svg" alt="" class="vec"> и <img src="img/v-b.svg" alt="" class="vec">. К концу первого вектора пристроим начало второго. Соединим начало первого и конец второго. Это и есть сумма вектором <img src="img/v-a.svg" alt="" class="vec"> и <img src="img/v-b.svg" alt="" class="vec"></div>
                        <img class="vec-5" src="img/vector-6.svg" alt="">
                    </div>
                </div>
                <div class="light_box">
                    <img src="img/vector-7.svg" alt="" class="vec-7">
                </div>
            </div>
        </section>
        <section class="bottom_nav">
            <nav>
                <a href="index.php"><div>На главную</div></a>
                <a href="geometry_main.php"><div>В категорию</div></a>
                <a href="algebra_units.php"><div>След. тема</div></a>
            </nav>
        </section>
    </div>
</body>
</html>