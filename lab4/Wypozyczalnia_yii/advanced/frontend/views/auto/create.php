<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Auto */

$this->title = 'Dodaj nowy samochód do bazy';
$this->params['breadcrumbs'][] = ['label' => 'Samochody', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
