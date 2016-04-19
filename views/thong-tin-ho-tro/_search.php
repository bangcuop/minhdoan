<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ThongTinHoTroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thong-tin-ho-tro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ho_ten') ?>

    <?= $form->field($model, 'skype') ?>

    <?= $form->field($model, 'yahoo') ?>

    <?= $form->field($model, 'valid') ?>

    <?php // echo $form->field($model, 'ngay_tao') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
