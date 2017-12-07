<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wypożyczalnie';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wypozyczalnia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Dodaj nową', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idWypozyczalnia',
            'Nazwa',
            'Ulica',
            'Nr_budynku',
            'Miasto',
            'Telefon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
