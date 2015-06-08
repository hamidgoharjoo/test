<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchCustomer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="جستجوی مشتری">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'family') ?>

    <?= $form->field($model, 'mobile') ?>

    <?= $form->field($model, 'home') ?>

    <?php // echo $form->field($model, 'work') ?>

    <div class="form-group">
        <?= Html::submitButton('جستجو', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('پاک کردن فرم', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
