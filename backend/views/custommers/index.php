<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CustommersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Custommers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="custommers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Custommers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'doc_no',
            'firts_time_visit',
            'first_name',
            'last_name',
            //'father_name',
            //'gender',
            //'birth_date',
            //'birth_order',
            //'education_level',
            //'major',
            //'maritalـstatus',
            //'child_count',
            //'job',
            //'birth_place',
            //'primary_hand',
            'mobile_number',
            'home_phone',
            'other_phones',
            //'referrer',
            //'address:ntext',

            ['class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'update' =>  function($url,$model) {
                        return Html::a('<i class="fa fa-edit"></i>', $url, [
                            'title' => Yii::t('app', 'update')
                        ]);
                    },
                    'view' =>  function($url,$model) {
                        return Html::a('<i class="fa fa-eye"></i>', $url, [
                            'title' => Yii::t('app', 'view')
                        ]);
                    },
                    'delete' => function($url,$model) {
                        return Html::a('<i class="fa fa-trash"></i>', $url, [
                            'title' => Yii::t('app', 'delete')
                        ]);
                    }
                 ]
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>