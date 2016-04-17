<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\LienHe */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lien Hes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lien-he-view">

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
            'ho_ten',
            'dia_chi',
            'email:email',
            'so_dien_thoai',
            'gioi_tinh_kh',
            'tuoi',
            'facebook',
            'gmail',
            'noi_dung',
            'ngay_tao',
            'valid',
        ],
    ]) ?>

</div>
