<?php

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\comment;
    
    AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
 
    
 
    




 <!-- Yandex.Metrika counter -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49424830 = new Ya.Metrika2({
                    id:49424830,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49424830" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121227686-1"></script>



<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121227686-1');
</script>

<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Fira+Sans" rel="stylesheet">
 <meta property="og:title" content="Разработка WEB приложений">
 <meta property="og:image" content="http://alexweber.ru/images/m.jpg">
 <meta property="og:description" content="WEB-Developer Александр Румянцев. Разработка web приложений full-stack(react.js/yii2), seo оптимизация">
 
<meta name="keywords" content="WEB-Developer, Александр Румянцев, full-stack(react.js/yii2), web, backend, frontend, yii, react, react.js, yii2, верстка,seo,сео">
<meta name="description" content="WEB-Developer Александр Румянцев. Разработка web - full-stack(react.js/yii2).">
<link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">    
<link href="https://fonts.googleapis.com/css?family=Chicle|Indie+Flower|Lobster" rel="stylesheet">

<link rel="icon" type="image/png" href="images/favicon.ico">




<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>


<div class='img'></div>
<div class='img-overlay' style='height:600px;padding-bottom:30px;background-image:url(<?php echo Yii::$app->request->baseUrl; ?>/images/header.jpg)'>
</div>
<div class="jumbotron">
        <h1>Web-developer</h1>
         
        <h2 class="visible-lg lead h2main">full-stack developer Александр Румянцев.</h2>
		<p class="visible-sm lead">Версия сайта для планшетов.</p>
		<p class="visible-md lead">Версия сайта для планшетов.</p>
		<p class="visible-xs lead">Мобильная версия сайта.</p>
                
         <!--<div class='img-overlay' style='background-image:url(<?php echo Yii::$app->request->baseUrl; ?>/images/VK.png)'>
        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">ВК</a></p>
		<p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Facebook</a></p> -->
    </div>

<?php $baseUrl = Yii::$app->request->baseUrl;?>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
        Yii::$app->user->isGuest;
        $username = Yii::$app->user->identity->username;
  
	    if($username)$comment = comment::find()->where(['touser' => $username]) -> all();

	$status = Yii::$app->user->identity->status;
	$ava = Yii::$app->user->identity->ava;
	if($ava==''){$ava='/images/defaulte.jpg';}
    NavBar::begin([
        'brandLabel' => 'GitHub',
        'brandUrl' => 'https://github.com/AlexandrRumiantsev?tab=repositories',
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
    $menuItems = [
         ['label' => '8 927 530 84 51', 'url' => ['8 927 530 84 51']],
        ['label' => 'r-sasha@list.ru', 'url' => ['r-sasha@list.ru']],
        ['label' => 'Главная', 'url' => ['/site/index']],
        ['label' => 'Обратная связь', 'url' => ['/site/communications']],
		
		
		
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Авторизация', 'url' => ['/site/login']];
	}
    else {
		if($status == 'admin'){
		$menuItems[] = ['label' => 'Админка', 'url' => ['/site/admin']];
		}
		
		$menuItems[] = ['label' => 'Личный кабинет', 'url' => ['/site/account']];
        $path_to_ava = "\\$ava";
         $ava = trim($ava,' ');
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
			."<img class='profile_img' src='$ava'>"
			. '<div class="user_name">' .Yii::$app->user->identity->username .'</div>'
            . Html::submitButton(			       
                 "<img class='img_logout' src='$baseUrl/images/exit.png'>",
                ['class' => 'btn btn-link logout',
				 'style' => 'background-image:url('.$baseUrl .'/images/exit.png' .')']
            )
			
            . Html::endForm()
            . '</li>';
		
		$menuItems[] = '<li>'
            . Html::beginForm(['/site/edit'], 'post')
            . Html::submitButton(			       
                 "<img class='img_edit' src='$baseUrl/images/edit_profile.png'>",
                ['class' => 'btn btn-link logout']
            )		
            . Html::endForm()
            . '</li>';
		if($comment[0]['content']){
			$menuItems[] = '<li>'
            . Html::beginForm(['/site/notification'], 'post')
            . Html::submitButton(
                "<img class='img_hello' src='$baseUrl/images/red.png'>",
               ['class' => 'btn btn-link logout']
           )
        . Html::endForm()
        . '</li>';
		}else{
         			
		$menuItems[] = '<li>'
            . Html::beginForm(['/site/notification'], 'post')
           . Html::submitButton(
                "<img class='img_helloW' src='$baseUrl/images/qwerty.png'>",
               ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
		}
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
		
    ]);
    NavBar::end();
    ?>
	
	<div id='main_padding'></div>

    <div class="container dop" style=' background:white;  border-radius:15px;'>

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
	
</div>
<!--
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; </p>

        <p class="pull-right"></p>
    </div>
</footer>
-->
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>

<script src="./index.js"></script>

<?php $this->endBody() ?>



<?php $this->endPage() ?>



</body>
</html>

