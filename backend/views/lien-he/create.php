<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LienHe */

$this->title = Yii::t('app', 'Create Lien He');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lien Hes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lien-he-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
