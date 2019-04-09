<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Skils */

$this->title = 'Create Skils';
$this->params['breadcrumbs'][] = ['label' => 'Skils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skils-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
