<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;
?>
<div id='body'>

<?php
if($comments){
			    foreach ($comments as $m){
					echo "<div class='notification'>";
					echo "<img  class='page_notif' src='/images/red.png'/>";
					echo 'Время: '.$m -> dates;
                   
					$nameblog = $m -> nameblog;
                    echo '. Комментарий к статье: <a target="_blank" href="'.Url::to('/comment?title='.$nameblog).'">'.$nameblog;
					echo "</a><div class='notif'>";
					echo ' '.$m -> autor .'. Написал вам:';
                 	echo '<span class="comment_notification"> '.$m -> content; echo '</span>';	
					echo "</div>";
                    echo "</div>";

                     				
				}
}
?>

</div>
