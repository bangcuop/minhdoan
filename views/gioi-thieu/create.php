<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GioiThieu */

$this->title = Yii::t('app', 'Tạo trang giới thiệu');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Giới thiệu'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gioi-thieu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
