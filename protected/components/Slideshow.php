<?php
class Slideshow extends CWidget {

    public  function run()
    {
        $newarticle = Yii::app()->db->createCommand()
            ->select('a.id, a.title , a.image, c.name')
            ->from('article a')
            ->join('categories c', 'a.catid=c.id')
            ->limit(5)
            ->order('a.id desc')
            ->queryAll();

        shuffle($newarticle);
        $this->render('slideshow',array(
            'newarticle' => $newarticle
        ));
    }


}