<?php
/**
 * @var $this yii\web\View
 * @var $model common\models\Review
 */
use yii\helpers\Html;

?>
<div class="reviews_box">
    <div class="reviews_box_header">
        <div class="header_img">
            <?php if (!is_null($model->user->userProfile->getAvatar())) {
                echo "<img src='". $model->user->userProfile->getAvatar(). "' alt=\"avatar\"/>";
            }?>
        </div>
        <div class="header_user">
            <div class="header_username"><?= Html::encode($model->user->getPublicIdentity()) ?></div>
            <div class="header_time"><?= Yii::$app->formatter->asDatetime($model->created_at) ?></div>
        </div>
    </div>
    <div class="reviews_box_content">
        <?= Html::encode($model->comment) ?>
    </div>
</div>
