<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Auto */

$this->title = 'Zmień dane samochodu: ' . $model->Marka .' ' . $model->Model;
$this->params['breadcrumbs'][] = ['label' => 'Samochód', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Marka, 'url' => ['view', 'id' => $model->idAuto]];
$this->params['breadcrumbs'][] = 'Zmień';
?>
<div class="auto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
