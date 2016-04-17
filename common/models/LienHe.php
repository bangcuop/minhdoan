<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lien_he".
 *
 * @property integer $id
 * @property string $ho_ten
 * @property string $dia_chi
 * @property string $email
 * @property string $so_dien_thoai
 * @property string $gioi_tinh_kh
 * @property string $tuoi
 * @property string $facebook
 * @property string $gmail
 * @property string $noi_dung
 * @property string $ngay_tao
 * @property integer $valid
 */
class LienHe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lien_he';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ho_ten', 'dia_chi', 'email'], 'required'],
            [['ngay_tao'], 'safe'],
            [['valid'], 'integer'],
            [['ho_ten'], 'string', 'max' => 200],
            [['dia_chi'], 'string', 'max' => 500],
            [['email', 'gioi_tinh_kh', 'tuoi', 'facebook', 'gmail'], 'string', 'max' => 100],
            [['so_dien_thoai'], 'string', 'max' => 40],
            [['noi_dung'], 'string', 'max' => 1000],
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
            'dia_chi' => Yii::t('app', 'Dia Chi'),
            'email' => Yii::t('app', 'Email'),
            'so_dien_thoai' => Yii::t('app', 'So Dien Thoai'),
            'gioi_tinh_kh' => Yii::t('app', 'Gioi Tinh Kh'),
            'tuoi' => Yii::t('app', 'Tuoi'),
            'facebook' => Yii::t('app', 'Facebook'),
            'gmail' => Yii::t('app', 'Gmail'),
            'noi_dung' => Yii::t('app', 'Noi Dung'),
            'ngay_tao' => Yii::t('app', 'Ngay Tao'),
            'valid' => Yii::t('app', 'Valid'),
        ];
    }

    /**
     * @inheritdoc
     * @return LienHeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LienHeQuery(get_called_class());
    }
}
