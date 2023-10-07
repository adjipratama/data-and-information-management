<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $IdUser
 * @property int $IdRole
 * @property string|null $Nip
 * @property string|null $Username
 * @property string|null $Password
 * @property string|null $Email
 * @property string|null $Nama
 * @property string|null $NoHp
 * @property string|null $JenisKelamin
 * @property string|null $Alamat
 * @property string|null $TanggalLahir
 *
 * @property Role $idRole
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdRole'], 'required'],
            [['IdRole'], 'integer'],
            [['Alamat'], 'string'],
            [['TanggalLahir'], 'safe'],
            [['Nip', 'Username', 'Password', 'Email', 'Nama'], 'string', 'max' => 255],
            [['NoHp'], 'string', 'max' => 14],
            [['JenisKelamin'], 'string', 'max' => 5],
            [['IdRole'], 'exist', 'skipOnError' => true, 'targetClass' => Role::class, 'targetAttribute' => ['IdRole' => 'IdRole']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdUser' => 'Id User',
            'IdRole' => 'Id Role',
            'Nip' => 'Nip',
            'Username' => 'Username',
            'Password' => 'Password',
            'Email' => 'Email',
            'Nama' => 'Nama',
            'NoHp' => 'No Hp',
            'JenisKelamin' => 'Jenis Kelamin',
            'Alamat' => 'Alamat',
            'TanggalLahir' => 'Tanggal Lahir',
        ];
    }

    /**
     * Gets query for [[IdRole]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdRole()
    {
        return $this->hasOne(Role::class, ['IdRole' => 'IdRole']);
    }
}
