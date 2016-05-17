<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Blog */
/* @var $form ActiveForm */
?>
<div class="site-blog">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'asd') ?>
        <?= $form->field($model, 'qwe') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-blog -->
