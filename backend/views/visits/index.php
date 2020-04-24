<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\VisitsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ویزیت‌ها';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visits-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Visits', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'vid',
            [
                'headerOptions' => ['style' => 'max-width: 70px'],
                'attribute' => 'cid',
                'value' => 'custommer.doc_no',
                'label' => 'ش.پ',
                
            ],
            
            'custommer.first_name',
            'custommer.last_name',
            [
                'attribute' => 'did',
                'value' => 'doctor.fullName',
                
            ],
            //'doctor.fullName',
            //'doctor.first_name',
            //'doctor.last_name',
            //'cid',
            //'did',
            'visit_date:date',
            'visit_start',
            'visit_end',
            'duration:time',
            'therapy',
            'online:boolean',
            //'presenceـinـoffice',
            [
                'attribute' => 'cost',
                'value' => 'cost',
                'format' => 'currency',
            ],
            [
                'attribute' => 'Extra',
                'value' => 'Extra',
                'format' => 'currency',
            ],   
             [
                'attribute' => 'discount',
                'value' => 'discount',
                'format' => 'currency',
            ],
            [
                'attribute' => 'sum',
                'value' => 'sum',
                'format' => 'currency',
            ],
            //'pay_bt_card',
            //'pay_cash',
            //'pay_online',
            //'next_visit',
            //'comment:ntext',
            //'prescription:ntext',
            //'attach',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'update' =>  function ($url, $model) {
                        return Html::a('<i class="fa fa-edit"></i>', $url, [
                            'title' => Yii::t('app', 'update')
                        ]);
                    },
                    'view' =>  function ($url, $model) {
                        return Html::a('<i class="fa fa-eye"></i>', $url, [
                            'title' => Yii::t('app', 'view')
                        ]);
                    },
                    'delete' => function ($url, $model) {
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