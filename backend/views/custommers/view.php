<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Custommers */

$this->title = $model->cid;
$this->params['breadcrumbs'][] = ['label' => 'Custommers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="custommers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cid], [
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
            'cid',
            'doc_no',
            'firts_time_visit',
            'first_name',
            'last_name',
            'father_name',
            'gender',
            'birth_date',
            'birth_order',
            'education_level',
            'major',
            'maritalـstatus',
            'child_count',
            'job',
            'birth_place',
            'primary_hand',
            'mobile_number',
            'home_phone',
            'other_phones',
            'referrer',
            'address:ntext',
        ],
    ]) ?>

</div>
