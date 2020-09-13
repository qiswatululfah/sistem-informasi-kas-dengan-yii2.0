<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KasMahasiswa */

$this->title = 'Import';
$this->params['breadcrumbs'][] = ['label' => 'Kas Mahasiswa', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kas-mahasiswa-create">

    <h1></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
