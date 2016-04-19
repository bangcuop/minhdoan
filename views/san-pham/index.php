<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SanPhamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'San Phams');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="san-pham-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create San Pham'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'loai_san_pham_id',
            'ten',
            'ma',
            'anh',
            // 'mau_sac',
            // 'kich_thuoc',
            // 'gia_tien',
            // 'tinh_trang',
            // 'luot_xem',
            // 'dong_san_pham',
            // 'valid',
            // 'ngay_tao',
            // 'hang_moi',
            // 'mo_ta:ntext',
            // 'so_luong_san_pham',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
