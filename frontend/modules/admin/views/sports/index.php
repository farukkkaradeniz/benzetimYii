<?php

use yii\helpers\Html;
use yii\grid\GridView;
use frontend\modules\admin\controllers\SportsController;
use miloschuman\highcharts\Highcharts;

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

            'userName',
            'AletName',
            'minute',
            'weight',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
    <?php 
    $id=0;
    $module=0;
    $config=0;
    $name=Yii::$app->user->identity->username;
    $sinif= new SportsController($id, $module, $config = []);
    $cardio=(int)$sinif->actionCardio();
    $weight=(int)$sinif->actionWeight();
    echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'Kardiyo-Ağırlık Grafiği'],
      'xAxis' => [
         'categories' => ['Aktivite Türü']
      ],
      'yAxis' => [
         'title' => ['text' => 'Süre - Ağırlık']
      ],
      'series' => [
         ['name' => 'cardio', 'data' => [$cardio]],
         ['name' => 'cardio', 'data' => [$weight]],

         
      ]
   ]
]);
    ?>
</div>
