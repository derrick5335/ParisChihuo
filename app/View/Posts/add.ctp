<h1>添加餐馆</h1>

<?php
echo $this->Form->create('Post');
echo $this->Form->input('title',array(
    'label' => '餐馆名称'
));
echo $this->Form->input('body', array('rows' => '3','label' => '餐馆描述' ));
echo $this->Form->end('保存');
?>