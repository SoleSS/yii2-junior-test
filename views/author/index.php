<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Authors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="author-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Author', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'birth_year',
            [
                'attribute' => 'booksLink',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::a('Список книг', ['/book/index', 'BookSearch[author_id]' => $model->id, 'sort' => 'publish_year']);
                },
            ],
            'rating',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
