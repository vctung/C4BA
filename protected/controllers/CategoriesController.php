<?php

class CategoriesController extends Controller
{
	public $layout='//layouts/admin';
    private $_uploadPhoto;

	public function actionIndex()
	{
		$this->render('index');
	}

	// Uncomment the following methods and override them if needed

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
                'actions'=>array('listcategories','addcategory','editcategory','deletecategory'),
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
        $model=Categories::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

	

	public function actionListcategories()
	{

        /*   Get Categories data   */
        $all = Categories::model()->findAll();
        $list = array();

        $i=0;
        foreach($all as $value)
        {
            if ($value->parentid == 0) {
                $i++;
                $list[$i]['name'] = $value->name;
                $list[$i]['id'] = $value->id;
                $list[$i]['parentid'] = $value->parentid;
                $list[$i]['datecreate'] = $value->datecreate;
                $list[$i]['level'] = 1;
                foreach ($all as $values)
                {
                    if ($values->parentid == $value->id ) {
                        $i++;
                        $list[$i]['name'] =  " ---- ".$values->name;
                        $list[$i]['id'] = $values->id;
                        $list[$i]['parentid'] = $values->parentid;
                        $list[$i]['datecreate'] = $values->datecreate;
                        $list[$i]['level'] = 2;
                        foreach ($all as $values_2)
                        {
                            if ($values_2->parentid == $values->id ) {
                                $i++;
                                $list[$i]['name']   =  " -------- ".$values_2->name;
                                $list[$i]['id'] = $values_2->id;
                                $list[$i]['parentid'] = $values_2->parentid;
                                $list[$i]['datecreate'] = $values_2->datecreate;
                                $list[$i]['level'] = 3;
                            }
                        }
                    }
                }
            }
        }

        /*   END Get Categories data   */


        $this->render('listcategories',array(
            'categories' =>$list,
            'all' =>$all,
        ));

	}

	public function actionAddcategory()
	{
        $model = new Categories();

        if(isset($_POST['ajax']) && $_POST['ajax']==='Categories')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end(); exit();
        }


        if(isset ( $_POST['Categories'] ))
        {
            $model->attributes = $_POST['Categories'];
            $model->datecreate = date('Y-m-d');
            $this->_uploadPhoto=CUploadedFile::getInstance($model, 'image');

            if( $model->validate() )
            {



                if(isset($this->_uploadPhoto)&& get_class($this->_uploadPhoto)==='CUploadedFile') {
                    $rd=rand(0,9999);
                    $photo='photo-'.uniqid($rd).'.'.$this->_uploadPhoto->getExtensionName();
                    $uploadFolder=Yii::getPathOfAlias('webroot').'/images/categories';
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
                    $this->redirect(array('categories/listcategories'));
                } else {
                    echo "Pheo!";
                }
            } else {
                echo CHtml::errorSummary($model); exit();
            }




        }


        /*   Get Categories data   */
        $all = Categories::model()->findAll();
            $list = array();
            $list[0] = "No Parent";
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



        $this->render('addcategory',array(
            'model' =>  $model,
            'list' =>  $list,
        ));


	}

    public function actionEditcategory()
    {
        $catid =$_GET['catid'];
        $model =Categories::model()->find(array(
              'select'=>'*',
              "condition"=>"id=$catid",
         ));

        if ( isset( $_POST['Categories']  ))
        {
            if( $model->validate() )
            {
                $model->attributes = $_POST['Categories'] ;
                $this->_uploadPhoto = CUploadedFile::getInstance($model,'image');

                if(isset($this->_uploadPhoto)&& get_class($this->_uploadPhoto)==='CUploadedFile') {
                    $rd=rand(0,9999);
                    $photo='photo-'.uniqid($rd).'.'.$this->_uploadPhoto->getExtensionName();
                    $uploadFolder=Yii::getPathOfAlias('webroot').'/images/categories';
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
                     $this->redirect(array('categories/listcategories'));
                 }

            }


        } else {




            /*   Get Categories data   */
            $all = Categories::model()->findAll("id != $catid");
            $list = array();
            $list[0] = "No Parent";
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



            $this->render('editcategory',array(
               'model' =>  $model,
               'list' =>  $list,
            ));//end render
        }//end else



    }//end function edit


    public  function actionDeletecategory()
    {
        $id =$_GET['catid'];
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(array('categories/listcategories'));
    }//end action delete
}