<?php
namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SignupForm;
use app\models\UserIdentity;
use app\models\Projects;
use app\models\User;
use app\models\ProjectAddForm;
use app\models\blog;
use app\models\BlogAddForm;
use app\models\EditUserForm;
use app\models\EditUserAdmin;
use app\models\EditProjectForm;
use app\models\EditBlogForm;
use app\models\communications;
use app\models\CommunicationsForm;
use app\models\CommentAddForm;
use app\models\comment;
use app\models\EditCommentForm;
use yii\helpers\Url;
use yii\data\Pagination;

class SiteController extends Controller
{
	
	
	public function beforeAction($action) 
    { 
    $this->enableCsrfValidation = false; 
    return parent::beforeAction($action); 
    }
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

	public function actionNotification()
	{   
	   $username = Yii::$app->user->identity->username;
		$comment = comment::find()->where(['touser' => $username]) -> all();
		return $this->render('notification',[
            'comments' => $comment,
        ]);
	}
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
	
	 public function actionAdmin()
    {
        return $this->render('admin');;
    }

	
	 public function actionDetaliesSkill()
    {
        
            return $this->render('DetaliesSkill');
        
    }
	
	
	public function actionSmm()
    {
        
            return $this->render('SMM');
        
    }
	
		public function actionEdit()
    {
        $formEdit = new EditUserForm();
		
		
		
		if($formEdit->load(Yii::$app->request->post())) {
            
            $formUsername = strip_tags($_POST['EditUserForm']['username']);
            $formEmail = strip_tags($_POST['EditUserForm']['email']);
            $formPhone = strip_tags($_POST['EditUserForm']['phone']);
            $formPassword = strip_tags($_POST['EditUserForm']['password']);
            $formAva = "images\ " .$_FILES['EditUserForm']['name']['ava'];
            
			$user = User::find()->where(['username' => $formUsername]) -> one();
			
			
			$user->username = $formUsername;
			$user->email = $formEmail;
			$user->phone = $formPhone;
			$user->password = md5($formPassword);
			
			$formEdit -> ava = UploadedFile::getInstance($formEdit,'ava');		
			$formEdit -> ava -> saveAs($formAva);
			
            $user->ava = $formAva;
			
			$user-> update();
			
			
			return $this->render('index');
			
		}
        return $this->render('edit', [
            'formEdit' => $formEdit,
        ]);
        
    }
	
	public function actionSeo()
    {
        
            return $this->render('SEO');
        
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post())) {
        //Тут дописать авторизацию
		$model->login();
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
		
        Yii::$app->user->logout();

        return $this->goHome();
    }

	    public function actionAddproject()
    {

		$form_model = new ProjectAddForm();
				if($form_model->load(\Yii::$app->request->post())){

					$name_form = strip_tags($_POST['ProjectAddForm']['name']);
					$url_form = strip_tags($_POST['ProjectAddForm']['url']);
					$resurs_form = strip_tags($_POST['ProjectAddForm']['resurs']);
					$studio = strip_tags($_POST['ProjectAddForm']['studio']);
					$pic = $_FILES['ProjectAddForm']['name']['pic'];
					$prew = $_FILES['ProjectAddForm']['name']['prew'];
					
				    $form_model -> pic = UploadedFile::getInstance($form_model,'pic');		
                                    $form_model -> pic -> saveAs('images/projects/'.$pic);
                                    
                                     $form_model -> prew = UploadedFile::getInstance($form_model,'prew');		
                                    $form_model -> prew -> saveAs('images/projects/'.$prew);
                                    
				    $date = new Projects();
									
						 $date ->name = $name_form;
						 $date ->url = $url_form;
						 $date ->resurs = $resurs_form;
						 $date ->studio = $studio;
						 $date ->pic = $pic;
                                                 $date ->prew = $prew;
						 $date ->id = md5($name_form);
						 $date->save();
						
				}
		
        return $this->render('addproject', compact('form_model'));
		
    }
	
	
	 public function actionAddblog()
    {

		$form_model = new BlogAddForm();
				if($form_model->load(\Yii::$app->request->post())){
					
					$title = strip_tags($_POST['BlogAddForm']['title']);
					$content = strip_tags($_POST['BlogAddForm']['content']);
					$date_pub = strip_tags($_POST['BlogAddForm']['date_pub']);
					$autor = strip_tags($_POST['BlogAddForm']['autor']);
					
					$preview = $_FILES['BlogAddForm']['name']['preview'];
					$index = $_FILES['BlogAddForm']['name']['index'];
					
					$form_model -> index = UploadedFile::getInstance($form_model,'index');
					$form_model -> index -> saveAs('images/blogs/'.$index);
					
					$form_model -> preview = UploadedFile::getInstance($form_model,'preview');
					$form_model -> preview -> saveAs('images/blogs/'.$preview);
					
					
					$blog_object = new blog();
					$blog_object->title = $title;
					$blog_object->autor = $autor;
					$blog_object->content = $content;
					$blog_object->date_pub = $date_pub;
					$blog_object->times = time();
					$blog_object->indexs = $index;
					$blog_object->preview = $preview;
					$blog_object->save();
					
						
				}
		
        return $this->render('addblog', compact('form_model'));
		
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAccount()
    {
        return $this->render('account');
    }
	
	    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionComment()
    {   
	    $form = new CommentAddForm();
		
		$title = $_GET['title'];
		$form_view = comment::find()->where(['nameblog' => $title]) -> all();
		
		
		if($form->load(Yii::$app->request->post())){
		  $base = new comment();
		  $base-> autor = $form->autor;
		  $base-> dates = $form->date_comment;
		  $base-> content = $form->content;
		  $base-> nameblog = $form->title;
		  $base-> id = md5($form->content) .md5($form->date_comment);
		  $base-> touser = $form->touser;
		  $base-> save();
		}
			
        return $this->render('comment',[
		'form_model' => $form,
	    'form_view' => $form_view]);
    }
	
		    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionCommentdel()
    {  
		if($_POST['content']){
			$comment_del = comment::find()->where(['content' => $_POST['content'],'dates' => $_POST['dates']]) -> one();
			$comment_del -> delete();
			return Yii::$app->response->redirect(Url::to('/web/site/blog'));
			}
	}

		    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionCommentedit()
    {  
	 $form_model = new EditCommentForm();
	 
	 if($_POST['content'] and $_POST['autor']){
		 return $this->render('EditCommentForm',[
		'form_model' => $form_model]);
	   }

	  
       if($form_model->load(Yii::$app->request->post())){
          $connection = Yii::$app->db;
		  $id = $_POST['EditCommentForm']['id'];
		  
		  $connection -> createCommand('Update comment Set 
		                                               autor = "'.$_POST['EditCommentForm']['autor'].'",
		                                               content = "'.$_POST['EditCommentForm']['content'].'",
													   dates = "'.$_POST['EditCommentForm']['date_edit'].'",
													   nameblog = "'.$_POST['EditCommentForm']['title'].'"
													   Where id="'.$id.'"')->execute();
													   $title = $_POST['EditCommentForm']['title'];
													   return Yii::$app->response->redirect(Url::to($baseUrl.'/web/site/comment?title='.$title));
		  
       }
	  
       
	}
	
	   /**
     * Displays about page.
     *
     * @return string
     */
    public function actionEditprojectform()
    {
		$form = new EditProjectForm();
		
		

		
		if(Yii::$app->request->post()){
		$projectEdit = projects::find()->where(['name' => $_GET['name_project'],'url' => $_GET['url_project']]) -> one();
		$projectEdit -> url = $_POST['EditProjectForm']['url'];
		$projectEdit -> resurs=$_POST['EditProjectForm']['resurs'];
		$projectEdit -> name=$_POST['EditProjectForm']['name'];
		$projectEdit -> studio=$_POST['EditProjectForm']['studio'];
		$projectEdit -> update();
		$baseUrl=Yii::$app->request->baseUrl;
		return Yii::$app->response->redirect(Url::to($baseUrl.'/site/projects'));
		}
		
		
	
        return $this->render('editprojectform',[
		'formEdit' => $form]);
    }
	
	
	
	    public function actionEditblogform()
    {
		$formEdit = new EditBlogForm();
		
		if(Yii::$app->request->post()){
		$blogEdit = blog::find()->where(['times' => $_GET['time']]) -> one();
		$blogEdit -> title = $_POST['EditBlogForm']['title'];
		$blogEdit -> content=$_POST['EditBlogForm']['content'];
		$blogEdit -> date_pub=$_POST['EditBlogForm']['date_pub'];
		$blogEdit -> autor=$_POST['EditBlogForm']['autor'];
		
		$index = $_FILES['EditBlogForm']['name']['index'];
		$formEdit -> index = UploadedFile::getInstance($formEdit,'index');
		$formEdit -> index -> saveAs('images/blogs/'.$index);
		$blogEdit -> indexs = $index;
		
		$blogEdit -> update();
		$baseUrl=Yii::$app->request->baseUrl;
		return Yii::$app->response->redirect(Url::to($baseUrl.'/site/blog'));
		}

        return $this->render('EditBlogForm',[
		'formEdit' => $formEdit]); 
    }
	
	
	
	
	    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionProjects()
    {
                                       
		$status = Yii::$app->user->identity->status; 
		
		if($status == 'admin'){
								if(Yii::$app->request->get()){
															  $name = $_GET['name_project'];
															  $url = $_GET['url_project'];
															  $projects = projects::find()->where(['name' => $name]) -> one();
                                                                                                                          
                                                                                                                          
															  $projects->delete();
															  return Yii::$app->response->redirect(Url::to($baseUrl.'/site/projects'));
															  }
		}
		
        $projects = projects::find()->all();
		

		
        return $this->render('Projects',[
            'projects' => $projects,
            ]);
                                        
                                       $status = Yii::$app->user->identity->status;
                                       $projects = Projects::find()->all();
                                       return $this->render('Projects',[
                                                            'projects' => $projects,
                                                            ]);
                                       }
    
	
	    /**
     * Displays about page.
     *
     * @return string
     */
	    public function actionBlog()
    {
		$status = Yii::$app->user->identity->status;
		
		if($status == 'admin'){
								if(Yii::$app->request->get()){
								$data = $_GET['date_pub'];
								$title = $_GET['title'];
								$blogs = blog::find()->where(['date_pub' => $data,'title' => $title]) -> one();
								$blogs -> delete();
															  }
		}
		
		$blog = blog::find()->all();
		
        return $this->render('blog',[
            'blog' => $blog,
        ]);
	
    }
	
		    /**
     * Displays about page.
     *
     * @return string
     */
	    public function actionServices()
    {
        return $this->render('services');
    }
	
			    /**
     * Displays about page.
     *
     * @return string
     */
	    public function actionCommunications()
    {   
	    $form_model = new CommunicationsForm();
	
	   
		if ($form_model->load(Yii::$app->request->post())){
			
			$base_communications = new Communications();
			$base_communications -> name = $form_model->name; 
			$base_communications -> mail = $form_model->mail;  
			$base_communications -> dates = date('l jS \of F Y h:i:s A');; 
			$base_communications -> text = $form_model->text;
			$base_communications -> id = md5($form_model->name);
			$base_communications -> save();
		}

           return $this->render('communications',[
            'form_model' => $form_model,
        ]);
    }
	
	
			    /**
     * Displays about page.
     *
     * @return string
     */
	    public function actionUsers()
    {

								if(Yii::$app->request->get()){
									$del = $_GET['del'];
									if($del=='true'){
										$user = $_GET['user'];
										$userModel = User::find()->where(['username' => $user]) -> one();
										$userModel -> delete();
										return Yii::$app->response->redirect(Url::to($baseUrl.'/site/users'));
									}
									else{
									$EditUserAdmin = new EditUserAdmin();
									$user = $_GET['user'];
									$user_result = User::find()->where(['username' => $user]) -> one();
									
									
									return $this->render('Edituseradmin',[
									'EditUserAdmin' => $EditUserAdmin,
									'user' => $user_result ]);
									}
								}
								

		
		
		$users = user::find()->all();
		
		return $this->render('users',[
            'users' => $users,
        ]);
        
    }
	
	
   
   public function actionSignup()
    {
        $model = new SignupForm();
		
        if ($model->load(Yii::$app->request->post())) {

			$user = new UserIdentity();
                        
                        $name_user = $model->username;
                        $repeat_result = User::find()->where(['username' => $name_user]) -> one();
                        if($repeat_result){
                            return Yii::$app->response->redirect(Url::to($baseUrl.'/error'));
                        }
                                
			$user->username = $model->username;
			$user->password = md5($model->password);
                        
                        
                        $user->id =  rand();
                        //die(print_r(rand()));
			if($user->save()){
								return $this->goHome();
								}
           
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
	
	 public function actionEdituseradmin(){
		 
	 if((Yii::$app->request->post())){
		 $id = $_POST['User']['id'];
		 $connection = Yii::$app->db;
		 $connection -> createCommand('Update User Set 
		                                               username = "'.$_POST['User']['username'].'",
		                                               ava = "'.$_POST['User']['ava'].'",
													   phone = "'.$_POST['User']['phone'].'",
													   status = "'.$_POST['User']['status'].'",
													   password = "'.md5($_POST['User']['password']).'",
		                                               email = "'.$_POST['User']['email'].'"  
													   Where id='.$id)->execute();
		                                               return $this->render('index');
	 }

								
							$user = $_GET['user'];
							$userZ = User::find()->where(['username' => $user]) -> one();
							 return $this->render('edituseradmin', [
									'EditUserAdmin' => $userZ,
								]); 	
	 
	 }
	



}


