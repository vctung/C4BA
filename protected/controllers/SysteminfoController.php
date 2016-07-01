<?php

class SysteminfoController extends Controller
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
                'actions'=>array('infosite','infosystem','editpartner','deletepartner'),
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
        $model=Systeminfo::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
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


    public function actionInfosite()
    {
        $model =Systeminfo::model()->find(array(
            'select'=>'*',
            "condition"=>"id=1",
        ));

        if(isset ( $_POST['Systeminfo'] ))
        {
            if( $model->validate() )
            {
                $model->attributes = $_POST['Systeminfo'] ;
                if ($model->save() )
                {
                    $this->redirect(array('systeminfo/infosite'));
                }
            }
        }

        $this->render('infosite',array(
            'model' =>$model,
        ));//end render
    }//end info site


    public function actionInfosystem()
    {
        $this->render('infosystem',array(
//            'model' =>$model,

        ));//end render
    }
}