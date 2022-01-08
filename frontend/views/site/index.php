<?php

/* @var $this yii\web\View */

$this->title = 'NYC';
/*$this->registerCssFile("css/cart.css");
$this->registerCssFile("css/responsive.css");
$this->registerCssFile("css/main_styles.css");*/
$this->registerJsFile("js/index.js");
?>

<div class="jumbotron text-center bg-transparent record">
    <div class="main_title">New You Company (NYC)</div>
    <div class="main_text">Уникальный прект New You, нацеленный на помощь в визуализации Ваших целей на пути к
        самосовершенствованию!
    </div>
    <p><button class="btn btn-lg btn-primary" id="instruction">Посмотреть </button></p>
</div>
<div class="products">
    <div class="row product_block">
        <div class="board">
            <div class="board_pic">
                <div class="product_image_slider_container">
                    <img src="images/product_1.jpg" alt="">
                </div>
            </div>
            <div class="board_text">
                <div class="product_info">
                    <div class="product_name">Мотивационная доска Уиджи</div>
                    <div class="product_price">300<span>.00</span></div>
                    <div class="product_text">
                        <p>Пиздатое описание доски</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row product_block">
        <div class="board">
            <div class="board_pic">
                <div class="product_image_slider_container">
                    <img src="images/product_2.png" alt="">
                </div>
            </div>
            <div class="board_text">
                <div class="product_info">
                    <div class="product_name">Мотивационная доска Зодиак</div>
                    <div class="product_price">350<span>.00</span></div>
                    <div class="product_text">
                        <p>Пиздатое описание доски Зодиак</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row product_block">
        <div class="board">
            <div class="board_pic">
                <div class="product_image_slider_container">
                    <img src="images/product_3.png" alt="">
                </div>
            </div>
            <div class="board_text">
                <div class="product_info">
                    <div class="product_name">Мотивационная доска Зайцы</div>
                    <div class="product_price">320<span>.00</span></div>
                    <div class="product_text">
                        <p>Пиздатое описание доски Зайцы</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body-content">
    <div class="row">
        <h2>О нас</h2>
        <p>Краткая инфа о досках с сылкой на отзывы тестовой группы. По центру</p>
        <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">Ссылка на отзывы &raquo;</a>
        </p>
    </div>


</div>

