<?php

class GalleryController extends Controller
{
    public $layout='//layouts/admin';
    private $_uploadPhoto;


	public function actionIndex()
	{
		$this->render('index');
	}

    public function loadModel($id)
    {
        $model=Gallery::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
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
                'actions'=>array('index','listslide','addslide','deleteslide', 'editslide'),
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



    public function  actionListslide()
    {
        $slide =  Gallery::model()->findAll();


        $this->render('listslide',array(
            'slide' =>$slide,
        ));//end render
    }


    public function actionAddslide()
    {
        $model = new Gallery();
        
        if(isset ( $_POST['Gallery'] ))
        {
            $model->attributes = $_POST['Gallery'];
            $model->datecreate = date('Y-m-d');
            $this->_uploadPhoto=CUploadedFile::getInstance($model, 'image');

            if( $model->validate() )
            {
                if(isset($this->_uploadPhoto)&& get_class($this->_uploadPhoto)==='CUploadedFile') {

                    $rd=rand(0,9999);
                    $photo='photo-'.uniqid($rd).'.'.$this->_uploadPhoto->getExtensionName();
                    $uploadFolder=Yii::getPathOfAlias('webroot').'/images/gallery';
                    if(!is_dir($uploadFolder))
                        mkdir($uploadFolder,0777,true);
                    $uploadFile=$uploadFolder.'/'.$photo;
                    $model->image=$photo;//set file avatar name
                    $this->_uploadPhoto->saveAs($uploadFile);//upload file
                }  else {
                    $model->image= "noimage.jpg"; //if avatar image null
                }

//                echo "<pre>";
//                print_r($model); exit();

                if ($model->save() )
                {
                    $this->redirect(array('gallery/listslide'));
                } else {
                    echo "Pheo!";
                }
            }
        }
        $this->render('addslide',array(
            'model' =>$model,
        ));//end render
    }//end function add

    public function actionEditslide()
    {

        $id =$_GET['id'];
        $model =Gallery::model()->find(array(
            'select'=>'*',
            "condition"=>"id=$id",
        ));


        if ( isset( $_POST['Gallery']  ))
        {
            if( $model->validate() )
            {
                $model->attributes = $_POST['Gallery'] ;
                $this->_uploadPhoto = CUploadedFile::getInstance($model,'image');

                if(isset($this->_uploadPhoto)&& get_class($this->_uploadPhoto)==='CUploadedFile') {
                    $rd=rand(0,9999);
                    $photo='photo-'.uniqid($rd).'.'.$this->_uploadPhoto->getExtensionName();
                    $uploadFolder=Yii::getPathOfAlias('webroot').'/images/gallery';
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
                    $this->redirect(array('gallery/listslide'));
                }

            }


        }

        $this->render('editslide',array(
            'model' =>$model,
//            'list' =>$list,
        ));//end render

    }//end fucntiuon edit

    public function actionDeleteslide()
    {
        $id =$_GET['id'];
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(array('gallery/listslide'));
    }


}