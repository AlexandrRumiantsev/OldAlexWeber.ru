<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$status = Yii::$app->user->identity->status;
?>
<div>
<? if($status == 'admin'){ ?>
<?php $form = ActiveForm::begin([ 'method' => 'POST','id' => 'addproject-form', 'options' => ['enctype' => 'multipart/form-data']]) ?>
<?= $form->field($form_model, 'name') ?>
<?= $form->field($form_model, 'url') ?>
<?= $form->field($form_model, 'studio') ?>
<?= $form->field($form_model, 'resurs')->textarea() ?>

<?= $form->field($form_model, 'pic')->fileInput() ?>
<?= $form->field($form_model, 'prew')->fileInput() ?>
<?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>
<? }
?>



</div>
