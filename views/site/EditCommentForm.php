<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
$this->title = 'Редактирование комментария';
$this->params['breadcrumbs'][] = $this->title;

$username = $_POST['autor'];
$content = $_POST['content'];

$id = $_POST['id'];
$time = date('l jS \of F Y h:i:s A');
$title = $_POST['title'];
?>
<div class="site-contact">
   
        <div class="row">
            <div class="col-lg-5">
               
			   
			   <?php $form = ActiveForm::begin([ 'method' => 'POST', 'options' => ['enctype' => 'multipart/form-data']]) ?>
					<?= $form->field($form_model, 'autor')->label(false)->hiddenInput(['VALUE' => "$username"]) ?>
					<? $form_model -> content = $content ?>
					<?= $form->field($form_model, 'content')->label('Редактировать комментарий')->textarea() ?>
					<?= $form->field($form_model, 'date_edit')->label(false)->hiddenInput(['VALUE' => "$time"]) ?>
					<?= $form->field($form_model, 'id')->label(false)->hiddenInput(['VALUE' => "$id"]) ?>
					<?= $form->field($form_model, 'title')->label(false)->hiddenInput(['VALUE' => "$title"]) ?>
				     
					
					<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
					<?php ActiveForm::end() ?>
					
            </div>
        </div>

</div>




