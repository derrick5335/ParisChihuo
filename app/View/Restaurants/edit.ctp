<h1>编辑餐馆</h1>
<?php
    echo $this->Form->create('Restaurant', array('action' => 'edit'));
    echo $this->Form->input('li',array('label' => '餐馆名称'));
    echo $this->Form->input('addr', array('rows' => '3','label' => '地址'));
    echo $this->Form->input('desc', array('rows' => '3', 'label' => '餐馆描述'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('保存');