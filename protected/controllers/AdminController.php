<?php
class AdminController extends Controller

{

	public $layout='//layouts/admin';

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('login'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('index','dashboard','delete','addproject','deleteajax','editproject','userprojectlist','sethistory','test'),
                'expression'=>'(Yii::app()->user->getState("role")=="admin")',
            ),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','addproject'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            //'postOnly + delete', // we only allow deletion via POST request
        );
    }



	public function actionIndex()
	{

		$role = Yii::app()->User->getState('role') ;
        if($role == "admin")
        {
            $this->redirect(array('admin/dashboard'));
        }
		$this->render('index',array(
			
		));
	}

	/* ============== Module Dashborad =================*/
	public function actionDashboard()
	{
        $article = Yii::app()->db->createCommand()
            ->select('*')
            ->from('article')
            ->order('id DESC')
            ->limit(5)
            ->queryAll();

        $login_history = Yii::app()->db->createCommand()
            ->select('*')
            ->from('loginhistory')
            ->order('id DESC')
            ->limit(5)
            ->queryAll();

//        echo "<pre>";
//        print_r($article); exit();

		$this->render('dashboard',array(
            'article' => $article,
            'login_history' => $login_history,
		));
	}

	/* ============== END Module Dashborad =================*/





    /* =========================================================================================*/
	/* ==============                        Module User                       =================*/
	 /* =========================================================================================*/
	public function actionLogin()
	{
		$this->layout='//layouts/login';

		$model=new LoginForm;

		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login())

                    $this->redirect(array('admin/sethistory'));
        
        }


		$this->render('login',array(
			'model' => $model,
		));
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
	}

    public function actionSethistory()
    {
        $login = new Loginhistory();
        $a['time'] = date('Y-m-d H:i:s');
        $a['userid'] = Yii::app()->User->getState('id');
        $login->attributes = $a;
        if($login->save())
        {
            $this->redirect(array('admin/index'));
        }

    }

    public function actionTest()
    {
        $a = "123";


        $this->render('test',array(
           'abc' => $a
        ));

    }

	/* =========================================================================================*/
	/* ==============                    END Module User                       =================*/
	/* =========================================================================================*/




	/* =========================================================================================*/
	/* ==============                        Module Article                    =================*/
	/* =========================================================================================*/


	/* =============================================================================================*/
	/* ==============                        END Module Article                    =================*/
	/* =============================================================================================*/




}
