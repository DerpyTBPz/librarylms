<?php

use app\models\Libgenres;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\LibgenresSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Libgenres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="libgenres-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Libgenres', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'genre:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Libgenres $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
