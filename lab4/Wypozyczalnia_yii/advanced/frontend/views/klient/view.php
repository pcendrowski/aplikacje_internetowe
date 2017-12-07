<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Klient */

$this->title = $model->Imie . ' ' . $model->Nazwisko;
$this->params['breadcrumbs'][] = ['label' => 'Klient', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klient-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Zmień', ['update', 'id' => $model->idKlient], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Usuń', ['delete', 'id' => $model->idKlient], [
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
            //'idKlient',
            'Imie',
            'Nazwisko',
            'Email:email',
            'Telefon',
            'Nr_dokumentu_ID:text:Dokument tożsamości (Seria i nr)',
        ],
    ]) ?>

</div>
