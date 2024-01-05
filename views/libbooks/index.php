<?php

use app\models\Libbooks;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\LibbooksSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Книги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="libbooks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->user->can('admin')): ?>
    <p>
        <?= Html::a('Додати нову книгу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php endif; ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if (Yii::$app->user->can('admin')): ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name:ntext',
            'author:ntext',
            'publishing:ntext',
            'year',
            //'genre:ntext',
            //'length',
            //'subscription',
            
            [
                'class' => ActionColumn::className(),
                'template' => '{view} {update} {delete}', // Только кнопка просмотра для обычных пользователей
                'urlCreator' => function ($action, Libbooks $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>

<?php else: ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'name:ntext',
            'author:ntext',
            'publishing:ntext',
            'year',
            //'genre:ntext',
            //'length',
            //'subscription',
            
            [
                'class' => ActionColumn::className(),
                'template' => '{view}', // Только кнопка просмотра для обычных пользователей
                'urlCreator' => function ($action, Libbooks $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>

</div>
<?php endif; ?>