<?php
/**
 * Created by PhpStorm.
 * User: Вячеслав
 * Date: 19.10.2019
 * Time: 20:55
 */

use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;

/* @var $content string */

$this->beginContent('@frontend/views/layouts/base.php')
?>

<?php echo Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>

<?php if (Yii::$app->session->hasFlash('alert')): ?>
    <?php echo \yii\bootstrap\Alert::widget([
        'body' => ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
        'options' => ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
    ]) ?>
<?php endif; ?>

<!-- Example of your ads placing -->
<?php echo \common\widgets\DbText::widget([
    'key' => 'ads-example'
]) ?>

<?php echo $content ?>

<?php $this->endContent() ?>