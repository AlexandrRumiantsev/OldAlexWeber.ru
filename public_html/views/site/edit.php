<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
$this->title = 'Редактирование профиля';
$this->params['breadcrumbs'][] = $this->title;

$name = Yii::$app->user->identity->username;
$status = Yii::$app->user->identity->status; 
$ava = Yii::$app->user->identity->ava;
$mail = Yii::$app->user->identity->email;
$phone = Yii::$app->user->identity->phone; 
$baseUrl = Yii::$app->request->baseUrl; 

if($ava==''){$ava='/images/defaulte.jpg';}

$this->title = 'Profile: ' .$name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
   
        <div class="row">
            <div class="edit_user col-lg-5">
					<?php $form = ActiveForm::begin([ 'method' => 'POST', 'options' => ['enctype' => 'multipart/form-data']]) ?>
					<input type="hidden" name="_frontendCSRF" value="<?=Yii::$app->request->getCsrfToken()?>" />
					<?= $form->field($formEdit, 'username')->textInput(['value' => $name]) ?>
					<?= $form->field($formEdit, 'email')->textInput(['value' => $mail]) ?>
					<?= $form->field($formEdit, 'phone')->textInput(['value' => $phone]) ?>
					<?= $form->field($formEdit, 'password') ?>
					<?= $form->field($formEdit, 'ava')->fileinput() ?>
					<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
					<?php ActiveForm::end() ?>
            </div>
			<img class='img_edit_profile' src='<?=$baseUrl?>/<?=$ava?>'\> 
        </div>

</div>



