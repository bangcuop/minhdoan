<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\GioiThieu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gioi-thieu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'tieu_de')->label("Tiêu đề") ?>
    <?=
    $form->field($model, 'mo_ta')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ])->label("Mô tả")
    ?>
    <div class="dropdown">
        <?= $form->field($model, 'valid')->DropDownList(['0' => 'Hết hiệu lực', '1' => 'Còn hiệu lực'])->label("Trạng thái") ?>
    </div>
    <?=
            $form->field($model, 'ngay_tao')
            ->widget(DatePicker::className(), ['language' => 'en',
                'inline' => false,
                'clientOptions' => ['defaultDate' => date('dd/MM/yyyy'),
                    'dateFormat' => 'dd/MM/yyyy',
                    'showAnim' => 'fold',
                    'yearRange' => '1990:2020',
                    'changeMonth' => true,
                    'changeYear' => true,
                    'autoSize' => true,
                    'showOn' => "button",
                    'buttonText' => 'Chọn ngày']]
            )->label("Ngày tạo")
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Thêm mới') : Yii::t('app', 'Cập nhật'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
