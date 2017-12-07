<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WypozyczalniaHasKlient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wypozyczalnia-has-klient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idWypozyczalnia')->textInput()->label('Wypożyczalnia') ?>

    <?= $form->field($model, 'idKlient')->textInput()->label('Klient') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Dodaj' : 'Zmień', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
