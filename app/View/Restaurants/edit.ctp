<h1>Edit Restaurant</h1>
<?php
    echo $this->Form->create('Restaurant', array('action' => 'edit'));
    echo $this->Form->input('li');
    echo $this->Form->input('desc', array('rows' => '3'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Restaurant');