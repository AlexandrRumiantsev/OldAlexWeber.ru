<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

use yii\widgets\LinkPager;
$this->title = "Проекты";
?>

<div>

			<?php
			$status = Yii::$app->user->identity->status;
			if($projects){
			    foreach ($projects as $m){
					$baseUrl=Yii::$app->request->baseUrl;
					$url = $m -> url;
					$resurs = $m -> resurs;
					$pic  = $m -> pic ;
                                        $prew  = $m -> prew ;
					$studio   = $m -> studio ;
					$name  = $m -> name ;
					$id  = $m -> id ;
					if($studio=='Фабула'){
                                            $url_studio = 'http://fabula.red/';
					}
                                        if($studio=='Деловое ТВ'){
                                            $url_studio = 'http://fabula.red/';
					}
                                        if($studio=='Подряд'){
                                            $url_studio = 'http://alexweber.ru';
					}
			if($status == 'admin'){
			?>

			<?php		 
			echo "<div class='main_project'>";
			
			echo "<a href='$baseUrl/site/editprojectform?name_project=$name&&url_project=$url'><img class='panel_img' src='$baseUrl/images/edit.png'></a>";
			echo "<div";?> onclick='del("<?=$id?>")' <? echo"><img class='panel_img' src='$baseUrl/images/delete.png'></div>
			       		 <span class='pop_upp_user'  id='pop_upp_project".$id."'>
				         <a href='".Url::to(['site/projects?name_project='.$name.'&&url_project='.$url.''])."'>Удалить</a>
				         <div class='cansel' id='cansel$id' ";?> onclick='cansel("<?='pop_upp_project'.$id?>")' <? echo ">
				         Отмена
				         </div>
				         </span>";		 
			echo "<div class='info_project'>
						<div class='name_project'>
						$name									
						</div>
						<div class='url_project'>
						<div class='go-to-sait'><a href='$url'class='btn-proj' rel='nofollow' target='_blank'>Посмотреть</a></div>
                                                <img data-id='$baseUrl/images/projects/$pic' class='screen' src='$baseUrl/images/snap.png'>
						</div>
						<div class='resurs_project'>
						Стэк технологий: $resurs
						</div>	
						<div class='studio_project'>
						Проект реализован в студии: <a rel='nofollow' target='_blank' rel='nofollow' href='$url_studio'>$studio</a>
						</div>
			            </div>
                                    <div class='mob-clr'></div>
						<div style='background: url($baseUrl/images/mon.png) no-repeat;' class='pic_sloy'>
						<a  class='lightzoom' href='$baseUrl/images/projects/$pic'>
                                                <img class='pic_project' src='$baseUrl/images/projects/$prew'/>
                                                </a>
						</div>	
			       </div><hr class='hr-pr'>";
			}else{

					 
			echo "<div class='main_project'>";
			
					 
			echo "<div class='info_project'>
						<div class='name_project'>
						$name									
						</div>
						<div class='url_project'>
						<div class='go-to-sait'><a href='$url'class='btn-proj' rel='nofollow' target='_blank'>Посмотреть</a></div>
                                                    
                                                        <img data-id='$baseUrl/images/projects/$pic' class='screen' src='$baseUrl/images/snap.png'>
                                                        
						</div>
						<div class='resurs_project'>
						Стэк технологий: $resurs
						</div>	
						<div class='studio_project'>
						Проект реализован в студии: <a rel='nofollow' target='_blank' rel='nofollow' href='$url_studio'>$studio</a>
						</div>
			            </div>
                                    <div class='mob-clr'></div>
                                    
						<div style='background: url($baseUrl/images/mon.png) no-repeat;' class='pic_sloy'>
						
                                               
                                                <a  class='lightzoom' href='$baseUrl/images/projects/$pic'>
                                                    
                                                        <img class='pic_project' src='$baseUrl/images/projects/$prew'/>
                                                   
                                                </a>
                                                
						</div>	
			       </div><hr class='hr-pr'>";
			}
				}
			}

			?>

 <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<link rel="stylesheet" href="http://alexweber.ru/lightzoom/style.css" type="text/css">
<script type="text/javascript" src="http://alexweber.ru/lightzoom/lightzoom.js"></script>


<script type="text/javascript">
    jQuery('.lightzoom').lightzoom({speed: 400, viewTitle: true});
</script>

			<script>
			function del(id){
					$("#pop_upp_project" + id).css('display','block');
				}
			function cansel(block){
				$('#'+ block).css('display','none');
			}
                         </script>
           


</div>