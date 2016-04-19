<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LoaiSanPham */

$this->title = Yii::t('app', 'Create Loai San Pham');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Loai San Phams'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loai-san-pham-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
