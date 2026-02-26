<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ets_goods".
 *
 * @property int $id
 * @property int $parsed_again
 * @property string|null $good_code
 * @property string|null $vendore_code
 * @property string|null $glink
 * @property string|null $title
 * @property string|null $descr
 * @property string|null $type
 * @property string|null $cat
 * @property string|null $precat
 * @property string|null $undercat
 * @property int|null $start_price
 * @property int|null $price
 * @property int|null $old_price
 * @property int|null $pov_price
 * @property float|null $rating
 * @property string|null $gosreester
 * @property string|null $guarantee
 * @property string|null $brand
 * @property string|null $country
 * @property string|null $main_img
 * @property string|null $thumb
 * @property string|null $images
 * @property string|null $videos
 * @property string|null $features
 * @property string|null $features_t
 * @property string|null $compectation
 * @property string|null $accessories
 * @property string|null $files
 * @property string|null $confs_arr
 * @property int|null $accio
 * @property int|null $hit
 * @property int|null $new
 * @property string|null $ost
 * @property string|null $site_link
 * @property int $active
 */
class EtsGoods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ets_goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parsed_again', 'start_price', 'price', 'old_price', 'pov_price', 'accio', 'hit', 'new', 'active'], 'integer'],
            [['good_code', 'vendore_code', 'glink', 'title', 'descr', 'type', 'cat', 'precat', 'undercat', 'gosreester', 'guarantee', 'brand', 'country', 'main_img', 'thumb', 'images', 'videos', 'features', 'features_t', 'compectation', 'accessories', 'files', 'confs_arr', 'ost', 'site_link'], 'string'],
            [['rating'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'parsed_again' => Yii::t('app', 'Parsed Again'),
            'good_code' => Yii::t('app', 'Good Code'),
            'vendore_code' => Yii::t('app', 'Vendore Code'),
            'glink' => Yii::t('app', 'Glink'),
            'title' => Yii::t('app', 'Title'),
            'descr' => Yii::t('app', 'Descr'),
            'type' => Yii::t('app', 'Type'),
            'cat' => Yii::t('app', 'Cat'),
            'precat' => Yii::t('app', 'Precat'),
            'undercat' => Yii::t('app', 'Undercat'),
            'start_price' => Yii::t('app', 'Start Price'),
            'price' => Yii::t('app', 'Price'),
            'old_price' => Yii::t('app', 'Old Price'),
            'pov_price' => Yii::t('app', 'Pov Price'),
            'rating' => Yii::t('app', 'Rating'),
            'gosreester' => Yii::t('app', 'Gosreester'),
            'guarantee' => Yii::t('app', 'Guarantee'),
            'brand' => Yii::t('app', 'Brand'),
            'country' => Yii::t('app', 'Country'),
            'main_img' => Yii::t('app', 'Main Img'),
            'thumb' => Yii::t('app', 'Thumb'),
            'images' => Yii::t('app', 'Images'),
            'videos' => Yii::t('app', 'Videos'),
            'features' => Yii::t('app', 'Features'),
            'features_t' => Yii::t('app', 'Features T'),
            'compectation' => Yii::t('app', 'Compectation'),
            'accessories' => Yii::t('app', 'Accessories'),
            'files' => Yii::t('app', 'Files'),
            'confs_arr' => Yii::t('app', 'Confs Arr'),
            'accio' => Yii::t('app', 'Accio'),
            'hit' => Yii::t('app', 'Hit'),
            'new' => Yii::t('app', 'New'),
            'ost' => Yii::t('app', 'Ost'),
            'site_link' => Yii::t('app', 'Site Link'),
            'active' => Yii::t('app', 'Active'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return EtsGoodsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EtsGoodsQuery(get_called_class());
    }
}
