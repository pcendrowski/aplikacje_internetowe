<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Baza klientów';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klient-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Dodaj nowego', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idKlient',
            'Imie:text:Imię',
            'Nazwisko',
            'Email:email',
            'Telefon',
            'Nr_dokumentu_ID:text:Dokument tożsamości (Seria i nr)',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
