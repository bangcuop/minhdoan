<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loai_san_pham".
 *
 * @property integer $id
 * @property string $ten
 * @property string $ma
 * @property integer $valid
 * @property string $ngay_tao
 * @property integer $id_cha
 *
 * @property SanPham[] $sanPhams
 */
class LoaiSanPham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loai_san_pham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten', 'ma'], 'required'],
            [['valid', 'id_cha'], 'integer'],
            [['ngay_tao'], 'safe'],
            [['ten'], 'string', 'max' => 200],
            [['ma'], 'string', 'max' => 50],
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
            'ma' => Yii::t('app', 'Ma'),
            'valid' => Yii::t('app', 'Valid'),
            'ngay_tao' => Yii::t('app', 'Ngay Tao'),
            'id_cha' => Yii::t('app', 'Id Cha'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSanPhams()
    {
        return $this->hasMany(SanPham::className(), ['loai_san_pham_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return LoaiSanPhamQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LoaiSanPhamQuery(get_called_class());
    }
}
