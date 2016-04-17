<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LienHeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lien-he-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ho_ten') ?>

    <?= $form->field($model, 'dia_chi') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'so_dien_thoai') ?>

    <?php // echo $form->field($model, 'gioi_tinh_kh') ?>

    <?php // echo $form->field($model, 'tuoi') ?>

    <?php // echo $form->field($model, 'facebook') ?>

    <?php // echo $form->field($model, 'gmail') ?>

    <?php // echo $form->field($model, 'noi_dung') ?>

    <?php // echo $form->field($model, 'ngay_tao') ?>

    <?php // echo $form->field($model, 'valid') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
