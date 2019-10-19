<?php
/**
 * @var $this yii\web\View
 * @var $model common\models\Article
 */
use yii\helpers\Html;

?>
<hr/>
<div class="article-item row">
    <div class="col-xs-12">
        <span class="article_index_title">
            <?php echo Html::a($model->title, ['/article/view', 'slug'=>$model->slug]) ?>
        </span>
        <div class="article-meta">
            <span class="article-date">
                <?php echo Yii::$app->formatter->asDatetime($model->created_at) ?>
            </span>,
            <span class="article-category">
                <?php echo Html::a(
                    $model->category->title,
                    ['index', 'ArticleSearch[category_id]' => $model->category_id]
                )?>
            </span>
        </div>
    </div>
</div>
