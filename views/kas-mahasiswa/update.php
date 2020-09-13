<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KasMahasiswa */

$this->title = 'Update ';// . $model->id_kas;
$this->params['breadcrumbs'][] = ['label' => 'Kas Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kas, 'url' => ['view', 'id' => $model->id_kas]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kas-mahasiswa-update">

    <h1></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
