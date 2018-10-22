<?php

/* @var $this yii\web\View */
/* @var $model app\models\HrmPegawai */

$this->title = 'Update Data Pegawai: ' . $model->id_pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Data Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pegawai, 'url' => ['view', 'id' => $model->id_pegawai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hrm-pegawai-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
