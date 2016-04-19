<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GioiThieuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gioi-thieu-search">

    <?php
    $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
    ]);
    ?>

    <?= $form->field($model, 'tieu_de')->label("Tiêu đề") ?>

    <?= $form->field($model, 'mo_ta')->label("Mô tả") ?>

    <?= $form->field($model, 'valid')->label("Trạng thái") ?>

        <?= $form->field($model, 'ngay_tao')->label("Ngày tạo") ?>

    <div class="form-group">
<?= Html::submitButton(Yii::t('app', 'Tìm kiếm'), ['class' => 'btn btn-primary']) ?>
    <?= Html::resetButton(Yii::t('app', 'Làm lại'), ['class' => 'btn btn-default']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
