<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Libbooks $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="libbooks-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'author')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'publishing')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genre')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'length')->textInput() ?>   

    <?= $form->field($model, 'imgFile')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
