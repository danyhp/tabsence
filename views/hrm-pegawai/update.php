<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HrmPegawai */

$this->title = 'Update Hrm Pegawai: ' . $model->id_pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Hrm Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pegawai, 'url' => ['view', 'id' => $model->id_pegawai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hrm-pegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>