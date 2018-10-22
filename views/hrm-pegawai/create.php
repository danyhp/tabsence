<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HrmPegawai */

$this->title = 'Create Hrm Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Hrm Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hrm-pegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
