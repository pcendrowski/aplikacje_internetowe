<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Klient */

$this->title = 'Zmień dane klienta: ' . $model->Imie . ' ' . $model->Nazwisko;
$this->params['breadcrumbs'][] = ['label' => 'Zmień dane klienta', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Imie . ' ' . $model->Nazwisko, 'url' => ['view', 'id' => $model->idKlient]];
$this->params['breadcrumbs'][] = 'Zmień';
?>
<div class="klient-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
