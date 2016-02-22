<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model jaclise\setting\models\Dict */

$this->title = '新建字典';
$this->params['breadcrumbs'][] = ['label' => '字典列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dict-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
