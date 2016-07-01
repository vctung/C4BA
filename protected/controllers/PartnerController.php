<?php

class PartnerController extends Controller
{

    public $layout='//layouts/admin';
    private $_uploadPhoto;


	public function actionIndex()
	{
		$this->render('index');
	}

    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('index','login'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create','update'),
                'users'=>array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('listpartner','addpartner','editpartner','deletepartner'),
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

    public function loadModel($id)
    {
        $model=Partner::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }



    public  function actionListpartner()
    {
        $partner = Partner::model()->findAll();

        $this->render('listpartner',array(
            'partner' =>$partner,
//            'list' =>$list,
        ));//end render


    }

    public function actionAddpartner(){

        $model = new Partner();
        if(isset ( $_POST['Partner'] ))
        {
            $model->attributes = $_POST['Partner'];
            $model->show= "yes";
            $this->_uploadPhoto=CUploadedFile::getInstance($model, 'image');

            if( $model->validate() )
            {
                if(isset($this->_uploadPhoto)&& get_class($this->_uploadPhoto)==='CUploadedFile') {
                    $rd=rand(0,9999);
                    $photo='photo-'.uniqid($rd).'.'.$this->_uploadPhoto->getExtensionName();
                    $uploadFolder=Yii::getPathOfAlias('webroot').'/images/partner';
                    if(!is_dir($uploadFolder))
                        mkdir($uploadFolder,0777,true);
                    $uploadFile=$uploadFolder.'/'.$photo;
                    $model->image=$photo;//set file avatar name
                    $this->_uploadPhoto->saveAs($uploadFile);//upload file
                }  else {
                    $model->image= "noimage.jpg"; //if avatar image null
                }

                if ($model->save() )
                {
                    $this->redirect(array('partner/listpartner'));
                } else {
                    echo "Pheo!";
                }
            }
        }

        $this->render('addpartner',array(
            'model' =>$model,
//            'list' =>$list,
        ));//end render

        
    }//end addpartner


    public function actionEditpartner()
    {

        $id = $_GET['id'];
        $model =Partner::model()->find(array(
            'select'=>'*',
            "condition"=>"id=$id",
        ));


        if ( isset( $_POST['Partner']  ))
        {
            if( $model->validate() )
            {
                $model->attributes = $_POST['Partner'] ;
                $this->_uploadPhoto = CUploadedFile::getInstance($model,'image');

                if(isset($this->_uploadPhoto)&& get_class($this->_uploadPhoto)==='CUploadedFile') {
                    $rd=rand(0,9999);
                    $photo='photo-'.uniqid($rd).'.'.$this->_uploadPhoto->getExtensionName();
                    $uploadFolder=Yii::getPathOfAlias('webroot').'/images/partner';
                    if(!is_dir($uploadFolder))
                        mkdir($uploadFolder,0777,true);
                    $uploadFile=$uploadFolder.'/'.$photo;
                    $model->image=$photo;//set file avatar name
                    $this->_uploadPhoto->saveAs($uploadFile);//upload file
                }
//                echo "<pre>";
//                print_r( $model ); exit();
                if ($model->save())
                {
                    $this->redirect(array('partner/listpartner'));
                }

            }


        }

        $this->render('editpartner',array(
            'model' =>$model,
//            'list' =>$list,
        ));//end render
    }//end fucntion Edit function


    public function actionDeletepartner()
    {
        $id =$_GET['id'];
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(array('partner/listpartner'));
    }
}