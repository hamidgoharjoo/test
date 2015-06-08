<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form" dir='rtl'>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('نام') ?>

    <?= $form->field($model, 'family')->textInput(['maxlength' => true])->label('فامیل') ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true])->label('موبایل') ?>

    <?= $form->field($model, 'home')->textInput(['maxlength' => true])->label('خانه') ?>

    <?= $form->field($model, 'work')->textInput(['maxlength' => true])->label('محل کار') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'ایجاد' : 'ویرایش', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

