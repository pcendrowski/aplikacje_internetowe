<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\WypozyczalniaHasKlient */

$this->title = 'Zmień przypisanie klienta do wypożyczalni';
$this->params['breadcrumbs'][] = ['label' => 'Zmień przypisanie klienta do wypożyczalni', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->idWypozyczalnia_has_klient, 'url' => ['view', 'id' => $model->idWypozyczalnia_has_klient]];
$this->params['breadcrumbs'][] = 'Zmień';
?>
<div class="wypozyczalnia-has-klient-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'wypozyczalnie' => $wypozyczalnie,
        'klienci' => $klienci,
    ]) ?>

</div>
