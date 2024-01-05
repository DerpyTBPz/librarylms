<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Libgenres $model */

$this->title = 'Create Libgenres';
$this->params['breadcrumbs'][] = ['label' => 'Libgenres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="libgenres-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
