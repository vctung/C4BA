<?php
class ShopController extends Controller
{

    public $layout='//layouts/admin';
    private $_uploadPhoto;
	private $_uploadPhoto_2;

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
                'actions'=>array('orderdetail','deleteorderhiddenorder','finishorder','index','listcatalog','addcatalog','editcatalog','deletecatalog','addproduct','listproduct','editproduct','deleteproduct','listorder'),
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


    public function loadModelCatalog($id)
    {
        $model=Catalog::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }


    public function loadModelProduct($id)
    {
        $model=Product::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    public function loadModelOrder($id)
    {
        $model=Order::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

 //================================================================================
// =======================      Catalog      ======================================
//=================================================================================

    public function actionListcatalog()
    {


        /*   Get Categories data   */
        $all = Catalog::model()->findAll();
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


        $this->render('listcatalog',array(
            'catalog' =>$list,
            'all' =>$all,
        ));//end render

    }//end fuctino list catalog



    public function actionAddcatalog()
    {
        $model = new Catalog();

        if(isset ( $_POST['Catalog'] ))
        {
            $model->attributes = $_POST['Catalog'];
            $model->datecreate = date('Y-m-d');
            $this->_uploadPhoto=CUploadedFile::getInstance($model, 'image');

            if( $model->validate() )
            {
                if(isset($this->_uploadPhoto)&& get_class($this->_uploadPhoto)==='CUploadedFile') {
                    $rd=rand(0,9999);
                    $photo='photo-'.uniqid($rd).'.'.$this->_uploadPhoto->getExtensionName();
                    $uploadFolder=Yii::getPathOfAlias('webroot').'/images/catalog';
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
                    $this->redirect(array('shop/listcatalog'));
                } else {
                    echo "Pheo!";
                }
            }
        }



        /*   Get Categories data   */
        $all = Catalog::model()->findAll();
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




        $this->render('addcatalog',array(
            'model' =>$model,
            'list' =>$list,
        ));//end render
    }//end fuction add catalog



    public  function actionEditcatalog()
    {


        $catid =$_GET['catid'];
        $model =Catalog::model()->find(array(
            'select'=>'*',
            "condition"=>"id=$catid",
        ));

        if ( isset( $_POST['Catalog']  ))
        {
            if( $model->validate() )
            {
                $model->attributes = $_POST['Catalog'] ;
                $this->_uploadPhoto = CUploadedFile::getInstance($model,'image');

                if(isset($this->_uploadPhoto)&& get_class($this->_uploadPhoto)==='CUploadedFile') {
                    $rd=rand(0,9999);
                    $photo='photo-'.uniqid($rd).'.'.$this->_uploadPhoto->getExtensionName();
                    $uploadFolder=Yii::getPathOfAlias('webroot').'/images/catalog';
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
                    $this->redirect(array('shop/listcatalog'));
                }

            }


        } else {




            /*   Get Categories data   */
            $all = Catalog::model()->findAll("id != $catid");
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



        $this->render('editcatalog',array(
                'model' =>$model,
                'list' =>$list,
            ));//end render
        }

    } //end fuction edit catalog



    public  function actionDeletecatalog()
    {
        $id =$_GET['catid'];
        $this->loadModelCatalog($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(array('shop/listcatalog'));
    }//end action delete



//================================================================================
// =======================     END  Catalog      =================================
//================================================================================



//================================================================================
// =======================           Products         ============================
//================================================================================

    public function actionAddproduct(){
		
		$model = new Product();
		 
		if(isset ( $_POST['Product'] ))
        {			
            $model->attributes = $_POST['Product'];    
			$model->datecreate = date('Y-m-d');
			$model->price = 0;
			$model->saleprice = 0;
			$model->saleprice = 0;
			$model->att_1 = $_POST['Product']['att_1'];
			$model->att_2 = $_POST['Product']['att_2'];
			$model->att_3 = $_POST['Product']['att_3'];
			$model->sku = $_POST['Product']['sku'];
			$this->_uploadPhoto=CUploadedFile::getInstance($model, 'image');
		    $this->_uploadPhoto_2=CUploadedFile::getInstance($model, 'att_1');
			$uploadFolder=Yii::getPathOfAlias('webroot').'/images/product';
         // echo "<pre>";
		  //  print_r('$model');	
		//	print_r($this->_uploadPhoto);
			//print_r($this->_uploadPhoto_2);
			//exit();	
				
			 if( $model->validate() )
                {
                    if(isset($this->_uploadPhoto)&& get_class($this->_uploadPhoto)==='CUploadedFile') {
                        $rd=rand(0,9999);
                        $photo='photo-'.uniqid($rd).'.'.$this->_uploadPhoto->getExtensionName();   
									
                        if(!is_dir($uploadFolder))
                            mkdir($uploadFolder,0777,true);
                        $uploadFile_1=$uploadFolder.'/'.$photo;
                        $model->image=$photo;//set file avatar name
                       $this->_uploadPhoto->saveAs($uploadFile_1);//upload file
						
						/*if($this->_uploadPhoto->saveAs($uploadFile_1)) {
							echo "Upload hinh 1 OK ";
						} else {							
							echo "Upload hinh 1 bi fail";
						}*/
                    }  else {
                        $model->image= "noimage.jpg";echo "<br>"; //if product image null
						echo "HInh 1 fail";
                    }
					
					if(isset($this->_uploadPhoto_2)&& get_class($this->_uploadPhoto_2)==='CUploadedFile') {
                        $rd=rand(0,9999);
                        $photo2 ='photo-'.uniqid($rd).'.'.$this->_uploadPhoto_2->getExtensionName();
						
                         mkdir($uploadFolder,0777,true);
                        if(!is_dir($uploadFolder))
                        $uploadFile_2 = $uploadFolder.'/'.$photo2; 
							//echo $uploadFolder.'/'.$photo2 .'hinh 2';
							//echo $uploadFile_2.'sđsđ';
                        $model->att_1=$photo2;//set file avatar name   
						$this->_uploadPhoto_2->saveAs($uploadFolder.'/'.$photo2);					
						
                    }  else {
                        $model->att_1= "noimage.jpg"; //if product image null
						echo "HInh 2 fail";
                    }
					
				
                    if ($model->save() )
                    {
                        $this->redirect(array('shop/listproduct'));

                    } else {
                        echo "Pheo!";
                    }
                }
			 
        } // END POST Data add product 
			
			
		/*   Get Categories data   */
        $all = Catalog::model()->findAll();
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
		
		$this->render('addproduct',array(
            'model' =>$model,
            'list' =>$list,
         ));//end render		

     }//end function add product



    public function actionListproduct()
    {

        $products =  Product::model()->findAll();
        $catalog = Catalog::model()->findAll();


        $this->render('listproduct',array(
            'products' =>$products,
            'catalog' =>$catalog,
        ));//end render
    }


    public function actionEditproduct()
    {

        $id =$_GET['id'];
        $model =Product::model()->find(array(
            'select'=>'*',
            "condition"=>"id=$id",
        ));
		$last_image =  $model->image;
		$last_att_1 =  $model->att_1;
        if ( isset( $_POST['Product']  ))
        {
            if( $model->validate() )
            {
                /*$model->attributes = $_POST['Product'] ;
                $price = explode(".",$_POST['Product']['price']  );
                $sale_price = explode(".",$_POST['Product']['saleprice']  );
                $model->price = preg_replace('/[^A-Za-z0-9\-]/', '', $price[0]);
                $model->saleprice = preg_replace('/[^A-Za-z0-9\-]/', '', $sale_price[0]);

                $this->_uploadPhoto = CUploadedFile::getInstance($model,'image');*/
                $model->attributes = $_POST['Product'];    
                $model->datecreate = date('Y-m-d');
                $model->price = 0;
                $model->saleprice = 0;		
                $model->att_1 = $_POST['Product']['att_1'];
                $model->att_2 = $_POST['Product']['att_2'];
                $model->att_3 = $_POST['Product']['att_3'];
                $model->sku = $_POST['Product']['sku'];
                $this->_uploadPhoto=CUploadedFile::getInstance($model, 'image');
                $this->_uploadPhoto_2=CUploadedFile::getInstance($model, 'att_1');
                $uploadFolder=Yii::getPathOfAlias('webroot').'/images/product';

                if(isset($this->_uploadPhoto)&& get_class($this->_uploadPhoto)==='CUploadedFile') {
                    $rd=rand(0,9999);
                    $photo='photo-'.uniqid($rd).'.'.$this->_uploadPhoto->getExtensionName();
                    $uploadFolder=Yii::getPathOfAlias('webroot').'/images/product';
                    if(!is_dir($uploadFolder))
                        mkdir($uploadFolder,0777,true);
                    $uploadFile=$uploadFolder.'/'.$photo;
                    $model->image=$photo;//set file avatar name
                    $this->_uploadPhoto->saveAs($uploadFile);//upload file
                } else  {
					$model->image = $last_image;
				}
                if(isset($this->_uploadPhoto_2)&& get_class($this->_uploadPhoto_2)==='CUploadedFile') {
                        $rd=rand(0,9999);
                        $photo2 ='photo-'.uniqid($rd).'.'.$this->_uploadPhoto_2->getExtensionName();
						
                         mkdir($uploadFolder,0777,true);
                        if(!is_dir($uploadFolder))
                        $uploadFile_2 = $uploadFolder.'/'.$photo2; 
							//echo $uploadFolder.'/'.$photo2 .'hinh 2';
							//echo $uploadFile_2.'sđsđ';
                        $model->att_1=$photo2;//set file avatar name   
						$this->_uploadPhoto_2->saveAs($uploadFolder.'/'.$photo2);					
						
                    } else {
						$model->att_1 = $last_att_1;
					}
                
//                echo "<pre>";
//                print_r( $model ); exit();
                if ($model->save())
                {
                    $this->redirect(array('shop/listproduct'));
                }

            }


        } else {




            /*   Get Categories data   */
            $all = Catalog::model()->findAll();
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



            $this->render('editproduct',array(
                'model' =>$model,
                'list' =>$list,
            ));//end render
        }


    }//end function Edit product]



    public  function actionDeleteproduct()
    {
        $id =$_GET['id'];
        $this->loadModelProduct($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(array('shop/listproduct'));
    }//end action delete

//================================================================================
// =======================     END  Products      ================================
//================================================================================



//================================================================================
// =======================          Order           ==============================
//================================================================================

    public  function actionListorder()
    {
        $order = Order::model()->findAll("hidden='no'");
        $this->render('listorder',array(
            'order' =>$order,
//            'list' =>$list,
        ));//end render
    }

    public  function actionOrderdetail()
    {
        $id = $_GET['id'];
        $order_detail = Order::model()->findByPk( $id );


        /* Get Order detail item */

        $item  = Yii::app()->db->createCommand()
            ->select('p.name as productname,p.image, o.*')
            ->from('orderdetail o')
            ->join('product p', 'p.id=o.productid')
            ->where('o.orderid=:orderid', array(':orderid'=>$id))
            ->queryAll();

        /* END Get Order detail item */

        /**/

        $this->render('orderdetail',array(
            'order_detail' =>$order_detail,
            'item' =>$item,
        ));//end render
    }

    public function actionFinishorder()
    {
        $id = $_POST['id'];
        $model = Order::model()->findByPk( $id );
        $model->completed = "yes";

        if ($model->update(array('completed')) )
        {
            echo "1";
        }
    }

    public function actionHiddenorder()
    {
        $id = $_POST['id'];
        $model = Order::model()->findByPk( $id );
        $model->hidden = "yes";

        if ($model->update(array('hidden')) )
        {
            echo "1";
        }
    }

    public function actionDeleteorder()
    {
        $id =$_GET['id'];
        $this->loadModelOrder($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(array('shop/listorder'));
    }



//================================================================================
// =======================       END  Order         ==============================
//================================================================================

}