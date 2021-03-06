<?php

use yii\helpers\Html;
use yii\grid\GridView;
//use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchCustomer */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'مشتریان';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index" dir='rtl'>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('مشتری جدید', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            ['header'=>'شناسه','attribute'=>'id'],
            ['header'=>'نام','attribute'=>'name'],
            ['header'=>'فامیل','attribute'=>'family'],
            ['header'=>'موبایل','attribute'=>'mobile'],
            ['header'=>'خانه','attribute'=>'home'],
            ['header'=>'محل کار','attribute'=>'work'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
?> 



