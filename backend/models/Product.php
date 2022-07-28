<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%product}}".
 *
 * @property int $id
 * @property string $ProductName
 * @property string|null $image
 * @property int $Categoryname
 * @property float $price
 *
 * @property Category $categoryname
 */
class Product extends \yii\db\ActiveRecord
{
    public $file_img;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%product}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ProductName', 'Categoryname', 'price'], 'required'],
            [['Categoryname'], 'integer'],
            [['price'], 'number'],
            [['ProductName'], 'string', 'max' => 255],
            [['file_img'],'file','extensions'=>'png,jpeg,jpg'],
            [['Categoryname'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['Categoryname' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ProductName' => 'Product Name',
            'image' => 'Image',
            'Categoryname' => 'Categoryname',
            'price' => 'Price',
        ];
    }

    /**
     * Gets query for [[Categoryname]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryname()
    {
        return $this->hasOne(Category::class, ['id' => 'Categoryname']);
    }
}
