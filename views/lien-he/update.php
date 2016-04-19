<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LienHe */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Lien He',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lien Hes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="lien-he-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
