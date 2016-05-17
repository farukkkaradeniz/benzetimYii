<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\admin\models\SportsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Spor Aktiviteleri';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sports-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Yeni Aktivite Ekle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'userName',
            'AletName',
            'minute',
            'weight',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
