<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\WypozyczalniaHasKlient */

$this->title = 'Klient wypożyczalni:';
$this->params['breadcrumbs'][] = ['label' => 'Klient wypożyczalni', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wypozyczalnia-has-klient-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Zmień', ['update', 'id' => $model->idWypozyczalnia_has_klient], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Usuń', ['delete', 'id' => $model->idWypozyczalnia_has_klient], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Czy na pewno chcesz usunąć?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'idWypozyczalnia_has_klient',
            'idWypozyczalnia0.Nazwa:text:Wypożyczalnia',
            'idKlient0.Imie:text:Imię', 'idKlient0.Nazwisko',
        ],
    ]) ?>

</div>
