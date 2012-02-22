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
    <button class="btn" onclick="location.href='/ParisChihuo/Posts/add'">添加</button>

    <p></p>

    <table>
        <tr>
            <th>餐馆名称</th>

            <th>编辑</th>

            <th>创建时间</th>
        </tr><!-- Here's where we loop through our $posts array, printing out post info -->
        <?php foreach ($posts as $post): ?>

        <tr>
        
            <td><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?></td>

            <td><?php echo $this->Form->postLink(
                            '删除',
                            array('action' => 'delete', $post['Post']['id']),
                            array('confirm' => '确定要删除餐馆吗?'));
                        ?><?php echo $this->Html->link('修改', array('action' => 'edit', $post['Post']['id']));?></td>

            <td><?php echo $post['Post']['created']; ?></td>
        </tr><?php endforeach; ?>
    </table>
</body>
</html>
