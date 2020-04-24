<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Visits */

$this->title = 'ویزیت جدید';
$this->params['breadcrumbs'][] = ['label' => 'ویزیت‌ها', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visits-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
