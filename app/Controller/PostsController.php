<?php
class PostsController extends AppController {
    public function beforeRender()
    {
        parent::beforeRender();
        $this->layout = 'default';

    }
    public function index() {
       $posts = $this->Post->find('all');
        $this->set(compact('posts'));
    }

    public function add() {

    }
}