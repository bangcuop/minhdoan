<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gioi_thieu".
 *
 * @property integer $id
 * @property string $mo_ta
 * @property integer $valid
 * @property string $ngay_tao
 */
class GioiThieu extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'gioi_thieu';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['mo_ta'], 'required'],
            [['mo_ta'], 'string'],
            [['tieu_de'], 'required'],
            [['tieu_de'], 'string'],
            [['valid'], 'integer'],
            [['ngay_tao'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'mo_ta' => Yii::t('app', 'Mô tả'),
            'valid' => Yii::t('app', 'Trạng thái'),
            'ngay_tao' => Yii::t('app', 'Ngày tạo'),
            'tieu_de' => Yii::t('app', 'Tiêu đề'),
        ];
    }

    /**
     * @inheritdoc
     * @return GioiThieuQuery the active query used by this AR class.
     */
    public static function find() {
        return new GioiThieuQuery(get_called_class());
    }

}
