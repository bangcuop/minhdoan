<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "thongtin_hotro".
 *
 * @property integer $id
 * @property string $ho_ten
 * @property string $skype
 * @property string $yahoo
 * @property integer $valid
 * @property string $ngay_tao
 */
class ThongTinHoTro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thongtin_hotro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ho_ten'], 'required'],
            [['valid'], 'integer'],
            [['ho_ten', 'skype', 'yahoo', 'ngay_tao'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ho_ten' => Yii::t('app', 'Ho Ten'),
            'skype' => Yii::t('app', 'Skype'),
            'yahoo' => Yii::t('app', 'Yahoo'),
            'valid' => Yii::t('app', 'Valid'),
            'ngay_tao' => Yii::t('app', 'Ngay Tao'),
        ];
    }

    /**
     * @inheritdoc
     * @return ThongtinHotroQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ThongtinHotroQuery(get_called_class());
    }
}
