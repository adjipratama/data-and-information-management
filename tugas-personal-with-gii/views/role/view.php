<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->IdRole;
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="role-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdRole' => $model->IdRole], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdRole' => $model->IdRole], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdRole',
            'NamaRole',
            'Keterangan',
        ],
    ]) ?>

</div>
