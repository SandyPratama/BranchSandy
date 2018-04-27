<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "pegawai".
 *
 * @property integer $id
 * @property string $nama
 * @property string $email
 * @property string $alamat
 * @property integer $domisili
 * @property string $kode_pos
 * @property string $created_at
 * @property string $updated_at
 */
class Pegawai extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'email', 'alamat', 'domisili', 'kode_pos'], 'required'],
            [['alamat'], 'string'],
            [['id', 'domisili'], 'integer'],
            // [['created_at', 'updated_at'], 'safe'],
            [['nama', 'email'], 'string', 'max' => 255],
            [['kode_pos'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'email' => 'Email',
            'alamat' => 'Alamat',
            'domisili' => 'Domisili',
            'kode_pos' => 'Kode Pos',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                // 'attributes' => [
                //     ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                //     ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                // ],
                'value' => new Expression('NOW()') 
            ],
        ];
    }

    
    public function getKota()
    {
        return $this->hasOne(Kota::className(), ['id' => 'domisili']);
    }
}
