<?php
use yii\helpers\Html;
//use yii\widgets\DetailView;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'مشتریان', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-disposal" dir='rtl'>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('ویرایش', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('حذف', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'مطمئن هستید که می‌خواهید حذف کنید؟',
                'method' => 'post',
            ],
        ]) ?>
    </p>

   

</div>
 
<?php
echo DetailView::widget([
    'model'=>$model,
    'condensed'=>true,
    'hover'=>true,
    'mode'=>DetailView::MODE_VIEW,
    'panel'=>[
        'heading'=>'مشخصات مشتری : ' . $model->id,
        'type'=>DetailView::TYPE_INFO,
    ],
    'buttons1' =>'',   
    'attributes' => [
            ['attribute'=>'id',
             'label' => 'شناسه'],
            ['attribute'=>'name',
	     'label' => 'نام'],
            ['attribute'=>'family',
 	     'label' => 'فامیل'],
            ['attribute'=>'mobile',
	     'label' => 'موبایل'],
            ['attribute'=>'home',
	     'label' => 'خانه'],
            ['attribute'=>'work',
	     'label' => 'محل کار'],
        ]
]);
?>
