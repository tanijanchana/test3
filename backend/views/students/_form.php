<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Students */
/* @var $form yii\widgets\ActiveForm */
$status=[["id"=>0,"name"=>"ไม่ใช้งาน"],["id"=>1,"name"=>"ใช้งาน"]];
//$status=["id"=>0,"name"=>"ไม่ใช้งาน"];
$sport=["tennis","golf","football"];
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'section')->widget(Select2::className(),[
            'data'=>ArrayHelper::map(\backend\models\Section::find()->all(),'id','section_code'),
        'options'=>[
                'placeholder'=>"เลือกแผนก"
        ]
    ]) ?>

    <?= $form->field($model, 'status')->widget(Select2::className(),[
            'data'=>ArrayHelper::map($status,'id','name')
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>


    <?php
    for($i=0;$i<=count($status)-1;$i++){
        echo $status[$i]['name']."<br/>";
    }
    for($s=0;$s<=count($sport)-1;$s++){
        echo $sport[$s]."<br/>";
    }
//    foreach($status as $value){
      //  echo $value->id."<br/>";
   // }
    ?>

</div>
