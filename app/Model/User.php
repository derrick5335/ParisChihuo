<?php
class User extends AppModel {
	
    	public $name = 'Restaurant';
    	    	
	    public $validate = array(
	        'email' => array(
	            'rule' => 'notEmpty',
	            'message' => 'email不能为空'
	        )	     
	    );
}