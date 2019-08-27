<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
$this->title = 'Редактирование статьи';
$this->params['breadcrumbs'][] = $this->title;

$name = Yii::$app->user->identity->username;
$status = Yii::$app->user->identity->status; 
$ava = Yii::$app->user->identity->ava;
$mail = Yii::$app->user->identity->email;
$phone = Yii::$app->user->identity->phone; 
$baseUrl = Yii::$app->request->baseUrl; 

if($ava==''){$ava='/images/defaulte.jpg';}

//$this->title = "Проект:" .$_GET['name_project'];
//$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-contact">
   
        <div class="row">
            <div class="col-lg-5">

			        <?php $form = ActiveForm::begin([ 'method' => 'POST', 'options' => ['enctype' => 'multipart/form-data']]) ?>
					<?= $form->field($formEdit, 'title')->textInput(['value' => $_GET['title']]) ?>
					<?= $form->field($formEdit, 'content')?>
					<?= $form->field($formEdit, 'date_pub')->textInput(['value' => $_GET['date_pub']]) ?>
					<?= $form->field($formEdit, 'autor') ?>
					<?= $form->field($formEdit, 'index')->fileinput() ?>
				    <?= $form->field($formEdit, 'time')->label(false)->hiddenInput(['value' => $_GET['time']]) ?>
					<pre>Блок добавления файлов</pre>
					<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
					<?php ActiveForm::end() ?>
					
					
            </div>
        </div>

</div>




