<?php

class SubscribeController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}


    public function actionRegisteremail()
    {

        $model = new Subscribes();
        $data = array();
        if(isset ( $_POST['email'] )) {

            $check = Yii::app()->db->createCommand()
                ->select('id')
                ->from('subscribes')
                ->where('email=:email', array(':email'=>$_POST['email']))
                ->queryAll();


            $count = count($check);
//            echo  $count; exit();

            if ($count < 1 ) {
                $data['email'] = $_POST['email'];
                $data['date'] = date('Y-m-d H:i:s');
                $model->attributes = $data;
                if ($model->save() )
                {
                    echo "ok";
                } else {
                    echo "fail";
                }
            } else {
                echo "ok";
            }


        }
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