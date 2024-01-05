<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\LibbooksSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="libbooks-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'author') ?>

    <?= $form->field($model, 'publishing') ?>

    <?= $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'genre') ?>

    <?php // echo $form->field($model, 'length') ?>

    <?php // echo $form->field($model, 'subscription') ?>

    <?php // echo $form->field($model, 'imgFile') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
