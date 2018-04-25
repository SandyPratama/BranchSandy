<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kota;

/**
 * PegawaiSearch represents the model behind the search form about `app\models\Pegawai`.
 */
class KotaSearch extends Kota
{
    /**
     * @inheritdoc
     */
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
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Kota::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'nama_kota' => $this->nama_kota,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'nama_kota', $this->nama_kota]);

        return $dataProvider;
    }
}
