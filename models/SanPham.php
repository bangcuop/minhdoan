<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "san_pham".
 *
 * @property integer $id
 * @property integer $loai_san_pham_id
 * @property string $ten
 * @property string $ma
 * @property string $anh
 * @property string $mau_sac
 * @property string $kich_thuoc
 * @property double $gia_tien
 * @property integer $tinh_trang
 * @property integer $luot_xem
 * @property integer $dong_san_pham
 * @property integer $valid
 * @property string $ngay_tao
 * @property integer $hang_moi
 * @property string $mo_ta
 * @property integer $so_luong_san_pham
 *
 * @property LoaiSanPham $loaiSanPham
 */
class SanPham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'san_pham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loai_san_pham_id', 'ten', 'ma'], 'required'],
            [['loai_san_pham_id', 'tinh_trang', 'luot_xem', 'dong_san_pham', 'valid', 'hang_moi', 'so_luong_san_pham'], 'integer'],
            [['gia_tien'], 'number'],
            [['ngay_tao'], 'safe'],
            [['mo_ta'], 'string'],
            [['ten', 'anh'], 'string', 'max' => 500],
            [['ma'], 'string', 'max' => 100],
            [['mau_sac'], 'string', 'max' => 45],
            [['kich_thuoc'], 'string', 'max' => 200],
            [['loai_san_pham_id'], 'exist', 'skipOnError' => true, 'targetClass' => LoaiSanPham::className(), 'targetAttribute' => ['loai_san_pham_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'loai_san_pham_id' => Yii::t('app', 'Loai San Pham ID'),
            'ten' => Yii::t('app', 'Ten'),
            'ma' => Yii::t('app', 'Ma'),
            'anh' => Yii::t('app', 'Anh'),
            'mau_sac' => Yii::t('app', 'Mau Sac'),
            'kich_thuoc' => Yii::t('app', 'Kich Thuoc'),
            'gia_tien' => Yii::t('app', 'Gia Tien'),
            'tinh_trang' => Yii::t('app', 'Tinh Trang'),
            'luot_xem' => Yii::t('app', 'Luot Xem'),
            'dong_san_pham' => Yii::t('app', 'Dong San Pham'),
            'valid' => Yii::t('app', 'Valid'),
            'ngay_tao' => Yii::t('app', 'Ngay Tao'),
            'hang_moi' => Yii::t('app', 'Hang Moi'),
            'mo_ta' => Yii::t('app', 'Mo Ta'),
            'so_luong_san_pham' => Yii::t('app', 'So Luong San Pham'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoaiSanPham()
    {
        return $this->hasOne(LoaiSanPham::className(), ['id' => 'loai_san_pham_id']);
    }

    /**
     * @inheritdoc
     * @return SanPhamQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SanPhamQuery(get_called_class());
    }
}
