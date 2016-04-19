<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GioiThieu;

/**
 * GioiThieuSearch represents the model behind the search form about `app\models\GioiThieu`.
 */
class GioiThieuSearch extends GioiThieu {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'valid'], 'integer'],
            [['mo_ta', 'tieu_de', 'ngay_tao'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        $query = GioiThieu::find();

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
            'valid' => $this->valid,
            'ngay_tao' => $this->ngay_tao,
        ]);

        $query->andFilterWhere(['like', 'mo_ta', $this->mo_ta]);
        $query->andFilterWhere(['like', 'tieu_de', $this->tieu_de]);
        return $dataProvider;
    }

}
