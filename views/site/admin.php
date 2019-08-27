<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'AdminPanel';
$this->params['breadcrumbs'][] = $this->title;
$status = Yii::$app->user->identity->status;


if($status == 'admin'){

	$urlAdd = Yii::$app->request->baseUrl .'/site/addproject';
	$urlAddBlog = Yii::$app->request->baseUrl .'/site/addblog';
	$urlV = 'http://markup.su/highlighter/';
	echo  '
    <a class="photo" data-title="Добавить проект" href="'.$urlAdd .'"><img src="/web/images/addproject.png"></a>
	
	<a class="photo" data-title="Добавить статью" href="'.$urlAddBlog .'"><img src="/web/images/blogaddpic.jpg"></a>
	
	<a class="photo" data-title="Вёрстка страницы статьи" href="'.$urlV .'"><img src="/web/images/page.jpg"></a>
	
	
	
	<a class="photo" data-title="Пользователи" href="' . Url::to(['users']) .'"><img src="/web/images/useradm.jpg"></a>';
	}