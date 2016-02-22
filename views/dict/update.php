<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model jaclise\setting\models\Dict */

$this->title = '修改字典: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '字典列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="dict-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
