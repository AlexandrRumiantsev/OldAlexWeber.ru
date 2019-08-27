<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
$this->title = 'Редактирование проекта';
$this->params['breadcrumbs'][] = $this->title;

$name = Yii::$app->user->identity->username;
$status = Yii::$app->user->identity->status; 
$ava = Yii::$app->user->identity->ava;
$mail = Yii::$app->user->identity->email;
$phone = Yii::$app->user->identity->phone; 
$baseUrl = Yii::$app->request->baseUrl; 

if($ava==''){$ava='/images/defaulte.jpg';}

$this->title = "Проект:" .$_GET['name_project'];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-contact">
   
        <div class="row">
            <div class="col-lg-5">
               
			   
			   <?php $form = ActiveForm::begin([ 'method' => 'POST', 'options' => ['enctype' => 'multipart/form-data']]) ?>
					<?= $form->field($formEdit, 'name')->textInput(['value' => $_GET['name_project']]) ?>
					<?= $form->field($formEdit, 'resurs')->textInput(['value' => '1']) ?>
					<?= $form->field($formEdit, 'url')->textInput(['value' => $_GET['url_project']]) ?>
					<?= $form->field($formEdit, 'studio') ?>
					<?= $form->field($formEdit, 'pic')->fileinput() ?>
					<img src='<?=$ava?>'> <br>
					<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
					<?php ActiveForm::end() ?>
					
					
            </div>
        </div>

</div>




