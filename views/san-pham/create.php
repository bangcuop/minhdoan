<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SanPham */

$this->title = Yii::t('app', 'Create San Pham');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'San Phams'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="san-pham-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
