<div class="facybox-header">
 	<span class="facybox-title">弹框的标题</span>
</div>
<div class="facybox-body">
 	<table class="table m-b">
		<tr>
			<th>标题</th>
			<th>时间灰色</th>
			<th>头部 3</th>
			<th>头部 4</th>
			<th>操作</th>
		</tr>
		<?php for ($i = 0;$i <= 5;$i++){?>
		<tr>
			<td>标题 1</td>
			<td><span class="gray">2016-12-6 14:37</span></td>
			<td>-</td>
			<td>内容 4</td>
			<td>
				<ul class="links links_opt">
					<li class="links_item"><a href="">编辑</a></li>
					<li class="links_item"><a href="">删除</a></li>
					<li class="links_item"><a href="">居右</a></li>
				</ul>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="5">
				<?php include "common/page.php" ;?> 
			</td>
		</tr>
	</table>
</div>
<div class="facybox-footer">
    <span class="btn btn-primary" onclick="$.facybox.close();">创建</span>
    <span class="btn" onclick="$.facybox.close();">取消</span>
</div>

