<?php

class UserController extends Controller
{
    public $layout='//layouts/admin';
    private $_uploadPhoto;


	public function actionIndex()
	{
		$this->render('index');
	}

    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            //'postOnly + delete', // we only allow deletion via POST request
        );
    }

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
                'actions'=>array('changepassword','listuser','adduser','edituser','rolemanager','changerole','getroleajax'),
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

    public function actionChangepassword()
    {
        $model = new ChangePasswordForm;

        $userid =  Yii::app()->User->getState('id'); //current userid
        $profile = User::model()->findByPk($userid);

        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end(); exit();
        }

        if (isset($_POST['ChangePasswordForm']))
        {
            $model->attributes=$_POST['ChangePasswordForm'];
            if($model->validate() && $model->changePassword())
            {
                Yii::app()->user->setFlash('success', '<strong>Thành công!</strong> Mật khẩu của bạn đã được thay đổi. ');
//                $this->redirect(array('users/profile'));
            }
        }

        $this->render('changepassword',array(
            'model' => $model,
            'profile' => $profile,
        ));
    }

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/


    public function actionListuser()
    {
        $user = User::model()->findAll("id != 1");
        $this->render('listuser',array(
            'user' => $user,
        ));
    }

    public function actionAdduser()
    {
        $model = new User();

        if(isset ( $_POST['User'] ))
        {
            $model->attributes = $_POST['User'];


            $this->_uploadPhoto=CUploadedFile::getInstance($model, 'avatar');
           

            if( $model->validate() )
            {
                if(isset($this->_uploadPhoto)&& get_class($this->_uploadPhoto)==='CUploadedFile') {
                    $rd=rand(0,9999);
                    $photo='photo-'.uniqid($rd).'.'.$this->_uploadPhoto->getExtensionName();
                    $uploadFolder=Yii::getPathOfAlias('webroot').'/images/avatar';
                    if(!is_dir($uploadFolder))
                        mkdir($uploadFolder,0777,true);
                    $uploadFile=$uploadFolder.'/'.$photo;
                    $model->avatar=$photo;//set file avatar name
                    $this->_uploadPhoto->saveAs($uploadFile);//upload file
                }  else {
                    $model->avatar= "noavatar.jpg"; //if avatar image null
                }
                 $model->password = md5($model->password);
                 $model->datecreate = date("Y-m-d H:i:s");

                if ($model->save() )
                {
                    $this->redirect(array('user/listuser'));
                } else {
                    echo "Pheo!";
                }
            }
        }

        $this->render('adduser',array(
            'model' =>$model,
        ));
    }


    public function  actionEdituser()
    {

        $id =$_GET['id'];
        $model =User::model()->find(array(
            'select'=>'*',
            "condition"=>"id=$id",
        ));


        if(isset ( $_POST['User'] ))
        {
            $model->attributes = $_POST['User'];


            $this->_uploadPhoto=CUploadedFile::getInstance($model, 'avatar');
           

            if( $model->validate() )
            {
                if(isset($this->_uploadPhoto)&& get_class($this->_uploadPhoto)==='CUploadedFile') {
                    $rd=rand(0,9999);
                    $photo='photo-'.uniqid($rd).'.'.$this->_uploadPhoto->getExtensionName();
                    $uploadFolder=Yii::getPathOfAlias('webroot').'/images/avatar';
                    if(!is_dir($uploadFolder))
                        mkdir($uploadFolder,0777,true);
                    $uploadFile=$uploadFolder.'/'.$photo;
                    $model->avatar=$photo;//set file avatar name
                    $this->_uploadPhoto->saveAs($uploadFile);//upload file
                }  else {
                    $model->avatar= "noavatar.jpg"; //if avatar image null
                }
               
                 $model->datecreate = date("Y-m-d H:i:s");

                if ($model->save() )
                {
                    $this->redirect(array('user/listuser'));
                } else {
                    echo "Pheo!";
                }
            }
        }


         $this->render('edituser',array(
            'model' =>$model,
        ));
    }


    public function actionRolemanager()
    {
        $acl = Acl::model()->findAll();
         $this->render('rolemanager',array(
            'acl' =>$acl,
        ));
    }

    public function actionChangerole()
    {
        $id = $_GET['id'];
        $userinfo = User::model()->findByPk($id);
        $acl = Acl::model()->findAll();
        $acldetail = Yii::app()->db->createCommand()
            ->select('*')
            ->from('acldetail')
            ->where('userid=:id', array(':id'=>$id))
            ->queryAll();

          

            // print_r($acldetail);
            // print_r($acl);
            // exit();

       $this->render('changerole',array(
            'userinfo' =>$userinfo,
            'acl' =>$acl,
            'acldetail' =>$acldetail,
        ));
         
    }

    public function actionGetroleajax()
    {
        $action = $_POST['action'];
        $userid = $_POST['userid'];
        $aclid = $_POST['aclid'];

        switch ( $action ) {
            case 'delete':
                    $id = Yii::app()->db->createCommand()
                    ->select('id')
                    ->from('acldetail')
                    ->where(array('and', "userid= $userid", "aclid = $aclid"  ))                    
                    ->queryRow();
                  $post=Acldetail::model()->findByPk( $id['id'] ); // assuming there is a post whose ID is 10
                  $post->delete(); // delete the row from the database table
                break;

            case 'add':
                $data['aclid'] =   $aclid;
                $data['userid'] =   $userid;

                $model = new Acldetail();
                $model->attributes =  $data;
                $model->save();
            break;

        }

        echo "Change Role success !";

    }
}