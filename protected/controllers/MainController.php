<?php
class MainController extends Controller
{

	// public $layout='//layouts/page';
	public $layout='//layouts/blog_mainpage';

	public function actionIndex()
	{
		$slide =  Slide::model()->findAll();
        $section_about = 1;
        $section_footer = 2;
        $section_service = 3;
        $newarticle = Yii::app()->db->createCommand()
            ->select('a.id, a.title, a.datetcreate , a.image')
            ->from('article a')
            ->limit(4)
            ->order('a.id desc')
            ->queryAll();

        $section_about_content  = Yii::app()->db->createCommand()
        ->select('*')
        ->from('sectiondetail')
        ->where('sectionid=:id', array(':id'=>$section_about))
        ->queryAll();

        $section_service_content = Yii::app()->db->createCommand()
            ->select('sd.*')
            ->from('sectiondetail sd')
            // ->limit(4)
            ->join('sections s', 'sd.sectionid=s.id')
            ->where('sd.sectionid=:id', array(':id'=>$section_service))
            ->queryRow();

        $section_footer_content = Yii::app()->db->createCommand()
            ->select('sd.*')
            ->from('sectiondetail sd')
            // ->limit(4)
            ->join('sections s', 'sd.sectionid=s.id')
            ->where('sd.sectionid=:id', array(':id'=>$section_footer))
            ->queryRow();

//		 $maincat = Catalog::model()->findAll(" `parentid` = '0' ");
//		 $partner = Partner::model()->findAll(" `show` = 'yes' ");

		$this->render('index',array(   
           'slide' =>$slide,
           'newarticle' =>$newarticle,
           'section_about_content' =>$section_about_content,
           'section_service_content' =>$section_service_content,
           'section_footer_content' =>$section_footer_content,
        ));//end render


	}


	public function actionCatalog()
	{
		$pagename = "Danh mục sản phẩm ";
		
		$id = $_GET['id'];
		 $Catalog  = Catalog::model()->find(" `id` = $id ");
		 $Catalogs  = Product::model()->findAll(" `catalogid` = $id ");
		
	   $criteria = new CDbCriteria();
       $criteria->condition = 'catalogid = :id';
       $criteria->order = 'id DESC';
       $criteria->params = array (':id'=>$id);
       
        $item_count = Product::model()->count($criteria);
                
        $pages = new CPagination($item_count);
        $pages->setPageSize(Yii::app()->params['listPerPage']);
        $pages->applyLimit($criteria);  // the trick is here!


        
         $this->render('catalog',array(
            // 'pagename'=> Article::model()->findAll($criteria), // must be the same as $item_count
            'Catalogs'=>$Catalogs ,
			'Catalog'=>$Catalog ,
             'page_size'=>6,
            'items_count'=>$item_count,
             'pages'=>$pages,
            // 'all_Cat'=>$all_Cat,
            // 'all_project_cat' =>$all_project_cat,
            // 'new_project' =>$new_project,
        ));
         //end render



	}


	public function actionAbout()
	{
		$pagename = "Về chúng tôi ";
		// $id = $_GET['id'];
		// $Catalogs  = Product::model()->findAll(" `catalogid` = $id ");

		// print_r($Catalogs); exit();

        
         $this->render('about',array(
          
        ));
         //end render



	}


	public function actionContact()
	{
		$pagename = "Về chúng tôi ";
		// $id = $_GET['id'];
		// $Catalogs  = Product::model()->findAll(" `catalogid` = $id ");

		// print_r($Catalogs); exit();

        
         $this->render('contact',array(
          
        ));
         //end render



	}

	public function actionOrder() {
		$pagename = "Đặt hàng";

		$model = new OrderContact();

        if(isset ( $_POST['OrderContact'] )) {
        	$model = $_POST['OrderContact'];
        	
        	if( $model->validate() )
            {
            	if ($model->save() )
                {
                    $this->redirect(array('index'));
                } else {
                    echo "Pheo!";
                }
            }
        }


		$this->render('order',array(
           'model'=>$model,  
        ));

	}


	public function actionBlog() {
		$pagename = "Tư vấn";	
		$articles  = Article::model()->findAll(" `catid` = '1' ");
		
		


		 $this->render('blog',array(
                    'articles'=>$articles,  
										
                 ));

	}

	public function actionPrice()
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
	//end function action price

	public function actionArticle()
	{


		$id = $_GET['id'];
		$article = Article::model()->findByPk($id);
		$pagename = "Bài viết tư vấn";
		$new_article = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('article')
		    ->limit('5')
		    ->order('id desc')
		    ->queryAll();
			
		//$criteria = new CDbCriteria();       
              //  $criteria->order = 'id DESC';
               // $criteria->condition = 'id!=:id';
               // $listid= array('1,2,3');
               // $criteria->params = array(':id'=>$listid);
		///$cat = Categories::model()->findAll($criteria);

		 $this->render('article',array(
          'article'=>$article,
          'pagename'=>$pagename,
           'new_article'=>$new_article,
		     //'cat'=>$cat,
        ));
	}
	
	public function actionProduct()
	{
		$id = $_GET['id'];
		$product = Product::model()->findByPk($id);


		//Ao thun
		$list_aothun = "";
		$Catalog  = Catalog::model()->findAll(" `parentid` = 1 ");
		foreach ($Catalog as $key => $value) {
			$list_aothun .= $value->id.",";		
		}
	   $list_aothun = rtrim($list_aothun, ",");		
	   $criteria_aothun = new CDbCriteria();
       $criteria_aothun->condition = 'catalogid = :id';
       $criteria_aothun->order = 'id DESC';
       $criteria_aothun->limit = '4';
       $criteria_aothun->params = array (':id'=>$list_aothun);       
       $Aothun = Product::model()->findAll($criteria_aothun);



		//Dong phuc HSSV
       $list_hssv = "";
		$Catalog  = Catalog::model()->findAll(" `parentid` = 2 ");
		foreach ($Catalog as $key => $value) {
			$list_hssv .= $value->id.",";		
		}
	   $list_hssv = rtrim($list_hssv, ",");		
	   $criteria_hssv = new CDbCriteria();
       $criteria_hssv->condition = 'catalogid = :id';
       $criteria_hssv->order = 'id DESC';
       $criteria_hssv->limit = '4';
       $criteria_hssv->params = array (':id'=>$list_hssv);       
       $hssv = Product::model()->findAll($criteria_hssv);


		//Dong phuc cong ty
        $list_cty = "";
		$Catalog  = Catalog::model()->findAll(" `parentid` = 3 ");
		foreach ($Catalog as $key => $value) {
			$list_hssv .= $value->id.",";		
		}
	   $list_hssv = rtrim($list_cty, ",");		
	   $criteria_cty = new CDbCriteria();
       $criteria_cty->condition = 'catalogid = :id';
       $criteria_cty->order = 'id DESC';
       $criteria_cty->limit = '4';
       $criteria_cty->params = array (':id'=>$list_cty);       
       $cty = Product::model()->findAll($criteria_cty);


		//Phu kien
		$list_pk = "";
		$Catalog  = Catalog::model()->findAll(" `parentid` = 4 ");
		foreach ($Catalog as $key => $value) {
			$list_pk .= $value->id.",";		
		}
	   $list_pk = rtrim($list_pk, ",");		
	   $criteria_pk = new CDbCriteria();
       $criteria_pk->condition = 'catalogid = :id';
       $criteria_pk->order = 'id DESC';
       $criteria_pk->limit = '4';
       $criteria_pk->params = array (':id'=>$list_pk );       
       $pk = Product::model()->findAll($criteria_pk);


		
		 $this->render('product',array(
          'product'=>$product,
          'Aothun'=>$Aothun,
          'hssv'=>$hssv,
          'cty'=>$cty,
          'pk'=>$pk,
        ));
	}
	
	public function actionAdmin()
	{
		 $this->redirect(array('admin/login'));
	}
	
	
	public function actionSearch()
	{

		if(isset($_GET['key'])) {
			if($key_work == "")
            {

                $this->redirect(array('index'));
			} else  {
				
				$key = $_GET['key'];			
			$c = new CDbCriteria();
			$c->addSearchCondition('name', $key);
			$c->order = "`id` DESC";
			$result = Product::model()->findAll($c);
			print_r($result ); exit();
			// SELECT * FROM `hoge` `t` WHERE t.fuga LIKE :ycp0. Bound with :ycp0='%a%'
			
			}
			
			
		} else {
			$this->redirect(array('index'));
		}
		
		
		

		 $this->render('search',array(
          'result'=>$result,
          //'pagename'=>$pagename,
          // 'new_article'=>$new_article,
        ));
	}




}
//end class