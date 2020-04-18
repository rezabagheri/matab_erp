<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Custommers */

$this->title = 'Update Custommers: ' . $model->cid;
$this->params['breadcrumbs'][] = ['label' => 'Custommers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cid, 'url' => ['view', 'id' => $model->cid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="custommers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
