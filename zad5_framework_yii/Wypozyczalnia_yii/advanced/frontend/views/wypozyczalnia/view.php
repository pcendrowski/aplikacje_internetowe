<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Wypozyczalnia */

$this->title = $model->Nazwa;
$this->params['breadcrumbs'][] = ['label' => 'Wypożyczalnie', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wypozyczalnia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Zmień', ['update', 'id' => $model->idWypozyczalnia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Usuń', ['delete', 'id' => $model->idWypozyczalnia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Czy na pewno chcesz usunać?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'idWypozyczalnia',
            'Nazwa',
            'Ulica',
            'Nr_budynku',
            'Miasto',
            'Telefon',
        ],
    ]) ?>

</div>
