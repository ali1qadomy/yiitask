<?php

use backend\models\Category;
use yii\db\Query;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\db\ActiveRecord;

/* @var $this yii\web\View */
/* @var $model backend\models\product */
/* @var $form yii\widgets\ActiveForm */
    /*   $query = new Query;
       $category=$query->select(['id','CategoryName'])->from('category')->all(); */
       /*$category=ArrayHelper::map(Category::find()->where(['id'=>yii::$app])all());*/
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options'=>['enctypt'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'ProductName')->textInput(['maxlength' => true]) ?>
  
    <?= $form->field($model, 'Categoryname')->dropDownList(ArrayHelper::map(Category::find()->all(),'id','CategoryName')) ?>

    <?= $form->field($model, 'price')->textInput() ?>
    
    <?= $form->field($model, 'file_img')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
