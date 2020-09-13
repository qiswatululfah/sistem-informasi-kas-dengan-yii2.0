<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inventaris;

/**
 * InventarisSearch represents the model behind the search form about `app\models\Inventaris`.
 */
class InventarisSearch extends Inventaris
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_inv', 'nama_brg', 'keterangan', 'timestamp'], 'safe'],
            [['harga'], 'number'],
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
        $query = Inventaris::find();

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
            'harga' => $this->harga,
        ]);

        $query->andFilterWhere(['like', 'id_inv', $this->id_inv])
            ->andFilterWhere(['like', 'nama_brg', $this->nama_brg])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'timestamp', $this->timestamp]);

        return $dataProvider;
    }
}
