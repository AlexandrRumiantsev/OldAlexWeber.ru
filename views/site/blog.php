<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;
use app\models\comment;
?>
<div>

<div class="container">

<div class="col-lg-7 col-lg-offset-2">
<?php
			$status = Yii::$app->user->identity->status;
			if($blog){
			    foreach ($blog as $m){
					$baseUrl=Yii::$app->request->baseUrl;
					$title = $m -> title;
					$date_pub = $m -> date_pub;
					$content  = $m -> content ;
					$autor   = $m -> autor ;
					$time = $m -> times ;
					$index = $m -> indexs ;
					$preview = $m -> preview ;
                    
			if($status == 'admin'){
			
			echo  '<div class="content_blog">'
			     .'<a  target="_blank" href='.$baseUrl .'/images/blogs/'.$index .'><h2 class="title_blog">'.$title.'</h2></a>'
				 
				 .'<a class="autr_blog" href="?title='.$title.'&&date_pub='.$date_pub.'">Удалить</a>'
				 .'<a href="editblogform?title='.$title.'&&date_pub='.$date_pub.'&&time='.$time.'">Редактировать</a>'
				 .'<div class="autr_blog">Автор статьи: '.$autor.'</div>'
			     .'<div class="autr_blog">'.$date_pub.'</div>'
				 .'<img class="preview" src="'.$baseUrl .'/images/blogs/'.$preview .'">'
				 .'<pre class="cont_in_blog">'.$content.'</pre>'
                 .'<div style="display:none;" class="hidden_block">'.$time.'</div>'
				 .'<a  class="main-comment comm_pr" href="'.Url::to(['site/comment?title='.$title]).'">Комментарии('.comment::find()->where(['nameblog' => $title])->count().')</a>'
				 .'</div>';
			                      }else{ 
                  			echo  	 '<div class="content_blog">'
			     .'<a target="_blank" href='.$baseUrl .'/images/blogs/'.$index .'><h2 class="title_blog">'.$title.'</h2></a>'
									 .'<div>Автор статьи: '.$autor.'</div>'
									 .'<div>'.$date_pub.'</div>'
                                                                           .'<img class="preview" src="'.$baseUrl .'/images/blogs/'.$preview .'">'
									 .'<pre class="cont_in_blog">'.$content.'</pre>'
									 .'<a  class="main-comment" href="'.Url::to(['site/comment?title='.$title]).'">Комментарии('.comment::find()->where(['nameblog' => $title])->count().')</a>'
									 .'</div>';
			     }
				                      }
			}
			?>
</div>

</div>
