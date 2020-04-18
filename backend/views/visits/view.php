<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Visits */

$this->title = $model->vid;
$this->params['breadcrumbs'][] = ['label' => 'Visits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="visits-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->vid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->vid], [
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
            'vid',
            'cid',
            'visit_date',
            'therapy',
            'online:boolean',
            'doctor',
            'presenceـinـoffice',
            'visit_start',
            'visit_end',
            'cost',
            'Extra',
            'discount',
            'sum',
            'pay_bt_card',
            'pay_cash',
            'pay_online',
            'next_visit',
            'comment',
            'prescription:ntext',
        ],
    ]) ?>

</div>
