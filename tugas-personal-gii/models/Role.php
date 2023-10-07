<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "role".
 *
 * @property int $IdRole
 * @property string $NamaRole
 * @property string|null $Keterangan
 *
 * @property Users[] $users
 */
class Role extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'role';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NamaRole'], 'required'],
            [['NamaRole', 'Keterangan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdRole' => 'Id Role',
            'NamaRole' => 'Nama Role',
            'Keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::class, ['IdRole' => 'IdRole']);
    }
}
