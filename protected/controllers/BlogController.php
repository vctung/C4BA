<?php

class BlogController extends Controller
{
	public $layout='//layouts/blog';

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionArticle()
	{
        $id = $_GET['id'];
        $newarticle = Yii::app()->db->createCommand()
            ->select('a.*, c.name')
            ->from('article a')
            ->where('a.id=:id', array(':id'=>$id))
            ->join('categories c', 'a.catid=c.id')
            ->order('a.id desc')
            ->queryRow();
////        $count = count($newarticle);
//        echo "<pre>";
//        print_r($newarticle); exit();
		$this->render('article', array(
            'newarticle' =>  $newarticle
        ));
	}


	public function actionNewarticle()
	{
        $this->layout= false;
	 	$page = $_POST['curentpage'];
//        $page = 1;
		$number = 8;
		$f = ($page-1)*$number;
         
		$newarticle = Yii::app()->db->createCommand()
		    ->select('a.*, c.name, c.id as catid')
		    ->from('article a')
		    ->limit($number ,$f)
		    ->join('categories c', 'a.catid=c.id')
		    ->order('a.id desc')
		    ->queryAll();
//        echo json_encode($newarticle);exit();
        $this->render('newarticle', array(
         	'newarticle' =>  $newarticle
        ));

	}

    public function actionCategory()
    {
        $id = $_GET['id'];
        $Cat  = Categories::model()->find(" `id` = $id ");

        $this->render('category', array(
            'cat' =>  $Cat
        ));
    }

    public function actionRendercategory()
    {
        $this->layout= false;
        $page = $_POST['curentpage'];
        $catid = $_POST['catid'];
//        $page = 1;
        $number = 8;
        $f = ($page-1)*$number;

        $newarticle = Yii::app()->db->createCommand()
            ->select('a.*, c.name, c.id as catid')
            ->from('article a')
            ->limit($number ,$f)
            ->join('categories c', 'a.catid=c.id')
            ->where('c.id=:id', array(':id'=>$catid))
            ->order('a.id desc')
            ->queryAll();
//        echo json_encode($newarticle);exit();
        $this->render('newarticle', array(
            'newarticle' =>  $newarticle
        ));

    }

     public function  actionGetcomment() {

        $this->layout= false;
        $articleid = $_GET['id'];

        $commentlist = Yii::app()->db->createCommand()
            ->select('*')
            ->from('comment')
            ->where('articleid=:articleid', array(':articleid'=>$articleid))
            ->order('id desc')
            ->queryAll();



         $this->render('getcomment', array(
            'commentlist' =>  $commentlist
        ));

     }

    public function  actionSavecomment() {

        $articleid = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];


         $model = new Comment();
         $data = array();
         $data['articleid'] = $_POST['id'];
         $data['name'] = $_POST['name'];
         $data['email'] = $_POST['email'];
         $data['comment'] = $_POST['comment'];
         $data['datetime'] = date('Y-m-d H:i:s');
         $model->attributes = $data;

         // echo "<pre>";
         // print_r($model); exit();

         if ($model->save() ) {
            echo "ok";

        } else {
            echo "pheo";
        }
       


    }

    public function  actionTest()
    {
       //  $string = "image=1&title=1&text=1&link=1";
       //  $string = explode("&", $string);
       //  $save = array();
       //  foreach ( $string as $value ) {
       //      $value = explode("=", $value);
       //      $save[$value['0']] = $value['1'];
       //  }

       // $save  =  json_encode($save);
       // print_r($save);


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
}