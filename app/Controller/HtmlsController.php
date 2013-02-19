<?php
class HtmlsController extends AppController
{
//    public function beforeFilter()
//    {
//        parent::beforeFilter();
//        $this->Auth->allow('index');
//    }
    public function beforeRender()
    {
        parent::beforeRender();
        $this->layout = 'html';

    }
  public function index(){

  }
}
?>