<?php
/* @var $this yii\web\View */
/* @var $articleList \yii\data\ActiveDataProvider */

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="header_main_page background_div">
        <div class="container header_content">
            <div class="header_content_img"></div>
            <div class="header_content_description">
                <div class="header_content_big_description">WebLibrary</div>
                <div class="header_content_small_description">это возможность легко найти то, что вам нужно в сфере
                    web-технологий
                </div>
            </div>
        </div>
    </div>

    <div class="container article_index box_padding">
        <div style="text-align: center"><span class="font-text_h2">Последние опубликованные статьи</span></div>
        <?php echo \yii\widgets\ListView::widget([
            'dataProvider' => $articleList,
            'summary' => '',
            'pager' => [
                'hideOnSinglePage' => true,
            ],
            'itemView' => '../article/_item_index'
        ]) ?>
    </div>

    <div class="customer_main_page background_div box_padding">
        <div class="container customer_reviews">
            <div style="text-align: center"><span class="font-text_h2">Отзывы</span></div>
            <div class="reviews">
                <div class="reviews_box">
                    <div class="reviews_box_header">
                        <div class="header_img"></div>
                        <div class="header_username">Иван Иванов</div>
                    </div>
                    <div class="reviews_box_content">
                        Благодарю за такой сайт, очень круто!
                    </div>
                </div>
                <div class="reviews_box">
                    <div class="reviews_box_header">
                        <div class="header_img"></div>
                        <div class="header_username">Иван Иванов</div>
                    </div>
                    <div class="reviews_box_content">
                        Благодарю за такой сайт, очень круто!
                    </div>
                </div>
                <div class="reviews_box">
                    <div class="reviews_box_header">
                        <div class="header_img"></div>
                        <div class="header_username">Иван Иванов</div>
                    </div>
                    <div class="reviews_box_content">
                        Благодарю за такой сайт, очень круто!
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container about_main_page box_padding">
        <div style="text-align: center"><span class="font-text_h2">Контакты</span></div>
        <div class="about_content">
            <div class="about_content_info">
                <p>Адрес: 394036, Россия, г. Воронеж, проспект Революции, д. 19</p>
                <p>Телефон: +7 (473)255-42-67</p>
                <p>Факс: +7 (473)255-42-67</p>
                <p>e-mail: post@vsuet.ru</p>
            </div>
            <div class="about_content_img"><img src="/img/map.png" alt="Map"/></div>
        </div>
    </div>

</div>
