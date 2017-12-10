<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Wypozyczalnia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wypozyczalnia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nazwa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ulica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nr_budynku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Miasto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefon')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Dodaj' : 'Zmień', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
