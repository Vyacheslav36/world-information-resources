<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \common\models\Contact */

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?php echo Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?php echo $form->field($model, 'name') ?>
                <?php echo $form->field($model, 'email') ?>
                <?php echo $form->field($model, 'phone') ?>
                <?php echo $form->field($model, 'subject') ?>
                <?php echo $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                <div class="form-group">
                    <?php echo Html::submitButton(Yii::t('frontend', 'Submit'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
