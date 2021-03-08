<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>NekMarket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
<?php include('../source/blocks/page-header.php') ?>
<main class="page-main">
    <div class="page-main__container container">
        <div class="page-main__wrapper">
            <section class="page-main__section">
                <h2 class="section-name">NekMarket</h2>
                <div class="project-wrapper">
                    <div class="project-wrapper__project-cart">
                        <div class="project-cart">
                            <div class="project-cart__image-wrapper">
                                <img class="project-cart__image" src="../images/nekweb.png" width="4" height="5" alt="">
                            </div>
                            <div class="project-cart__information">
                                <div class="project-cart__rating rating">
                                    <div class="rating__body">
                                        <span class="rating__active" style="width: 90%"></span>
                                    </div>
                                    <span class="rating__num-rating">4,5</span>
                                </div>
                               <div class="project-cart__type-project">
                                   <p class="project-cart__title">Тип проекта:</p>
                                   <p class="project-cart__links"><a href="">Веб-сайт</a>, <a href="">интернет-магазин</a></p>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-wrapper__project-tabs">
                        <div class="project-tabs">

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php include('../source/blocks/page-footer.php') ?>
<script src="../scripts/jquery-3.5.1.min.js"></script>
<script src="../scripts/page-header.js"></script>
</body>
</html>

