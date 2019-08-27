<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$status = Yii::$app->user->identity->status;
?>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>

		
<div>
<? if($status == 'admin'){ ?>
<?php $form = ActiveForm::begin([ 'method' => 'POST','id' => 'addproject-form', 'options' => ['enctype' => 'multipart/form-data']]) ?>
<?= $form->field($form_model, 'title') ?>
<?= $form->field($form_model, 'date_pub') ?>
<?= $form->field($form_model, 'autor') ?>
<?= $form->field($form_model, 'content')->textarea() ?>
<?= $form->field($form_model, 'index')->fileinput() ?>
<?= $form->field($form_model, 'preview')->fileinput() ?>
Блок добавления файлов
<?= $form->field($form_model, 'files')->label(false)->hiddenInput() ?>

<br>

<?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>
<? }
?>
</div>

