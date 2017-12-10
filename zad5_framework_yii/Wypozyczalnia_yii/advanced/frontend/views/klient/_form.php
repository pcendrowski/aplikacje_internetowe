<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Klient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="klient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Imie')->textInput(['maxlength' => true])->label('Imię') ?>

    <?= $form->field($model, 'Nazwisko')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefon')->textInput() ?>

    <?= $form->field($model, 'Nr_dokumentu_ID')->textInput(['maxlength' => true])->label('Dokument tożsamości (Seria i nr)') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Dodaj' : 'Zmień', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
