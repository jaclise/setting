<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model jaclise\setting\models\Dict */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '字典列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dict-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'key',
            'type',
            'value:ntext',
            'note',
            'order',
        ],
    ]) ?>

</div>
