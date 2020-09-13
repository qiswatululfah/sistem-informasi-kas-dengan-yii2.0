<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengeluaran */

$this->title = 'Import';
$this->params['breadcrumbs'][] = ['label' => 'Pengeluaran', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengeluaran-create">

    <h1></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'kode' => $kode
    ]) ?>

</div>
