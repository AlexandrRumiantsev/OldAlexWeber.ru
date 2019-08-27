<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
$name = Yii::$app->user->identity->username;
$status = Yii::$app->user->identity->status; 
$ava = Yii::$app->user->identity->ava;
$mail = Yii::$app->user->identity->email;
$phone = Yii::$app->user->identity->phone; 
$baseUrl = Yii::$app->request->baseUrl;

if($ava==''){$ava='/images/defaulte.jpg';}
$this->title = 'Account';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
<?php
echo '<div class="info_profile">';
echo '<div> Логин </div>'; 
echo "<div class='blue'>$name</div>";
echo '<div> E-mail </div>'; 
echo "<div class='blue'>$mail</div>";
echo '<div> Статус </div>';
echo "<div class='blue'>$status</div>";
echo '<div> Телефон </div>';
echo "<div class='blue'>$phone</div>";
echo '</div>';
echo "<div class='img_profile'><img src='$baseUrl/$ava'/>" .'</div>';
?>
</div>
