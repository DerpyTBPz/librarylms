<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Libbooks $model */

$this->title = 'Оновити книгу: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Libbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Оновити';
?>
<div class="libbooks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
