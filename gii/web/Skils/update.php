<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Skils */

$this->title = 'Update Skils: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Skils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skils-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
