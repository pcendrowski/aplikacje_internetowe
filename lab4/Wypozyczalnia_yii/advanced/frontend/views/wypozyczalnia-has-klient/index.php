<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Klienci wypożyczalni';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wypozyczalnia-has-klient-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Dodaj klienta do wypożyczalni', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idWypozyczalnia0.Nazwa:text:Wypożyczalnia',
            'idKlient0.Imie:text:Imię', 'idKlient0.Nazwisko',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
