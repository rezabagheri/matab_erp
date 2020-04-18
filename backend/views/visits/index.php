<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\VisitsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Visits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visits-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Visits', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'vid',
            'cid',
            'visit_date',
            'therapy',
            'online:boolean',
            //'doctor',
            //'presenceـinـoffice',
            //'visit_start',
            //'visit_end',
            //'cost',
            //'Extra',
            //'discount',
            //'sum',
            //'pay_bt_card',
            //'pay_cash',
            //'pay_online',
            //'next_visit',
            //'comment',
            //'prescription:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
