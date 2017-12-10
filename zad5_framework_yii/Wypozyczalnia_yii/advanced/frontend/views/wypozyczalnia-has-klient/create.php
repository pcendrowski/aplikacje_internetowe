<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\WypozyczalniaHasKlient */

$this->title = 'Dodaj klienta do wypożyczalni';
$this->params['breadcrumbs'][] = ['label' => 'Dodaj klienta do wypożyczalni', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wypozyczalnia-has-klient-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'wypozyczalnie' => $wypozyczalnie,
        'klienci' => $klienci,
    ]) ?>

</div>
