<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ThamSo */

$this->title = Yii::t('app', 'Create Tham So');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tham Sos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tham-so-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
