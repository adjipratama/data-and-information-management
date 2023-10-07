<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->IdUser;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdUser' => $model->IdUser], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdUser' => $model->IdUser], [
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
            'IdUser',
            'IdRole',
            'Nip',
            'Username',
            'Password',
            // 'Email:email',
            // 'Nama',
            // 'NoHp',
            // 'JenisKelamin',
            // 'Alamat:ntext',
            // 'TanggalLahir',
        ],
    ]) ?>

</div>
