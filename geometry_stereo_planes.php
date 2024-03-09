<!DOCTYPE html>
<html lang="en">
<head>
    <title>MATHREADY</title>
    <?php 
        @include('head.php');
     ?>
</head>
<body class="stereo_planes">
    <?php 
        @include('nav.php')
     ?> 
     <div class="container">
        <a name='first'></a>
        <section class="first_cont">
            <h1>Геометрия</h1>
            <h2>весь школьный курс</h2>
            <div class="theme_box">
                <div class="theme_text">Стереометрия. Аксиомы</div>
            </div>
            <p class="left"><strong class="yellow">Стереометрия</strong> – раздел геометрии, в котором изучаются свойства фигур в пространстве</p>
            <p class="left">Основные фигуры стереометрии – точки, прямые и плоскости</p>
        </section>
        <section class="stereo-about">
            <div class="theme_box">
                <div class="theme_text">Плоскость</div>
            </div>
            <h5 class="axiom_header ">Аксиомы</h5>
            <div class="flex_cont">
                <div class="flex_item">
                    <div class="axiom">Через любые три точки, не лежащие на одной прямой, проходит плоскость, и притом только одна</div>
                    <img src="img/axiom-1.svg" alt="" class="stereo">
                </div>
                <div class="flex_item">
                    <div class="axiom">Если две точки прямой лежат в плоскости, то все точки прямой лежат в этой плоскости</div>
                    <img src="img/axiom-2.svg" alt="" class="stereo">
                </div>
                <div class="flex_item">
                    <div class="axiom">Если две плоскости имеют общую точку, то они имеют общую прямую, на которой лежат все общие точки этих плоскостей</div>
                    <img src="img/axiom-3.svg" alt="" class="stereo">
                </div>
            </div>
            <h5 class="axiom_header ">Теоремы</h5>
            <div class="flex_cont">
                <div class="flex_item">
                    <div class="theorem">Через прямую и не лежащую на ней точку проходит плоскость, и притом только одна</div>
                    <img src="img/theorem-1.svg" alt="" class="stereo">
                </div>
                <div class="flex_item">
                    <div class="theorem">Через две пересекающиеся прямые проходит плоскость, и притом только одна</div>
                    <img src="img/theorem-2.svg" alt="" class="stereo">
                </div>
            </div>
        </section>
        <section class="line_plane">
            <div class="theme_box">
                <div class="theme_text">Прямая и плоскость</div>
            </div>
            <p class="left">Две прямые в пространстве называются <strong class="yellow">параллельными</strong>, если они лежат в одной плоскости и не пересекаются</p>
        </section>
     </div>
</body>
</html>