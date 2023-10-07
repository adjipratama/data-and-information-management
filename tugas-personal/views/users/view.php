<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $data->Nama;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $data,
        'attributes' => [
            'IdUser',
            'IdRole',
            'Nip',
            'Username',
            'Password',
            'Email:email',
            'Nama',
            'NoHp',
            'JenisKelamin',
            'Alamat:ntext',
            'TanggalLahir',
        ],
    ]) ?>

</div>
