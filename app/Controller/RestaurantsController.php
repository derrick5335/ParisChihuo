<?php
class RestaurantsController extends AppController {
    public $name = 'Restaurants';
    public $helpers = array('Html', 'Form');
    public $components = array('Session');

    public function index() {
        $this->set('restaurants', $this->Restaurant->find('all'));
    }

	public function view($id = null) {
	        $this->Restaurant->id = $id;
	        $this->set('restaurant', $this->Restaurant->read());
	}
	
	public function add() {
	        if ($this->request->is('post')) {
	        	
	            if ($this->Restaurant->save($this->request->data)) {
	                $this->Session->setFlash('餐馆信息保存成功.', 'default',array('class' => 'message alert-message success'));
	                $this->redirect(array('action' => 'index'));
	            } else {
	                $this->Session->setFlash('创建餐馆失败.');
	            }
	        }
	 }
	
	function edit($id = null) {
	    $this->Restaurant->id = $id;
	    if ($this->request->is('get')) {
	        $this->request->data = $this->Restaurant->read();
	    } else {
	        if ($this->Restaurant->save($this->request->data)) {
	            $this->Session->setFlash('餐馆信息已经更新.','default' ,array('class' => 'message alert-message success'));
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
	    if ($this->Restaurant->delete($id)) {
	        $this->Session->setFlash('餐馆已被删除.','default',array('class' => 'message alert-message success'));
	        $this->redirect(array('action' => 'index'));
	    }
	}
}