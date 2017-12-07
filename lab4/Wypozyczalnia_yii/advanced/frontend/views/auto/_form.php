<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Auto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Marka')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rok_produkcji')->textInput() ?>

    <?= $form->field($model, 'Silnik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Moc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rodzaj_paliwa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Przebieg')->textInput() ?>
    
    <?= $form->field($model, 'idWypozyczalnia')->textInput()->label('Wypożyczalnia') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Dodaj' : 'Zmień', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
