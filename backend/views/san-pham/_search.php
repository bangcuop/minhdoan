<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SanPhamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="san-pham-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'loai_san_pham_id') ?>

    <?= $form->field($model, 'ten') ?>

    <?= $form->field($model, 'ma') ?>

    <?= $form->field($model, 'anh') ?>

    <?php // echo $form->field($model, 'mau_sac') ?>

    <?php // echo $form->field($model, 'kich_thuoc') ?>

    <?php // echo $form->field($model, 'gia_tien') ?>

    <?php // echo $form->field($model, 'tinh_trang') ?>

    <?php // echo $form->field($model, 'luot_xem') ?>

    <?php // echo $form->field($model, 'dong_san_pham') ?>

    <?php // echo $form->field($model, 'valid') ?>

    <?php // echo $form->field($model, 'ngay_tao') ?>

    <?php // echo $form->field($model, 'hang_moi') ?>

    <?php // echo $form->field($model, 'mo_ta') ?>

    <?php // echo $form->field($model, 'so_luong_san_pham') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
