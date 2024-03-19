<!DOCTYPE html>
<html lang="en">
<head>
    <title>Геометрия 5-11 класс - MathReady</title>
    <?php 
        @include('head.php');
     ?>
</head>
<body>
    <?php 
        @include('nav.php');
     ?>
    <div class="container first_cont">
        <h1>Геометрия</h1>
        <h2>весь школьный курс</h2>
        <div class="theme_box">
            <h3 class="theme_text">Список тем</h3>
        </div>
        <div class="ol_box">
            <ol>
                <li><a href="">Планиметрия</a></li>
                <ol>
                    <li><a href="geometry_lines.php">Прямая, луч, отрезок, угол</a></li>
                    <li><a href="geometry_triangles.php">Треугольник</a></li>
                    <li><a href="geometry_circles.php">Окружность. Касательная, хорда, вписанная и описанная окружность</a></li>
                    <li><a href="geometry_quadrate.php">Четырёхугольник</a></li>
                    <li><a href="geometry_polygon.php">Многоугольник</a></li>
                </ol>
                <li><a href="geometry_stereo_planes.php">Стереометрия</a></li>
                <ol>
                    <li><a href="">Прямые в пространстве</a></li>
                    <li><a href="">Прямая и плоскость в пространстве</a></li>
                    <li><a href="">Плоскости в пространстве</a></li>
                    <li><a href="geometry_inclined.php">Наклонная</a></li>
                    <li><a href="geometry_stereo_corners.php">Двугранный, трёхгранный, многогранный угол</a></li>
                    <li><a href="geometry_polihedron.php">Многогранник</a></li>
                    <li><a href="">Цилиндр, конус, шар, сфера</a></li>
                </ol>
                <li><a href="geometry_vectors.php">Вектор</a></li>
                <li><a href="">Симметрия</a></li>
                <li><a href="geometry_gomothety.php">Гомотетия</a></li>
            </ol>
        </div>
    </div> 
</body>
</html>
