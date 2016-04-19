<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ThongTinHoTro;

/**
 * ThongTinHoTroSearch represents the model behind the search form about `app\models\ThongTinHoTro`.
 */
class ThongTinHoTroSearch extends ThongTinHoTro
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'valid'], 'integer'],
            [['ho_ten', 'skype', 'yahoo', 'ngay_tao'], 'safe'],
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
        $query = ThongTinHoTro::find();

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
            'id' => $this->id,
            'valid' => $this->valid,
        ]);

        $query->andFilterWhere(['like', 'ho_ten', $this->ho_ten])
            ->andFilterWhere(['like', 'skype', $this->skype])
            ->andFilterWhere(['like', 'yahoo', $this->yahoo])
            ->andFilterWhere(['like', 'ngay_tao', $this->ngay_tao]);

        return $dataProvider;
    }
}
