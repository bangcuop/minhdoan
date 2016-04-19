<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tin_tuc".
 *
 * @property string $id
 * @property string $tieu_de
 * @property string $noi_dung
 * @property string $ngay_tao
 * @property integer $valid
 * @property integer $loai
 */
class TinTuc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tin_tuc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tieu_de', 'noi_dung'], 'required'],
            [['noi_dung'], 'string'],
            [['ngay_tao'], 'safe'],
            [['valid', 'loai'], 'integer'],
            [['tieu_de'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tieu_de' => Yii::t('app', 'Tieu De'),
            'noi_dung' => Yii::t('app', 'Noi Dung'),
            'ngay_tao' => Yii::t('app', 'Ngay Tao'),
            'valid' => Yii::t('app', 'Valid'),
            'loai' => Yii::t('app', 'Loai'),
        ];
    }

    /**
     * @inheritdoc
     * @return TinTucQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TinTucQuery(get_called_class());
    }
}
