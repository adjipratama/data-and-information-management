<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $data->NamaRole;
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="role-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $data,
        'attributes' => [
            'IdRole',
            'NamaRole',
            'Keterangan',
        ],
    ]) ?>

</div>
