<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LienHeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Lien Hes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lien-he-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Lien He'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ho_ten',
            'dia_chi',
            'email:email',
            'so_dien_thoai',
            // 'gioi_tinh_kh',
            // 'tuoi',
            // 'facebook',
            // 'gmail',
            // 'noi_dung',
            // 'ngay_tao',
            // 'valid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
