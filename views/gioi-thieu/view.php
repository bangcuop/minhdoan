<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GioiThieu */

$this->title = $model->tieu_de;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Giới thiệu'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gioi-thieu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Cập nhật'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Xóa'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Bạn có chắc chắn muốn xóa?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tieu_de',
            'mo_ta:ntext',
            'valid',
            'ngay_tao',
        ],
    ]) ?>

</div>
