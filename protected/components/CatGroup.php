<?php
class CatGroup extends CWidget {
    public $count;
    public $page;
	public $catid;
	
    public  function run()
    {
        $newarticle = Yii::app()->db->createCommand()
            ->select('a.*, c.name')
            ->from('article a')
            ->join('categories c', 'a.catid=c.id')
            ->order('a.id desc')
            ->where('c.id=:id', array(':id'=>$this->catid))
            ->queryAll();
        $count = count( $newarticle );
        if($count % 8 != 0 ) {
            $page = (($count ) - ($count % 8)) /8;

            $this->page = $page + 1;
        }else {
            $this->page = ($count / 8 );
        }


        $this->render('catgroup', array(
            'page' => $this->page,
			'catid' => $this->catid,
//            'resume_infos' => $this->resume_infos,
//            'experience_list' => $experience_list,
        ) );



    }


}