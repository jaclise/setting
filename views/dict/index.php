<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel jaclise\setting\models\DictSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title ='字典列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dict-index">

 <!--   <h1><?/*= Html::encode($this->title) */?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        //重新定义分页样式
        'layout'=> '{items}<div class="text-right tooltip-demo">{pager}</div>',
        /*'pager'=>[
            //'options'=>['class'=>'hidden']//关闭分页
            'firstPageLabel'=>"First",
            'prevPageLabel'=>'Prev',
            'nextPageLabel'=>'Next',
            'lastPageLabel'=>'Last',
        ],*/
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'key',
            'type',
            'value',
            'note',
            // 'order',

            ['class' => 'yii\grid\ActionColumn',
                'header' => '操作',
            ],
        ],
    ]); ?>

</div>
