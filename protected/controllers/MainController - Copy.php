<?php
class MainController extends Controller
{

	// public $layout='//layouts/page';
	public $layout='//layouts/idico_main';

	public function actionIndex()
	{
		$this->layout='//layouts/idico_main';
		$this->pageTitle = ' Trang chủ - căn hộ Idico ';

		 $slide =  Slide::model()->findAll();
		 // $partner = Partner::model()->findAll(" `show` = 'yes' ");

		 // $new_projects = Yii::app()->db->createCommand()
	  //   ->select('p.id,p.name, p.image, pc.name as cat_name')
	  //   ->from('project p')
	  //   ->limit('4')
	  //   ->join('projectcategories pc', 'p.catid=pc.id')
	  //   ->order('p.id desc')
	  //   ->queryAll();

		 // echo "<pre>";
		 // print_r( $slide); exit();

		$this->render('index',array(   
           'slide' =>$slide,
           // 'partner' =>$partner,
           // 'new_projects' =>$new_projects,
        ));//end render


	}



	public function actionGioithieu()
	{
		$pagename = "Giới thiệu";
		$gioithieu = Article::model()->findAll(" `catid` = '1' ");

		$this->render('gioithieu',array(   
           'pagename' =>$pagename,
           'gioithieu' =>$gioithieu,
           // 'new_projects' =>$new_projects,
        ));//end render
	}

	public function actionPrice()
	{
		$pagename = "Giá và Phương thức thanh toán ";
		$gioithieu = Article::model()->findAll(" `catid` = '4' ");

		$this->render('price',array(   
           'pagename' =>$pagename,
           'gioithieu' =>$gioithieu,
           // 'new_projects' =>$new_projects,
        ));//end render
	}


		public function actionVitri()
	{
		$pagename = "Giới thiệu";
		$vitri = Article::model()->find(" `id` = '3' ");
		$tienich = Article::model()->find(" `id` = '4' ");
	

		$this->render('vitri',array(   
           'pagename' =>$pagename,
           'vitri' =>$vitri,
           'tienich' =>$tienich,
        ));//end render
	}


	public function actionGallery()
	{
		$pagename = "Cập nhật tiến độ";

		$criteria = new CDbCriteria();       
        $criteria->order = 'id DESC';

		$gallery = Gallery::model()->findAll('catid = 1 ' );
		
		// echo "<pre>";
		// 	print_r($gallery); 
		// 	exit();

		$this->render('gallery',array(   
           'pagename' =>$pagename,
           'gallery' =>$gallery ,
           // 'tienich' =>$tienich,
        ));//end render
	}


	public function actionMatbang()
	{
		$pagename = "Mặt bằng";

		$criteria = new CDbCriteria();       
        $criteria->order = 'id DESC';

		$gallery = Gallery::model()->findAll('catid = 2 ' );
		
		// echo "<pre>";
		// 	print_r($gallery); 
		// 	exit();

		$this->render('matbang2',array(   
           'pagename' =>$pagename,
           'gallery' =>$gallery ,
           // 'tienich' =>$tienich,
        ));//end render
	}

	public function actionServices()
	{
		$this->pageTitle = 'Dịch vụ - PTT Software Company';
		Yii::app()->clientScript->registerMetaTag('Dịch vụ của PTTSoft','description');
		Yii::app()->clientScript->registerMetaTag('hoi dap, thiet ke website, thiet ke web, faq', 'keywords');


		 $partner = Partner::model()->findAll(" `show` = 'yes' ");

		$this->render('services',array(   
           // 'slide' =>$slide,
           'partner' =>$partner,
        ));//end render


	}




	public function actionContact()
	{

		$this->pageTitle = 'Liên hệ- PTT Software Company';
		 $partner = Partner::model()->findAll(" `show` = 'yes' ");

		Yii::app()->clientScript->registerMetaTag('Liên hệ với PTTSoft','description');
		Yii::app()->clientScript->registerMetaTag('hoi dap, thiet ke website, thiet ke web, faq', 'keywords');

		$this->render('contact',array(   
           // 'slide' =>$slide,
           'partner' =>$partner,
        ));//end render

	}



	public function actionProjects()
	{

		$this->pageTitle = 'Dự án- PTT Software Company';
		$all_project_cat = Projectcategories::model()->findAll();
		$project = Project::model()->findAll();


		Yii::app()->clientScript->registerMetaTag('Dự án của PTTSoft','description');
		Yii::app()->clientScript->registerMetaTag('hoi dap, thiet ke website, thiet ke web, faq', 'keywords');



		$this->render('projects',array(   
           'project' =>$project,
           'all_project_cat' =>$all_project_cat,
        ));//end render


	}


	public function actionProjectbycat()
	{
		$id = $_GET['id'];

		$project = Project::model()->findAll("catid =  $id ");


		$this->render('projects',array(   
           'project' =>$project,
           // 'partner' =>$partner,
        ));//end render


	}

	public function actionProjectdetail()
	{
		$id = $_GET['id'];

		$project = Project::model()->findByPk($id);
		$project_image = Imageinproject::model()->findAll(" projectid = $id ");
		$project_cat = Projectcategories::model()->find(" id = $project->catid ");
		$all_project_cat = Projectcategories::model()->findAll();
		$project_partner = Partner::model()->find(" id = $project->partner ");

		$new_project = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('project')
		    ->limit('4')
		    ->order('id desc')
		    ->queryAll();

		Yii::app()->clientScript->registerMetaTag($project ->description ,'description');
		Yii::app()->clientScript->registerMetaTag('hoi dap, thiet ke website, thiet ke web, faq', 'keywords');
		$this->pageTitle = $project ->name . ' - PTT Software Company';
		// echo "<pre>";
		// print_r($new_project); exit();

		$this->render('projectdetail',array(   
           'project' =>$project,
           'project_image' =>$project_image,
           'project_cat' =>$project_cat,
           'project_partner' =>$project_partner,
           'all_project_cat' =>$all_project_cat,
           'new_project' =>$new_project,
        ));//end render

	}


	public function actionBlog()
	{
		$pagename = "Tin tức ";
		$articles  = Article::model()->findAll(" `catid` = '2' ");

        
         $this->render('blog',array(
            'pagename'=> Article::model()->findAll($criteria), // must be the same as $item_count
            'articles'=>$articles ,
            // 'page_size'=>6,
            // 'items_count'=>$item_count,
            // 'pages'=>$pages,
            // 'all_Cat'=>$all_Cat,
            // 'all_project_cat' =>$all_project_cat,
            // 'new_project' =>$new_project,
        ));
         //end render



	}
	//end function action blogs



	public function actionArticle()
	{


		

		$id = $_GET['id'];
		$article = Article::model()->findByPk($id);
		$all_Cat = Categories::model()->findAll();
		$all_project_cat = Projectcategories::model()->findAll();
        $new_project = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('project')
		    ->limit('3')
		    ->order('id desc')
		    ->queryAll();

		$new_article = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('article')
		    ->limit('3')
		    ->order('id desc')
		    ->queryAll();

		Yii::app()->clientScript->registerMetaTag($article->intro,'description');
		Yii::app()->clientScript->registerMetaTag($article->keytag, 'keywords');
		$this->pageTitle = $article ->title . ' - PTT Software Company';

		$this->render('article',array(   
           'article' =>$article,
            'all_Cat' =>$all_Cat,
            'new_article' =>$new_article,
            'all_project_cat' =>$all_project_cat,
            'new_project' =>$new_project,
        ));//end render

	}

	public function actionFaq()
	{

		Yii::app()->clientScript->registerMetaTag('Hỏi - Đáp thiết kế website ','description');
		Yii::app()->clientScript->registerMetaTag('hoi dap, thiet ke website, thiet ke web, faq', 'keywords');
		$this->pageTitle = ' Hỏi - Đáp - PTT Software Company';

		$all_project_cat = Projectcategories::model()->findAll();
		$faq = Faq::model()->findAll();
        $new_project = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('project')
		    ->limit('6')
		    ->order('id desc')
		    ->queryAll();


		$this->render('faq',array(   
           'all_project_cat' =>$all_project_cat,
            'new_project' =>$new_project,
            'faq' =>$faq,
        ));//end render

	}

	public function actionAdmin()
	{
		 $this->redirect(array('admin/login'));
	}

}
//end class
