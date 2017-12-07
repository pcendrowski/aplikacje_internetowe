<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Auto */

$this->title = $model->Marka . ' ' . $model->Model;
$this->params['breadcrumbs'][] = ['label' => 'Samochód', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Zmień', ['update', 'id' => $model->idAuto], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Usuń', ['delete', 'id' => $model->idAuto], [
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
            //'idAuto',
            'Marka',
            'Model',
            'Rok_produkcji',
            'Silnik',
            'Moc',
            'Rodzaj_paliwa',
            'Przebieg',
            'idWypozyczalnia',
        ],
    ]) ?>

</div>
