<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TinTucSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tin-tuc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tieu_de') ?>

    <?= $form->field($model, 'noi_dung') ?>

    <?= $form->field($model, 'ngay_tao') ?>

    <?= $form->field($model, 'valid') ?>

    <?php // echo $form->field($model, 'loai') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
