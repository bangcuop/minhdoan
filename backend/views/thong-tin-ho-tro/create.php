<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ThongTinHoTro */

$this->title = Yii::t('app', 'Create Thong Tin Ho Tro');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Thong Tin Ho Tros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thong-tin-ho-tro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
