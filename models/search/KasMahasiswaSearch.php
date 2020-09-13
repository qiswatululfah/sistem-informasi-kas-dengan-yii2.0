<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KasMahasiswa;

/**
 * KasMahasiswaSearch represents the model behind the search form of `app\models\KasMahasiswa`.
 */
class KasMahasiswaSearch extends KasMahasiswa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kas'], 'integer'],
            [['nim', 'tglsetor'], 'safe'],
            [['setor'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = KasMahasiswa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_kas' => $this->id_kas,
            'setor' => $this->setor,
            'tglsetor' => $this->tglsetor,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim]);

        return $dataProvider;
    }
}
