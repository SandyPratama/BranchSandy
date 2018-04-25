<?php
namespace app\models;

use Yii;

class Kota extends \yii\db\ActiveRecord
{
	public static function tableName()
	{
		return 'kota';
	}

	public function rules()
    {
        return [
            [['nama_kota','created_at','updated_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama_kota'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_kota' => 'Nama Kota',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
?>