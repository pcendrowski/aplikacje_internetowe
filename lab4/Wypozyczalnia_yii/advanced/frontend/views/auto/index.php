<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Samochody';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Dodaj nowy', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idAuto',
            'Marka',
            'Model',
            'Rok_produkcji',
            'Silnik',
            'Moc',
            'Rodzaj_paliwa',
            'Przebieg',
            'idWypozyczalnia0.Nazwa:text:Wypożyczalnia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
