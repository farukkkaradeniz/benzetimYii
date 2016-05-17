<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Sports */

$this->title = 'Update Sports: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sports-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
