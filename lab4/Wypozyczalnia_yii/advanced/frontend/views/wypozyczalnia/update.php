<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Wypozyczalnia */

$this->title = 'Zmień dane wypożyczalni: ' . $model->Nazwa;
$this->params['breadcrumbs'][] = ['label' => 'Wypozyczalnie', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Nazwa, 'url' => ['view', 'id' => $model->idWypozyczalnia]];
$this->params['breadcrumbs'][] = 'Zmień';
?>
<div class="wypozyczalnia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
