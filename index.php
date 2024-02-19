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
                <a href="five_main.php" class="category_link">5 класс</a>
                <a href="six_main.php" class="category_link">6 класс</a>
                <a href="seven_main.php" class="category_link">7 класс</a>
                <a href="eight_main.php" class="category_link">8 класс</a>
                <a href="nine_main.php" class="category_link">9 класс</a>
                <a href="ten-eleven_main.php" class="category_link">10-11 класс</a>
            </div>
            <h2 class="category_header">категории</h2>
            <h3 class="category_exams">огэ, егэ</h3>
            <div class="wrapper">
                <a href="" class="category_link">огэ</a>
                <a href="" class="category_link">егэ</a>
            </div>
        </div>
    </section>
    <footer>
        <img src="icons/temporary/logo.png" alt="">
    </footer>
</body>
</html>
