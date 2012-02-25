<?php
class Restaurant extends AppModel {
	
    	public $name = 'Restaurant';
    	    	
	    public $validate = array(
	        'li' => array(
	            'rule' => 'notEmpty',
	            'message' => '餐馆名称不能为空'
	        )	     
	    );
}