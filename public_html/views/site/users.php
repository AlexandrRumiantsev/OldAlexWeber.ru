<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;


?>

<div>

			<?php
			$status = Yii::$app->user->identity->status;
			if($status == 'admin'){
				
			if($users){
			    foreach ($users as $m){
					$baseUrl=Yii::$app->request->baseUrl;
					$user = $m -> username;
					$mail = $m -> email;
					$phone  = $m -> phone ;
					$ava   = $m -> ava ;
					$id  = $m -> id ;
					$status  = $m -> status ;
					$password  = $m -> password ;
	
			

			echo "<div class='usercart'>
			      <div class='usercard_info'>
			      <div class='usercart_name'>$user</div> 
			      <div class='usercart_mail'>$mail</div> 
				  <div class='usercart_phone'>$phone</div>
				  <div class='usercart_id'>$id</div>
				  <div class='usercart_status'>$status</div>
				  <div class='usercart_password'>$password</div> 
				  </div>
				  
				  <span class='pop_upp_user' id='pop_upp_user".$user."'>
				  <a href='".Url::to(['site/users?user='.$user.'&del=true'])."'>Удалить</a>
				  <div class='cansel' id='cansel$user' ";?> onclick='cansel("<?='pop_upp_user'.$user?>")' <? echo ">
				  Отмена
				  </div>
				  </span>
				  
				  <div class='usercart_ava'><img style='float:left;'src='../../web/$ava'></div>
				  <div class='buttons'>
				  
                  <div class='del' ";?> onclick='del("<?=$user?>")' <? echo "id='del$user' >Удалить</div>
				  
				  <a href='".Url::to(['site/edituseradmin?user='.$user.''])."'>Редактировать</a>
				  </div>	  
				  </div>
				   	";
			}
			
				}else echo "page not found";
			}
			?>


</div>

 <script src="http://code.jquery.com/jquery-1.8.3.js"></script>

			<script>
			
			function del(id){
				
					$("#pop_upp_user" + id).css('display','block');
					
				}
			function cansel(block){
				$('#'+ block).css('display','none');
			}
			
           </script>

