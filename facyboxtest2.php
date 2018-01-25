<div class="facybox-header">
 	<span class="facybox-title">弹框的标题</span>
</div>
<div class="main_hd">
	<ul class="nav nav-tabs mt0">
	  	<li class="active"><a href="#normal" data-toggle="tab">默认表格</a></li>
	  	<li><a href="#border" data-toggle="tab">边框表格</a></li>
	  	<li><a href="#other" data-toggle="tab">特殊需求表格</a></li>
	</ul>  
</div>
<div class="facybox-body">
 	<div class="tab-content">
		<div class="tab-pane fade in active" id="normal">
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
		<div class="tab-pane" id="border">
			<table class="table table-bordered">
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
					<td>内容 3</td>
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
		<div class="tab-pane" id="other">
			<table class="table m-b table-hover">
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
					<td>内容 3</td>
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
	</div>
</div>
<div class="facybox-footer">
    <span class="btn btn-primary" onclick="$.facybox.close();">创建</span>
    <span class="btn" onclick="$.facybox.close();">取消</span>
</div>

