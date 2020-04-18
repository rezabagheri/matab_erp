<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VisitsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visits-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'vid') ?>

    <?= $form->field($model, 'cid') ?>

    <?= $form->field($model, 'visit_date') ?>

    <?= $form->field($model, 'therapy') ?>

    <?= $form->field($model, 'online')->checkbox() ?>

    <?php // echo $form->field($model, 'doctor') ?>

    <?php // echo $form->field($model, 'presenceـinـoffice') ?>

    <?php // echo $form->field($model, 'visit_start') ?>

    <?php // echo $form->field($model, 'visit_end') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'Extra') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'sum') ?>

    <?php // echo $form->field($model, 'pay_bt_card') ?>

    <?php // echo $form->field($model, 'pay_cash') ?>

    <?php // echo $form->field($model, 'pay_online') ?>

    <?php // echo $form->field($model, 'next_visit') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'prescription') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
