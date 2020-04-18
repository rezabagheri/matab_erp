<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Visits */

$this->title = 'Update Visits: ' . $model->vid;
$this->params['breadcrumbs'][] = ['label' => 'Visits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->vid, 'url' => ['view', 'id' => $model->vid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="visits-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
