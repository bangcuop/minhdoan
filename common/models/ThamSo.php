<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tham_so".
 *
 * @property integer $id
 * @property string $ten
 * @property string $gia_tri
 * @property integer $valid
 * @property string $ngay_tao
 */
class ThamSo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tham_so';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten', 'gia_tri'], 'required'],
            [['valid'], 'integer'],
            [['ten'], 'string', 'max' => 200],
            [['gia_tri', 'ngay_tao'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ten' => Yii::t('app', 'Ten'),
            'gia_tri' => Yii::t('app', 'Gia Tri'),
            'valid' => Yii::t('app', 'Valid'),
            'ngay_tao' => Yii::t('app', 'Ngay Tao'),
        ];
    }

    /**
     * @inheritdoc
     * @return ThamSoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ThamSoQuery(get_called_class());
    }
}
