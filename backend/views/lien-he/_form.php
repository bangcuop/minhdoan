<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LienHe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lien-he-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ho_ten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dia_chi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'so_dien_thoai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gioi_tinh_kh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tuoi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noi_dung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ngay_tao')->textInput() ?>

    <?= $form->field($model, 'valid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
