<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengeluaran */

$this->title = 'Update' ;//. $model->id_keluar;
$this->params['breadcrumbs'][] = ['label' => 'Pengeluaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_keluar, 'url' => ['view', 'id' => $model->id_keluar]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengeluaran-update">

    <h1></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'kode' => $kode,
    ]) ?>

</div>
