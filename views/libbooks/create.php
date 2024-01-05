<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Libbooks $model */

$this->title = 'Додати нову книгу';
$this->params['breadcrumbs'][] = ['label' => 'Libbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="libbooks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
