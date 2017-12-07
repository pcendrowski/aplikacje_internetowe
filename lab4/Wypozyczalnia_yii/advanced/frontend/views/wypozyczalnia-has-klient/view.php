<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\WypozyczalniaHasKlient */

$this->title = $model->idWypozyczalnia;
$this->params['breadcrumbs'][] = ['label' => 'Klient wypożyczalni', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wypozyczalnia-has-klient-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Zmień', ['update', 'idWypozyczalnia' => $model->idWypozyczalnia, 'idKlient' => $model->idKlient], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Usuń', ['delete', 'idWypozyczalnia' => $model->idWypozyczalnia, 'idKlient' => $model->idKlient], [
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
            'idWypozyczalnia:text:Wypożyczalnia',
            'idKlient:text:Klient',
        ],
    ]) ?>

</div>
