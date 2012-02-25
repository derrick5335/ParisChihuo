<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>


<body>
	<legend>添加餐馆</legend>
	
	<?php
	echo $this->Form->create('Restaurant');
	echo $this->Form->input('li',array(
	    'label' => '餐馆名称'));
	echo $this->Form->input('addr', array('rows' => '3','label' => '餐馆地址' ));
	echo $this->Form->input('desc', array('rows' => '3','label' => '餐馆描述' ));
	echo $this->Form->end('保存');
	?>
</body>