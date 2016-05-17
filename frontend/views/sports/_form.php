<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Sports */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sports-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AletName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'minute')->textInput() ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
