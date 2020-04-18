<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Visits */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visits-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cid')->textInput() ?>

    <?= $form->field($model, 'visit_date')->textInput() ?>

    <?= $form->field($model, 'therapy')->dropDownList([ 'First Time Visit' => 'First Time Visit', 'Second Time Visit' => 'Second Time Visit', 'Visit' => 'Visit', 'Advise' => 'Advise', 'Hypnosis' => 'Hypnosis', 'Addiction' => 'Addiction', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'online')->checkbox() ?>

    <?= $form->field($model, 'doctor')->textInput() ?>

    <?= $form->field($model, 'presenceـinـoffice')->textInput() ?>

    <?= $form->field($model, 'visit_start')->textInput() ?>

    <?= $form->field($model, 'visit_end')->textInput() ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'Extra')->textInput() ?>

    <?= $form->field($model, 'discount')->textInput() ?>

    <?= $form->field($model, 'sum')->textInput() ?>

    <?= $form->field($model, 'pay_bt_card')->textInput() ?>

    <?= $form->field($model, 'pay_cash')->textInput() ?>

    <?= $form->field($model, 'pay_online')->textInput() ?>

    <?= $form->field($model, 'next_visit')->textInput() ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prescription')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
