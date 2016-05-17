<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\KaloriTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kalori-table-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'YemekName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tarih')->textInput() ?>

    <?= $form->field($model, 'kalori')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
