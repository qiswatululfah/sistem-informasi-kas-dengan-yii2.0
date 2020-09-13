<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataMahasiswa */

$this->title = 'Update ' ;//. $model->nim;
$this->params['breadcrumbs'][] = ['label' => 'Data Mahasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nim, 'url' => ['view', 'id' => $model->nim]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-mahasiswa-update">

    <h1></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
