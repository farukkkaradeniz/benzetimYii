<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\admin\models\KaloriTableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kalori Tables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kalori-table-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kalori Table', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'userid',
            'YemekName',
            'meal',
            'Tarih',
            // 'kalori',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
