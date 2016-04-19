<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SanPham */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'San Phams'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="san-pham-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'loai_san_pham_id',
            'ten',
            'ma',
            'anh',
            'mau_sac',
            'kich_thuoc',
            'gia_tien',
            'tinh_trang',
            'luot_xem',
            'dong_san_pham',
            'valid',
            'ngay_tao',
            'hang_moi',
            'mo_ta:ntext',
            'so_luong_san_pham',
        ],
    ]) ?>

</div>
