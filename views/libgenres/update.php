<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Libgenres $model */

$this->title = 'Update Libgenres: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Libgenres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="libgenres-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
