<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ThongTinHoTro */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Thong Tin Ho Tro',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Thong Tin Ho Tros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="thong-tin-ho-tro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
