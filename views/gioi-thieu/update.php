<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GioiThieu */

$this->title = Yii::t('app', 'Cập nhật {modelClass}: ', [
    'modelClass' => 'Giới thiệu',
]) . $model->tieu_de;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Giới thiệu'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tieu_de, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="gioi-thieu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
