<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\GioiThieu */

$this->title = Yii::t('app', 'Create Gioi Thieu');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gioi Thieus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gioi-thieu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
