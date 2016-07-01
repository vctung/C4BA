<?php

class ArticleController extends Controller
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


    public function loadModel($id)
    {
        $model=Article::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

	// Uncomment the following methods and override them if needed
	/*


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

	public function actionListarticle()
	{
        $articles =  Article::model()->findAll();
        $categories = Categories::model()->findAll();
		$this->render('listarticle',array(
            'articles' =>  $articles,
            'categories' =>  $categories
		));
	}

    public  function actionAddarticle()
    {
        $model = new Article();

        if(isset ( $_POST['Article'] ))
        {


            $model->attributes = $_POST['Article'];
            $model->datetcreate = date('Y-m-d');
            $model->userid = Yii::app()->User->getState('id');
            $this->_uploadPhoto=CUploadedFile::getInstance($model, 'image');

            if( $model->validate() )
            {

                if(isset($this->_uploadPhoto)&& get_class($this->_uploadPhoto)==='CUploadedFile') {

                    $rd=rand(0,9999);
                    $photo='photo-'.uniqid($rd).'.'.$this->_uploadPhoto->getExtensionName();
                    $uploadFolder=Yii::getPathOfAlias('webroot').'/images/article';
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
                    $this->redirect(array('article/listarticle'));
                } else {
                    echo "Pheo!";
                }

            }
        }

        /*   Get Categories data   */
        $all = Categories::model()->findAll();
        $list = array();

        $i=0;
        foreach($all as $value)
        {
            if ($value->parentid == 0) {

                $list[$value->id] = $value->name;
                foreach ($all as $values)
                {
                    if ($values->parentid == $value->id ) {

                        $list[$values->id] =  " -- ".$values->name;
                        foreach ($all as $values_2)
                        {
                            if ($values_2->parentid == $values->id ) {
                                $list[$values_2->id]   =  " ---- ".$values_2->name;
                            }
                        }
                    }
                }
            }
        }

        /*   END Get Categories data   */
        $this->render('addarticle',array(
            'model'=>$model,
            'list'=>$list,
        ));
    }// end function Add Article



    public  function actionEditarticle()
    {
        $id = $_GET['id'];
        $model =Article::model()->find(array(
            'select'=>'*',
            "condition"=>"id=$id",
        ));

        $imgs = $model->image;

        if(isset ( $_POST['Article'] ))
        {
            $model->attributes = $_POST['Article'];
            $model->datetcreate = date('Y-m-d');
            $model->userid = Yii::app()->User->getState('id');
            $this->_uploadPhoto=CUploadedFile::getInstance($model, 'image');

            if( $model->validate() )
            {

                if(isset($this->_uploadPhoto)&& get_class($this->_uploadPhoto)==='CUploadedFile') {

                    $rd=rand(0,9999);
                    $photo='photo-'.uniqid($rd).'.'.$this->_uploadPhoto->getExtensionName();
                    $uploadFolder=Yii::getPathOfAlias('webroot').'/images/article';
                    if(!is_dir($uploadFolder))
                        mkdir($uploadFolder,0777,true);
                    $uploadFile=$uploadFolder.'/'.$photo;
                    $model->image=$photo;//set file avatar name
                    $this->_uploadPhoto->saveAs($uploadFile);//upload file
                }  else {
                    $model->image= $imgs; //if avatar image null
                }

//                echo "<pre>";
//                print_r($model); exit();

                if ($model->save() )
                {
                    $this->redirect(array('article/listarticle'));
                } else {
                    echo "Pheo!";
                }

            }//end validate



        }

        /*   Get Categories data   */
        $all = Categories::model()->findAll();
        $list = array();

        $i=0;
        foreach($all as $value)
        {
            if ($value->parentid == 0) {

                $list[$value->id] = $value->name;
                foreach ($all as $values)
                {
                    if ($values->parentid == $value->id ) {

                        $list[$values->id] =  " -- ".$values->name;
                        foreach ($all as $values_2)
                        {
                            if ($values_2->parentid == $values->id ) {
                                $list[$values_2->id]   =  " ---- ".$values_2->name;
                            }
                        }
                    }
                }
            }
        }

        /*   END Get Categories data   */

        $this->render('editarticle',array(
            'model'=>$model,
            'list'=>$list,
        ));
    }//end functuion edit article


    public  function actionDeletearticle()
    {
        $id =$_GET['id'];
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(array('article/listarticle'));
    }//end action  delete
}