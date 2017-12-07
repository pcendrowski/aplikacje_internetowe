<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Wypozyczalnia */

$this->title = 'Dodaj nową wypożyczalnie do bazy';
$this->params['breadcrumbs'][] = ['label' => 'Wypożyczalnie', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wypozyczalnia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
