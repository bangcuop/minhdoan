<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ThongTinHoTroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Thong Tin Ho Tros');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thong-tin-ho-tro-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Thong Tin Ho Tro'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ho_ten',
            'skype',
            'yahoo',
            'valid',
            // 'ngay_tao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
