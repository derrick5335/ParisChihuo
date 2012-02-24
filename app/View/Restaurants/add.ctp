<h1>添加餐馆</h1>

<?php
echo $this->Form->create('Restaurant');
echo $this->Form->input('li',array(
    'label' => '餐馆名称'
));
echo $this->Form->input('addr', array('rows' => '3','label' => '餐馆地址' ));
echo $this->Form->input('desc', array('rows' => '3','label' => '餐馆描述' ));

echo $this->Form->end('保存');
?>