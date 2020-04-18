<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Custommers */

$this->title = 'Create Custommers';
$this->params['breadcrumbs'][] = ['label' => 'Custommers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="custommers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
