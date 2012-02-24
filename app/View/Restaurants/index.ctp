<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
   <script type="text/javascript">

    $(document).ready(function(){  
		
		$("#flashMessage").fadeOut(1500, function() {
		    // Animation complete.
		 });
	}); 
    
    </script>
</head>

<body>

    <h1>餐馆列表</h1><br>
    <button class="btn" onclick="location.href='/ParisChihuo/Restaurants/add'">添加</button>

    <p></p>

    <table>
        <tr>
            <th>餐馆名称</th>

            <th>编辑</th>

            <th>地址</th>
        </tr><!-- Here's where we loop through our $posts array, printing out post info -->
        <?php foreach ($restaurants as $post): ?>

        <tr>
        
            <td><?php echo $this->Html->link($post['Restaurant']['li'], array('action' => 'view', $post['Restaurant']['id']));?></td>

            <td><?php echo $this->Form->postLink(
                            '删除',
                            array('action' => 'delete', $post['Restaurant']['id']),
                            array('confirm' => '确定要删除餐馆吗?'));
                        ?><?php echo $this->Html->link('修改', array('action' => 'edit', $post['Restaurant']['id']));?></td>

            <td><?php echo $post['Restaurant']['addr']; ?></td>
        </tr><?php endforeach; ?>
    </table>
</body>
</html>
