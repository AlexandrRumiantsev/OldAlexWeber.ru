<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$baseUrl = Yii::$app->request->baseUrl; 
?>
<div>

<? 
$username = $user -> username;
$mail = $user -> email;
$phone = $user -> phone;
$ava = $user -> ava;
$status = $user -> status;
$pass = $user -> password;
$id = $user -> id;
?>
<?php $form = ActiveForm::begin([ 'method' => 'POST', 'options' => ['enctype' => 'multipart/form-data']]) ?>
					<?= $form->field($EditUserAdmin, 'username')->textInput(['value' => $username]) ?>
					<?= $form->field($EditUserAdmin, 'email')->textInput(['value' => $mail]) ?>
					<?= $form->field($EditUserAdmin, 'phone')->textInput(['value' => $phone]) ?>
					<?= $form->field($EditUserAdmin, 'password')->textInput(['value' => $pass]) ?>
					<?= $form->field($EditUserAdmin, 'status') ?>
					<?= $form->field($EditUserAdmin, 'id')->textInput(['value' => $id]) ?>
					<?= $form->field($EditUserAdmin, 'ava')->fileinput() ?>
					<img src='<?='../../web/'.$ava?>'> <br>
					<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
					<?php ActiveForm::end() ?>

</div>
