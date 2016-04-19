<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SanPham */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="san-pham-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'loai_san_pham_id')->textInput() ?>

    <?= $form->field($model, 'ten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mau_sac')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kich_thuoc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gia_tien')->textInput() ?>

    <?= $form->field($model, 'tinh_trang')->textInput() ?>

    <?= $form->field($model, 'luot_xem')->textInput() ?>

    <?= $form->field($model, 'dong_san_pham')->textInput() ?>

    <?= $form->field($model, 'valid')->textInput() ?>

    <?= $form->field($model, 'ngay_tao')->textInput() ?>

    <?= $form->field($model, 'hang_moi')->textInput() ?>

    <?= $form->field($model, 'mo_ta')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'so_luong_san_pham')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
