<?php

class SectionsController extends Controller
{
    public $layout='//layouts/admin';

	public function actionIndex()
	{
		$this->render('index');
	}

    public  function actionHomeabout()
    {
        $sectionid = 1;
        $content = Yii::app()->db->createCommand()
            ->select('sd.*')
            ->from('sectiondetail sd')
            ->limit(4)
            ->join('sections s', 'sd.sectionid=s.id')
            ->where('sd.sectionid=:id', array(':id'=>$sectionid))
            ->queryAll();

//        echo "<pre>";
////        print_r($content);
//        foreach ($content as $key => $value) {
//            $_decode = json_decode($value['json'] , true);
//            var_dump($value['json']);
//        }
//        exit();
        $this->render('homeabout',array(
         'content' =>   $content,
        ));
    }

    public  function actionSavehomeabout()
    {
        $id = $_POST['id'];
        $data = $_POST['data'];

        $model =Sectiondetail::model()->find(array(
            'select'=>'*',
            "condition"=>"id=$id",
        ));

        if ( isset( $_POST['data']  ))
        {
            $save = array();
            $datasave = array();
            $string = $data;
            $string = explode("&", $string);

            foreach ( $string as $value ) {
                $value = explode("=", $value);
                $save[$value['0']] = $value['1'];
            }

            $datasave['json']  =  json_encode($save);
            $datasave['date']  =  date('Y-m-d');
            $model->attributes = $datasave;
            if ($model->save() )
            {
               echo "ok";
            } else {
                echo "Pheo!";
            }


        }


    }

    public function  actionHomeservices()
    {
        $sectionid = 3;
        $content = Yii::app()->db->createCommand()
            ->select('sd.*')
            ->from('sectiondetail sd')
            // ->limit(4)
            ->join('sections s', 'sd.sectionid=s.id')
            ->where('sd.sectionid=:id', array(':id'=>$sectionid))
            ->queryRow();

        $this->render('homeservices',array(
           'content' =>   $content,
        ));
    }

    public  function actionSavehomeservices()
    {
        $id = $_POST['id'];
        $data = $_POST['data'];

        $model =Sectiondetail::model()->find(array(
            'select'=>'*',
            "condition"=>"id=$id",
        ));

        if ( isset( $_POST['data']  ))
        {
            $save = array();
            $datasave = array();
            $string = $data;
            $string = explode("&", $string);

            foreach ( $string as $value ) {
                $value = explode("=", $value);
                $save[$value['0']] = $value['1'];
            }

            $datasave['json']  =  json_encode($save);
            $datasave['date']  =  date('Y-m-d');
            $model->attributes = $datasave;
            if ($model->save() )
            {
               echo "ok";
            } else {
                echo "Pheo!";
            }
        }

    }

    public function  actionHomefooter()
    {

        $sectionid = 2;
        $content = Yii::app()->db->createCommand()
            ->select('sd.*')
            ->from('sectiondetail sd')
            // ->limit(4)
            ->join('sections s', 'sd.sectionid=s.id')
            ->where('sd.sectionid=:id', array(':id'=>$sectionid))
            ->queryRow();

//        echo "<pre>";
//        print_r($location);
//        exit();
        $this->render('homefooter',array(
            'content' =>   $content,
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
}