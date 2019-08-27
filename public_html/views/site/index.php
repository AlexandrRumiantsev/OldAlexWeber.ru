
<?php

header('Content-Type: text/html; charset=UTF-8',true);
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'WEB-Developer Александр Румянцев';
defined('YII_ENV') or define('YII_ENV', 'dev');

?>

<div class="site-index">
<!--
<div class="slider-box">
  <div class="slider">
    <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/Yii-Framework.jpg" class='img_skill'> 
    <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/BITRIXx.png" class='img_skill'>
    <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/wp.jpg" class='img_skill' style='padding-top:10px;'>
    <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/Yii-Framework.jpg" class='img_skill'> 
    <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/BITRIXx.png" class='img_skill'>
    <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/wp.jpg" class='img_skill' style='padding-top:10px;'><img src="<?php echo Yii::$app->request->baseUrl; ?>/images/Yii-Framework.jpg" class='img_skill'> 
    <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/BITRIXx.png" class='img_skill'>
    <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/wp.jpg" class='img_skill' style='padding-top:10px;'><img src="<?php echo Yii::$app->request->baseUrl; ?>/images/Yii-Framework.jpg" class='img_skill'> 
    <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/BITRIXx.png" class='img_skill'>
    <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/wp.jpg" class='img_skill' style='padding-top:10px;'>
    
  </div>
</div>-->

    <div class="body-content">
        
        <div class="row">
            <div class="col-lg-4 col-xs-12">			

                <img src='<?php echo Yii::$app->request->baseUrl; ?>/images/Yii-Framework.jpg'/ class='img_skill'>
            </div>
            <div class="col-lg-4 col-xs-12">

                 <img src='<?php echo Yii::$app->request->baseUrl; ?>/images/BITRIXx.png'/ class='img_skill'>
            </div>
            <div class="col-lg-4 col-xs-12">

               <img src='<?php echo Yii::$app->request->baseUrl; ?>/images/wp.jpg'/ class='img_skill' style='padding-top:10px;'>
            </div>
            
            <div class="col-lg-4 col-xs-12">			

                <img src='<?php echo Yii::$app->request->baseUrl; ?>/images/laravel-logo.png'/ class='img_skill'>
            </div>
            <div class="col-lg-4 col-xs-12">

                 <img src='<?php echo Yii::$app->request->baseUrl; ?>/images/vue-logo.svg'/ class='img_skill'>
            </div>
            <div class="col-lg-4 col-xs-12">

               <img src='<?php echo Yii::$app->request->baseUrl; ?>/images/jquery-icon.png'/ class='img_skill' style='padding-top:10px;'>
            </div>
        </div>

		<hr>
		<h2>Участие в проектах</h2>
		 <div class="my-row">
                <div class='padding_proj'></div>
				<div class='img_mac' style='background:url(<?php echo Yii::$app->request->baseUrl; ?>/images/mac.png);'></div>

				 <div class='img_skill'
				 style='background-image:url(<?php echo Yii::$app->request->baseUrl;?>/images/mac.png);width: 596px;height: 496px;background-size: cover;'>
					<img src='<?php echo Yii::$app->request->baseUrl; ?>/images/code.png' class='img_projects'>
					
				 </div>

				  <div class='clr'> </div>
                                  <a href="<?= Url::to(['projects']) ?>"><div class='pr-btn'>ПОСМОТРЕТЬ!</div></a>
          </div> 
			
<!--		<hr>
		 <h2>Блог</h2>
		 
             <div class="my-row" style='margin-top:50px;'>
               
                <img src='<?php echo Yii::$app->request->baseUrl; ?>/images/blog.jpg'/ class='img_skill_blog'style=''>
                <span>
                      <p style='margin-bottom: 30px;'><i class='symbol'>!</i>Примеры кода</p>
					  <p style='margin-bottom: 30px;'><i class='symbol'>!</i>Изучение технологий разработки</p>
					  <p style='margin-bottom: 30px;'><i class='symbol'>!</i>Аналитика инструментов для разработки</p>
					 
				<a  class="btn btn-default" href="<?= Url::to(['blog']) ?>">Перейти в блог</a>
				</span>
            </div>
                <div class='clr'> </div>-->
			<hr>
			
			<div>
             <div>
	<span class="tag">
		<a href="#">PHP 7</a>		
	</span>	
	<span class="tag">		
		<a href="#">PHP 5.6</a>	
	</span>	
	<span class="tag">
		<a href="#">CSS3</a>
	</span>	
	<span class="tag">		
		<a href="#">HTML5</a>
	</span>	
	<span class="tag">		
		<a href="#">YII 2</a>		
	</span>	
	<span class="tag">	
		<a href="#">Bootstrap</a>		
	</span>	
	<span class="tag">		
		<a href="#">WordPress</a>		
	</span>	
	<span class="tag">		
		<a href="#">1c</a>		
	</span>	
	<span class="tag">		
		<a href="#">JavaScript</a>		
	</span>	
	<span class="tag">		
		<a href="#">ReactJS</a>
	</span>	
	<span class="tag">		
		<a href="#">JQuery</a>
	</span>	
	<span class="tag">		
		<a href="#">MySQL</a>
	</span>
	<span class="tag">		
		<a href="#">No-SQL(MongoDB)</a>
	</span>
	<span class="tag">		
		<a href="#">BITRIX</a>
	</span>
	<span class="tag">		
		<a href="#">PhpStorm</a>
	</span>
	<span class="tag">		
		<a href="#">PHPMYADMIN</a>
	</span>
	<span class="tag">		
		<a href="#">OpenServer</a>
	</span>
	<span class="tag">		
		<a href="#">Denwer</a>
	</span>
	<span class="tag">		
		<a href="#">LAMP</a>
	</span>
	<span class="tag">		
		<a href="#">Linux</a>
	</span>
	<span class="tag">		
		<a href="#">UBUNTU</a>
	</span>
	<span class="tag">		
		<a href="#">GIT</a>
	</span>
	<span class="tag">		
		<a href="#">GITHUB</a>
	</span>
	<span class="tag">		
		<a href="#">GITLAB</a>
	</span>
	<span class="tag">		
		<a href="#">Bitbucket </a>
	</span>
	<span class="tag">		
		<a href="#">JIRA </a>
	</span>
	<span class="tag">		
		<a href="#">SLACK </a>
	</span>
	<span class="tag">		
		<a href="#">Composer</a>
	</span>
	<span class="tag">		
		<a href="#">FacebookPixel</a>
	</span>
	<span class="tag">		
		<a href="#">PerfectPixel</a>
	</span>
	<span class="tag">		
		<a href="#">YandexMetrika</a>
	</span>
	<span class="tag">		
		<a href="#">Google analytics</a>
	</span>
	<span class="tag">		
		<a href="#">Phing</a>
	</span>
</div>
            </div>
			</div>
			
    </div>
    
<div id='chat'>
    <div class='block_chat'></div>
</div>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<!--<script type="text/javascript" src="http://alexweber.ru/index.js"></script>-->

<script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.25.0/babel.min.js"></script>


<!--Чат на реакте-->
<script type="text/babel">
    
  
class Hello extends React.Component {
           
            
            constructor(props) {
                super(props);
                 this.click = this.click.bind(this);
                 this.hide = this.hide.bind(this);
                 this.renderText = this.renderText.bind(this);
                 this.state = {
                     count: 1,
                     selected:'default',
                     chatWindow:'none',
                     chatWindowImg:'none',
                     displayChat:'none',
                     visor:'none',
                     form_chat:'form-chat-novisible',
                     message:'',
                     text:'',
                 };
                 
              }
            setFilter(filter){
                this.setState({selected  : filter})
                //this.props.onChangeFilter(filter);
            }
            click(event){
                        console.log(event);
                        this.setState({count: this.state.count + 1});
                        this.setState({chatWindow: 'chatWindow'});
                        this.setState({chatWindowImg: 'chatWindowImg'});
                        this.setState({visor: 'visible'});
                        this.setState({form_chat: 'form-chat-visible'});
                        this.setState({displayChat: 'displayChat'});
                        if(this.state.visor=='visible'){
                            this.setState({visor: 'invisible'});
                            this.setState({chatWindow: 'none'});
                            this.setState({chatWindowImg: 'none'});
                            this.setState({form_chat: 'form-chat-novisible'});
                            this.setState({displayChat: 'none'});
                        }
                        
            }
            componentDidUpdate(prevProps) {
                //Элемент цикла ДО отрисовки компонента
                //alert(prevProps);
                //alert('lolol1'); 
                //img-chat
            
            }
            componentWillUnmount(){
                //Элемент цикла ПОСЛЕ отрисовки компонента
               //alert('lolol2'); 
               
            }
            hide(value){
              
              //var chat = this.state.chatWindow; 
              //alert(chat); 
              //var result = chat == 'chatWindow';
              //alert(result);
//              if(result == true){
//                  this.setState({chatWindow: this.state.chatWindow + 'none'});
//                  this.setState({chatWindowImg: this.state.chatWindowImg + 'none'});
//              }
              
            }
            isActive(value){
                
                if(value===this.state.selected){
                    this.setState({selected:'active'});
                }
               
                //return 'btn '+((value===this.state.selected) ? 'active':'default');
             }
            renderText(text){
                console.log(Object.values(text));
                //console.log(text[0]);
                 this.setState({message: this.state.message  + " " + window.val});
             }
            handleTextChange(e){
                    var text = document.getElementsByClassName("inputText")[0];
                    window.val = text.value;
                    //alert(val);
                //this.setState({text: e.target.value});
            } 
            render() {
                        return <div>
                        <form className={this.state.form_chat}>
                            <input class='inputText'  onChange={this.handleTextChange} type='text'/>
                            <img id="image-send" onClick={this.renderText.bind('send_text')} alt="SEND" src="http://alexweber.ru/images/send_1.png"/>
                        </form>
                        <button onClick={this.click}>
                        <div className={this.state.chatWindow} >
                        <img className={this.state.chatWindowImg}  onClick={this.hide.bind('none')} src='http://alexweber.ru/images/delete.png'/>
                            <div className={this.state.displayChat} >
                                   {this.state.message}
                            </div>
                        </div>
                        <div id='idCount'>{this.state.count}</div>
                        <div id='visor'>{this.state.visor}</div>
                        <img className={this.state.selected} onClick={this.setFilter.bind(this, 'active')} src="/web/images/icon.gif"/>           
                       </button>
                       </div>;
            }
}

  
ReactDOM.render(
              <Hello />,
              document.getElementById("chat")
          ) 
  

  </script>
  <!--Чат на реакте -->
<?php	
?>
