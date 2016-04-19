<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TinTuc */

$this->title = Yii::t('app', 'Create Tin Tuc');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tin Tucs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tin-tuc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
