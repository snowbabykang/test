<?php $current = 'table';$mainmenu = '1';?>
<!DOCTYPE html>
<html>
 	<head> 
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  		<meta name="renderer" content="webkit" /> 
  		<meta charset="utf-8" /> 
  		<title>表格</title> 
 		 <?php include "common/css.php" ;?> 
 	</head>
<body> 
<?php include "common/body_top.php" ;?>
				<!-- 正文开始 ----------S------------>
     			<div class="main_hd main_hd_bd">
					<h2>表格</h2>  
					<ul class="nav nav-tabs">
					  	<li class="active"><a href="#normal" data-toggle="tab">默认表格</a></li>
					  	<li><a href="#border" data-toggle="tab">边框表格</a></li>
					  	<li><a href="#noborder" data-toggle="tab">无外边框表格</a></li>
					  	<li><a href="#other" data-toggle="tab">特殊需求表格</a></li>
					</ul>  
				</div>
				<div class="alert alert-info">
					<div class="table-grid">
						<div class="table-cell verticaltop" style="width:20px;"><i class="ywkicon icon-like"></i></div>
						<div class="table-cell">
							<h4>商家后台表格常见使用在各种列表上面，确定以下几种规则</h4>
				 	 		<ul>
				 	 			<li>最后一列是操作列，样式会使其居右</li>
				 	 			<li>表格单元格无值的时候使用-表示</li>
				 	 			<li></li>
				 	 		</ul>
						</div>
					</div>
				</div>
				<div class="alert alert-warn">
					<div class="table-grid">
						<div class="table-cell verticaltop" style="width:20px;"><i class="ywkicon icon-like"></i></div>
						<div class="table-cell">
							<h4>表格分为三种：</h4>
				 	 		<ul>
				 	 			<li>①四边有边框-表格有横向边框没有竖向边框（class="table"）默认表格</li>
				 	 			<li>②四边有边框-表格有横向边框也有竖向边框（class="table table-bordered"）</li>
				 	 			<li>③表格无四边、单元格只有横边框（class="table-lineborder"）</li>
				 	 			<li>表格间隔变色（class="table table-striped"）</li>
				 	 			<li>表格hover变色（class="table table-hover"）</li>
				 	 		</ul>
						</div>
					</div>
				</div>
				<div class="main_bd">
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
							<table class="table m-b">
								<tr>
									<th>标题</th>
									<th>时间灰色</th>
									<th>头部 3</th>
									<th>头部 4</th>
									<th>操作</th>
								</tr>
								<tr>
									<td colspan="5">
										<div class="nodatapage"><i class="ywkicon icon-exclamationcircle"></i>暂无数据<a href="" class="btn-link">去创建</a></div>
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
						<div class="tab-pane" id="noborder">
							<table class="table-lineborder">
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
							<table class="table m-b table-striped">
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
				
				
				
				<!-- 正文结束 ----------E------------>
<?php include "common/body_bottom.php" ;?>
   <!-- 中间写自己的js或者引入的js -->

   
   <!-- footer.php一定要放在页面最下端 -->
   <?php include "common/footer.php" ;?>
</body>
</html>