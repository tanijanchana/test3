<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\StudentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Students', ['create'], ['class' => 'btn btn-info']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'firstname',
            'lastname',
[
        'attribute'=>'section',
    'value'=>function($data){
        return \backend\models\Section::getName($data->section);
    }
],
[
        'attribute'=>'status',
    'format'=>'html',
    'value'=>function($data){
        if($data->status==0){
            return "ไม่ใช้งาน";
        }else {
                return "ใช้งาน";
        }
    }
],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

    <?php
    $ball = "football";
    $sport = ['football','swim','tennis','basketball'];
    echo count($sport);
    echo $sport[2];
    print_r($ball);
    ?>
    <div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Enter a valid email address
    </div>

</div>
