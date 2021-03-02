<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
<?php include('../source/blocks/page-header.php') ?>
<main class="page-main">
    <div class="page-main__container container">
        <section class="page-main__section slider-news">
            <a href="#" class="slider-news__slide">
                <div class="slider-news__image-wrapper">
                    <div class="slider-news__image" style="background-image:url(../images/covid.png)"></div>
                    <div class="slider-news__description">Проектная деятельность в условиях распространения вируса COVID-19</div>
                </div>
            </a>
            <a href="#" class="slider-news__slide">
                <div class="slider-news__image-wrapper">
                    <div class="slider-news__image" style="background-image:url(../images/covid.png)"></div>
                    <div class="slider-news__description">Проектная деятельность в условиях распространения вируса COVID-20</div>
                </div>
            </a>
            <a href="#" class="slider-news__slide">
                <div class="slider-news__image-wrapper">
                    <div class="slider-news__image" style="background-image:url(../images/covid.png)"></div>
                    <div class="slider-news__description">Проектная деятельность в условиях распространения вируса COVID-21</div>
                </div>
            </a>
        </section>
        <section class="page-main__section">
            <h2 class="section-name">Наставники</h2>
            <div class="slider-mentors">
                <div class="slider-mentors__slide-wrapper">
                   <a class="slider-mentors__slide" href="">
                       <div class="slider-mentors__image-wrapper">
                           <div class="slider-mentors__image" style="background-image: url(../images/stelmah.png)"></div>
                       </div>
                       <p class="slider-mentors__name">
                           Стельмах О.А.
                       </p>
                   </a>
               </div>
                <div class="slider-mentors__slide-wrapper">
                    <a class="slider-mentors__slide" href="">
                        <div class="slider-mentors__image-wrapper">
                            <div class="slider-mentors__image" style="background-image: url(../images/stelmah.png)"></div>
                        </div>
                        <p class="slider-mentors__name">
                            Стельмах О.А.
                        </p>
                    </a>
                </div>
                <div class="slider-mentors__slide-wrapper">
                    <a class="slider-mentors__slide" href="">
                        <div class="slider-mentors__image-wrapper">
                            <div class="slider-mentors__image" style="background-image: url(../images/stelmah.png)"></div>
                        </div>
                        <p class="slider-mentors__name">
                            Стельмах О.А.
                        </p>
                    </a>
                </div>
                <div class="slider-mentors__slide-wrapper">
                    <a class="slider-mentors__slide" href="">
                        <div class="slider-mentors__image-wrapper">
                            <div class="slider-mentors__image" style="background-image: url(../images/stelmah.png)"></div>
                        </div>
                        <p class="slider-mentors__name">
                            Стельмах О.А.
                        </p>
                    </a>
                </div>
                <div class="slider-mentors__slide-wrapper">
                    <a class="slider-mentors__slide" href="">
                        <div class="slider-mentors__image-wrapper">
                            <div class="slider-mentors__image" style="background-image: url(../images/stelmah.png)"></div>
                        </div>
                        <p class="slider-mentors__name">
                            Стельмах О.А.
                        </p>
                    </a>
                </div>
            </div>
        </section>
        <section class="page-main__section">
            <h2 class="section-name">Лучшие проекты</h2>
            <ul class="best-projects__list">
                <li class="best-projects__item project-block project-block--projects">
                    <?php include("../source/blocks/project-block.php") ?>
                </li>
                <li class="best-projects__item project-block project-block--projects">
                    <?php include("../source/blocks/project-block.php") ?>
                </li>
                <li class="best-projects__item project-block project-block--projects">
                    <?php include("../source/blocks/project-block.php") ?>
                </li>
            </ul>
        </section>
    </div>
</main>
<?php include('../source/blocks/page-footer.php') ?>
<script src="../scripts/jquery-3.5.1.min.js"></script>
<script src="../scripts/page-header.js"></script>
<script src="../scripts/slick.min.js"></script>
<script src="../scripts/slider.js"></script>
</body>
</html>

