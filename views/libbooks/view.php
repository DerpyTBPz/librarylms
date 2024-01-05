<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Libbooks $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Книги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="libbooks-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->user->can('admin')): ?>
    <p>
        <?= Html::a('Оновити', ['update', 'ID' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'ID' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Ви впевненні що хочете видалити цю книгу?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php endif; ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'name:ntext',
            'author:ntext',
            'publishing:ntext',
            'year',
            'genre:ntext',
            'length',            
            [
                'attribute' =>'imgFile',
                'value' => "http://localhost/uploads/" . basename($model->imgFile),
                'format' => ['image', ['width' => '500', 'height' => '500']],
            ],
            // 'imgFile:ntext',
        ],
    ]) ?>

</div>