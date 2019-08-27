<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */
use app\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;


$username = Yii::$app->user->identity->username;
$time = date('l jS \of F Y h:i:s A');
$title = $_GET['title'];
$url = Yii::$app->request->baseUrl;
$status = Yii::$app->user->identity->status; 
?>
<div>
<h1>Комментарии к статье "<?php echo $title;?>"</h1>


<?php
 
if($form_view){
      foreach ($form_view as $m){
		  $content = $m -> content;
		  $autor = $m -> autor;
		  $dates = $m -> dates;
		  $id = $m -> id;
		  $user_base = User::find()->where(['username'=>$autor])->one();
          $ava = $user_base->ava;
		  echo "<pre>";
    
		  echo "
		       <div class='img_div_comment'><img class='img_comment' src='$url/$ava'/></div>";
		if($autor == $username or $status=='admin'){
          echo "<div class='panal_div'>";
          echo "".Html::a('Редактировать', Url::to(['site/commentedit']), 
	           ['data-method' => 'POST' , 'class' => 'edit_comment',
                'data-params' => ['content' => $content,'autor' => $autor,'dates' => $dates,'title' =>$title, 'id' => $id],] );
		  echo "<div class='del' ";?> onclick='del("<?=$id?>")' <? echo "id='del$autor$dates' >Удалить</div>";
		  echo "</div>";
		  echo "<div id='pop_upp_comment$id' class='pop_upp_comment'>";
		  echo "".Html::a('Удалить', Url::to(['site/commentdel']), 
	           ['data-method' => 'POST' , 
                'data-params' => ['content' => $content,'autor' => $autor,'dates' => $dates,],] );
		  echo "<div class='cansel2' id='cansel$user' ";?> onclick='cansel("<?='pop_upp_comment'.$id?>")' <? echo ">
				  Отмена
				</div>";
		  echo "</div>";
    }	   
			echo   "<div class='answer_user' ";?> onclick='answer("<?=$autor?>")'<? echo "> Ответить</div>";
			//echo   "<div>Сообщение</div>";
			echo   "<br><div class='user_data'>
			   <div class='date_comment'>$dates</div>
		      <div class='autor_comment'>$autor</div>
			  </div>
			  <div class='clr'></div>
		      <div class='content_comment'>$content</div>
			  </pre>";
	  }
}
?>

<?php if($username){ ?>
<?php $form = ActiveForm::begin([ 'method' => 'POST', 'options' => ['enctype' => 'multipart/form-data']]) ?>
<?=$form->field($form_model, 'autor')->label(false)->hiddenInput(['VALUE' => "$username"]) ?>
<?=$form->field($form_model, 'date_comment')->label(false)->hiddenInput(['VALUE' => "$time"]) ?>
<?=$form->field($form_model, 'touser')->label(false)->Input(['id' => "touser" , 'VALUE' => "nonuser"]) ?>
<?=$form->field($form_model, 'title')->label(false)->hiddenInput(['VALUE' => "$title"]) ?>
<?//= $form->field($form_model, 'dates') ?>
<?=$form->field($form_model, 'content')->label('Ваш комментарий')->textarea(['id'=>'id_textarea']);?>
<?//= $form->field($form_model, 'id')?>
<?=Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>
<?php;}?>
</div>

 <script src="http://code.jquery.com/jquery-1.8.3.js"></script>

			<script>

			
			function del(param){
				
					$("#pop_upp_comment" + param).css('display','block');
					
				}
			function cansel(block){
				$('#'+ block).css('display','none');
			}
			function answer(to){
				document.getElementById('id_textarea').innerHTML=to + ', ';
				document.getElementById('commentaddform-touser').value=to;
				var scroll_el = $('#id_textarea');
				
				
				
				$('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 700); 
				
			}
			
           </script>
