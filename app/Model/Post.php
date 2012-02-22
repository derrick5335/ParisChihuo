<?php
class Post extends AppModel {
	
    	public $name = 'Post';

	    public $validate = array(
	        'title' => array(
	            'rule' => 'notEmpty',
	            'message' => '餐馆名称不能为空'
	        ),
	        'body' => array(
	            'rule' => 'notEmpty',
	            'message' => '餐馆描述不能为空'
	        )
	    );
}