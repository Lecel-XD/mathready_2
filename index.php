<!DOCTYPE html>
<html lang="en">
<head>
    <title>MATHREADY</title>
    <?php 
        @include('head.php');
     ?>
</head>
<body>
    <?php 
        @include('nav.php');
     ?>

    <section class="about">
        <div class="container">
            <div class="about_info">
                <img class="about_info_img" src="icons/temporary/logo.png" alt="MATHREADY">
                <p class="about_info_text"><strong>MATHREADY</strong> – сайт, где вы сможете найти всю нужную информацию по математике. Формулы, теоремы, определения – всё, что нужно. Без лишней воды. Все темы 5-11 класса.</p>
            </div>
            <div class="about_search">
                <div class="search_img"></div>
                <input class="search_input" type="text">
            </div>
        </div>
    </section>


    <section class="category">
        <div class="divider"></div>
        <div class="container">
            <h2 class="category_header">категории</h2>
            <h3 class="category_subheader">классы</h3>
            <div class="wrapper">
                <a href="five_main.php" class="category_link five"></a>
                <a href="six_main.php" class="category_link six"></a>
                <a href="seven_main.php" class="category_link seven"></a>
                <a href="eight_main.php" class="category_link eight"></a>
                <a href="nine_main.php" class="category_link nine"></a>
                <a href="ten-eleven_main.php" class="category_link ten_eleven"></a>
            </div>
            <h2 class="category_header">категории</h2>
            <h3 class="category_exams">огэ, егэ</h3>
            <div class="wrapper">
                <a href="oge_main.php" class="category_link oge"></a>
                <a href="ege_main.php" class="category_link ege"></a>
            </div>
        </div>
    </section>
    <footer>
        <img src="icons/temporary/logo.png" alt="">
    </footer>
</body>
</html>
