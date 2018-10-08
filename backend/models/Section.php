<?php
namespace backend\models;
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05/10/2018
 * Time: 15:13:35
 */
class Section extends \common\models\Section{
public function getName($id){
    $models = \backend\models\Section::find()->where(['id'=>$id])->one();
    return $models->section_code;
}
}
