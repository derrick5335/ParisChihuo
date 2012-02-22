<?php
class PostsController extends AppController {
    public $name = 'Posts';
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }

	public function view($id = null) {
	        $this->Post->id = $id;
	        $this->set('post', $this->Post->read());
	}
	
	public function add() {
	        if ($this->request->is('post')) {
	            if ($this->Post->save($this->request->data)) {
	                $this->Session->setFlash('餐馆信息保存成功.', 'default',array('class' => 'message alert-message success'));
	                $this->redirect(array('action' => 'index'));
	            } else {
	                $this->Session->setFlash('创建餐馆失败.');
	            }
	        }
	 }
	
	function edit($id = null) {
	    $this->Post->id = $id;
	    if ($this->request->is('get')) {
	        $this->request->data = $this->Post->read();
	    } else {
	        if ($this->Post->save($this->request->data)) {
	            $this->Session->setFlash('餐馆信息已经更新.',array('class' => 'message alert-message success'));
	            $this->redirect(array('action' => 'index'));
	        } else {
	            $this->Session->setFlash('修改餐馆信息失败.');
	        }
	    }
	}
	
	function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }
	    if ($this->Post->delete($id)) {
	        $this->Session->setFlash('餐馆已被删除.','default',array('class' => 'message alert-message success'));
	        $this->redirect(array('action' => 'index'));
	    }
	}
}