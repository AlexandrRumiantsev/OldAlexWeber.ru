<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class='coomunication_form'>

<?php $form = ActiveForm::begin([ 'method' => 'POST', 'id' => 'communicate_form', 'options' => ['enctype' => 'multipart/form-data']]) ?>
<h1>Обратная связь</h1>
<?= $form->field($form_model, 'name') ?>
<?= $form->field($form_model, 'mail') ?>
<?//= $form->field($form_model, 'dates') ?>
<?= $form->field($form_model, 'text')->textarea();?>
<?//= $form->field($form_model, 'id')?>
<?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>




</div>